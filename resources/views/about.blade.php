@extends('_layouts.master')

@section('pageID', 'about')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-about')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'About Us')

@section('metaDescription', 'Meet Internxt\'s Team. Fran Villalba Segarra, Founder and CEO at Internxt.')

@section('body')

	<div class="memberProfile">
		<div class="container">

			<button class="memberProfile__btn">
				x
			</button>

			<div class="memberProfile__content row">
				<div class="col-lg-3">
					<img src="/img/team/fran.jpg" alt="Fran" class="memberProfile__image img-fluid">
				</div>
				<div class="col-lg-9 text-left">
					<p class="memberProfile__name">Fran Villalba Segerra</p>
					<p class="memberProfile__role">Founder & CEO</p>
					<p class="memberProfile__bio">Fran is the architect behind Internxt’s decentralized services. He learned to code at an early age and was soon awarded an internship at OnePlus, a smartphone manufacturer serving 38 different countries. He then went onto work at Hostinger one of the worlds largest web hosting companies. Fran then began his journey into entrepreneurship by launching his first startup OneSite, a platform which allows anyone to create their own website for free, which had over 10,000 users within its first few months. Fran’s listed on The Next Web's T500, which presents the 500 most talented in the digital scene and is also nominated for Forbes 30 Under 30 Europe 2018.</p>
				</div>
			</div>{{-- /.row --}}

		</div>{{-- /.container --}}
	</div>{{-- /.memberProfile --}}

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">Internxt</h1>
			<h2 class="pageHeader__subheading">Technologies to enhance life.</h2>
		</div>
	</header>

	<section class="section section--about-intro">
		<div class="container">
			<div class="section__content">
				<p>Internxt aims to enrich life through revolutionary technology. The goal is to create a vast range of <em>innovative mass-market services</em> that disrupt various technology industries.</p>

				<a class="section__cta" href="#">Download Whitepaper</a>

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	<section class="section section--team">
		<div class="container">
			<p class="section__label">Leadership</p>
			<p class="section__heading">Internxt’s Team</p>
			<div class="section__content">

				<div class="row">

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'fran')
							@slot('name', 'Fran Villalba Segerra')
							@slot('role', 'Founder & CEO')
							@slot('bio')
								Fran is the architect behind Internxt’s decentralized services. He learned to code at an early age and was soon awarded an internship at OnePlus, a smartphone manufacturer serving 38 different countries. He then went onto work at Hostinger one of the worlds largest web hosting companies. Fran then began his journey into entrepreneurship by launching his first startup OneSite, a platform which allows anyone to create their own website for free, which had over 10,000 users within its first few months. Fran’s listed on The Next Web's T500, which presents the 500 most talented in the digital scene and is also nominated for Forbes 30 Under 30 Europe 2018.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'volodymyr')
							@slot('name', 'Volodymyr Shevchyk')
							@slot('role', 'Chief Technology Officer')
							@slot('bio')
								Volodymyr is Chief Technology Officer at Internxt, with over 10 years of engineering experience. He Has a BSc and Masters in Computer Science and has recently acquired a PhD in Information Technology. Volodymyr was responsible for the iOS client development of the most popular social network in Eastern Europe, VK, which has over 400 million users. He has received an award from Nokia for his advanced UI development and won FOSS 2009, which is a software conference in Ukraine that is sponsored by Microsoft.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'harrison')
							@slot('name', 'Harrison Moore')
							@slot('role', 'Chief Design Officer')
							@slot('bio')
								Harrison has been engaged in all aspects of design since a young age. Before joining Internxt Harrison had worked as a UI/UX designer for numerous agencies who have worked with technology companies such as Hewlett Packard Enterprises, CAT and CENX among other blue-chip companies. Over the years he has developed a style for simple and intuitive design. Harrison is a part of the design team responsible for imagining and creating internxt’s products user interface.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'zoran')
							@slot('name', 'Zoran Joka')
							@slot('role', 'Senior Software Developer')
							@slot('bio')
								Zoran has extensive experience in software engineering and has a background in full-stack development. He has completed a Bachelors and Masters degree in Computer Science and has recently worked as a Senior Software Engineer at NTT Data which is the 5th largest IT services company in the world. He has a keen interest in blockchain and decentralization and is working on Internxt’s core development.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'russell')
							@slot('name', 'Russell Vaughan')
							@slot('role', 'Business Development')
							@slot('bio')
								Russell is a successful and adaptable manager and entrepreneur with vast experience dealing with complex operations. He has expert knowledge of logistics and has established an impressive record across a number of different sectors. Running highly successful businesses on a global scale with over 300 employees with a combined yearly turnover of $35m. Russell is responsible for overseeing the general business activities at Internxt. He counts with over 30 years of experience in successfully turning startups into fully functioning businesses.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'conor')
							@slot('name', 'Conor Doyle')
							@slot('role', 'Chief Marketing Officer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'jordan')
							@slot('name', 'Jordan Latham')
							@slot('role', 'UI/UX Designer')
							@slot('bio')
								Jordan has been immersed in design and entrepreneurship for over 10 years. He sees that flawless design to be vital in all areas of a business’s development. He has created designs for companies such as AirVPN which is a market leader in security and encryption and has also worked as a creative advisor for Showyou, a video streaming service that has recently been acquired by Vevo. He was on the creative board of directors for 4 years at the number one voted theme park in the UK. Jordan utilizes his experience to oversee all design aspects at Internxt.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'igor')
							@slot('name', 'Igor Dostanic')
							@slot('role', 'Software Developer')
							@slot('bio')
								Igor has been developing for many years as a Software Developer at leading IT companies. He has previously worked as a Software Developer at Execom, and has completed a Bachelors and Masters degree in Computer Science. He has over 3 years experience as a blockchain developer and has also worked as a Senior Software Engineer at NTT Data.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'alberto')
							@slot('name', 'Alberto Pinero')
							@slot('role', 'Hardware Engineer')
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'joe')
							@slot('name', 'Joe Priest')
							@slot('role', 'Front-End Developer')
							@slot('bio')
								Joe has a Bachelors degree in Computer Science and extensive knowledge of full-stack web development, with over 15 years experience in the field. He is responsible for translating the UI/UX designs into code that will produce the elements of Internxt’s website, applications and services that you will see and interact with.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'alex')
							@slot('name', 'Alex Sicart Ramos')
							@slot('role', 'Technical Advisor')
							@slot('bio')
								Alex is the Co-founder of FileNation, a decentralized, peer-to-peer file sharing platform. He has also talked on stage at events such as TED talks and iFest to discuss blockchain and IPFS and also came first place at an event hosted by German car manufacturer, Audi to create and pitch the most innovative product. Alex was seen by Forbes as being one of Europe’s most promising young game-changers and was awarded a place on the Forbes 30 Under 30 Europe 2017. Alex is also a creative consultant for the global leading consultancy firm, Accenture.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

					<div class="col-lg-3">
						@component('_includes.team')
							@slot('slug', 'ryan')
							@slot('name', 'Ryan Marsden')
							@slot('role', 'Financial Advisor')
							@slot('bio')
								Ryan is an experienced Financial Engineer and Project Management Professional with more than 10 years of successfully planning the financials of global multibillion dollar projects working for multinationals such as BP, where he works as a Lead Cost Manager. Ryan advices Internxt on project management, strategic business planning, cost management, risk management, contracts management, corporate governance, business ethics and team accountability.
							@endslot
						@endcomponent
					</div>{{-- /.col-lg-3 --}}

				</div>{{-- /.row --}}
			</div>
		</div>
	</section>

	<section class="section section--branding-assets">
		<div class="container">
			<div class="section__content">
				<p class="section__label">DESIGN ASSETS</p>
				<p class="section__heading">Spread the word with our <span class="linebreak d-none d-lg-block"></span>branding assets.</p>
				<a class="section__cta" href="#">Download Assets</a>
			</div>
		</div>
	</section>

	<section class="section section--team-partners">
		<div class="container">
			<p class="section__label">Leadership</p>
			<p class="section__heading">Internxt’s Partners</p>
			<div class="section__content">


				<div class="teamPartner teamPartner--blackberry">
					<div class="row">
						<div class="col-lg-7">
							<img class="teamPartner__image" src="/img/partners/blackberry.png">
							<a href="#">Learn more about the partnership</a>
						</div>{{-- /.col-lg-7 --}}
						<div class="col-lg-5">
							<p class="teamPartner__heading">Blackberry Partnership</p>
							<p class="teamPartner__subheading">BlackBerry is an enterprise software and services company focused on securing and managing IoT endpoints.</p>
							<p class="teamPartner__content">As we are seeing with services like Internxt’s X Cloud, innovation is profoundly changing the way business gets done as customers increasingly demand secure solutions. BlackBerry can help Internxt assess  Encryption, Infrastructural vulnerabilities, Authentication and Data leak prevention.</p>
						</div>{{-- /.col-lg-5 --}}
					</div>{{-- /.row --}}
				</div>{{-- /.teamPartner --}}

				<div class="">
					<hr>
				</div>

				<div class="teamPartner teamPartner--civic">
					<div class="row">
						<div class="col-lg-5">
							<p class="teamPartner__heading">Civic Partnership</p>
							<p class="teamPartner__subheading">Civic is developing an ecosystem that facilitates secure access to identity verification services via the blockchain.</p>
							<p class="teamPartner__content">Civic’s Secure Identity Platform provides an easy and transparent way for users to authenticate using blockchain technology which will prevent users with a reputation below a certain threshold signing up to X Cloud.</p>
						</div>{{-- /.col-lg-5 --}}
						<div class="col-lg-7">
							<img class="teamPartner__image" src="/img/partners/civic.png">
							<a href="#">Learn more about the partnership</a>
						</div>{{-- /.col-lg-7 --}}
					</div>{{-- /.row --}}
				</div>{{-- /.teamPartner --}}

			</div>{{-- /.section__content --}}
		</div>{{-- /.container --}}
	</section>

	@include('_includes.sections.subscribe')

@endsection
