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

	<section class="section section--products">
		<div class="container">
			<p class="section__label">Catalogue</p>
			<p class="section__heading">Browse our products</p>
			<div class="row">
				<div class="col-lg-6">
					@include('_includes.previews.xcloud')
				</div>
				<div class="col-lg-6">
					@include('_includes.previews.xcore')
				</div>
			</div>
		</div>
	</section>

	<section class="section section--about">
		<div class="container">

			<div class="row">

				<div class="col-lg-6">

					<p class="section__label">About Us</p>
					<p class="section__heading">Technologies <span class="linebreak d-none d-lg-block"></span>to enhance life.</p>
					<p class="section__subheading">Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of innovative mass-market services that disrupt various technology industries.</p>
					<p class="section__cta">Learn more about Internxt</p>

					<div class="section--about__articles">
						<div class="row align-items-center">
							<div class="col-lg">
								<img src="/img/logos/android.svg" height="52" alt="Android">
							</div>
							<div class="col-lg">
								<img src="/img/logos/investing.com.svg" height="32" alt="Android">
							</div>
							<div class="col-lg">
								<img src="/img/logos/yahoo.svg" height="32" alt="Android">
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-6">

					<div class="subsection subsection--mission">
						<p class="subsection__heading">Mission.</p>
						<p class="subsection__content">We want to help exceed the capabilities of every human being. From this mission stems a multitude of projects, products, and services all with the same aim of enabling every human being to the peak of their potential.</p>
					</div>{{-- /.subsection --}}

					<div class="subsection subsection--vision">
						<p class="subsection__heading">Vision.</p>
						<p class="subsection__content">Behind each design and project is creativity with a force of inventiveness and ingenuity. Internxt produces only the highest quality services, which bring newly specialized style and aesthetics, with an essence of care, and precision.</p>
					</div>{{-- /.subsection --}}

				</div>

			</div>

		</div>

	</section>{{-- /.about --}}

	<section class="section section--news-hub">
		<div class="container">

			<p class="section__label">News Hub</p>
			<p class="section__heading">Our latest news.</p>

			<div class="section__content">
				@foreach($posts as $post)
					<div class="articlePreviewContainer">
						<article class="articlePreview">
							<div class="articleImgContainer">
								<img class="article__img img-fluid" src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
							</div>{{-- /.articleImgContainer --}}
							<div class="articlePreview__content">
								<p class="articlePreview__date">{{ $post['date'] }}</p>
								<p class="articlePreview__title">{{ $post['title'] }}</p>
								<a class="articlePreview__cta" href="{{ $post['url'] }}" target="_blank" rel="nofollow">Learn more</a>
							</div>{{-- /.articlePreview__content --}}
						</article>
					</div>{{-- /.articlePreviewContainer --}}
				@endforeach
			</div>{{-- /.section__content --}}

			<a class="section__cta" href="https://medium.com/internxt" target="_blank" rel="nofollow">Read more posts</a>

		</div>{{-- /.container --}}
	</section>{{-- /.section-news-hub --}}

	@include('_includes.sections.subscribe')

@endsection
