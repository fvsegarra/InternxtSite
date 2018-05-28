@extends('_layouts.master')

@section('pageID', 'cloud')

@section('navbar-classes', 'navbar-light navbar-xcloud')

@section('navbarLogo', 'internxt_icon_xcloud.svg')

@section('pageTitle', 'X Cloud')

@section('metaDescription', 'X Cloud is much more than a superior, more secure and private cloud storage service. X Cloud is excitement, ambition. X Cloud is being part of something unique. Decentralized cloud storage.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">X Cloud</h1>
			<h2 class="pageHeader__subheading">Our vision was to create a cloud platform that anyone could use with total simplicity, security and privacy. By leveraging the use of distributed and decentralized technology the everyday user can now store files with complete security.</h2>
			<a href="#" class="pageHeader__btn btn btn-outline-primary">Beta Available Q3 2018</a>
		</div>
		<img src="/img/headers/xcloud.png" class="img-fluid">
	</header>

	<section class="section section--cloud-beta">
		<div class="container">
			<p class="section__heading">Subscribe to our beta list to be first in-line to download X Cloud.</p>
			<div class="section__content">
				<form class="form-inline" action="https://internxt.us18.list-manage.com/subscribe/post?u=7d1200a1ef2498eacddf2a314&amp;id=08b0beeff9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
					<input type="email" name="EMAIL" class="form-control" id="inlineFormInputGroupUsername2" placeholder="user@example.com" required>
					<button type="submit" class="btn btn-primary mb-2">Subscribe</button>
				</form>
			</div>
		</div>
	</section>

	<section class="section section--cloud-architecture">
		<div class="container">
			<p class="section__heading">Advanced architecture that brings a new level<span class="linebreak"></span> of security.</p>
		</div>
		<div class="row no-gutters">
			<div class="col-sm-6">
				<div class="subsection subsection--reimagined">
					<div class="container-fluid">
						<p class="subsection__heading">Security reimagined.</p>
						<p class="subsection__content">We've reimagined cloud storage<span class="linebreak"></span> on a security level by solving major problems with current adopted cloud services such as, having jurisdiction to censor individuals, providing users data to governmental agencies, and selling customer data to other companies. X Cloud removes this destructivity of privacy by giving users total control of their personal data.</p>
					</div>{{-- /.container-fluid --}}
				</div>
			</div>

			<div class="col-sm-6">
				<div class="subsection subsection--encryption">
					<div class="container-fluid">
						<p class="subsection__heading">Advanced Encryption.</p>
						<p class="subsection__content">Your files are end-to-end encrypted by smart contract cryptography, split into pieces, and then distributed amongst different machines around the world. This means your personal data is apart of the distributed network and no longer sitting in one central location so there is almost no conceivable way for unauthorized third parties to access your data.</p>
					</div>{{-- /.container-fluid --}}
				</div>
			</div>
		</div>
	</section>

	<section class="section section--cloud-plans">
		<div class="container">
			<p class="section__heading">Find the storage plan that’s right for you.</p>
			<div class="row">

				<div class="col-sm-6">
					<div class="section__content">When signing up to X Cloud you will receive a 7 day free trial period so everyone can experience X Cloud without having to set-up any payment details. If you enjoy the service you can renew your trial for a one-time payment of $1.99, or alternatively upgrade to one of our monthly storage plans.</div>
				</div>{{-- /.col-sm-6 --}}

				<div class="col-sm-6 planContainer">

					<div class="plan row align-items-center">
						<div class="col-4">
							<p class="plan__quantity">10GB</p>
						</div>
						<div class="col">
							<p class="plan__price">$1.99/Month</p>
						</div>
					</div>

					<div class="plan row align-items-center">
						<div class="col-4">
							<p class="plan__quantity">100GB</p>
						</div>
						<div class="col">
							<p class="plan__price">$2.50/Month</p>
						</div>
					</div>

					<div class="plan row align-items-center">
						<div class="col-4">
							<p class="plan__quantity">1TB</p>
						</div>
						<div class="col">
							<p class="plan__price">$9.99/Month</p>
						</div>
					</div>

				</div>{{-- /.col-sm-6 --}}

			</div>{{-- /.row --}}
		</div>
	</section>

	<section class="section section--cloud-features">
		<div class="container">
			<p class="section__heading">The most powerful technology is technology that everyone can use.</p>

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
					<a class="nav-link" id="file-sharing-tab" data-toggle="tab" href="#file-sharing" role="tab" aria-controls="file-sharing" aria-selected="false"png">File Sharing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="folders-tab" data-toggle="tab" href="#folders" role="tab" aria-controls="folders" aria-selected="false">Folders</a>
				</li>
			</ul>

			<div class="tab-content" id="xcloudFeaturesTabContent">
				<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">The dashboard is your X Cloud homescreen. All your options such as, search, upload, new folder, download, delete, and file sharing are spread across the top of your home screen to allow for a more limitless workflow and to make using your cloud easier, without having to click multiple times to get to where you want to be. So you can focus on the things that matter.</div>
				<div class="tab-pane fade" id="file-sharing" role="tabpanel" aria-labelledby="file-sharing-tab">With X Cloud, you can securely store all your files and access them from your Mac, PC, Windows or Linux computer. You can easily invite people to view, download or work on a file with you from anywhere in the world.</div>
				<div class="tab-pane fade" id="folders" role="tabpanel" aria-labelledby="folders-tab">We wanted to create a dynamic interface that's tailored to the user. Folders can be customised in various colours. Maybe you prefer a Health folder green or a Movie folder purple, to increase visibility, to suit the contents theme or to just simply look more appealing. You can also add a variety of different icons on the cover of any folder. Maybe you want to add a Dollar icon to a salary folder or an image icon to your holiday folder.</div>
			</div>
		</div>
	</section>

	<section class="section section--cloud-more-info">
		<div class="row no-gutters">

			<div class="col-sm-6">
				<section class="section section--cloud-everywhere">
					<p class="section__heading">Do more. Wherever.</p>
					<p class="section__content">The X Cloud app will allow you to access your files from your iOS and Android devices. All your files will stay up to date automatically across all your devices.</p>
				</section>
				<section class="section section--cloud-ipad">
					<img src="/img/mockups/xcloud-ipad.png" class="img-fluid">
				</section>
			</div>{{-- /.col-sm-6 --}}

			<div class="col-sm-6">
				<section class="section section--cloud-iphone">
					<a href="#" class="btn btn-outline-primary">Available Q1 2019</a>
					<img src="/img/mockups/xcloud-iphone.png" class="img-fluid">
				</section>
			</div>{{-- /.col-sm-6 --}}

		</div>{{-- /.row --}}
	</section>

	@include('_includes.previews.xcore')

@endsection
