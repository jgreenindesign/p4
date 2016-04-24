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
        <form action="/create-profile" method="POST" id="profile-form" class="form-horizontal">
        {{ csrf_field() }}
        
            <div class="col-sm-4 col-xs-12">
                <img src="/img/user-icon-placeholder.png" alt="Profile Image" class="img-responsive">
            </div>

            <div class="col-sm-8 col-xs-12">

                {{-- <div class="form-group row">
                    <label for="id" class="col-sm-4 control-label">User ID:</label>

                    <div class="col-sm-8">
                        <input type="text" name="id" id="id" value="User ID"
                        class="form-control {{ $errors->has('id') ? 'has-error' :'' }}">
                </div> --}}

                <div class="form-group row">
                    <label for="name" class="col-sm-4 control-label">Full Name:</label>

                    <div class="col-sm-8">
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                        class="form-control {{ $errors->has('name') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 control-label">Email:</label>

                    <div class="col-sm-8">
                        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}"
                        class="form-control {{ $errors->has('email') ? 'has-error' :'' }}">
                    </div>
                </div>                

                <div class="form-group row">
                    <label for="title" class="col-sm-4 control-label">Title:</label>

                    <div class="col-sm-8">
                        <input type="text" name="title" id="title" value="{{ Auth::user()->title }}"
                        class="form-control {{ $errors->has('title') ? 'has-error' :'' }}">
                    </div>
                </div>                

                {{-- <div class="form-group row">
                    <label for="userPassword" class="col-sm-4 control-label">Password:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userPassword" id="userPassword" value="Password"
                        class="form-control {{ $errors->has('userPassword') ? 'has-error' :'' }}">
                    </div>
                </div> --}}

                <div class="form-group row">
                    <label for="territory" class="col-sm-4 control-label">Territory:</label>

                    <div class="col-sm-8">
                        <input type="text" name="territory" id="territory" value="{{ Auth::user()->territory }}"
                        class="form-control {{ $errors->has('territory') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-sm-4 control-label">Phone #:</label>

                    <div class="col-sm-8">
                        <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}"
                        class="form-control {{ $errors->has('phone') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-slate col-sm-3 col-sm-offset-3">Update</button>
                    <button type="submit" class="btn btn-default col-sm-3 col-sm-offset-1">Cancel</button>
                </div>

            </div>
        </form>
    </div>
</div>
@stop
