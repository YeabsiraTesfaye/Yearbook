@extends('layouts.app')
@section('content')
    <div class="row m-0">
        <div class="col-3">
            <edit-panel></edit-panel>
        </div>
        <div class="col-9">
            <div class="col-12 p-0 d-flex flex-column">
                <div class="wraper card">
                    <div class="card-header p-1"><strong>Make Design</strong> <a href='/export/{{$yearbook->id}}' class="btn btn-primary float-right">Done</a></div>
                        <div class="card-body row justify-content-center d-flex pr-0" style='height:105mm; width:105mm'>
                            <custom-template></custom-template>  
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection