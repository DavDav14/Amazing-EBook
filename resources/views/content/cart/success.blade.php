@extends('layout.main')

@section('content')
<div class="container justify-content-center text-center">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column justify-content-center align-items-center container rounded-circle border border-5 border-info" style="height: 500px; width: 500px">
                <h3 class="text-logout">Success !</h3>
                <a href="/home" class="find-logout" style="text-decoration: none">Click here to "Home"</a>
            </div>
        </div>
    </div>
</div>
@endsection
