<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Models\Yearbook;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){
        $data = request();
        $imagePath = $data['image']->store('images','public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        $imageArray = ['image'=> $imagePath];
        $event = Yearbook::find($data['yearbookId'])->events()->create([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'user_id'=>$data['userId'],
            'image'=>$imagePath
        ]);
        if($event){
            return 200;
        }else{
            return 500;
        }
    }
    public function showEvents(Yearbook $yearbook){
        $this->authorize('view',$yearbook);
        $events = Event::where('yearbook_id',$yearbook->id)->get();
        return view('gallary.show',compact('events'));
    }
    public function showPhotos(Event $event){
        $this->authorize('view',$event);
        $yearbook = $event->yearbook;
        $role = DB::table('user_yearbook')->where('user_id',auth()->user()->id)->where('yearbook_id',$yearbook->id)->pluck('role')->toArray()[0];
        
        
        $photos = Photo::where('event_id',$event->id)->get();
        return view('gallary.photos',compact('photos','event','role','yearbook'));
    }

    public function storePhotos(){
        $data = request();
        $photos = request('photos');
        if(Event::find($data->eventId)->yearbook->isLocked == 0){
            
                foreach($photos as $photo){
                    $imagepath = $photo->store('uploads','public');
                    $image = Image::make(public_path("storage/{$imagepath}"));
                    $image->save();
                    Event::find($data->eventId)->photos()->create(['user_id'=>auth()->user()->id, 'image'=>$imagepath]);
                }
                return 200;
            
        }else{
            return 500;
        }
        
    }
}
