@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4" id="login-container">
            <h1 class="text-center">Keeper Tracker</h1>
            <form action="/login" method="POST">
                <p class="col-sm-12">
                    <label for="userID">UserID: 
                        <input type="text" class="form-control" name="userID" id="userID" placeholder="User ID">
                    </label>
                </p>
                <p class="col-sm-12">
                    <label for="userPassword">Password: 
                        <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Password">
                    </label>
                </p>

                <div class="col-sm-4">
                    <button type="submit" class="btn btn-slate">Login</button>
                </div>

            </form>
        </div>
    </div>
@stop
