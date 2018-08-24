<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
        <link rel="icon" href="favicon.ico">

        <title>@hasSection('pageTitle')Internxt - @yield('pageTitle') @else Internxt @endif</title>

        <meta name="description" content="@yield('metaDescription')">

        @if(app()->environment('production'))

            @include('_includes.scripts.google-analytics')

            @include('_includes.scripts.google-tags')

            @include('_includes.scripts.facebook-pixel')

            @include('_includes.scripts.cookie-consent')

        @endif

    </head>
    <body id="page-@yield('pageID')">

        <nav class="navbar @yield('navbar-classes') navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/img/logos/@yield('navbarLogo', 'internxt_icon.svg')" height="41" class="mainLogo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cloud') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('token') }}">INXT Token</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News Hub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link--xcloud" href="#">Get X Cloud Beta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('body')

        <footer class="pageFooter">
            <div class="container">

                <div class="row">
                    <div class="col-lg">
                        <p class="section__label">Product</p>

                        <ul class="list-unstyled">
                            <li><a href="#">X Cloud</a></li>
                            <li><a href="#">X Core</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg">
                        <p class="section__label">Discover</p>

                        {{-- Need custom --}}
                        <ul class="list-unstyled">
                            <li><a href="#">Roadmap</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg">
                        <p class="section__label">Company</p>

                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">INXT Token</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg">
                        <p class="section__label">Legal Terms</p>

                        <ul class="list-unstyled">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg">
                        <p class="section__label">Connect With Us</p>

                        <ul class="nav nav--social">
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="https://twitter.com/Internxt" target="_blank"><img src="/img/logos/twitter.png" height="25"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="https://medium.com/internxt" target="_blank"><img src="/img/logos/medium.png" height="25"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="https://github.com/Internxt" target="_blank"><img src="/img/logos/github.png" height="25"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="mailto:hello@internxt.com"><img src="/img/logos/mail.png" height="25"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="https://t.me/InternxtHQ" target="_blank"><img src="/img/logos/telegram.png" height="25"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link--social" href="https://www.instagram.com/InternxtHQ/" target="_blank"><img src="/img/logos/instagram.png" height="25"></a>
                            </li>
                        </ul>

                    </div>{{-- /.col-lg --}}
                </div>{{-- /.row --}}

                <div class="pageFooter__bottom row no-gutters">

                    <div class="col-auto pageFooter__logoContainer">
                        <img src="/img/logos/internxt_icon_home.svg" height="42">
                    </div>{{-- /.col --}}

                    <div class="col-auto">
                        <p class="pageFooter__copyright">&copy; {{ date('Y') }} Internxt Inc. All Rights Reserved.</p>
                    </div>{{-- /.col --}}

                </div>{{-- /.row --}}
            </div>{{-- /.container --}}
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
