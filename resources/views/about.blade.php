@extends('_layouts.master')

@section('pageID', 'about')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-about')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'About Us')

@section('metaDescription', 'Meet Internxt\'s Team. Fran Villalba Segarra, Founder and CEO at Internxt.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">Internxt</h1>
			<h2 class="pageHeader__subheading">Technologies to enhance life.</h2>
		</div>
	</header>

	<section class="section section--about-intro">
		<div class="container">
			<div class="section__content">
				<p>Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of <em>innovative mass-market services</em> that disrupt various technology industries.</p>

				<a class="section__cta" href="#">Download Whitepaper</a>

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--team">
		<div class="container">
			<p class="section__label">Leadership</p>
			<p class="section__heading">Internxt’s Team</p>
			<div class="section__content">

				<div class="row">

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'fran')
							@slot('name', 'Fran Villalba Segerra')
							@slot('position', 'Founder & CEO')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'volodymyr')
							@slot('name', 'Volodymyr Shevchyk')
							@slot('position', 'Chief Technology Officer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'harrison')
							@slot('name', 'Harrison Moore')
							@slot('position', 'Chief Design Officer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'zoran')
							@slot('name', 'Zoran Joka')
							@slot('position', 'Senior Software Developer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'russell')
							@slot('name', 'Russell Vaughan')
							@slot('position', 'Business Development')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'conor')
							@slot('name', 'Conor Doyle')
							@slot('position', 'Chief Marketing Officer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'jordan')
							@slot('name', 'Jordan Latham')
							@slot('position', 'UI/UX Designer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'igor')
							@slot('name', 'Igor Dostanic')
							@slot('position', 'Software Developer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'alberto')
							@slot('name', 'Alberto Pinero')
							@slot('position', 'Hardware Engineer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'joe')
							@slot('name', 'Joe Priest')
							@slot('position', 'Front-End Developer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'alex')
							@slot('name', 'Alex Sicart Ramos')
							@slot('position', 'Technical Advisor')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'ryan')
							@slot('name', 'Ryan Marsden')
							@slot('position', 'Financial Advisor')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

				</div>{{-- /.row --}}
			</div>
		</div>
	</section>

	<section class="section section--branding-assets">
		<div class="container">
			<div class="section__content">
				<p class="section__label">DESIGN ASSETS</p>
				<p class="section__heading">Spread the word with our <span class="linebreak d-none d-lg-block"></span>branding assets.</p>
				<a class="section__cta" href="#">Download Assets</a>
			</div>
		</div>
	</section>

	<section class="section section--team-partners">
		<div class="container">
			<p class="section__label">Leadership</p>
			<p class="section__heading">Internxt’s Partners</p>
			<div class="section__content">


				<div class="teamPartner teamPartner--blackberry">
					<div class="row">
						<div class="col-lg-7">
							<img class="teamPartner__image" src="/img/partners/blackberry.png">
							<a href="#">Learn more about the partnership</a>
						</div>{{-- /.col-lg-7 --}}
						<div class="col-lg-5">
							<p class="teamPartner__heading">Blackberry Partnership</p>
							<p class="teamPartner__subheading">BlackBerry is an enterprise software and services company focused on securing and managing IoT endpoints.</p>
							<p class="teamPartner__content">As we are seeing with services like Internxt’s X Cloud, innovation is profoundly changing the way business gets done as customers increasingly demand secure solutions. BlackBerry can help Internxt assess  Encryption, Infrastructural vulnerabilities, Authentication and Data leak prevention.</p>
						</div>{{-- /.col-lg-5 --}}
					</div>{{-- /.row --}}
				</div>{{-- /.teamPartner --}}

				<div class="">
					<hr>
				</div>

				<div class="teamPartner teamPartner--civic">
					<div class="row">
						<div class="col-lg-5">
							<p class="teamPartner__heading">Civic Partnership</p>
							<p class="teamPartner__subheading">Civic is developing an ecosystem that facilitates secure access to identity verification services via the blockchain.</p>
							<p class="teamPartner__content">Civic’s Secure Identity Platform provides an easy and transparent way for users to authenticate using blockchain technology which will prevent users with a reputation below a certain threshold signing up to X Cloud.</p>
						</div>{{-- /.col-lg-5 --}}
						<div class="col-lg-7">
							<img class="teamPartner__image" src="/img/partners/civic.png">
							<a href="#">Learn more about the partnership</a>
						</div>{{-- /.col-lg-7 --}}
					</div>{{-- /.row --}}
				</div>{{-- /.teamPartner --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	@include('_includes.sections.subscribe')

@endsection
