@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Sales</h1>
	
	<table class="table table-stripped">
	    <thead>
	        <tr>
	            <th>Customer Number</th>
	            <th>Name</th>
	            <th>Date</th>
	            <th>Product</th>
	            <th>Pruchased</th>
	            <th>Total</th>
	        </tr>
	    </thead>

	    <tbody>
	        <tr>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	            <td></td>
	        </tr>
	    </tbody>

	</table>
</div>
@stop
