@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Dashboard</h1>
	
	<div class="row">

	    <div class="col-sm-6 col-xs-12">
	        <h2>Welcome: {{ Auth::user()->name }}</h2>
	    </div>

	    <div class="col-sm-6 col-xs-12 dashboard-left">
	    	<p class="bg-info"><strong>Number of Customers:</strong> {{ $customer_count }}</p>
	        <p class="bg-primary"><strong>Company Sales Total:</strong> $ {{ $company_total }}</p>
	    </div>

	</div>
</div>
@stop
