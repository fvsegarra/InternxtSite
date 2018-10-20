<div class="row">

	<div class="col-lg-4">

		@component('_includes.milestone')
			@slot('date', 'Q1 2019')
			@slot('title', 'Stable Versions')
			@slot('content')
				After optimizing the functionality of the UI and UX of X Cloud and X Core and finalizing the development, their commercial versions will be released.
			@endslot
		@endcomponent


	</div>{{-- /.col-lg-4 --}}

	<div class="col-lg-4">

		@component('_includes.milestone')
			@slot('date', 'Q2 2019')
			@slot('title', 'Polished Versions')
			@slot('content')
				After the commercial release, X Cloud and  X Core will be polished, further security tests will be ran, and more functionalities will be added to the apps.
			@endslot
		@endcomponent


	</div>{{-- /.col-lg-4 --}}


	<div class="col-lg-4">

		@component('_includes.milestone')
			@slot('date', 'Q4 2019')
			@slot('title', 'Next service')
			@slot('content')
			After the public release of X Cloud and X Core, we will then proceed with the development of our next service.
			@endslot
		@endcomponent

	</div>{{-- /.col-lg-4 --}}

</div>{{-- /.row --}}
