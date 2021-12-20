
 @extends('layouts.app')
 @section('content')

 <div class="container mt-2">
  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Create Yearbook</h2>
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
   
<form action="\y" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Yearbook Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
               @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Yearbook Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Yearbook Logo:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Post Image">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number of photos allowed</strong>
                <select class="form-control" id=imageCount name="numberOfPhotosAllowed" required>
                    <option value=1>1 photo</option>
                    <option value=2>2 photos</option>
                    <option value=3 selected>3 photos</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
            <strong>Add me as a user too:&nbsp</strong>
            <input checked="checked" name="checkbox" type="checkbox" class='align-self-center' value="yes">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   
</form>
@endsection
