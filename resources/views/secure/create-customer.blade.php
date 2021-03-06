@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class='container'>
    <h1>Create Customer</h1>

        <form action='/create-customer' method='POST' id='create-customer-form'>
        {{ csrf_field() }}

            <div class='form-group col-sm-6 col-xs-12 required'>
                <label for='name'>* Name</label>
                <input type='text' class='form-control {{ $errors->has('name') ? 'has-error' :'' }}' name='name' id='name' placeholder='Customer Name'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='city'>City</label>
                <input type='text' class='form-control' name='city' id='city' placeholder='City'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='state'>State</label>
                <input type='text' class='form-control' name='state' id='state' placeholder='City'>
            </div>            

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='zip'>Zip</label>
                <input type='text' class='form-control' name='zip' id='zip' placeholder='Zip'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='phone'>* Phone</label>
                <input type='tel' class='form-control {{ $errors->has('phone') ? 'has-error' :'' }}' name='phone' id='phone' placeholder='555-1212'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='email'>* Email</label>
                <input type='email' class='form-control {{ $errors->has('email') ? 'has-error' :'' }}' name='email' id='email' placeholder='mail@mail.com'>
            </div>            

            <div class='form-group col-sm-6 col-xs-12 clearfix'>
            @if ($errors->has('name') || $errors->has('email') || $errors->has('phone'))
                <p class="bs-callout-danger">Please correct the errors above.</p>
            @endif
                <p class="bs-callout-danger">* Denotes a required field</p>
                <button type='submit' class='btn btn-slate col-sm-2 col-xs-12'>Create</button>
                <button type='submit' class='btn btn-default col-sm-2 col-sm-offset-1 col-xs-12'>Cancel</button>
            </div>

        </form>

</div>
@stop
