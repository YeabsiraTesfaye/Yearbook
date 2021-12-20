<?php

namespace App\Http\Controllers;
use App\Models\Yearbook;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class YearbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('yearbook.create');
    }
    public function store(){
        
        $data = request()->validate(
            [
                'title'=>'required',
                'description'=>'required',
                'image'=>'image|required',
                'numberOfPhotosAllowed'=>''
            ]);
            $imagePath = request('image')->store('images','public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();
            $imageArray = ['image'=> $imagePath];
            auth()->user()->yearbooks()->create([
                'title'=>$data['title'],
                'description'=>$data['description'],
                'image'=>$imagePath,
                'numberOfPhotosAllowed' => $data['numberOfPhotosAllowed']
            ]);
            $checkbox_value = request('checkbox');
            if($checkbox_value == 'yes'){
                auth()->user()->is_a_member_of()->toggle(auth()->user()->yearbooks->where('title',$data['title'])->first());
                
            }
            return redirect('/home');
    }
    public function update(Yearbook $yearbook){
        $this->authorize('update',$yearbook);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'image',
            'numberOfPhotosAllowed'=>''
        ]);
        if(request('image')){
            $imagePath = request('image')->store('images','public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();
            $imageArray = ['image'=> $imagePath];
        }
        auth()->user()->yearbooks()->where('id',$yearbook->id)->update(array_merge($data,$imageArray ?? []));
        return back();
    }
    public function edit(Yearbook $yearbook){
        $this->authorize('update',$yearbook);
        $posts = auth()->user()->yearbooks()->find($yearbook->id)->posts()->where('approved','0')->get();
        $images = DB::table('cover_images')->where('yearbook_id',$yearbook->id)->where('approved',0)->get();
        return view('yearbook.edit',compact('yearbook','posts','images'));
    }
    public function lock(Yearbook $yearbook, $action){
        $this->authorize('update',$yearbook);
        $yearbook->update(array('isLocked' => $action));
    }
    public function checkStatus(Yearbook $yearbook){
         return $yearbook->isLocked;
    }
    public function export(Yearbook $yearbook){
        $this->authorize('view',$yearbook);
        $my_post = $yearbook->posts->where('user_id',auth()->user()->id)->where('approved',1)->first();
        $departments = DB::table('department_user_yearbook')->where('yearbook_id',$yearbook->id)->groupBy('department')->pluck('department');
        $usersPost = Post::where('posts.yearbook_id',$yearbook->id)->where('posts.approved',1)->join('users','posts.user_id','=','users.id')->join('department_user_yearbook','users.id','=','department_user_yearbook.user_id')->orderBy('users.name')->groupBy('posts.user_id')->get();
        return view('album.create',compact('usersPost','my_post','departments','yearbook'));
    }
    public function demo(Yearbook $yearbook){
        return view('album.create');
    }
    public function delete(){
        $yearbook = Yearbook::find(request('yearbookId'));
        $yearbook->delete($yearbook);
    }
    public function search(){
        $users = new \Illuminate\Database\Eloquent\Collection;
        $yearbookIds = DB::table('user_yearbook')->where('user_id',auth()->user()->id)->pluck('yearbook_id');
        $commonUsers= new \Illuminate\Database\Eloquent\Collection;
        foreach($yearbookIds as $ids){
            $commonUsers->add(DB::table('user_yearbook')->where('yearbook_id',$ids)->get());
        }
        foreach($commonUsers as $common){
            foreach($common as $c){
                $users->add(User::where('id',$c->user_id)->first());
                
            }
        }
        $yearbooks = DB::table('user_yearbook')->where('user_yearbook.user_id',auth()->user()->id)->join('yearbooks','user_yearbook.yearbook_id','=','yearbooks.id')->groupBy('yearbooks.id')->get();
        return compact('yearbooks','users');
    }
    public function getYearbook(Yearbook $yearbook){
        return view('album.show',compact('yearbook'));
    }
    public function progress(Yearbook $yearbook){
        $userIds = DB::table('user_yearbook')->where('yearbook_id',$yearbook->id)->pluck('user_id');
        $users= new \Illuminate\Database\Eloquent\Collection;
        $userPosts= new \Illuminate\Database\Eloquent\Collection;
        $posts= new \Illuminate\Database\Eloquent\Collection;
        foreach($userIds as $userId){
            $user = User::find($userId);
            if($user != null){
                $users->add($user);
                $userPost = User::where('users.id',$userId)->join('posts','posts.User_id','=','users.id')->join('department_user_yearbook','posts.User_id','=','users.id')->where('posts.yearbook_id',$yearbook->id)->first();
                if($userPost != null){
                    $userPosts->add($userPost);
                }
            }
        }
        foreach($users as $user){
            $post = Post::where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->where('approved',1)->first();
            if($post != null){
                $posts->add($post);
            }
            
        }
        return view('yearbook.progress',compact('users','posts','userPosts'));
    }
}
