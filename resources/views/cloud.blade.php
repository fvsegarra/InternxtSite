@extends('_layouts.master')

@section('pageID', 'cloud')

@section('navbar-classes', 'navbar-light navbar-xcloud')

@section('navbarLogo', 'internxt_icon_xcloud.svg')

@section('pageTitle', 'X Cloud')

@section('metaDescription', 'X Cloud is much more than a more secure and private decentralized cloud storage service. X Cloud is excitement, ambition. X Cloud is being part of something unique.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">X Cloud</h1>
			<h2 class="pageHeader__subheading"></h2>
			<a href="#" class="pageHeader__btn btn btn-outline-primary">Beta Available Q3 2018</a>
		</div>
		<img src="/img/headers/xcloud.png" class="img-fluid">
	</header>


	<section class="section section--cloud-features">

	</section>

	<section class="section section--cloud-partners">

		<div class="row">

			<div class="col-lg-6">

				<div class="subsection subsection--blackberry">
					<div class="subsection__border"></div>

					<div class="container">

						<img class="subsection__image--mobile" src="/img/logos/blackberry.png" alt="Blackberry" height="65">

						<p class="subsection__heading">Empowering the era of secure technology.</p>

						<div class="subsection__content">
							<div class="row">

								<div class="col-lg-6">
									<img class="subsection__image--desktop" src="/img/logos/blackberry.png" alt="Blackberry" height="65">
								</div>{{-- /.col-lg-6 --}}

								<div class="col-lg-6">
									<p>BlackBerry provides security consulting services and solutions that can greatly improve our architecture. BlackBerry can help Internxt assess  Encryption, Infrastructural vulnerabilities, Authentication and Data leak prevention.</p>
								</div>{{-- /.col-lg-6 --}}

							</div>{{-- /.row --}}

							<a class="subsection__link" href="#">Learn more about the partnership</a>
						</div>{{-- /.subsection__content --}}

					</div>{{-- /.container --}}
				</div>{{-- /.subsection --}}

			</div>{{-- /.col-lg-6 --}}

			<div class="col-lg-6">

				<div class="subsection subsection--civic">
					<div class="subsection__border"></div>

					<div class="container">

						<img class="subsection__image--mobile" src="/img/logos/civic.png" alt="Civic" height="53">

						<p class="subsection__heading">Protecting your identity with Blockchain.</p>

						<div class="subsection__content">
							<div class="row">

								<div class="col-lg-6">
									<img class="subsection__image--desktop" src="/img/logos/civic.png" alt="Civic" height="53">
								</div>{{-- /.col-lg-6 --}}

								<div class="col-lg-6">
									<p>Civic’s Secure Identity Platform provides an easy and transparent way for users to authenticate using blockchain technology which will prevent users with a reputation below a certain threshold signing up to X Cloud.</p></p>
								</div>{{-- /.col-lg-6 --}}

							</div>{{-- /.row --}}
						</div>{{-- /.subsection__content --}}

						<a class="subsection__link" href="#">Learn more about the partnership</a>

					</div>{{-- /.container --}}
				</div>{{-- /.subsection --}}

			</div>{{-- /.col-lg-6 --}}

		</div>{{-- /.row --}}
	</section>

	<section class="section section--cloud-architecture">
		<div class="container">
			<p class="section__heading">Advanced architecture that brings a new level of security.</p>

			<div class="row">
				<div class="featurePreviewContainer">
					<div class="featurePreview featurePreview--dashboard">
					</div>
				</div>
			</div>

			<ul class="nav nav-tabs" id="xcloudFeaturesTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="folders-tab" data-toggle="tab" href="#folders" role="tab" aria-controls="folders" aria-selected="false">Folders</a>
				</li>
			</ul>

			<div class="tab-content" id="xcloudFeaturesTabContent">
				<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">The dashboard is your X Cloud homescreen. All your options such as, search, upload, new folder, download, delete, and file sharing are spread across the top of your home screen to allow for a more limitless workflow and to make using your cloud easier, without having to click multiple times to get to where you want to be. So you can focus on the things that matter.</div>
				<div class="tab-pane fade" id="folders" role="tabpanel" aria-labelledby="folders-tab">We wanted to create a dynamic interface that's tailored to the user. Folders can be customised in various colours. Maybe you prefer a Health folder green or a Movie folder purple, to increase visibility, to suit the contents theme or to just simply look more appealing. You can also add a variety of different icons on the cover of any folder. Maybe you want to add a Dollar icon to a salary folder or an image icon to your holiday folder.</div>
			</div>

		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-share">

	</section>

	<section class="section section--cloud-more-info">
		<div class="container">
			<p class="section__heading">The most powerful technology <span class="linebreak"></span>is one which everyone can use.</p>

			<img class="section__image" src="http://placehold.it/328x586">

			<p class="section__subheading">Get to your files on all your devices.</p>
			<div class="section__content">
				<p>The X Cloud app will allow you to access your files from your iOS and Android devices. All your files will stay up to date automatically across all your devices.</p>
			</div>{{-- /.section__content --}}
			<a href="#" class="section__cta" disabled>App coming Q1 2019</a>
		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-plans">
		<div class="container">
			<p class="section__label">Free Storage</p>
			<p class="section__heading">Experience X Cloud with 10GB on us.</p>
			<p class="section__subheading">When signing up to X Cloud, users will receive a free 10GB storage space so everyone can experience X Cloud without entering any payment details. If you enjoy the service you can upgrade to our 100GB plan for $1.49 or alternatively upgrade to 1TB for $4.99.</p>
			<div class="section__content">

				<div class="plan row align-items-center">
					<div class="col-4">
						<p class="plan__quantity">10GB</p>
					</div>
					<div class="col">
						<p class="plan__price">Free</p>
					</div>
				</div>{{-- /.plan --}}

				<div class="plan row align-items-center">
					<div class="col-4">
						<p class="plan__quantity">100GB</p>
					</div>
					<div class="col">
						<p class="plan__price">$1.49</p>
					</div>
				</div>{{-- /.plan --}}

				<div class="plan row align-items-center">
					<div class="col-4">
						<p class="plan__quantity">1TB</p>
					</div>
					<div class="col">
						<p class="plan__price">$4.99</p>
					</div>
				</div>{{-- /.plan --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--beta section--beta-cloud">
		<div class="container">
			<div class="section__outline">
				<p class="section__heading">Jump into the X Cloud Beta today.</p>
				<div class="section__content">
					<a href="#download" class="section__cta">Get X Cloud Beta</a>
				</div>
			</div>{{-- /.section__outline --}}
		</div>
	</section>

	<div class="container">
		@include('_includes.previews.xcore')
	</div>{{-- /.container --}}

@endsection
