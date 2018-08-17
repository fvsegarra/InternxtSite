@extends('_layouts.master')

@section('pageID', 'home')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', '')

@section('metaDescription', 'Internxt is excitement, ambition. Here at Internxt we are disrupting thrilling industries through the use of revolutionary technologies.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="pageHeader__heading">Internxt</h1>
					<h2 class="pageHeader__subheading">Transforming the way people live through revolutionary technology.</h2>
				</div>
			</div>
		</div>
	</header>

	@include('_includes.previews.xcloud')

	@include('_includes.previews.xcore')

	<section class="section section--about">
		<div class="container">

			<p class="section__label">About Us</p>
			<p class="section__heading">Technologies to enhance life.</p>
			<p class="section__subheading">Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of innovative mass-market services that disrupt various technology industries.</p>
			<p class="section__cta">Learn more about Internxt</p>

			<div class="section--about__articles">
				<img src="/img/logos/android.svg" height="52" alt="Android">
				<img src="/img/logos/investing.com.svg" height="32" alt="Android">
				<img src="/img/logos/yahoo.svg" height="32" alt="Android">
			</div>

			<div class="subsection subsection--mission">
				<p class="subsection__heading">Mission.</p>
				<p class="subsection__content">We want to help exceed the capabilities of every human being. From this mission stems a multitude of projects, products, and services all with the same aim of enabling every human being to the peak of their potential.</p>
			</div>{{-- /.subsection --}}

			<div class="subsection subsection--vision">
				<p class="subsection__heading">Vision.</p>
				<p class="subsection__content">Behind each design and project is creativity with a force of inventiveness and ingenuity. Internxt produces only the highest quality services, which bring newly specialized style and aesthetics, with an essence of care, and precision.</p>
			</div>{{-- /.subsection --}}

		</div>
	</section>{{-- /.about --}}

	<section class="section section--news-hub">
		<div class="container">

			<p class="section__label">News Hub</p>
			<p class="section__heading">Our latest news.</p>

			<article class="articlePreview">
				<img class="article__img img-fluid" src="http://placehold.it/328x254" alt="X Cloud commercial pricing improvement">
				<div class="articlePreview__content">
					<p class="articlePreview__date">July 18 2018</p>
					<p class="article__title">X Cloud commercial pricing improvement.</p>
					<a class="article__cta" href="#">Learn more</a>
				</div>{{-- /.articlePreview__content --}}
			</article>

			<article class="articlePreview">
				<img class="article__img img-fluid" src="http://placehold.it/328x254" alt="X Cloud commercial pricing improvement">
				<div class="articlePreview__content">
					<p class="articlePreview__date">July 17 2018</p>
					<p class="article__title">We’ve gone wild. X Cloud Beta will be completely free! But that’s not all.</p>
					<a class="article__cta" href="#">Learn more</a>
				</div>{{-- /.articlePreview__content --}}
			</article>

			<article class="articlePreview">
				<img class="article__img img-fluid" src="http://placehold.it/328x254" alt="X Cloud commercial pricing improvement">
				<div class="articlePreview__content">
					<p class="articlePreview__date">July 17 2018</p>
					<p class="article__title">X Core node payout computation</p>
					<a class="article__cta" href="#">Learn more</a>
				</div>{{-- /.articlePreview__content --}}
			</article>

			<a class="section__cta" href="#">Read more posts</a>

		</div>{{-- /.container --}}
	</section>{{-- /.section-news-hub --}}

	<section class="section section--subscribe">
		<div class="container">

			<p class="section__label">Keep Updated</p>
			<h2 class="section__heading">Subscribe to our mailing list.</h2>
			<p class="section__subheading">Get the latest Internxt news and offers directly to your mailbox.</p>

			<form class="section--subscribe__form">
				<input class="section--subscribe__input" type="email" name="email" placeholder="Email">

				<button class="section--subscribe__btn" type="submit">Subscribe</button>
			</form>
		</div>{{-- /.container --}}
	</section>{{-- /.section-subscribe --}}


@endsection
