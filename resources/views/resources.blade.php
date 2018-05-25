@extends('_layouts.master')

@section('pageID', 'resources')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'Company Resources')

@section('body')

	<section class="section section--resources">
		<div class="container">
			<p class="section__heading">Company Resources.</p>
		</div>
		<div class="section__content">

			@component('_includes.resource')
				@slot('class', 'press-kit')
				@slot('title', 'Press Kit')
				@slot('btnLink', '#download')
				@slot('btnText', 'Download Press Kit')
				@slot('content')
					Download our press kit for a selection of our assets to use for any media or marketing purposes.
				@endslot
			@endcomponent

			<hr>

			@component('_includes.resource')
				@slot('class', 'whitepaper')
				@slot('title', 'Whitepaper')
				@slot('btnLink', '#download')
				@slot('btnText', 'Download Whitepaper')
				@slot('content')
					Download our whitepaper for an extensive look into the technology we are applying to our services.
				@endslot
			@endcomponent

		</div>{{-- /.section__content --}}
	</section>

@endsection
