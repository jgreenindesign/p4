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

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='customerName'>Name</label>
                <input type='text' class='form-control' id='customerName' placeholder='Customer Name'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='customerProduct'>Product</label>
                <input type='text' class='form-control' id='customerProduct' placeholder='Part #'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='productAmount'>Amount Purchased</label>
                <input type='text' class='form-control' id='productAmount' placeholder='###'>
            </div>

            <div class='form-group col-sm-6 col-xs-12'>
                <label for='customerTotal'>Total Purchase</label>
                <input type='text' class='form-control' id='customerProduct' placeholder='$$$'>
            </div>  

            <div class='form-group col-sm-6 col-xs-12'>
                <button type='submit' class='btn btn-slate col-sm-2 col-xs-12'>Update</button>
                <button type='submit' class='btn btn-default col-sm-2 col-sm-offset-1 col-xs-12'>Cancel</button>
            </div>

        </form>

</div>
@stop
