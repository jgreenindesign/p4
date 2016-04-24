@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Customers</h1>

	<table class="table table-striped table-hover">
	    <thead>
	        <tr id="login-container">
	            <th>Customer</th>
	            <th>City</th>
	            <th>State</th>
	            <th>Zip</th>
	            <th>Phone</th>
	            <th>Email</th>
	        </tr>
	    </thead>

	    <tbody>
	    	@foreach($customers as $customer)
		        <tr>
		            <td><a href="/customer/{{ $customer->customer_id }}">{{ $customer->customer_name }}</a></td>
	                <td>{{ $customer->customer_city }}</td>
		            <td>{{ $customer->customer_state }}</td>
		            <td>{{ $customer->customer_zip }}</td>
	                <td>{{ $customer->customer_phone }}</td>
		            <td>{{ $customer->customer_email }}</td>
		        </tr>
	        @endforeach
	    </tbody>

	</table>
</div>
@stop