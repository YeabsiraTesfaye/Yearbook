@extends('layouts.app')
 @section('content')

<div class="container-fluid ">
    <div class="row">
        <div class="col-xl-3 col-md-4 col-xs-12 px-4" style='background-color:white; border-radius:1%'>
            <div class="card">
                <div class="card-header py-3">
                    Edit Yearbook
                </div>
                <div class="card-body">
                        <div class="d-flex">
                        <yearbook-switch yearbook-id='{{$yearbook->id}}'></yearbook-switch>
                        <a href='album' class='btn btn-primary'>Show Album</a>
                    </div>
                    <form action="/y/{{$yearbook->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Title:</strong>
                                    <input type="text" name="title" value="{{$yearbook->title}}" class="form-control" placeholder="Title">
                                @error('title')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{$yearbook->description}}</textarea>
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>   
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Number of photos allowed</strong>
                                    <select class="form-control" id=imageCount name="numberOfPhotosAllowed">
                                        @for($x=1; $x<=3; $x++)
                                            @if($x == $yearbook->numberOfPhotosAllowed)
                                                <option value={{$x}} selected>{{$x}} photo</option>
                                            @else
                                                <option value={{$x}}>{{$x}} photo</option>
                                            @endif

                                        @endfor
                                    
                                    </select>
                                </div>
                            </div>     
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Logo:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="Post Title">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <edit-yearbook yearbook-id='{{$yearbook->id}}'></edit-yearbook>
            
        </div>
        <div class="col-xl-6 col-md-4 col-xs-12 px-2" id='approveDeclineScroll' style='background-color:white'>
            
                @if(count($posts)>0)
                    @foreach($posts as $post)
                        <div  class='mt-2 border-top border-bottom text-center' style='border-radius:5px'>
                            <approve-decline yearbook-id='{{$post->yearbook->id}}' post-id='{{$post->id}}' image-one='/storage/{{$post->image1}}' image-two='/storage/{{$post->image2}}' image-three='/storage/{{$post->image3}}' user-name='{{$post->user->name}}' last-word='{{$post->last_word}}' photo-count='{{$yearbook->numberOfPhotosAllowed}}'></approve-decline>
                        </div>
                        @endforeach
                @else
                    <div  class='mt-2 border-top border-bottom text-center' style='border-radius:5px; box-shadow:0px 0px 10px lightblue'>
                        <h2 style='position:absolute; top:30%; width:90%'>Either post has not been added or all posts are approved</h2>
                    </div>
                @endif

                
                
        </div>
        <div class="col-xl-3 col-md-4 col-xs-12 px-4" style='background-color:white'>
            <add-excel yearbook-id="{{$yearbook->id}}" user-id='{{auth()->user()->id}}'></add-excel>
        </div>
    </div>
        

    </div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  
    

    
</div>
@endsection
