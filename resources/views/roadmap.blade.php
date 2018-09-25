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


				<div class="d-lg-none">

					@include('_includes.milestones.completed.mobile')

				</div>

				<div class="d-none d-lg-block">
					
					@include('_includes.milestones.completed.desktop')

				</div>

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


				<div class="d-lg-none">

					@include('_includes.milestones.in-progress.mobile')

				</div>

				<div class="d-none d-lg-block">
					
					@include('_includes.milestones.in-progress.desktop')

				</div>

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	@include('_includes.sections.subscribe')

@endsection
