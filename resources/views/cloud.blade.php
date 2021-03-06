@extends('_layouts.master')

@section('pageID', 'cloud')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-xcloud')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'X Cloud')

@section('metaDescription', 'X Cloud is much more than a more secure and private decentralized cloud storage service. X Cloud is excitement, ambition. X Cloud is being part of something unique.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<img class="pageHeader__icon" src="/img/logos/xcloud.png" alt="xcloud" height="53">
			<h1 class="pageHeader__heading">X Cloud</h1>
			<h2 class="pageHeader__subheading">Secure cloud storage.</h2>
			<a href="https://cloud.internxt.com/new" class="pageHeader__cta pageHeader__cta--mobile">Get X Cloud</a>
			<a href="https://cloud.internxt.com/new" target='_blank' class="pageHeader__cta pageHeader__cta--desktop" rel="noopener">Get X Cloud Now</a>
		</div>
	</header>

	<section class="section section--cloud-intro">
		<div class="container">
			<div class="section__content">
				<span class="d-lg-none">
					Combining <em>distributed</em> and <em>decentralized</em> technology with a beautiful, <span class="d-block d-md-none d-lg-block"></span> easy-to-use user interface. Everyone can store files with total <em>simplicity, security</em> and <em>privacy.</em>
				</span>
				<span class="d-none d-lg-block">
					By combining <em>distributed</em> technology and <em>zero-knowledge end-to-end encryption</em>, X Cloud provides the highest possible level of security and privacy. Take true control of <em>your</em> information. <em>Make the switch</em> to a <em>superior</em> cloud storage service.
				</span>
			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-privacy">
		<div class="container">
			<div class="row">

				<div class="col-lg-6">

					<div class="subsection subsection--data">
						<div class="subsection__iconContainer">
							<img class="subsection__icon" src="/img/icons/xcloud/data.svg" alt="Your data belongs to you and only you">
						</div>
						<p class="subsection__heading">Your data belongs to you and only you.</p>
						<p class="subsection__content">We have solved major problems with the current adopted cloud services, such as having jurisdiction to censor individuals, providing users' data to governmental agencies, and selling customer data to other companies.</p>
					</div>{{-- /.subsection --}}
				</div>{{-- /.col-lg-6 --}}

				<div class="col-lg-6">

					<div class="subsection subsection--security">
						<div class="subsection__iconContainer">
							<img class="subsection__icon" src="/img/icons/xcloud/security.svg" alt="Designed to protect your digital security.">
						</div>
						<p class="subsection__heading">Designed to protect your digital security.</p>
						<p class="subsection__content">Files are end-to-end encrypted by the most secure encryption methods, fragmented, and then distributed amongst different machines around the world. Your personal data is part of the distributed X Core network and no longer sitting in one central location. </p>
					</div>{{-- /.subsection --}}
				</div>{{-- /.col-lg-6 --}}

			</div>{{-- /.row --}}
			<div class="section__content"></div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-architecture">
		<div class="container">
			<p class="section__heading">Advanced architecture that brings a new level of security.</p>

			<div class="featurePreviewContainer">
				<div class="featurePreview featurePreview--dashboard">
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
				<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"><em>A more limitless workflow.</em> To make using your cloud easier, your file options are spread across the dashboard so you can get where you want to be without too many clicks.</div>
				<div class="tab-pane fade" id="folders" role="tabpanel" aria-labelledby="folders-tab"><em>Folders can be customised in various colours.</em> Maybe you prefer a health folder to be green, or a movie folder purple. To increase visibility and to suit the contents' theme, or to simply appeal to your taste. You can also add a variety of different icons on the cover of any folder. Maybe you want to add a Dollar icon to a salary folder or an image icon to your holiday folder.</div>
			</div>

		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-share">
		<div class="container">
			<div class="section__iconContainer">
				<img class="section__icon" src="/img/icons/xcloud/share.svg">
			</div>
			<p class="section__heading">Share files however you want. <span class="linebreak d-none d-lg-block"></span>With whoever you want.</p>
			<p class="section__content">X Cloud is the first decentralized cloud platform to offer secure and easy file sharing. Simply send a private link to invite people to view, download, or work on a file with you. Share using next-level security.</p>
		</div>{{-- /.container --}}
		<img class="section__image img-fluid" src="/img/mockups/xcloud/share_laptop.png">
	</section>

	<section class="section section--cloud-partners">

		<div class="subsection subsection--blackberry">
			<div class="subsection__border"></div>

			<div class="container">

				<img class="subsection__image--mobile d-block d-lg-none" src="/img/logos/blackberry.png" alt="Blackberry" height="65">

				<p class="subsection__heading d-block d-lg-none">Empowering the era of secure technology.</p>

				<div class="subsection__content">
					<div class="row">

						<div class="col-lg-5">
							<img class="subsection__image--desktop d-none d-lg-block" src="/img/logos/blackberry.png" alt="Blackberry" height="65">
						</div>{{-- /.col-lg-5 --}}

						<div class="col-lg-7">

							<p class="subsection__heading d-none d-lg-block">Empowering the era of secure technology.</p>
							<p>BlackBerry provides security consulting services and solutions that can greatly improve our architecture. BlackBerry can help Internxt assess  Encryption, Infrastructural vulnerabilities, Authentication and Data leak prevention.</p>

							<a class="subsection__link" href="https://medium.com/internxt/internxt-and-blackberry-partner-to-enhance-x-clouds-security-25bb5ad7d33d" target="_blank" rel="nofollow" rel="noopener">Learn more about the partnership <img src="/img/icons/chevron-right-partner.svg"></a>

						</div>{{-- /.col-lg-7 --}}


					</div>{{-- /.row --}}

				</div>{{-- /.subsection__content --}}

			</div>{{-- /.container --}}
		</div>{{-- /.subsection --}}


				</div>{{-- /.subsection__content --}}


			</div>{{-- /.container --}}
		</div>{{-- /.subsection --}}

	</section>

	<section class="section section--cloud-share">

	</section>

	<section class="section section--cloud-more-info">
		<div class="container">

			<p class="section__heading">The most powerful technology <span class="linebreak"></span>is one anyone can use.</p>

			<div class="row">

				<div class="col-lg-8 d-none d-lg-block">
					<img class="section__image section__image--ipad img-fluid" src="/img/mockups/xcloud/ipad.png">
				</div>{{-- /.col-lg-8 --}}

				<div class="col-lg-4">

					<img class="section__image section__image--iphone img-fluid" src="/img/mockups/xcloud/iPhone.png">
					<p class="section__subheading">Get to your files<span class="linebreak d-none d-lg-block"></span> on all your devices.</p>
					<div class="section__content">
						<p>The X Cloud app will allow you to access your files from your iOS and Android devices. All your files will be automatically updated across all of your devices.</p>
					</div>{{-- /.section__content --}}

				</div>{{-- /.col-lg-4 --}}

			</div>{{-- /.row --}}

		</div>{{-- /.container --}}
	</section>

	<section class="section section--cloud-plans">
		<div class="container">
			<p class="section__label">Free Storage</p>
			<p class="section__heading">Experience X Cloud with 1GB on us.</p>
			<p class="section__subheading">When signing up to X Cloud, users receive 1GB of storage space for free. Make  the switch to a superior cloud storage alternative and win on security. If you need more storage space, you can upgrade to our 100GB plan for €4.49, and for our users with even greater needs: 1TB for €9.99. For users with needs greater than 1TB please contact us at hello@internxt.com.</p>
		</div>{{-- /.container --}}
		<div class="section__content">

			<div class="container-fluid">

				<div class="row justify-content-center">

	 				<div class="section__image d-none d-lg-block">
						<img class="img-fluid" src="/img/mockups/xcloud/storage.png" alt="Storage options">
					</div>

					<div class="section__plansContainer offset-lg-7">

						<div class="subsection subsection--pricing d-none d-lg-block">
							<p class="subsection__label">Pricing</p>
							<p class="subsection__heading">X Cloud storage plans.</p>
							<p class="subsection__subheading">No contract. Cancel anytime.</p>
						</div>{{-- /.subsection--pricing --}}

						<div class="plan row align-items-center">
							<div class="col plan__quantityContainer">
								<p class="plan__quantity">1GB</p>
							</div>
							<div class="col">
								<p class="plan__price">Free</p>
							</div>
						</div>{{-- /.plan --}}

						<div class="plan row align-items-center">
							<div class="col plan__quantityContainer">
								<p class="plan__quantity">100GB</p>
							</div>
							<div class="col">
								<p class="plan__price">€4.49</p>
							</div>
						</div>{{-- /.plan --}}

						<div class="plan row align-items-center">
							<div class="col plan__quantityContainer">
								<p class="plan__quantity">1TB</p>
							</div>
							<div class="col">
								<p class="plan__price">€9.99</p>
							</div>
						</div>{{-- /.plan --}}

					</div>{{-- /.col-sm-4 --}}

				</div>{{-- /.row --}}
			</div>{{-- /.container-fluid --}}

		</div>{{-- /.section__content --}}
	</section>

	<section class="section section--beta section--beta-cloud">
		<div class="container">
			<div class="section__outline d-lg-flex align-items-center justify-content-between">
				<img class="section__icon" src="/img/logos/xcloud-flat.jpg" height="39">
				<p class="section__heading">Make the switch to X Cloud today.</p>
				<a href="https://cloud.internxt.com/new" target='_blank' class="section__cta d-lg-none" rel="noopener">Get X Cloud Now</a>
				<a href="https://cloud.internxt.com/new" target='_blank' class="section__cta d-none d-lg-block" rel="noopener">Get X Cloud Now</a>
			</div>{{-- /.section__outline --}}
		</div>
	</section>

@endsection
