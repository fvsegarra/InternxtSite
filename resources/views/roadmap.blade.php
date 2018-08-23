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

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q2 2017')
							@slot('title', 'Founded')
							@slot('content')
								All revenue generated from our services will be directly converted into INXT. If a customer decides to pay for our services in fiat, the fiat is used to automatically purchase INXT at market price and is then sent to Hosts.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Crowdsale')
							@slot('content')
								An updated digital identity and website were released along with the first versions of X Cloud’s and X Core’s designs and interfaces.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Interfaces')
							@slot('content')
								X Cloud's and X Core’s Alpha version were released which included the core infrastructure of their code and installable prototypes.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

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

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q2 2017')
							@slot('title', 'Founded')
							@slot('content')
								All revenue generated from our services will be directly converted into INXT. If a customer decides to pay for our services in fiat, the fiat is used to automatically purchase INXT at market price and is then sent to Hosts.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Crowdsale')
							@slot('content')
								An updated digital identity and website were released along with the first versions of X Cloud’s and X Core’s designs and interfaces.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

					<div class="col-sm-4">
						@component('_includes.milestone')
							@slot('date', 'Q4 2017')
							@slot('title', 'Interfaces')
							@slot('content')
								X Cloud's and X Core’s Alpha version were released which included the core infrastructure of their code and installable prototypes.
							@endslot
						@endcomponent
					</div>{{-- /.col-sm-4 --}}

				</div>{{-- /.row --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

@endsection
