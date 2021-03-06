<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/internxt.css') }}">
        <link rel="canonical" href="{{ $canonical }}">
        <link rel="icon" href="favicon.ico">
        @yield('additionalMeta')

        <title>@hasSection('pageTitle')Internxt - @yield('pageTitle') @else Internxt @endif</title>

        <meta name="description" content="@yield('metaDescription')">

        @if(app()->environment('production'))

            @include('_includes.scripts.google-analytics')

            @include('_includes.scripts.google-tags')

            @include('_includes.scripts.facebook-pixel')

            @include('_includes.scripts.cookie-consent')

            @include('_includes.scripts.mailerlite')

            @include('_includes.scripts.drift')

        @endif
    </head>
    <body id="page-@yield('pageID')">

        <div id="pageContainer">

            @component('_includes.components.modal')
                @slot('id', 'modalXCloud')
                @slot('icon', '/img/logos/xcloud-flat.jpg')
                @slot('heading', 'Experience a more secure cloud')
                @slot('subheading', 'Get X Cloud beta today with 1GB free.')
                @slot('content')

                    <div class="modal__checkbox form-check">
                        <input class="form-check-input" type="checkbox" id="checkTermsConditions">
                        <label class="form-check-label" for="checkTermsConditions">
                            I accept Internxt's <a href="{{ route('terms') }}">Terms of Service</a> and <a href="{{ route('privacy') }}">Privacy Policy</a>.
                        </label>
                    </div>

                    <div class="modal__buttons">
                        @if(false) {{-- Waiting on X Cloud release --}}
                            @if($agent->isDesktop())
                                <a class="modal__cta modal__cta--{{ str_slug($platform) }} modal__cta--disabled" href="{{ $xcloudDownloadLink }}" data-href="{{ $xcloudDownloadLink }}">Download for {{ $platform }}</a>
                            @endif
                        @endif
                        <a class="modal__cta modal__cta--browser modal__cta--disabled" href="https://cloud.internxt.com/new" data-href="https://cloud.internxt.com/new" rel="nofollow">Open in browser</a>
                    </div>{{-- /.modal__buttons --}}

                @endslot
            @endcomponent

            @include('_includes.navbar-mobile')
            @include('_includes.navbar-desktop')

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
                            <p class="section__label">Company</p>

                            {{-- Need custom? --}}
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('token') }}">INXT Token</a></li>
                            </ul>
                        </div>{{-- /.col-lg --}}

                        <div class="col-lg d-none d-lg-block col-lg--company">
                            <p class="section__label">Legal Terms</p>

                            <ul class="list-unstyled">
                                <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>{{-- /.col-lg --}}

                        <div class="col-lg d-none d-lg-block col-lg--legal">
                            <p class="section__label"></p>

                            <ul class="list-unstyled">

                            </ul>
                        </div>{{-- /.col-lg --}}

                        <div class="col-lg col-lg--connect">
                            <p class="section__label section__label--connect">Connect With Us</p>

                            <ul class="nav nav--social">
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--twitter" href="https://twitter.com/Internxt" target="_blank" rel="noopener"><img src="/img/logos/twitter.png" height="25"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--medium" href="https://medium.com/Internxt" target="_blank" rel="noopener"><img src="/img/logos/medium.png" height="25"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--github" href="https://github.com/Internxt" target="_blank" rel="noopener"><img src="/img/logos/github.png" height="25"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--mail" href="mailto:hello@internxt.com"><img src="/img/logos/mail.png" height="25"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--telegram" href="https://t.me/WeAreInternxt" target="_blank" rel="noopener"><img src="/img/logos/telegram.png" height="25"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link--social nav-link--instagram" href="https://www.instagram.com/Internxt/" target="_blank" rel="noopener"><img src="/img/logos/instagram.png" height="25"></a>
                               </li>
                            </ul>

                        </div>{{-- /.col-lg --}}
                    </div>{{-- /.row --}}

                    <div class="pageFooter__bottom">

                        <p class="pageFooter__copyright">&copy; {{ date('Y') }} Made with love by Internxt. All prices already include VAT.</p>

                    </div>{{-- /.row --}}
                </div>{{-- /.container --}}
            </footer>

        </div>{{-- /#pageContainer --}}

        <script type="text/javascript" src="{{ mix('js/internxt.js') }}"></script>

        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "url": "https://internxt.com",
            "name": "Internxt Inc.",
            "image": "https://internxt.com/img/logos/logo.png",
            "description": "Internxt is excitement, ambition, innovation. Join the revolution. The future is now.",
            "contactPoint": {
                "@type": "ContactPoint",
                "email": "hello@internxt.com",
                "contactType": "PR"
            }
        }
        </script>

        @stack('js')

    </body>
</html>
