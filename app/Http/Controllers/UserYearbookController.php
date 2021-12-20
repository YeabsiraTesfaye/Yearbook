<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\Yearbook;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class UserYearbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(){
        $yearbook = Yearbook::where('id', request('yearbookId'))->first();
        $user = User::where('email', request('email1'))->first();
        if($user){
            $exists = DB::table('user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first();
            if($exists){
                return 1;
            }
            DB::insert('insert into user_yearbook (user_id, yearbook_id) value(?, ?)',array($user->id, $yearbook->id));

            // return $user->is_a_member_of()->toggle($yearbook);
        }else{
            return 404;
        }
    }
    public function addAdmin(){
        $yearbook = Yearbook::where('id', request('yearbookId'))->first();
        $user = User::where('email', request('email2'))->first();
        $exists = DB::table('user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first();
        
        if($exists){
            if(DB::table('department_user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first() != null){
                $isAlreadyAnAdmin = DB::table('user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first();
                if($isAlreadyAnAdmin->role == 1){
                    return 0;
                }
                DB::update('update user_yearbook set role = 1 where user_id = ? and yearbook_id = ?',[$user->id,$yearbook->id]);
                return 200;
            }else{
                return request('email2').' Has not set their department yet';
            }
            
        }else{
            return 404;
        }
    }
    public function import(Request $request) 
    {
        $request->validate(['file'=>'required|mimes:xlx,xlsx']);
        $file = $request->file;
        
        $filePath = $file->store('excels','public');

        $users = Excel::toArray('',"storage/{$filePath}"); 
        
        $array = $users[0];
        $unknownErrors = [];
        $yearbook = Yearbook::where('id',$request->yearbookId)->first();
        for($i=0; $i<count($array); $i++){
            $email = $array[$i][0];
            $user = User::where('email',$email)->first();
            if($user){
                $exists = DB::table('user_yearbook')->where('user_id',$user->id)->where('yearbook_id',$yearbook->id)->first();
                if(!$exists)
                    $user->is_a_member_of()->toggle($yearbook);
                else
                    array_push($unknownErrors,$array[$i][0]);

            }else{
                array_push($unknownErrors,$array[$i][0]);
            }  
        }
        if(count($unknownErrors)>0){
            return $unknownErrors;
        }
        else{
            return 200;
        }
    }
}
