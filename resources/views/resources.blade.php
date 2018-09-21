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

					<div class="col-lg-4">
						@component('_includes.resource')
							@slot('class', 'press-kit')
							@slot('title', 'Design Assets')
							@slot('btnLink', '/kit.zip')
							@slot('btnText', 'Download Design Assets')
							@slot('content')
								Download our design assets to optimally display our company branding
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.resource')
							@slot('class', 'whitepaper')
							@slot('title', 'Whitepaper')
							@slot('btnLink', 'whitepaper.pdf')
							@slot('btnText', 'Download Whitepaper')
							@slot('content')
								Download our whitepaper for a look into our technologies
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.resource')
							@slot('class', 'series-a')
							@slot('title', 'SERIES A')
							@slot('btnLink', 'whitepaper.pdf')
							@slot('btnText', 'Download Whitepaper')
							@slot('content')
								Check out our investor information document for Series A
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

				</div>{{-- /.row --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	@include('_includes.sections.subscribe')

@endsection
