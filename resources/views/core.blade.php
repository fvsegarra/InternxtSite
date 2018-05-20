@extends('_layouts.master')

@section('pageID', 'core')

@section('navbar-classes', 'navbar-dark navbar-xcore')

@section('pageTitle', 'X Core')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">X Core</h1>
			<h2 class="pageHeader__subheading">A new powerful application that enables data to be shared all around the world.</h2>
		</div>
	</header>

	<section class="section section--core-summary">
		<div class="container">
			<div class="section__content">

				<div class="row">
					<div class="col-sm-6">
						<div class="subsection subsection--network">
						<div class="container-fluid">
							<p class="subsection__heading">Network.</p>
							<p class="subsection__content">X Core is a peer-to-peer network, meaning its formulated by hosts. This eliminates the need for a central controller as each host acts as a decentralized node for sharing data within the network. Hosts donate the unused resources of their computer creating a global network of storage and computing servers.</p>
						</div>{{-- /.container-fluid --}}
					</div>
					</div>{{-- /.col-sm-6 --}}

					<div class="col-sm-6">
						<div class="subsection subsection--software">
						<div class="container-fluid">
							<p class="subsection__heading">Software.</p>
							<p class="subsection__content">No centralized server or processor is responsible for maintaining or processing the data as its distributed over a world-wide network and not stored in a central base of servers which means there are no questions about which individual entity owns the data which is being shared in the network.</p>
						</div>{{-- /.container-fluid --}}
					</div>
					</div>{{-- /.col-sm-6 --}}
				</div>{{-- /.row --}}

				<div class="row">
					<div class="col-sm-6">
						<div class="subsection subsection--network">
						<div class="container-fluid">
							<p class="subsection__heading">Enhanced.</p>
							<p class="subsection__content">If one attached device goes down, the network will detect the failing nodes and transparently adjust and correct the impacted blocks automatically. This removes the destructivity of having data stored on client-server networks, because if the server goes down it takes the entire network with it.</p>
						</div>{{-- /.container-fluid --}}
					</div>
					</div>{{-- /.col-sm-6 --}}

					<div class="col-sm-6">
						<div class="subsection subsection--software">
						<div class="container-fluid">
							<p class="subsection__heading">Intelligent.</p>
							<p class="subsection__content">Since the number of running nodes may vary in the course of time, X Core will balance the data-load across multiple nodes. This enables X Core to regulate the workload of each networked computer efficiently, meaning the system automatically maintains the right balance between all hosts.</p>
						</div>{{-- /.container-fluid --}}
					</div>
					</div>{{-- /.col-sm-6 --}}
				</div>{{-- /.row --}}

			</div>
		</div>
	</section>

	<section class="section section--core-more-info">
		<div class="container">
			<p class="section__heading">Empowering the information era.</p>
			<p class="section__subheading">X Core is a simple downloadable desktop application that enables contributors to globally cooperate in the creation of Internxt’s decentralized internet services.</p>
		</div>
	</section>

	<section class="section section--core-screenshot">
		<div class="container">
			<div class="row">

				<div class="col-sm-8">
					<img src="/img/mockups/xcore.png" class="img-fluid">
				</div>{{-- /.col-sm-8 --}}

				<div class="col-sm-4">

					<div class="subsection subsection--host">
						<div class="container-fluid">
							<p class="subsection__heading">Host easier. Earn more.</p>
							<p class="subsection__content">By renting out your extra hard-drive space and storing and uploading data, you’ll be paid in our cryptocurrency, INXT. You don’t even need to be on your computer, just leave it running in the background and your computer will earn you passive income. </p>
						</div>{{-- /.container-fluid --}}
					</div>

					<div class="subsection subsection--create">
						<div class="container-fluid">
							<p class="subsection__heading">Creating what’s next.</p>
							<p class="subsection__content">Each host can decide how much computer resources they designate to the network, as well as when and how long for.</p>
						</div>{{-- /.container-fluid --}}
					</div>

				</div>{{-- /.col-sm-4 --}}

			</div>{{-- /.row --}}

			<div class="section__footer">
				Becoming a host to share your computers resources on the X Core network is quick and easy to set up. Simply download the desktop application, create your node and your device will automatically be connected, and will always be connected unless you say otherwise.
			</div>
		</div>
	</section>

	<section class="section section--core-beta">
		<div class="container">
			<p class="section__heading">Do something extraordinary with extraordinary technology.</p>
			<p class="section__subheading">Subscribe to our beta list to be first in-line to download X Core and to start earning passive income by sharing your machines un-used hard drive space.</p>
			<div class="section__content">
				<form class="form-inline">
					<input type="email" class="form-control" placeholder="user@example.com">
					<button type="submit" class="btn btn-primary mb-2">Subscribe</button>
				</form>
			</div>
		</div>
	</section>

	<section class="section section--core-design">
		<div class="container">
			<p class="section__heading">
				<span class="d-block d-md-none">As simple as it is beautiful.</span>
				<span class="d-none d-md-block">Design that’s as simple as it is beautiful.</span>
			</p>
			<p class="section__subheading">Functionality and complexity were always kept in a tight balance, so that using this new techology feels second nature, even if you never have before.</p>

			<div class="section__content">
				<div class="featurePreviewContainer">
					<div class="featurePreview">
					</div>
				</div>

				<ul class="nav nav-tabs" id="xcloudFeaturesTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
					</li>
				</ul>

				<div class="tab-content" id="xcloudFeaturesTabContent">
					<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">The dashboard is your X Cloud homescreen. All your options such as, search, upload, new folder, download, delete, and file sharing are spread across the top of your home screen to allow for a more limitless workflow and to make using your cloud easier, without having to click multiple times to get to where you want to be. So you can focus on the things that matter.</div>
					<div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">Settings</div>
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

@endsection
