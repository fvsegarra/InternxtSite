<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="icon" href="favicon.ico">

        <title>@hasSection('pageTitle')Internxt - @yield('pageTitle') @else Internxt @endif</title>

        <meta name="description" content="@yield('metaDescription')">

        @if(app()->environment('production'))

            @include('_includes.scripts.google-analytics')

            @include('_includes.scripts.google-tags')

            @include('_includes.scripts.facebook-pixel')

            @include('_includes.scripts.cookie-consent')

        @endif

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#ffffff",
              "text": "#000000"
            },
            "button": {
              "background": "#000000",
              "text": "#ffffff"
            }
          },
          "theme": "edgeless",
          "content": {
            "message": "We use cookies to ensure you get the best experience on our website.",
            "dismiss": "",
            "link": ""
          }
        })});
        </script>

    </head>
    <body id="page-@yield('pageID')">

        @component('_includes.components.modal')
            @slot('id', 'modalXCloud')
            @slot('icon', '/img/logos/xcloud.png')
            @slot('heading', 'Experience a more secure cloud')
            @slot('subheading', 'Get X Cloud beta today with 10GB free.')
            @slot('content')
                <a class="modal__cta modal__cta--{{ str_slug($platform) }}" href="#">Download for {{ $platform }}</a>
                <a class="modal__cta modal__cta--browser" href="#">Open in browser</a>
            @endslot
        @endcomponent

        @component('_includes.components.modal')
            @slot('id', 'modalXCore')
            @slot('icon', '/img/logos/xcore.png')
            @slot('heading', 'Experience a more secure cloud')
            @slot('subheading', 'Get X Core beta today.')
            @slot('content')
                <a class="modal__cta modal__cta--{{ str_slug($platform) }}" href="#">Download for {{ $platform }}</a>
                <a class="modal__cta modal__cta--browser" href="#">Open in browser</a>
            @endslot
        @endcomponent

        @include('_includes.navbar')

        @yield('body')

        <footer class="pageFooter">
            <div class="container">

                <div class="row">
                    <div class="col-lg d-none d-lg-block col-lg--product">
                        <p class="section__label">Product</p>

                        <ul class="list-unstyled">
                            <li><a href="{{ route('cloud') }}">X Cloud</a></li>
                            <li><a href="{{ route('core') }}">X Core</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg d-none d-lg-block col-lg--discover">
                        <p class="section__label">Discover</p>

                        {{-- Need custom --}}
                        <ul class="list-unstyled">
                            <li><a href="{{ route('roadmap') }}">Roadmap</a></li>
                            <li><a href="{{ route('resources') }}">Resources</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg d-none d-lg-block col-lg--company">
                        <p class="section__label">Company</p>

                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('token') }}">INXT Token</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg d-none d-lg-block col-lg--legal">
                        <p class="section__label">Legal Terms</p>

                        <ul class="list-unstyled">
                            <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        </ul>
                    </div>{{-- /.col-lg --}}

                    <div class="col-lg col-lg--connect">
                        <p class="section__label section__label--connect">Connect With Us</p>

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

                <div class="pageFooter__bottom">
                    <p class="pageFooter__copyright">&copy; {{ date('Y') }} Internxt Inc. All Rights Reserved.</p>
                </div>{{-- /.pageFooter__bottom --}}
            </div>{{-- /.container --}}
        </footer>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
