@extends('_layouts.master')

@section('pageID', 'merchandise')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'X Cloud Vision')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">X Cloud Vision</h1>
			<h2 class="pageHeader__subheading">Take control of your privacy with our premium webcam cover.</h2>
			<a class="pageHeader__cta" href="#">Buy now for $9.95</a>
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
					{{-- <button class="section__cta">Buy now for $9.95</button> --}}
					<form action="/charge" class="stripe" method="POST">
						<script
							class="stripe-button"
							data-amount="995"
							data-description="X Cloud Vision ($9.95)"
							data-image="/img/logos/internxtcircle.png"
							data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
							data-label="Buy now for $9.95"
							data-name="Internxt"
							src="https://checkout.stripe.com/checkout.js"
					    ></script>
					</form>
				</div>{{-- /.col-lg-3 --}}
			</div>{{-- /.row --}}
		</div>{{-- /.container --}}
	</section>{{-- /.section-subscribe --}}

	<section class="section section--vision-preview">
	</section>{{-- /.section-subscribe --}}

	@include('_includes.sections.subscribe')

@endsection
