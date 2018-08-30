	@extends('_layouts.master')

@section('pageID', 'token')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-token')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'INXT')

@section('metaDescription', 'Internxt token (INXT). Buy, Sell, Trade INXT.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">INXT Token</h1>
			<h2 class="pageHeader__subheading">Internxt’s tokenised asset</h2>
			<a class="pageHeader__cta" href="#">Discover token metrics</a>
		</div>
	</header>

	<section class="section section--inxt-data d-none d-lg-block">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Price Per INXT</p>
						<p class="inxtDatum__point">$<span id="usd_price">5.96</span></p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-3 --}}

				<div class="col-3">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Change / 24 Hours</p>
						<p class="inxtDatum__point"><span id="change_24h">26.09</span>%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-3 --}}

				<div class="col-3">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Change / 7 Days</p>
						<p class="inxtDatum__point"><span id="change_7d">2.93</span>%</p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-3 --}}

				<div class="col-3">
					<div class="inxtDatum">
						<p class="inxtDatum__label">Market Cap</p>
						<p class="inxtDatum__point">$<span id="market_cap">5.2</span><span class="inxtDatum__measure">M</span></p>
					</div>{{-- /.inxtDatum --}}
				</div>{{-- /.col-3 --}}

			</div>{{-- /.row --}}
		</div>
	</section>

	<section class="section section--inxt-intro">
		<div class="container">
			<div class="section__content">

				<div class="row">
					<div class="col-lg-6">

						<p class="section__heading">Designed to <span class="linebreak"></span>function as an economy with reliable demand.</p>
						<p>Internxt's token INXT is used as a means of payment to Hosts who participate in our X Core network.</p>
						<p>There are 629,000 INXT available. This is the maximum supply as no more INXT will be generated.</p>

					</div>{{-- /.col-lg-6 --}}
					<div class="col-lg-6">

						<div class="subsection subsection--demand">
							<div class="row">

								<div class="col-lg-2">
									<div class="subsection__iconContainer">
										<img class="subsection__icon" src="/img/icons/inxt-demand.svg" height="57">
									</div>
								</div>{{-- /.col-lg --}}

								<div class="col-lg-10">
									<p class="subsection__heading">Token demand</p>
									<p class="subsection__content">All revenue generated from our services will be directly converted into INXT. If a customer decides to pay for our services in fiat, the fiat is used to automatically purchase INXT at market price and is then sent to Hosts.</p>
								</div>{{-- /.col-lg --}}

							</div>{{-- /.row --}}
						</div>{{-- /.subsection-demand --}}

						<div class="subsection subsection--growth">
							<div class="row">

								<div class="col-lg-2">
									<div class="subsection__iconContainer">
										<img class="subsection__icon" src="/img/icons/inxt-growth.svg" height="57">
									</div>
								</div>{{-- /.col-lg --}}

								<div class="col-lg-10">
									<p class="subsection__heading">Reliable growth</p>
									<p class="subsection__content">Directly or indirectly, customers will require INXT to purchase Internxt's services. This organic demand ensures a strong and reliable market growth.</p>
								</div>{{-- /.col-lg --}}

							</div>{{-- /.row --}}
						</div>{{-- /.subsecion-growth --}}

					</div>{{-- /.col-lg-6 --}}
				</div>{{-- /.row --}}

			</div>
		</div>
	</section>{{-- /.inxt-intro --}}

	<section class="section section--inxt-exchanges">
		<div class="container">
			<p class="section__heading">Exchanges to buy INXT.</p>
			<div class="section__content">
				<p>You can buy INXT at exchanges, such as CoinExchange, Yobit, IDEX, Etherdelta and Mercatox or you can buy directly from our website.</p>
			</div>
			<div class="section__footer row">

				<div class="col-lg">
					<div class="section__imageContainer">
						<img class="section__image img-fluid" src="/img/logos/exchanges/coin_exchange.png">
					</div>
				</div>{{-- /.col-lg --}}

				<div class="col-lg">
					<div class="section__imageContainer">
						<img class="section__image img-fluid" src="/img/logos/exchanges/idex.png">
					</div>
				</div>{{-- /.col-lg --}}

				<div class="col-lg">
					<div class="section__imageContainer">
						<img class="section__image img-fluid" src="/img/logos/exchanges/yobit.png">
					</div>
				</div>{{-- /.col-lg --}}

				<div class="col-lg">
					<div class="section__imageContainer">
						<img class="section__image img-fluid" src="/img/logos/exchanges/mercatox.png">
					</div>
				</div>{{-- /.col-lg --}}

			</div>{{-- /.row --}}
		</div>
	</section>{{-- /.inxt-intro --}}

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

	@include('_includes.sections.subscribe')

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

	<script>
        $.get("https://api.coinmarketcap.com/v1/ticker/internxt/", function(data, status) {
            if (data[0].id === "internxt") {

                x = parseFloat(data[0].price_usd);
                h = Math.round(x*100.0)/100.0;
                $("#usd_price").html(h);
                s = parseFloat(data[0].market_cap_usd);
                y = s/1000000;
                m = Math.round(y*10.0)/10.0;

                change24h = data[0].percent_change_24h;
                change7d = data[0].percent_change_7d;

                $("#market_cap").html(m);
                $("#change_24h").html(change24h);
                $("#change_7d").html(change7d);

                // If positive, add green class
                positiveClass = 'inxtDatum__point--positive';

                $("#change_24h").removeClass(positiveClass);
                $("#change_7d").removeClass(positiveClass);

                if (change24h > 0) {
                    $("#change_24h").addClass(positiveClass);
                }

                if (change7d > 0) {
                    $("#change_7d").addClass(positiveClass);
                }

            }
        }
        );
    </script>

@endsection
