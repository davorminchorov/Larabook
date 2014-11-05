@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <h1>Need to reset your password?</h1>

            {{ Form::open() }}
            <div class="form-group">
                {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Reset Password', ['class' => 'form-control btn btn-primary btn']) }}
            </div>

            {{ Form::close() }}

        </div>
    </div>
@stop