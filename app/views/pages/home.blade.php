@extends('layouts.default')

@section('content')

    <div class="jumbotron">
        <h1>Welcome To Larabook!</h1>
        @if ( ! $currentUser)
            <p>Welcome to the new social network on the web! Why don't you sign up to see what the fuss is all about?</p>
            <p>
              {{ link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) }}
            </p>
        @else
            <p>Welcome to the new social network on the web! Enojoy your stay and have fun!</p>
        @endif
    </div>
@stop