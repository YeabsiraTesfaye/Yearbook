@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class='m-0 mb-4 pt-2 pl-2 pb-2 bg-info text-white'>Yearbooks you have created</h2>

    <div class="container">
        <div class="row pt5 d-flex">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3 ">
                <a href='/y' class="card  d-inline-block justify-content-center btn view overlay zoom yearbooks" style='padding-top:40%; padding-bottom:40%; height:100%; box-shadow:0px 0px 26px 0px lightblue'>
                    <div id="add_yearbook" >
                        <img class="w-100" src="/storage/icons/material-icon-2155448_960_720.png" alt="Card image" style="width:100%; height:100%; width:100%">
                        <div class="text-center">
                            <h4 class="card-title">Add Yearbook</h4>
                        </div>
                    </div>
                </a>
            </div>
            @if(count($yearbooks) === 0)
                <div class="col-xl-9 col-md-6 col-sm-6 mb-3">
                    <h2>You have not created any yearbook yet </h2>
                    <img class='w-50' src="/storage/icons/pointer-finger.gif" alt="">
                </div>
            @else
                @foreach($yearbooks as $yearbook)
                @if($yearbook->count == 0)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3 ">
                    <a class="card d-inline-block justify-content-center btn yearbooks" href="/y/{{$yearbook->id}}/edit" style='height:100%; width:100%; box-shadow:0px 0px 26px 0px lightblue'>
                        <div >
                            <img class="card-img-top mb-2" src="/storage/{{$yearbook->image}}" alt="Card image" style="width:100%">
                            <div class="card-body align-self-center border-top p-1 pt-2">
                            <h4 class="card-title text-left bg-info text-white p-2">{{$yearbook->title}}</h4>
                            <p class="card-text overflow-auto text-left p-1" style="overflow:auto; height:100px;">{{$yearbook->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3 ">
                    
                    <a class="card d-inline-block justify-content-center btn yearbooks" href="/y/{{$yearbook->id}}/edit" style='height:100%; width:100%; box-shadow:0px 0px 26px 0px lightblue'>
                        <div class="notification">
                            @if($yearbook->count < 999)
                                {{$yearbook->count}}
                            @else
                                999++
                            @endif
                            
                        </div>
                        <div >
                            <img class="card-img-top mb-2" src="/storage/{{$yearbook->image}}" alt="Card image" style="width:100%">
                            <div class="card-body align-self-center border-top p-1 pt-2">
                            <h4 class="card-title text-left bg-info text-white p-2">{{$yearbook->title}}</h4>
                            <p class="card-text overflow-auto text-left p-1" style="overflow:auto; height:100px;">{{$yearbook->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            @endif
            <br>
            <br>
        </div>
    </div>
    </br>
    </br>
@if(count($my_yearbooks) > 0)
<h2 class='m-0 mb-4 pt-2 pl-2 pb-2 bg-info text-white'>Yearbooks you are a member of</h2>
    <div class="container">
        <div class="row pt5 d-flex">
            
                @foreach($my_yearbooks as $yearbook)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3 ">

                    <a class="card d-inline-block justify-content-center btn yearbooks" href="/y/{{$yearbook->id}}" style='height:100%; width:100%; box-shadow:0px 0px 26px 0px lightblue'>
                        <div >
                            <img class="card-img-top mb-2" src="/storage/{{$yearbook->image}}" alt="Card image" style="width:100%">
                            <div class="card-body align-self-center border-top p-1 pt-2">
                            <h4 class="card-title text-left bg-info text-white p-2">{{$yearbook->title}}</h4>
                            <p class="card-text overflow-auto text-left p-1" style="overflow:auto; height:100px;">{{$yearbook->description}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <br>
                @endforeach
        </div>
    </div>
@endif

</div>
@endsection
