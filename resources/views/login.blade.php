@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker Login
@stop

{{-- Begin content for index page --}}
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4" id="login-container">
        
            <h1 class="text-center">Keeper Tracker</h1>
            <form action="/login" method="POST" id="login-form">
            {{ csrf_field() }}
            
                <p class="col-sm-8 col-sm-offset-2">
                    <input type="text" class="form-control" name="userID" id="userID" placeholder="User ID">
                </p>

                <p class="col-sm-8 col-sm-offset-2"> 
                    <input type="password" class="form-control" name="userPassword" id="userPassword" placeholder="Password">
                </p>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn-slate col-sm-8 col-sm-offset-2">Login</button>
                </div>

            </form>

        </div>
    </div>
@stop
