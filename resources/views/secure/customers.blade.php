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
		            <td><a href="/customer/{{ $customer->id }}">{{ $customer->name }}</a></td>
	                <td>{{ $customer->city }}</td>
		            <td>{{ $customer->state }}</td>
		            <td>{{ $customer->zip }}</td>
	                <td>{{ $customer->phone }}</td>
		            <td>{{ $customer->email }}</td>
		        </tr>
	        @endforeach
	    </tbody>

	</table>
</div>
@stop