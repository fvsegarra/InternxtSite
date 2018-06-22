@extends('_layouts.master')

@section('pageID', 'home')

@section('navbar-classes', 'navbar-dark')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', '')

@section('metaDescription', 'Internxt is excitement, ambition. Here at Internxt we are disrupting thrilling industries through the use of revolutionary technology.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="pageHeader__heading">Excitement, ambition.</h1>
					<h2 class="pageHeader__subheading">Internxt is disrupting thrilling industries through the application of revolutionary technologies.</h2>
					<a class="btn pageHeader__cta" href="{{ route('cloud') }}">Discover More</a>
				</div>
			</div>
		</div>
	</header>

	<section class="section section--home-references">
		<div class="container">
			<div class="row">
				<div class="referenceContainer col-sm text-center">
					<a href="https://www.entrepreneur.com/article/309468" rel="nofollow" target="_blank"><img src="/img/logos/entrepreneur.png" height="40"></a>
				</div>
				<div class="referenceContainer col-sm text-center">
					<a href="https://www.investing.com/analysis/heres-why-internxt-could-be-well-worth-a-look-right-now-200274832" rel="nofollow" target="_blank"><img src="/img/logos/investing.com.png" height="40"></a>
				</div>
				<div class="referenceContainer col-sm text-center">
					<a href="https://finance.yahoo.com/news/making-internet-secure-everyone-140000059.html?guccounter=1" rel="nofollow" target="_blank"><img src="/img/logos/yahoo.png" height="40"></a>
				</div>
			</div>
		</div>
	</section>

	@include('_includes.previews.xcloud')

	@include('_includes.previews.xcore')

@endsection
