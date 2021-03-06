@extends('_layouts.master')

@section('pageID', 'home')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'Join the  Revolution.')

@section('metaDescription', 'Internxt is excitement, ambition, innovation. Join the revolution. The future is now.')

@section('additionalMeta')
	<link rel="alternate" href="https://internxt.com/" hreflang="x-default">
@endsection

@section('body')

	<header class="pageHeader">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="pageHeader__heading">Internxt is excitement, ambition, innovation. Join the <span class="highlight">revolution</span>. The future is now<span>.</span></h1>
				</div>
			</div>
		</div>
	</header>

	<section class="section section--products">

	</section>

	<section class="section section--about">
		<div class="container">

			<div class="row">

				<div class="col-lg-6">

					<p class="section__label">About Us</p>
					<p class="section__heading">Technologies <span class="linebreak d-lg-block"></span>to enhance life.</p>
					<p class="section__subheading">Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of innovative mass-market services that disrupt various technology industries.</p>
					<a class="section__cta" href="{{ route('about') }}">Learn more about Internxt <img src="/img/icons/chevron-learn-more.svg"></a>

					<div class="section--about__articles">
						<div class="row align-items-center">
							<div class="col-lg-4 flex-lg-shrink-1">
								<a href="https://www.entrepreneur.com/article/309468/" target="_blank" rel="nofollow" rel="noopener">
									<img src="/img/logos/entrepreneur.svg" height="32" alt="Entrepreneur">
								</a>
							</div>
							<div class="col-lg-4 flex-lg-shrink-1">
								<a href="https://www.investing.com/analysis/heres-why-internxt-could-be-well-worth-a-look-right-now-200274832" target="_blank" rel="nofollow" rel="noopener">
									<img src="/img/logos/investing.com.svg" height="32" alt="Investing.com">
								</a>
							</div>
							<div class="col-lg-4 flex-lg-shrink-1">
								<a href="https://finance.yahoo.com/news/making-internet-secure-everyone-140000059.html?guccounter=1" target="_blank" rel="nofollow" rel="noopener">
									<img src="/img/logos/yahoo.svg" height="32" alt="Yahoo">
								</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-6">

					<div class="subsection subsection--mission">
						<p class="subsection__heading">Mission.</p>
						<p class="subsection__content">We want to help all human beings exceed their capabilities. Every project, product, and service stems from this mission. They each have the same aim of enabling anyone to achieve their utmost potential. Internxt is excitement and ambition.</p>
					</div>{{-- /.subsection --}}

					<div class="subsection subsection--vision">
						<p class="subsection__heading">Vision.</p>
						<p class="subsection__content">Behind each design and project stands creativity, with a force of innovation and ingenuity. Internxt produces the highest quality of services. This brings a newly specialized style and aesthetics, with an essence of care and precision. Excellence at its finest.</p>
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
								<a class="articlePreview__cta" href="{{ $post['url'] }}" target="_blank" rel="nofollow" rel="noopener">Read article <img src="/img/icons/chevron-learn-more-article.svg"></a>
							</div>{{-- /.articlePreview__content --}}
						</article>
					</div>{{-- /.articlePreviewContainer --}}
				@endforeach
			</div>{{-- /.section__content --}}

			<a class="section__cta" href="https://medium.com/internxt" target="_blank" rel="nofollow" rel="noopener">Read more posts</a>

		</div>{{-- /.container --}}
	</section>{{-- /.section-news-hub --}}

	@include('_includes.sections.subscribe')

@endsection
