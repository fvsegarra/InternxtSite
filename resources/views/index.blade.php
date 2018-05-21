@extends('_layouts.master')

@section('pageID', 'home')

@section('navbar-classes', 'navbar-dark')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'Technologies to enhance life')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
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
					<img src="/img/logos/entrepreneur.png" height="39">
				</div>
				<div class="referenceContainer col-sm text-center">
					<img src="/img/logos/investing.com.png" height="37">
				</div>
				<div class="referenceContainer col-sm text-center">
					<img src="/img/logos/yahoo.png" height="40">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--preview-xcloud">
		<div class="container">
			<div class="row">
				<div class="col-sm offset-md-6">
					<img class="section__icon" src="/img/logos/xcloud.png" height="59">
					<p class="section__label">X Cloud</p>
					<p class="section__heading">A Step-forward for the cloud.</p>
					<p class="section__subheading">A cloud platform built with total security and privacy.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--preview-xcore">
		<div class="container">
			<img class="section__icon" src="/img/logos/xcore.png" height="59">
			<p class="section__label">X Core</p>
			<p class="section__heading">Your data. <span class="d-sm-block"></span>In your hands.</p>
			<p class="section__subheading">Enabling hosts to store and transfer data.</p>
		</div>
	</section>

@endsection
