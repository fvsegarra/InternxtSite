@extends('_layouts.master')

@section('pageID', 'team')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'Core Team')

@section('body')

	<section class="section section--team-core">
		<div class="container">
			<p class="section__heading">Internxt’s Core Team.</p>
			<div class="section__content">

				<div class="row">

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'fran')
							@slot('name', 'Fran Villalba Segerra')
							@slot('position', 'Founder & Chief Executive Officer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'volodymyr')
							@slot('name', 'Volodymyr Shevchyk')
							@slot('position', 'Chief Technology Officer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'jordan')
							@slot('name', 'Jordan Latham')
							@slot('position', 'Chief Design Officer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team-blank')
							@slot('name', 'Join the team')
							@slot('position', 'View our open job positions')
							@slot('btnText', 'View current openings')
							@slot('btnLink', '#jobs')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

				</div>{{-- /.row --}}


			</div>
		</div>
	</section>

	<hr>

	<section class="section section--team-advisors">
		<div class="container">
			<p class="section__heading">Internxt’s Advisors.</p>
			<div class="section__content">

				<div class="row">

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'alex')
							@slot('name', 'Alex Sicart Ramos')
							@slot('position', 'Technical Advisor')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'ryan')
							@slot('name', 'Ryan Marsden')
							@slot('position', 'Financial Advisor')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team-blank')
							@slot('name', 'Become an advisor')
							@slot('position', 'Contact us about an enquiry.')
							@slot('btnText', 'Contact us')
							@slot('btnLink', '#contact')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

				</div>{{-- /.row --}}


			</div>
		</div>
	</section>

	<hr>

	<section class="section section--team-partners">
		<div class="container">
			<p class="section__heading">Internxt’s Partners.</p>
			<div class="section__content">

				<div class="row">

					<div class="col-sm-4">
						@component('_includes.team-partner')
							@slot('slug', 'civic')
							@slot('name', 'Civic')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team-blank')
							@slot('name', 'Become a partner')
							@slot('position', 'Contact us about an enquiry.')
							@slot('btnText', 'Contact us')
							@slot('btnLink', '#contact')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

				</div>{{-- /.row --}}


			</div>
		</div>
	</section>

@endsection
