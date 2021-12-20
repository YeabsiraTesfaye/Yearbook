@extends('layouts.app')
@section('content')
    <div class="container-fluid" style='height:297mm; width:225mm'>

            @foreach($departments as $dp)
                <div class="row bg-info text-white pl-2 pt-2 " style='page-break-after: always; page-break-before: always'>
                    <h1>Department of {{$dp}}</h1>
                </div>
                <div class="row p-4 wrapPosts" id='{{$dp}}'>
                    @foreach($usersPost as $up)
                        @if($dp == $up->department)
                            <div class="sixImages" >
                                <custom-template :user-post='{{$up}}'></custom-template>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
@endsection