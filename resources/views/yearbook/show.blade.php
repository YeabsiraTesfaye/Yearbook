@extends('layouts.app')

@section('content')

@if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-xs-12 p-0 d-flex" style='height: 220px;'>
                    <img class="card-img-top" style='width:auto' src="/storage/{{$yearbook->image}}" alt="Card image cap">
                    <div class="col-6 pt-4">
                        <h2>{{$yearbook->title}}</h2>
                        <p style='height:150px; overflow-y: auto;'>{{$yearbook->description}}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-xs-12">
                    <a href='{{$yearbook->id}}/album' class='btn btn-primary mb-1 w-100'>Show Album</a>
                    <a href='{{$yearbook->id}}/events' class='btn btn-primary mb-1 w-100'>Show Events</a>
                    @if($role == 1)
                        <a href='/addGroupImage/{{$yearbook->id}}/{{$department->department}}' class='btn btn-primary mb-1 w-100'>Add group photos</a> 
                    @endif
                </div>
            </div>
        </div>       
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-9 col-xs-12 p-0 mb-4">
            @empty($posts)
                <add-post yearbook-id='{{$yearbook->id}}' is-locked='{{$yearbook->isLocked}}' photo-count='{{$yearbook->numberOfPhotosAllowed}}'></add-post>
            @else
                <show-post post-id='{{$posts->id}}' image-one='{{$posts->image1}}' image-two='{{$posts->image2}}' image-three='{{$posts->image3}}' last-word='{{$posts->last_word}}' is-approved='{{$posts->approved}}' is-locked='{{$yearbook->isLocked}}' photo-count='{{$yearbook->numberOfPhotosAllowed}}'></show-post>
            @endempty    
        </div>
        <div class="col-xl-3 col-xs-12 p-0">
            <h4 class='py-3 mx-4 card-header border-0'>Members</h4>
            <div class='mx-4 px-2 bg-white border'>
                <div class="members" style='height:526px; overflow:scroll'>
                    @foreach($up as $u)
                        @if($u->user_id != auth()->user()->id)
                            <show-members user-name='{{$u->name}}' user-department='{{$u->department}}' user-photo='{{$u->image1}}'></show-members>              
                        @endif
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
    

        </div>
@endsection
