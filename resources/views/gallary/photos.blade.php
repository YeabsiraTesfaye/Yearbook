
 @extends('layouts.app')
 @section('content')
<div class="container">
    @if($role == 1 && $yearbook->isLocked == 0)
        <add-photos event-id = '{{$event->id}}'></add-photos>
    @endif
    <view-photos :photos='{{$photos}}'></view-photos>
</div>

@endsection