@extends('layouts.app');
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiZJEoFUPT-qfwdxh7YB1z0EyQO422A_9nVNoEYY1lizbyX163">
                <h1>{{$user->name}}</h1>
                <h3>{{$user->email}}</h3>
                <h5>{{$user->dob->format('l j F Y ')}} <br>{{$user->dob->age}} years old</h5>
                <button class="btn btn-success">Follow</button>
            </div>
        </div>
    </div>
</div>
@endsection