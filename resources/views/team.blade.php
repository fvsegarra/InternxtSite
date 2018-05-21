@extends('_layouts.master')

@section('pageID', 'team')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'Team')

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
						@component('_includes.team')
							@slot('slug', 'zoran')
							@slot('name', 'Zoran Joka')
							@slot('position', 'Senior Software Developer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'russell')
							@slot('name', 'Russell Vaughan')
							@slot('position', 'Business Development')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'conor')
							@slot('name', 'Conor Doyle')
							@slot('position', 'Chief Marketing Officer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'harrison')
							@slot('name', 'Harrison Moore')
							@slot('position', 'UI/UX Designer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'igor')
							@slot('name', 'Igor Dostanic')
							@slot('position', 'Software Developer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'joe')
							@slot('name', 'Joe Priest')
							@slot('position', 'Front-End Developer')
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.team')
							@slot('slug', 'alberto')
							@slot('name', 'Alberto Pinero')
							@slot('position', 'Hardware Engineer')
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
