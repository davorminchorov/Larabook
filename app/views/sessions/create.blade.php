@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <h1>Sign In!</h1>
            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'login_path', 'method' => 'post']) }}
                <div class="form-group">
                    {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
                    {{ link_to('/password/remind', 'Forgot Password?') }}
                </div>
            {{ Form::close() }}
    </div>
</div>
@stop