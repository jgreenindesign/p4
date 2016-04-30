@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1 class="text-center">View/Update Profile</h1>
    
    <div class="row">
        <form action="/profile" method="POST" id="profile-form" class="form-horizontal">
        {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ Auth::user()->id }}'>
        
            <div class="col-sm-4 col-xs-12">
                <img src="/img/user-icon-placeholder.png" alt="Profile Image" class="img-responsive">
            </div>

            <div class="col-sm-8 col-xs-12">

                <div class="form-group row">
                    <label for="name" class="col-sm-4 control-label">* Full Name:</label>

                    <div class="col-sm-8">
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                        class="form-control {{ $errors->has('name') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 control-label">* Email:</label>

                    <div class="col-sm-8">
                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                        class="form-control {{ $errors->has('email') ? 'has-error' :'' }}">
                    </div>
                </div>                

                <div class="form-group row">
                    <label for="title" class="col-sm-4 control-label">Title:</label>

                    <div class="col-sm-8">
                        <input type="text" name="title" id="title" value="{{ Auth::user()->title }}"
                        class="form-control">
                    </div>
                </div>                

                <div class="form-group row">
                    <label for="territory" class="col-sm-4 control-label">Territory:</label>

                    <div class="col-sm-8">
                        <input type="text" name="territory" id="territory" value="{{ Auth::user()->territory }}"
                        class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-4 control-label">* Phone #:</label>

                    <div class="col-sm-8">
                        <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                        class="form-control {{ $errors->has('phone') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="row">
                    @if ($errors->has('name') || $errors->has('email') || $errors->has('phone'))
                        <p class="bs-callout-danger col-sm-offset-3">Please correct the errors above.</p>
                    @endif
                    
                    <p class="bs-callout-danger col-sm-offset-3">* Denotes a required field</p>                
                    <button type="submit" class="btn btn-slate col-sm-3 col-sm-offset-3">Update</button>
                    <a href="/dashboard" class="btn btn-default col-sm-3 col-sm-offset-1">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</div>
@stop
