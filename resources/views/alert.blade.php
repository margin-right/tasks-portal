@if ($alert = session()->pull('alert'))
    <div class="rounded-0 alert alert-{{session()->pull('alert_type')}}">
        <div class="container">{{$alert}}</div>
    </div>
@endif
