@extends('_layouts.master')

@section('pageID', 'token')

@section('navbar-classes', 'navbar-transparent navbar-inverse navbar-token')

@section('navbarLogo', 'internxt_icon_home.svg')

@section('pageTitle', 'INXT')

@section('metaDescription', 'Internxt token (INXT). Buy, Sell, Trade INXT.')

@section('body')

	<header class="pageHeader">
		<div class="container">
			<h1 class="pageHeader__heading">Internxt &nbsp;Token</h1>
			<h2 class="pageHeader__subheading">INXT. <span class="linebreak d-block d-lg-none"></span>Our tokenised asset.</h2>
			<a class="pageHeader__cta" href="https://coinmarketcap.com/currencies/internxt/" target="_blank">Token metrics</a>
		</div>
	</header>

	<section class="section section--inxt-data d-none d-lg-block" id="metrics">
		<div class="container-fluid">
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
		</div>{{-- /.container-fluid --}}
	</section>

	<section class="section section--inxt-intro">
		<div class="container">
			<div class="section__content">

				<div class="row">
					<div class="col-lg-6">

						<p class="section__heading">Designed to <span class="linebreak"></span>function as an economy with reliable demand.</p>

						<div class="intro__content">
							<p>Internxt's token INXT is used as a means of payment to Hosts who participate in our X Core network.</p>
							<p>There are 629,000 INXT available. This is the maximum supply as no more INXT will be generated.</p>
						</div>

					</div>{{-- /.col-lg-6 --}}
					<div class="col-lg-5">

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

					</div>{{-- /.col-lg-5 --}}
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

				<div class="col-lg-3">
					<a class="section__imageContainer section__imageContainer--coin-exchange" href="https://www.coinexchange.io/market/INXT/BTC" target="_blank" rel="nofollow">
						<img class="section__image" src="/img/logos/exchanges/coin_exchange.png" height="24">
					</a>
				</div>{{-- /.col-lg-3 --}}

				<div class="col-lg-3">
					<a class="section__imageContainer section__imageContainer--idex" href="https://idex.market/eth/inxt" target="_blank" rel="nofollow">
						<img class="section__image" src="/img/logos/exchanges/idex.png">
					</a>
				</div>{{-- /.col-lg-3 --}}

				<div class="col-lg-3">
					<a class="section__imageContainer section__imageContainer--latoken" href="https://wallet.latoken.com/market/Crypto/BTC/INXT-BTC" target="_blank" rel="nofollow">
						<img class="section__image" src="/img/logos/exchanges/latoken.png">
					</a>
				</div>{{-- /.col-lg-3 --}}

				<div class="col-lg-3">
					<a class="section__imageContainer section__imageContainer--mercatox" href="https://mercatox.com/exchange/INXT/BTC" target="_blank" rel="nofollow">
						<img class="section__image" src="/img/logos/exchanges/mercatox.png">
					</a>
				</div>{{-- /.col-lg-3 --}}

			</div>{{-- /.row --}}
		</div>
	</section>{{-- /.inxt-intro --}}

	<section class="section section--inxt-buy">
	 <div class="container">
	  <p class="section__heading">Buy directly from us.</p>
	  <div class="section__content">
	   <p>You can buy INXT directly from our website. Our system tracks down and offers the best exchange rates available on the market. Follow the steps below to buy your INXT without the hassle of an exchange.</p>
	   <p class="section__instruction">Select payment method</p>
	   <div class="paymentMethods row">
	    <div class="col-4">
	     <a class="btn btn-default"><img src="/img/logos/bitcoin.png" height="62"></a>
	    </div>
	    <div class="col-4">
	     <a class="btn btn-default"><img src="/img/logos/litecoin.png" height="62"></a>
	    </div>
	    <div class="col-4">
	     <a class="btn btn-default"><img src="/img/logos/ethereum.png" height="62"></a>
	    </div>
	   </div>
	   <div id='cryptowolf'/>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script>
	    var external = 'inxt';
	    var cryptowolf = 'https://external.cryptowolf.eu/v3/';
	    function defer(method) {
	        if (window.jQuery) {
	            method();
	        } else {
	            setTimeout(function() { defer(method) }, 50);
	        }
	    }
	    defer(function () {
	        $("#cryptowolf").load(cryptowolf + 'ext.html',function() {
	            $.getScript(cryptowolf + 'js/cryptowolf.js');
	            $('#hiddendivbeforeselect').prepend($('.two')[0]);
	            $('.two').addClass('cryptowolf-element')
	            $.ajax ({
	                type: "POST",
	                url: "https://external.cryptowolf.eu/v3/css/inxt.css",
	                success: function(result) {
	                $("#cryptowolf").after('<style>' + result + '</style>')
	                }
	            });
	        });
	    })
	</script>
	 </div>
	</section>


	@include('_includes.sections.subscribe')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script>
        $.get("https://api.coinmarketcap.com/v1/ticker/internxt/?convert=eur", function(data, status) {
            if (data[0].id === "internxt") {

							console.log(data);

                x = parseFloat(data[0].price_eur);
                usd_price = Math.round(x*100.0)/100.0;
                s = parseFloat(data[0].market_cap_eur);
                y = s/1000000;
                market_cap = Math.round(y*10.0)/10.0;

                change24h = data[0].percent_change_24h;
                change7d = data[0].percent_change_7d;

                $("#usd_price").html(usd_price);
                $("#market_cap").html(market_cap);
                $("#change_24h").html(change24h);
                $("#change_7d").html(change7d);

                // If positive, add green class
                positiveClass = 'inxtDatum__point--positive';

                $("#change_24h").removeClass(positiveClass);
                $("#change_7d").removeClass(positiveClass);

                if (change24h > 0) {
                    $("#change_24h").prepend('+').parent().addClass(positiveClass);
                }

                if (change7d > 0) {
                    $("#change_7d").prepend('+').parent().addClass(positiveClass);
                }

            }
        }
        );
    </script>

@endsection
