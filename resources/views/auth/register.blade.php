@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class='container'>
    <h1 class='text-center'>Create Profile</h1>
    
    <div class='row'>

        <form action='/register' method='POST' id='profile-form' class='form-horizontal'>
        {{ csrf_field() }}
        
            <div class='col-sm-4 col-xs-12'>
                <img src='/img/user-icon-placeholder.png' alt='Profile Image' class='img-responsive'>

            </div>

            <div class='col-sm-8 col-xs-12'>

                <div class='form-group row'>
                    <label for='name' class='col-sm-4 control-label'>Full Name:</label>

                    <div class='col-sm-8'>
                        <input type='text' name='name' id='name' placeholder='Pat Smith'
                        class='form-control {{ $errors->has('name') ? 'has-error' :'' }}'>
                    </div>
                </div>

                <div class='form-group row'>
                    <label for='email' class='col-sm-4 control-label'>Email:</label>

                    <div class='col-sm-8'>
                        <input type='email' name='email' id='email' placeholder='you@company.com'
                        class='form-control {{ $errors->has('email') ? 'has-error' :'' }}'>
                    </div>
                </div>

                <div class='form-group row'>
                    <label for='password' class='col-sm-4 control-label'>Password:</label>

                    <div class='col-sm-4'>
                        <input type='password' name='password' id='password' placeholder='Password'
                        class='form-control {{ $errors->has('password') ? 'has-error' :'' }}'>
                    </div>

                    <div class='col-sm-4'>
                        <input type='password' name='password_confirmation' id='password_confirmation'
                        placeholder='confirm password' class='form-control {{ $errors->has('password') ? 'has-error' :'' }}'>
                    </div>

                </div>

                <div class='form-group row'>
                    <label for='title' class='col-sm-4 control-label'>Title:</label>

                    <div class='col-sm-8'>
                        <input type='text' name='title' id='title' placeholder='Sales Manager'
                        class='form-control {{ $errors->has('title') ? 'has-error' :'' }}'>
                    </div>
                </div>                

                <div class='form-group row'>
                    <label for='territory' class='col-sm-4 control-label'>Territory:</label>

                    <div class='col-sm-8'>
                        <input type='text' name='territory' id='territory' placeholder='NorthEast'
                        class='form-control {{ $errors->has('territory') ? 'has-error' :'' }}'>
                    </div>
                </div>

                <div class='form-group row'>
                    <label for='phone' class='col-sm-4 control-label'>Phone #:</label>

                    <div class='col-sm-8'>
                        <input type='text' name='phone' id='phone' placeholder='555-1212'
                        class='form-control {{ $errors->has('phone') ? 'has-error' :'' }}'>
                    </div>
                </div>

                <div class="col-sm-10 col-sm-offset-2">
                    @if ($errors->has('name') || $errors->has('email') || $errors->has('phone'))
                        <p class="bs-callout-danger">Please correct the errors above.</p>
                    @endif
                    
                    <p class="bs-callout-danger">* Denotes a required field</p>
                </div>

				<div class='col-sm-12 register-button'>
                    <button class='btn btn-slate col-sm-offset-2 col-sm-2 col-xs-12 pull-right' type='submit'>Register</button>
                </div>

                <div class='col-sm-12 register-button'>
                    <br>
                    <a href='/login' class='btn btn-default col-sm-2 col-xs-6 pull-right'>Login</a>
                    <p class='col-sm-5 col-xs-6 text-right pull-right'>Current user?</p>

                </div>

            </div>
        </form>
    </div>
</div>
@stop
