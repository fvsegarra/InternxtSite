@extends('_layouts.master')

@section('pageID', 'home')

@section('navbar-classes', 'navbar-dark')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'Technologies to enhance life')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h1 class="pageHeader__heading">Technologies to enhance life.</h1>
					<h2 class="pageHeader__subheading">Transforming the way people live through revolutionary technology.</h2>
					<a class="btn pageHeader__cta" href="#">Discover More</a>
				</div>
			</div>
		</div>
	</header>

	<section class="section section--home-references">
		<div class="container">
			<div class="row">
				<div class="referenceContainer col-sm text-center">
					<img src="/img/logos/entrepreneur.png" height="40">
				</div>
				<div class="referenceContainer col-sm text-center">
					<img src="/img/logos/investing.com.png" height="40">
				</div>
				<div class="referenceContainer col-sm text-center">
					<img src="/img/logos/yahoo.png" height="40">
				</div>
			</div>
		</div>
	</section>

	@include('_includes.previews.xcloud')

	@include('_includes.previews.xcore')

@endsection