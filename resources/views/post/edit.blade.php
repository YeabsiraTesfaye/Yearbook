
 @extends('layouts.app')
 @section('content')

 <div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Edit Post</h2>
        </div>
        <div class="pull-right">
         
        </div>
    </div>
</div>
   
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
   @if($action == 'last_word')
   <form action="/y/p/{{$post->id}}/editLastWord" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
  
     <div class="row">       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Update Last word</strong>
                <textarea class="form-control" style="height:150px" name="last_word" placeholder="Enter your last word here">{{$post->last_word}}</textarea>
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
</form>
   @else
    <form action="/y/p/{{$post->id}}/addimage/{{$action}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Update {{$action}}</strong>
                    <input type="file" name="image" class="form-control" placeholder="Post Title">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endif
@endsection
