@extends('_layouts.master')

@section('pageID', 'timeline')

@section('navbar-classes', 'navbar-light navbar-roadmap')

@section('pageTitle', 'Development Timeline')

@section('body')

	<section class="section section--timeline">
		<div class="container">
			<p class="section__heading">Development Timeline.</p>
			<div class="section__content">

				@component('_includes.milestone')
					@slot('date', 'Q3 2017')
					@slot('title', 'Crowdsale.')
					@slot('statusClass', 'published')
					@slot('statusText', 'Milestone Published')
					@slot('content')
						Internxt’s ICO started on September 7th and finished on September 28th and a total of 629,610 INXT were distributed and the unsold tokens were burned.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q4 2017')
					@slot('title', 'Branding.')
					@slot('statusClass', 'published')
					@slot('statusText', 'Milestone Published')
					@slot('content')
						An updated digital identity and website were released along with the first versions of X Cloud’s and X Core’s designs and interfaces.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q1 2018')
					@slot('title', 'Alpha versions.')
					@slot('statusClass', 'published')
					@slot('statusText', 'Milestone Published')
					@slot('content')
						X Cloud's and X Core’s Alpha version were released which included the core infrastructure of their code and installable prototypes.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q4 2018')
					@slot('title', 'Commercial release.')
					@slot('statusClass', 'upcoming')
					@slot('statusText', 'Milestone Not Started')
					@slot('content')
						After optimizing the functionality of the UI and UX of X Cloud and X Core and finalizing the development, their commercial versions will be released.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q1 2019')
					@slot('title', 'Mobile version.')
					@slot('statusClass', 'upcoming')
					@slot('statusText', 'Milestone Not Started')
					@slot('content')
						After the commercial release, the X Cloud app will become available for iOS and Android mobile devices.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q2 2019')
					@slot('title', 'AirCore')
					@slot('statusClass', 'in-progress')
					@slot('statusText', 'Milestone In Progress')
					@slot('content')
						A highly optimized, easy-to-use storage server which enables hosts to maximize their profits as an X Core Host.
					@endslot
				@endcomponent

				@component('_includes.milestone')
					@slot('date', 'Q2 2019')
					@slot('title', 'Next service.')
					@slot('statusClass', 'upcoming')
					@slot('statusText', 'Milestone Not Started')
					@slot('content')
						After the public release of X Cloud and X Core, we will then proceed with the development of our next service.
					@endslot
				@endcomponent

			</div>{{-- /.section__content --}}
		</div>
	</section>

@endsection
