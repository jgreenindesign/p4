@extends('layouts.secure')

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

                <div class="form-group row">
                    <label for="userName" class="col-sm-4 control-label">Full Name:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userName" id="userName" placeholder="Pat Smith"
                        class="form-control {{ $errors->has('userName') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="userTitle" class="col-sm-4 control-label">Title:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userTitle" id="userTitle" placeholder="Sales Manager"
                        class="form-control {{ $errors->has('userTitle') ? 'has-error' :'' }}">
                    </div>
                </div>

            </div>

            <div class="col-sm-8 col-xs-12">

                <div class="form-group row">
                    <label for="userID" class="col-sm-4 control-label">User ID:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userID" id="userID" placeholder="User ID"
                        class="form-control {{ $errors->has('userID') ? 'has-error' :'' }}">
                </div>

                <div class="form-group row">
                    <label for="userPassword" class="col-sm-4 control-label">Password:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userPassword" id="userPassword" placeholder="Password"
                        class="form-control {{ $errors->has('userPassword') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="userTerritory" class="col-sm-4 control-label">Territory:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userTerritory" id="userTerritory" placeholder="NorthEast"
                        class="form-control {{ $errors->has('userTerritory') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="userPhone" class="col-sm-4 control-label">Phone #:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userPhone" id="userPhone" placeholder="555-1212"
                        class="form-control {{ $errors->has('userPhone') ? 'has-error' :'' }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="userEmail" class="col-sm-4 control-label">Email:</label>

                    <div class="col-sm-8">
                        <input type="text" name="userEmail" id="userEmail" placeholder="you@company.com"
                        class="form-control {{ $errors->has('userEmail') ? 'has-error' :'' }}">
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@stop
