<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Yearbook;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('yearbook.show');
    }
    public function store(){
        $yearbook = Yearbook::find(request('yearbookId'));
        if($yearbook->isLocked == 0){
            $date = request()->validate([
                'image1'=>'image',
                'image2'=>'image',
                'image3'=>'image',
                'last_word'=>'',
            ]);
            request()->validate([
                'department'=>'required'
            ]);
            $my_id['user_id'] = auth()->user()->id;
            $imageArray = [];
            if(request('image1')){
                $image1path = request('image1')->store('uploads','public');
                $image1make = Image::make(public_path("storage/{$image1path}"));
                $image1make->save();     
                $imageArray['image1']=$image1path;
                auth()->user()->update(array('profile_picture'=>$image1path));
            }
            if(request('image2')){
                $image2path = request('image2')->store('uploads','public');
                $image2make = Image::make(public_path("storage/{$image2path}"));
                $image2make->save();
                $imageArray['image2']=$image2path;
            }
            if(request('image3')){
                $image3path = request('image3')->store('uploads','public');
                $image3make = Image::make(public_path("storage/{$image3path}"));
                $image3make->save();
                $imageArray['image3']=$image3path;
            }
            Yearbook::find($yearbook->id)->posts()->create(array_merge($date,$my_id,$imageArray ?? []));
            DB::insert('insert into department_user_yearbook (department, user_id, yearbook_id) values (?, ?, ?)', [request('department'), auth()->user()->id, $yearbook->id]);
            return 200;
        }else{
            return view('yearbook.locked');
        }
    }
    public function update(){
        $post = Post::find(request()->postId);
        switch (request()->action) {
            case 'accept':
                $post->update(array('approved' => 1));
                break;
            case 'decline':
                $post->update(array('approved' => -1));
                break;
        }
    } 
    public function updatePhoto(Post $post, $action){
        $this->authorize('update',$post);
        if($post->yearbook->isLocked == 0){
            return view('post.edit',compact('post','action'));
        }else{
            return view('yearbook.locked');
        }
    }
    public function patch(Post $post, $action){
        $this->authorize('update',$post);
        if($post->yearbook->isLocked == 0){
            if($post->yearbook->numberOfPhotosAllowed == 1){
                $image1path = request('image')->store('uploads','public');
                $image1 = Image::make(public_path("storage/{$image1path}"));
                $image1->save();
                $post->update(array('image1' => $image1path));
            }else if($post->yearbook->numberOfPhotosAllowed == 2){
                switch (request('action')) {
                    case 'image1':
                        $image1path = request('image')->store('uploads','public');
                        $image1 = Image::make(public_path("storage/{$image1path}"));
                        $image1->save();
                        $post->update(array('image1' => $image1path));
                        break;
                    case 'image2':
                        $image2path = request('image')->store('uploads','public');
                        $image2 = Image::make(public_path("storage/{$image2path}"));
                        $image2->save();
                        $post->update(array('image2' => $image2path));
                        break;
                }
            }else if($post->yearbook->numberOfPhotosAllowed == 3){
                switch (request('action')) {
                    case 'image1':
                        $image1path = request('image')->store('uploads','public');
                        $image1 = Image::make(public_path("storage/{$image1path}"));
                        $image1->save();
                        $post->update(array('image1' => $image1path));
                        break;
                    case 'image2':
                        $image2path = request('image')->store('uploads','public');
                        $image2 = Image::make(public_path("storage/{$image2path}"));
                        $image2->save();
                        $post->update(array('image2' => $image2path));
                        break;
                    case 'image3':
                        $image3path = request('image')->store('uploads','public');
                        $image3 = Image::make(public_path("storage/{$image3path}"));
                        $image3->save();
                        $post->update(array('image3' => $image3path));
                        break;
                }
            }
            
            $post->update(array('approved' => 0));
            $yearbook = $post->yearbook;
            return redirect('/y/'.$yearbook->id);
        }else{
            return view('yearbook.locked');
        }
    }
    public function updateLastword(){
        $lastowrd = request('last_word');
        $post = Post::find(request('post'));
        $post->update(array('last_word' => request('last_word')));
        $post->update(array('approved' => 0));
        $yearbook = $post->yearbook;
        return redirect('/y/'.$yearbook->id);
    }
    public function showAlbum(Yearbook $yearbook){
        $this->authorize('view',$yearbook);
        $my_post = $yearbook->posts->where('user_id',auth()->user()->id)->where('approved',1)->first();
        $departments = DB::table('department_user_yearbook')->where('yearbook_id',$yearbook->id)->groupBy('department')->pluck('department');
        $usersPost = Post::where('posts.yearbook_id',$yearbook->id)->where('posts.approved',1)->join('users','posts.user_id','=','users.id')->join('department_user_yearbook','users.id','=','department_user_yearbook.user_id')->orderBy('users.name')->groupBy('posts.user_id')->get();
        $coverImages = DB::table('cover_images')->where('yearbook_id',$yearbook->id)->orderBy('department')->get();
        // dd($coverImages);
        return view('album.show',compact('usersPost','my_post','departments','yearbook','coverImages'));
    }
    public function editAlbum(Yearbook $yearbook){
        $this->authorize('update',$yearbook);
        $my_post = $yearbook->posts->where('user_id',auth()->user()->id)->where('approved',1)->first();
        $departments = DB::table('department_user_yearbook')->where('yearbook_id',$yearbook->id)->groupBy('department')->pluck('department');
        $usersPost = Post::where('posts.yearbook_id',$yearbook->id)->where('posts.approved',1)->join('users','posts.user_id','=','users.id')->join('user_yearbook','users.id','=','user_yearbook.user_id')->orderBy('users.name')->groupBy('posts.user_id')->get();
        return view('album.edit',compact('usersPost','my_post','departments','yearbook','coverImages'));
    }
    public function deleteOne(){
        $post = Post::find(request('postId'));
        if($post->yearbook->isLocked == 0){
            $post->update(array(request('target') => null));
        }
        else{
            return 500;
        }
    }
    public function getUserPosts($id){
        $yearbookIds = DB::table('user_yearbook')->where('user_id',auth()->user()->id)->pluck('yearbook_id');
        $filteredPosts= new \Illuminate\Database\Eloquent\Collection;
        foreach($yearbookIds as $ids){
            $result = Post::where('posts.user_id',$id)->where('yearbook_id',$ids)->where('approved',1)->join('yearbooks','yearbooks.id','=','posts.yearbook_id')->first();

            if($result!= null){
                $filteredPosts->add( $result);
            }
        }
        $user = User::find($id); 
        if($user==null){
            return back();
        }
            return view('album.search',compact('filteredPosts','user'));
        
    }
    public function groupImage(Yearbook $yearbook, $department){
        $this->authorize('addGroupPhoto',$yearbook);
        $coverImages = DB::table('cover_images')->where('yearbook_id',$yearbook->id)->where('department',$department)->get();
        return view('post.groupImage',compact('yearbook','department','coverImages'));
    }
    public function storeGroupPhotos(){
        $data = request();
        if(Yearbook::find($data->yearbookId)->isLocked == 0){
            $savedPhotos = DB::table('cover_images')->where('yearbook_id',$data->yearbookId)->where('department',$data->department)->get();
            $photos = request('photos');
            if(count($savedPhotos)==5){
                return 'full';
            }else if(count($savedPhotos)+count($photos) > 5){
                return 5-count($savedPhotos);
            }else{
                foreach($photos as $photo){
                    $imagepath = $photo->store('uploads','public');
                    $image = Image::make(public_path("storage/{$imagepath}"));
                    $image->save();
                    DB::insert('insert into cover_images (department, yearbook_id, image) value(?, ?, ?)',array($data->department, $data->yearbookId, $imagepath));
                }
                return 200;
            }
        }else{
            return 500;
        }
        
    }
    public function deleteGroup(){
        $target = DB::table('cover_images')->where('image',request('target'));

        if(Yearbook::find(request('yearbookId'))->isLocked == 0){
            
                $target->delete();
                return 200;
            
        }else{
            return 500;
        }
    }
}
