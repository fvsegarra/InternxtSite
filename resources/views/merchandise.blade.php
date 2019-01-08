@extends('_layouts.master')

@section('pageID', 'merchandise')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'X Cloud Vision')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">X Cloud Vision</h1>
			<h2 class="pageHeader__subheading">Take control of your privacy with our premium webcam cover.</h2>
			<a class="pageHeader__cta" href="#">Buy <span class="hidden d-lg-inline">it </span>now for $9.95</a>
		</div>
	</header>

	<section class="section section--vision-privacy">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<p class="section__heading">A lifetime of use without the worry of your privacy being violated.</p>
				</div>{{-- /.col-lg-5 --}}

				<div class="col-lg-6">
					<p class="section__content">Webcam spying is a growing issue that can threaten your privacy via any electronic device that contains a webcam. The solution is quite simple: plenty of documented webcam hacking incidents could have been easily avoided by a simple webcam cover. Our elegant and practical webcam cover serves as the perfect alternative to that ugly sticker or post-it note on your laptop, tablet or desktop.</p>
				</div>{{-- /.col-lg-6 --}}

			</div>{{-- /.row --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--vision-warranty">
		<div class="container">
			<p class="section__heading">The smart way to protect privacy.</p>
			<p class="section__content">X Cloud’s Vision is crafted and packaged with high quality materials and with a full 2-year protection warranty.</p>
		</div>{{-- /.container --}}
	</section>

	<section class="section section--vision-buy">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 d-none d-lg-block">
					<h2 class="section__heading">Secure your privacy today with X Cloud Vision.</h2>
				</div>{{-- /.col-lg-9 --}}

				<div class="col-lg-3">
					<button class="section__cta btn--stripe">Buy now for $9.95</button>
					{{-- <form action="{{ route('stripe.purchase') }}" class="stripe" method="POST">
						@csrf
						<script
							class="stripe-button"
							data-amount="{{ config('services.stripe.prices.vision') }}"
							data-currency="USD"
							data-description="X Cloud Vision ($9.95)"
							data-image="/img/logos/internxtcircle.png"
							data-key="{{ config('services.stripe.key') }}"
							data-label="Buy now for $9.95"
							data-name="Internxt"
							data-shipping-address="true"
							src="https://checkout.stripe.com/checkout.js"
					    ></script>
					</form> --}}
				</div>{{-- /.col-lg-3 --}}
			</div>{{-- /.row --}}
		</div>{{-- /.container --}}
	</section>{{-- /.section-subscribe --}}

	<section class="section section--vision-preview">
	</section>{{-- /.section-subscribe --}}

	@include('_includes.sections.subscribe')

@endsection

@push('js')

	<script>
		$(document).ready(function(){

			var handler = StripeCheckout.configure({
				key: '{{ config('services.stripe.key') }}',
				image: '/img/logos/internxtcircle.png',
				locale: 'auto',
				token: function(token) {
				// You can access the token ID with `token.id`.
				// Get the token ID to your server-side code for use.
					$.post("{{ route('stripe.purchase') }}", function(response){

					});
				}
			});

			$('btn--stripe').click(function(e) {
				// Open Checkout with further options:
				handler.open({
					name: 'Internxt Inc.',
					description: 'X Cloud Vision ($9.95)',
					amount: {{ config('services.stripe.prices.vision') }},
				});
				e.preventDefault();
			});

			// Close Checkout on page navigation:
			window.addEventListener('popstate', function() {
				handler.close();
			});
		});
	</script>

	{{-- SweetAlert message on successful stripe purchase  --}}
	@if(Session::has('status') && Session::get('status') == 'success')
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				swal("Order Complete", "Your X Cloud Vision is on the way.", "success");
			});
		</script>
	@endif

@endpush
