@extends('layouts.secure')

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
	        <h2>{Profile Name}
	    </div>

	    <div class="col-sm-6 col-xs-12">
	        <p class="bg-info"><strong>{Profile ID}:</strong> {Sales Total}</p>
	        <p class="bg-primary"><strong>Company Total:</strong> {Grand Total}</p>
	    </div>

	</div>
</div>
@stop
