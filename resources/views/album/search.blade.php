@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        
        @if(count($filteredPosts)==0)
            <h1>{{$user->name}} has not posted anything yet</h1>
        @else
        <h4 class="row bg-danger text-white p-2">{{$user->name}}</h4>
            <div class="row p-2" style='page-break-after: always;'>
                @foreach($filteredPosts as $up)
                        @if($up->image1 && $up->image2)
                            <div class="col-xl-6 col-md-6 col-xs-12 mb-4 p-4 flex-column d-flex text-left">
                                <h4 class='bg-dark text-white p-2 mb-0'>posted on {{$up->title}}</h4>
                                <div class='d-flex'>
                                        <img class='image1 photoView w-50' src="/storage/{{$up->image1}}" alt="" style='border-radius: 0;' data-toggle="modal" data-target="#modal1">
                                        <img class='image2 photoView w-50' src="/storage/{{$up->image2}}" alt="" style='border-radius: 0;' data-toggle="modal" data-target="#modal1">
                                </div>
                                <h4 class='p-2 bg-info text-white'>{{$up->last_word}}</h4>
                            </div>
                        @elseif($up->image1 && !$up->image2)
                            <div class='main_div col-12 mb-4 p-4 flex-column text-left'>
                                <h4 class='bg-dark text-white p-2 mb-0'>posted on {{$up->title}}</h4>
                                <div class='d-flex'>
                                    <img class='image1 photoView' src="/storage/{{$up->image1}}" alt="" style='border-radius: 0;'  data-toggle="modal" data-target="#modal1">   
                                </div>
                                <h4 class='p-2 bg-info text-white'>{{$up->last_word}}</h4>
                            </div>
                        @elseif(!$up->image1 && $up->image2)
                        <div class='main_div col-12 mb-4 p-4 flex-column text-left'>
                                <h4 class='bg-dark text-white p-2 mb-0'>posted on {{$up->title}}</h4>
                                <div class='d-flex'>
                                    <img class='image2 photoView' src="/storage/{{$up->image2}}" alt="" style='border-radius: 0;' data-toggle="modal" data-target="#modal1">   
                                </div>
                                <h4 class='p-2 bg-info text-white'>{{$up->last_word}}</h4>
                            </div>
                        @elseif(!$up->image1 && !$up->image2)
                            <div class='main_div col-xs-12 col-md-6 col-xl-4 mb-4 p-4 flex-column text-left'>
                                <h4 class='bg-dark text-white p-2 mb-0'>posted on {{$up->title}}</h4>
                                <div class='d-flex'>
                                    <img class='image1 photoView' src="/storage/uploads/default.png" style = 'width:70%; border-radius:0;' alt="" data-toggle="modal" data-target="#modal1">   
                                </div>
                                <h4 class='p-2 bg-info text-white'>{{$up->last_word}}</h4>
                            </div>
                        @endif
                @endforeach
            </div>
        @endif

    </div>
@endsection
