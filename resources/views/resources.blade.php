@extends('_layouts.master')

@section('pageID', 'resources')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'Resources')

@section('body')

	<section class="section section--resources">
		<div class="container">

			<p class="section__heading"><span class="d-none d-lg-inline">Internxt’s </span>Resources</p>

			<div class="section__content">
				<div class="row">

					<div class="col-lg-6">
						@component('_includes.resource')
							@slot('class', 'press-kit')
							@slot('title', 'Press Kit')
							@slot('btnLink', '/kit.zip')
							@slot('btnText', 'Download Press Kit')
							@slot('content')
								Download our press kit for a selection of our design assets
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-6 --}}

					<div class="col-lg-6">
						@component('_includes.resource')
							@slot('class', 'whitepaper')
							@slot('title', 'Whitepaper')
							@slot('btnLink', 'whitepaper.pdf')
							@slot('btnText', 'Download Whitepaper')
							@slot('content')
								Download our whitepaper for a look into our technologies
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-6 --}}

				</div>{{-- /.row --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

@endsection
