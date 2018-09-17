@extends('_layouts.master')

@section('pageID', 'roadmap')

@section('navbar-classes', 'navbar-light navbar-roadmap')

@section('pageTitle', 'Roadmap')

@section('metaDescription', 'Internxt\'s Development Roadmap. Find out what next industry we\'re planning to disrupt. X Cloud, decentralized cloud storage service. X Core, CorePro.')

@section('body')

	<section class="section section--milestones section--milestones--published">
		<div class="container">
			<p class="section__heading">Milestones Published</p>
			<div class="section__content">

				<div class="row">

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q2 2017')
							@slot('title', 'Founded')
							@slot('content')
								Internxt was founded with the intention to consistently transform the way that people live, work, play and connect through revolutionary technology.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Crowdsale')
							@slot('content')
								An updated digital identity and website were released along with the first versions of X Cloud’s and X Core’s designs and interfaces.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Interfaces')
							@slot('content')
								An updated digital identity and website were released along with the first versions of X Cloud’s and X Core’s designs and interfaces.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

				</div>{{-- /.row --}}

				<div class="row">

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q1 2018')
							@slot('title', 'Alpha Version')
							@slot('content')
								X Cloud's and X Core’s Alpha version were released which included the core infrastructure of their code and installable prototypes.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

				</div>{{-- /.row --}}

			</div>{{-- /.section__content --}}

		</div>{{-- /.container --}}
	</section>

	<div class="container d-none d-lg-block">
		<hr>
	</div>{{-- /.container --}}

	<section class="section section--milestones section--milestones--in-progress">
		<div class="container">
			<p class="section__heading">Milestones In Progress</p>
			<div class="section__content">

				<div class="row">

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q3 2018')
							@slot('title', 'Beta Versions')
							@slot('content')
								This release will include all the code that will allow X Cloud and X Core to function, as well as a basic Windows, Linux and MacOS client.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2018')
							@slot('title', 'Final Versions')
							@slot('content')
								After optimizing the functionality of the UI and UX of X Cloud and X Core and finalizing the development, their commercial versions will be released.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q1 2019')
							@slot('title', 'Mobile Version')
							@slot('content')
								After the commercial release, the X Cloud app will become available for iOS and Android mobile devices.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

				</div>{{-- /.row --}}

				<div class="row">

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q2 2019')
							@slot('title', 'CorePro')
							@slot('content')
								A highly optimized, easy-to-use storage server which enables hosts to maximize their profits as an X Core Host.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

					<div class="col-lg-4">
						@component('_includes.milestone')
							@slot('date', 'Q3 2019')
							@slot('title', 'Next Service')
							@slot('content')
								After the public release of X Cloud and X Core, we will then proceed with the development of our next service.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-4 --}}

				</div>{{-- /.row --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	@include('_includes.sections.subscribe')

@endsection
