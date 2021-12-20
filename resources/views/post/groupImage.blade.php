@extends('layouts.app')
 @section('content')
    <div class="container mt-2">
        @if($yearbook->isLocked == 0)
            @if(count($coverImages)==5)
                <h2 class='text-white bg-danger p-4' >Cover photos  department of {{$department}}</h2>
                <show-cover-images :cover-images='{{$coverImages}}' yearbook-id='{{$yearbook->id}}'></show-cover-images>
            @else
                <add-group-photos yearbook-id ='{{$yearbook->id}}' department='{{$department}}'></add-group-photos>
                @if(count($coverImages)!=0)
                    <h2 class='text-white bg-danger'>Cover photos for department of {{$department}}</h2>
                @endif
                <show-cover-images :cover-images='{{$coverImages}}' yearbook-id='{{$yearbook->id}}'></show-cover-images>
            @endif
    
        @else
        <show-cover-images :cover-images='{{$coverImages}}' yearbook-id='{{$yearbook->id}}' locked='{{$yearbook->isLocked}}'></show-cover-images>

        @endif
        
    </div>
@endsection