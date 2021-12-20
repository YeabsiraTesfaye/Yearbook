@extends('layouts.app')

@section('content')
<div class="container">
    <yearbook-progress :users='{{$users}}' :posts='{{$posts}}' :user-posts='{{$userPosts}}'></yearbook-progress>
</div>

@endsection
