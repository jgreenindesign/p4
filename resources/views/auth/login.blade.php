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
            @if(count($errors) > 0)
                    <ul class='errors'>
                    @foreach ($errors->all() as $error)
                        <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method='POST' action='/login' id="login">
            {{ csrf_field() }}
            
                <p class="col-sm-8 col-sm-offset-2">
                    <input type="text" 
                    class="form-control" 
                    name="email"
                    id="email"
                    value='{{ old('email') }}'
                    placeholder='your@email.com'>
                </p>

                <p class="col-sm-8 col-sm-offset-2"> 
                    <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    value='{{ old('password') }}'
                    placeholder='password'>
                </p>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn-slate col-sm-8 col-sm-offset-2">Login</button>
                </div>

            </form>

        </div>
    </div>
@stop