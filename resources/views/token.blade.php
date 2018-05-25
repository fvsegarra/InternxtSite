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
						<p class="inxtDatum__point"><span class="inxtDatum__sign">-</span>2.93%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}

				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Change / 30 Days</p>
						<p class="inxtDatum__point inxtDatum__point--positive"><span class="inxtDatum__sign">+</span>442%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-sm-4 --}}
			</div>{{-- /.row --}}

			<div class="row">
				<div class="col-sm-4">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Market Cap</p>
						<p class="inxtDatum__point">$5.2<span class="inxtDatum__measure">M</span></p>
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

	<section class="section section--inxt-faciliting">
		<div class="container">
			<p class="section__heading">Facilitating our services.</p>
			<div class="section__content">
				<p>Customers will require INXT to utilize Internxt's services. All revenue generated from our services will be converted into INXT. For example, a $20m in revenue generated from our services would mean a direct $20m in buy orders for INXT on public exchanges. In the event that a customer decides to pay for our services in fiat or any other cryptocurrency like Bitcoin, the Bitcoin will then be automatically used to purchase INXT at market price. This organic demand ensures a strong and reliable growth of its price and market capitalization.</p>
			</div>
		</div>
	</section>

	<section class="section section--inxt-exchange">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="section__heading">Exchanges and storage.</p>
					<div class="section__content">
						<p>You can buy INXT at exchanges, such as CoinExchange, Yobit, IDEX, Etherdelta and Mercatox, with more exchanges available soon. There are 629,610 INXT currently circulating and this number is fixed as INXT is not mineable. INXT is an ERC20 token and can be stored in any Ethereum compatible wallet.</p>
					</div>
					<div class="section__footer">
						<a href="https://www.coinexchange.io/market/INXT/BTC" rel="nofollow" target="_blank" class="btn btn-default"><img src="/img/logos/coinexchange.png" height="27" class="img-fluid"></a>
						<a href="https://idex.market/eth/inxt" rel="nofollow" target="_blank" class="btn btn-default"><img src="/img/logos/idex.png" height="27"></a>
						<a href="https://yobit.net/en/trade/INXT/BTC" rel="nofollow" target="_blank" class="btn btn-default"><img src="/img/logos/yobit.png" height="27"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr>

	<section class="section section--inxt-buy">
		<div class="container">
			<p class="section__heading">Buy INXT.</p>
			<div class="section__content">
				{{-- <p class="section__instruction">Select payment method</p>
				<a class="btn btn-default"><img src="/img/logos/bitcoin.png" height="62"></a>
				<a class="btn btn-default"><img src="/img/logos/litecoin.png" height="62"></a>
				<a class="btn btn-default"><img src="/img/logos/ethereum.png" height="62"></a> --}}

				<div id='cryptoWolfContainer'></div>

			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type='text/javascript'>

		var external = 'inxt';

		$(document).ready(function() {

			$("#cryptoWolfContainer").load('https://external.cryptowolf.eu/main-backend/ext.html', function() {

				console.debug("CryptoWolf loaded");

				// Perform some rewording?
				window.setTimeout(function(){

					console.debug("Replacing text and placeholders");

					$('input#calc').attr('placeholder', 'Enter INXT buy amount');
					$('input#quform_2_17_869115').attr('placeholder', 'Enter INXT wallet address');
					$('input#quform_2_16_869115').attr('placeholder', 'Enter Bitcoin wallet address');

				}, 1000);


			});

			// Keep sending coin name in sync
			$('#cryptoWolfContainer').on('DOMSubtreeModified', '.sending-wallet', function(){

				console.debug('Sending wallet changed');
				var coin = $(this).text();
				$('input#quform_2_16_869115').attr('placeholder', 'Enter ' + coin + ' wallet address');

			});

			$.getScript('https://external.cryptowolf.eu/main-backend/js/cryptowolf.js');

		});

	</script>

@endsection
