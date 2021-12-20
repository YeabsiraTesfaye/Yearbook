@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <!-- @if($yearbook->user_id === auth()->user()->id)
            <div class="row mb-3"><a href="/y/{{$yearbook->id}}/album/edit" class="btn btn-primary">Export</a></div>
        @endif -->
        <div class="row mb-3">
        @empty(!$my_post)
            <div class='col-12'>
                @empty(!$my_post->image3)
                    <img src="/storage/{{$my_post->image3}}"  style='width:100%' alt="" data-toggle="modal" data-target="#modal1">
                @endempty
            </div>
        @endempty
        </div>
        @if(count($usersPost) ==0 && count($coverImages) ==0)
            <h1>Noone has posted their pictures yet</h1>
        @else
        <!-- <yearbook-album :posts='{{$usersPost}}' :departments='{{$departments}}' :cover-images='{{$coverImages}}'></yearbook-album> -->
            @foreach($departments as $dp)
                <div class="row bg-info text-white pl-2 pt-2 departmentTitle">
                    <h1>Department of {{$dp}}</h1>
                </div>
                @foreach($coverImages as $ci)
                    @if($dp == $ci->department)
                        <div class='my-2' style='page-break-after: auto; page-break-before: auto;'>
                            <img class='w-100 photoView' src="/storage/{{$ci->image}}" alt="" data-toggle="modal" data-target="#modal1">
                        </div> 
                    @endif
                @endforeach
                
                <div class="row p-4" id='{{$dp}}' style='page-break-after: always;'>
                @foreach($usersPost as $up)
                    @if($dp == $up->department)
                        @if($up->image1 && $up->image2)
                            <div class="col-xs-12 col-md-6 col-xl-4 mb-4 p-4 d-flex text-left">
                                <div class='main_div'>
                                    <img class='image1 photoView' src="/storage/{{$up->image1}}" style='height:auto' alt="" data-toggle="modal" data-target="#modal1">

                                    <h5 class="card-title m-2">{{$up->name}}</h5>
                                    @empty(!$up->last_word)
                                        <p class="card-text m-2">{{$up->last_word}}</p>
                                    @endempty
                                </div>
                                <img class='image2 photoView' src="/storage/{{$up->image2}}" alt="" data-toggle="modal" data-target="#modal1">
                            </div>
                        @elseif($up->image1 && !$up->image2)
                            <div class='main_div col-xs-12 col-md-6 col-xl-4 mb-4 p-4 text-left'>
                                <img class='image1 photoView' src="/storage/{{$up->image1}}" style = 'width:70%; border-radius:10%; height:auto' alt="" data-toggle="modal" data-target="#modal1">   
                                <h5 class="card-title m-2">{{$up->name}}</h5>
                                <p class="card-text m-2">{{$up->last_word}}</p>
                            </div>
                        @elseif(!$up->image1 && $up->image2)
                            <div class='main_div col-xs-12 col-md-6 col-xl-4 mb-4 p-4 text-left'>
                                <img class='image1 photoView' src="/storage/{{$up->image2}}" style = 'width:70%; border-radius:10%; height:auto' alt="" data-toggle="modal" data-target="#modal1">   
                                <h5 class="card-title m-2">{{$up->name}}</h5>
                                <p class="card-text m-2">{{$up->last_word}}</p>
                            </div>
                        @elseif(!$up->image1 && !$up->image2)
                            <div class='main_div col-xs-12 col-md-6 col-xl-4 mb-4 p-4 text-left'>
                                <img class='image1 photoView' src="/storage/uploads/default.png" style = 'width:70%; border-radius:10%; height:auto' alt="" data-toggle="modal" data-target="#modal1">   
                                <h5 class="card-title m-2">{{$up->name}}</h5>
                                <p class="card-text m-2">{{$up->last_word}}</p>
                            </div>
                        @endif
                        
                    @endif
                @endforeach
            </div>
            @endforeach
        @endif
        
        
      </div>

    </div>
@endsection
