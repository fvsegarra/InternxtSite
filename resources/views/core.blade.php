@extends('_layouts.master')

@section('pageID', 'core')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-xcore')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'X Core')

@section('metaDescription', 'X Core, at the heart of the decentralized cloud. Earn money by hosting secure files in our decentralized cloud infrastructure.')

@section('body')

	<header class="pageHeader">
		<div class="container">

			<img class="pageHeader__icon" src="/img/logos/xcore.png" alt="xcore" height="53">

			<h1 class="pageHeader__heading">X Core</h1>
			{{-- Small --}}
			<h2 class="pageHeader__subheading d-none d-lg-block">Get paid to share.</h2>
			{{-- Large --}}
			<h2 class="pageHeader__subheading d-lg-none">Power in your hands.</h2>

			@if($agent->isDesktop())
				<a class="pageHeader__cta btn" href="{{ $xcoreDownloadLink }}">Get X Core Now</a>
			@endif

		</div>
	</header>

	<section class="section section--core-summary">
		<div class="section__content">

			<div class="container">
				<div class="subsection subsection--intro">

					<p class="subsection__heading">Earn money while keeping user data secure.</p>
					<p class="subsection__content">X Core is a simple peer-to-peer downloadable application that enables hosts to act as computing servers who securely store and share encrypted shards of data.</p>

				</div>{{-- /.subsection-intro --}}
			</div>{{-- /.container --}}

			<div class="container-fluid">
				<div class="row subsection--intro--bg">

					<div class="col-lg-3 offset-lg-8">

						<div class="subsection subsection--host">
							<p class="subsection__heading">Host easier. Earn more.</p>
							<p class="subsection__content">Hosts rent out their computers extra hard-drive space which allows the storing and uploading of users encrypted data. In return hosts will be paid in our cryptocurrency, INXT. The more hard-drive space you allocate to the network, the more INXT you will earn.</p>
						</div>{{-- /.subsection-host --}}

						<div class="subsection subsection--enhanced">
							<p class="subsection__heading">Taking the <span class="linebreak"></span>power back.</p>
							<p class="subsection__content">Each host can decide how much computer resources they designate to the network, as well as when and how long for. You can leave X Core running in the background and your computer will earn you passive income. Better by design. </p>
						</div>{{-- /.subsection-enhanced --}}

					</div>{{-- /.col-lg-3 --}}

				</div>{{-- /.row --}}
			</div>{{-- /.container-fluid --}}

			<div class="subsection subsection--setup enhanced-1080">
				<p class="subsection__heading">Taking the <span class="linebreak"></span>power back.</p>
				<p class="subsection__content">Each host can decide how much computer resources they designate to the network, as well as when and how long for. You can leave X Core running in the background and your computer will earn you passive income. Better by design. </p>
			</div>{{-- /.subsection-setup --}}

			<div class="subsection subsection--setup">
				<p class="subsection__heading">Easy set-up.</p>
				<p class="subsection__content">Becoming a host to share your computers resources on the <span class="linebreak d-block d-lg-block"></span>X&nbsp;Core network is quick and easy to set up. Simply download the desktop application, create your node and your device will automatically be connected, and will always be connected unless you say otherwise. All the hard work has been done for you.</p>
			</div>{{-- /.subsection-setup --}}

		</div>
	</section>

	<section class="section section--core-calculator">
		<div class="container">
			<p class="section__heading">Calculate how much you can earn.</p>
			<p class="section__subheading">The X Core network automatically selects nodes based on uptime, Internet speed, latency and storage capacity. The more storage you host and the more INXT you own will calcuate to a greater passive income. Below is an estimation of how much you could earn by using X&nbsp;Core.</p>
			<div class="section__content">
				<x-core-earnings-calculator></x-core-earnings-calculator>
			</div>
		</div>
	</section>

	<section class="section section--core-design">
		<div class="container">
			<p class="section__heading">
				<span class="d-none d-lg-inline">An interface that's as</span><span class="d-lg-none">As</span> simple as it is beautiful.
			</p>
			<p class="section__subheading">Functionality and complexity were always kept in a tight balance, so that using this new techology feels second nature, even if you never have before.</p>

			<div class="section__content">
				<div class="featurePreviewContainer">
					<div class="featurePreview">
					</div>
				</div>

				<ul class="nav nav-tabs" id="xcoreFeaturesTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="xcore-dashboard-tab" data-toggle="tab" href="#xcore-dashboard" role="tab" aria-controls="xcore-dashboard" aria-selected="true">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
					</li>
				</ul>

				<div class="tab-content" id="xcloudFeaturesTabContent">
					<div class="tab-pane fade show active" id="xcore-dashboard" role="tabpanel" aria-labelledby="xcore-dashboard-tab"><strong>X Core homescreen</strong> displays only your necessary information, so you can get started as quickly as possible without having to learn anything new. Current earnings, shows how much INXT you have earned since day-one. Network data, displays your upload and download speed, uptime and your connectivity status.</div>
					<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab"><strong>X Core settings page</strong> gives you full control over how much computer resource usage you designate for hosting by adjusting your hosting parameters to be able to ensure hosting never interferes with your experience. The more you designate to the network, <span class="linebreak d-none d-lg-block"></span>the more INXT you will earn.</div>
				</div>
			</div>
		</div>
	</section>

	@if($agent->isDesktop())
		<section class="section section--beta section--beta-core">
			<div class="container">
				<div class="section__outline d-lg-flex align-items-center justify-content-between">
					<img class="section__icon" src="/img/logos/xcore.png" height="56">
					<p class="section__heading">Start earning INXT today.</p>
					<a href="{{ $xcoreDownloadLink }}" class="section__cta">Get X Core Now</a>
				</div>{{-- /.section__outline --}}
			</div>
		</section>
	@endif

@endsection
