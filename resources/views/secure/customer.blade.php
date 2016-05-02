@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
    Keeper Tracker
@stop

{{-- Begin content for index page --}}
@section('content')

<div class="container">
    <h1>Customer: {{ $customer->name }}</h1>
    <hr class="styled">

    <div class="row">

    	<div class="col-sm-6 col-xs-12">
    		<h2>Customer Info</h2>

    		<form action="/customer/{{ $customer->id }}" method="POST" id="profile-form" >
    		{{ csrf_field() }}

    			<input type='hidden' name='id' value='{{ $customer->id }}'>
	            <div class="form-group row">
	                <label for="city" class="col-sm-4 control-label">* City:</label>

	                <div class="col-sm-8">
	                    <input type="text" name="city" id="city" value="{{ $customer->city }}"
	                    class="form-control {{ $errors->has('city') ? 'has-error' :'' }}">
	                </div>
	            </div>


	            <div class="form-group row">
	                <label for="state" class="col-sm-4 control-label">* State:</label>

	                <div class="col-sm-8">
	                    <input type="text" name="state" id="state" value="{{ $customer->state }}"
	                    class="form-control {{ $errors->has('state') ? 'has-error' :'' }}">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="zip" class="col-sm-4 control-label">* Zip:</label>

	                <div class="col-sm-8">
	                    <input type="text" name="zip" id="zip" value="{{ $customer->zip }}"
	                    class="form-control {{ $errors->has('zip') ? 'has-error' :'' }}">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="phone" class="col-sm-4 control-label">* Phone:</label>

	                <div class="col-sm-8">
	                    <input type="text" name="phone" id="phone" value="{{ $customer->phone }}"
	                    class="form-control {{ $errors->has('phone') ? 'has-error' :'' }}">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="email" class="col-sm-4 control-label">* Email:</label>

	                <div class="col-sm-8">
	                    <input type="email" name="email" id="email" value="{{ $customer->email }}"
	                    class="form-control {{ $errors->has('email') ? 'has-error' :'' }}">
	                </div>
	            </div>

	            <div class="row">

	                @if ($errors->any())
	                	<p class="bs-callout-danger">Please correct the errors above.</p>
	            	@endif
	                
	                <p class="bs-callout-danger">* All customer information is required.</p>
	                <button type="submit" class="btn btn-slate col-sm-3 col-xs-12">Update</button>
	            </div>
	        </form>

    	</div>

	    <div class="col-sm-6 col-xs-12">	
			<h2>Sales Report</h2>
			<table class="table table-striped table-hover text-center">
			    
			    <thead id="login-container">
			        <tr>
			            <td>Product</td>
			            <td>Total</td>
			            <td></td>
			        </tr>
			    </thead>

			    <tbody>
					
					@foreach($sales as $sale)
				        <tr>
				            <td>{{ $sale->sales_product_id }}</td>
				            <td>{{ $sale->sales_product_total }}</td>
				            <td>
				            	<form action="/sale/{{ $sale->sales_id }}" method="POST" id="profile-form" >
				            		{{ csrf_field() }}
				            		<button type="submit" class="btn-danger">×</button>
				            	</form>
			            	</td>
				        </tr>
			        @endforeach
			    </tbody>

			    <tfoot>
			        <tr>
			            <td>Customer Total:</td>
			            <td>{{ $customer_total }}</td>
			        </tr>
			    </tfoot>
			</table>
		</div>
	</div>

</div>
@stop
