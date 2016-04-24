@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Customer {{ \p4\Customer->(customer_id) }}</h1>

	<h2>{Customer Name}</h2>
	<table class="table table-stripped">
	    
	    <thead>
	        <tr>
	            <td>Product</td>
	            <td>Total</td>
	        </tr>
	    </thead>

	    <tbody>
	        <tr>
	            <td>{Product}</td>
	            <td>{Total}</td>
	        </tr>
	    </tbody>

	    <tfoot>
	        <tr>
	            <td></td>
	            <td>{Grand Total}</td>
	        </tr>
	    </tfoot>
	</table>

</div>
@stop
