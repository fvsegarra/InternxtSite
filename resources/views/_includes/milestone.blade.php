<div class="container">
	<div class="subsection subsection--milestone">
		<p class="subsection__label">{{ $date }}</p>
		<p class="subsection__heading">{{ $title }}</p>
		<div class="row">

			<div class="col-sm-9">
				<p class="subsection__content">{{ $content }}</p>
			</div>{{-- /.col-sm-9 --}}

			<div class="col-sm-3">
				<p class="subsection__status subsection__status--{{ $statusClass }}">{{ $statusText}}</p>
			</div>{{-- /.col-sm-3 --}}

		</div>{{-- /.row --}}
	</div>{{-- /.subsection --}}
</div>
