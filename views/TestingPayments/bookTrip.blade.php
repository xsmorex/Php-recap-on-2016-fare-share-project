@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Testing buying with Stripe.</div>

                <div class="panel-body">
                    {!! Form::open(['id'=> 'billing-form'])  !!}
                    	<div class = "form-row">
                    		<label>
                    			<span>Email Address: </span>
                    			<input type="email" id="email" name="email"></label>
                    		</label>
                    	</div>

                    	<div class = "form-row">
		                    <label>
		                    	<span>Card Number:</span>
		                    	<input type="text" data-stripe="number">
		                    </label>
	                    </div>

	                    <div class = "form-row">
		                    <label>
		                    	<span>CVC:</span>
		                    	<input type="text" data-stripe="cvc">
		                    </label>
	                    </div>

	                    <div class = "form-row">
		                    <label>
		                    	<span>Expiry Date:</span>
		                    	{!! Form::selectMonth(null, null, ['data-stripe' => 'exp_month']) !!}
		                    	{!! Form::selectYear(null,date('Y'),date('Y')+10,null,['data-stripe' => 'exp_year'])!!}
		                    </label>
	                    </div>
	                    <div>
	                    	{!! Form::submit('Buy Now')!!}
	                    </div>
	                    <div class = "payment-errors"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="/js/devPay/billing.js"></script>
@endsection
