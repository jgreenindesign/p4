@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Delete the following sale</h1>
	
	<table class="table table-stripped">
	    <thead>
	        <tr>
	            <th>Sale ID</th>
	            <th>Sale Date</th>
	            <th>Product ID</th>
	            <th>Total</th>
	        </tr>
	    </thead>

	    <tbody>
	        <tr>
	            <td>{{ $sale->sales_id }}</td>
	            <td>{{ date('F d, Y', strtotime($sale->created_at)) }}</td>
	            <td>{{ $sale->sales_product_id }}</td>
	            <td>{{ $sale->sales_product_total }}</td>
	        </tr>
	    </tbody>
	</table>

	<form 
    <p><button type="submit" class="btn btn-danger col-sm-2 col-xs-12">Delete</button></p>
    <p><a href="/dashboard" class="btn btn-default col-sm-2 col-xs-12 clearfix">Cancel</a></p>


</div>
@stop
