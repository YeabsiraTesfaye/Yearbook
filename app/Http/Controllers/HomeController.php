<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yearbook;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth',]);
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $yearbooks = json_decode(DB::table("yearbooks")
        ->select("yearbooks.*",
            DB::raw("(SELECT count(posts.id) FROM posts
                WHERE posts.yearbook_id = yearbooks.id 
                and 
                posts.approved = 0)
                as count"
            ))
        ->where('yearbooks.user_id',auth()->user()->id)->get());

        $yearbooks_id = DB::table('user_yearbook')->where('user_id',auth()->user()->id)->pluck('yearbook_id');

        $collection= new \Illuminate\Database\Eloquent\Collection;
  
        foreach ($yearbooks_id as $id) {
            $collection->add(Yearbook::where('id',$id)->first());
        }
// dd($yearbooks);
        $my_yearbooks = $collection->sortByDesc('created_at');
        
        


        return view('home',compact('yearbooks','my_yearbooks'));
    }
    public function show(Yearbook $yearbook){
        $this->authorize('createPost',$yearbook);
        $posts = Post::where('posts.yearbook_id',$yearbook->id)->where('posts.user_id',auth()->user()->id)->join('department_user_yearbook','department_user_yearbook.user_id','=','posts.user_id')->first();

        $department = DB::table('department_user_yearbook')->where('user_id',auth()->user()->id)->where('yearbook_id',$yearbook->id)->first();
        $up = DB::table('user_yearbook')->join('users','user_yearbook.user_id','=','users.id')->join('posts','posts.user_id','=','users.id')->join('department_user_yearbook','users.id','=','department_user_yearbook.user_id')->where('posts.yearbook_id',$yearbook->id)->orderBy('department_user_yearbook.department')->orderBy('users.name')->groupBy('users.id')->get();
        $role = 0;
        if($department){
            $role = DB::table('user_yearbook')->where('user_id',auth()->user()->id)->where('yearbook_id',$yearbook->id)->pluck('role')->toArray()[0];
        }
        return view('yearbook.show',compact('yearbook','up','posts','role','department'));
    }
}
