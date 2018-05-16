@extends('_layouts.master')

@section('pageID', 'token')

@section('navbar-classes', 'navbar-light')

@section('pageTitle', 'INXT. Internxt Token.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">INXT. Internxt Token</h1>
			<h2 class="pageHeader__subheading">Our ERC20 token, INXT is designed to function as an economy with reliable and organic demand. All revenue generated from our services will be converted into INXT. Purchasing INXT is akin to owning a percentage of Internxt's future growth.</h2>
		</div>
	</header>

	<section class="section section--inxt-data">
		<div class="container">
			<div class="row">

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Price Per INXT</p>
						<p class="inxtDatum__point">$5.96</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Change / 7 Days</p>
						<p class="inxtDatum__point">-2.93%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Change / 30 Days</p>
						<p class="inxtDatum__point">+442%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

			</div>{{-- /.row --}}

			<div class="row">

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Market Cap</p>
						<p class="inxtDatum__point">$5.2M</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Circulating Supply</p>
						<p class="inxtDatum__point">629,610</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Maximum Supply</p>
						<p class="inxtDatum__point">629,610</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

			</div>{{-- /.row --}}
		</div>
	</section>

	<section class="section section--inxt-xcloud">
		<div class="container">
			<p class="section__heading">Facilitating our services.</p>
			<div class="section__content">
				<p>Customers will require INXT to utilize Internxt's services. All revenue generated from our services will be converted into INXT. For example, a $20m in revenue generated from our services would mean a direct $20m in buy orders for INXT on public exchanges. In the event that a customer decides to pay for our services in fiat or any other cryptocurrency like Bitcoin, the Bitcoin will then be automatically used to purchase INXT at market price. This organic demand ensures a strong and reliable growth of its price and market capitalization.</p>
			</div>
		</div>
	</section>

	<section class="section section--inxt-xcore">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="section__heading">Exchanges and storage.</p>
					<div class="section__content">
						<p>You can buy INXT at exchanges, such as CoinExchange, Yobit, IDEX, Etherdelta and Mercatox, with more exchanges available soon. There are 629,610 INXT currently circulating and this number is fixed as INXT is not mineable. INXT is an ERC20 token and can be stored in any Ethereum compatible wallet.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
