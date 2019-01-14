<h1>New Order</h1>

<p>A new X Cloud Vision order has been placed! Details below:</p>

@if(isset($charge['source']))
	<p>Name: {{ $charge->source->name }}</p>
	<p>Address:
		@if($charge['source']['address_line1'])
			{{ $charge['source']['address_line1'] }}<br>
		@endif
		@if($charge['source']['address_line2'])
			{{ $charge['source']['address_line2'] }}<br>
		@endif
		@if($charge['source']['address_city'])
			{{ $charge['source']['address_city'] }}<br>
		@endif
		@if($charge['source']['address_zip'])
			{{ $charge['source']['address_zip'] }}<br>
		@endif
		@if($charge['source']['address_state'])
			{{ $charge['source']['address_state'] }}<br>
		@endif
		@if($charge['source']['address_country'])
			{{ $charge['source']['address_country'] }}
		@endif
	</p>
@else
	<p>No address information was provided - check the transaction in the Stripe Dashboard for more info.</p>
@endif

<p>Stripe ID: {{ $charge['id'] }}</p>
