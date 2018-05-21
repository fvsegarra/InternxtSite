<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">

        <title>@yield('pageTitle') | Internxt</title>
    </head>
    <body id="page-@yield('pageID')">


        <nav class="navbar @yield('navbar-classes') navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/img/logos/@yield('navbarLogo', 'internxt_icon.svg')" height="35" class="mainLogo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-content-between w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cloud') }}">X Cloud</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('core') }}">X Core</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('token') }}">X Token</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('team') }}">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('timeline') }}">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('resources') }}">Resources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('body')

        <footer class="pageFooter">
            <div class="container">

            <ul class="nav d-inline-flex d-sm-none">
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#twitter"><img src="/img/logos/twitter.png" height="25"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#medium"><img src="/img/logos/medium.png" height="25"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#github"><img src="/img/logos/github.png" height="25"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#mail"><img src="/img/logos/mail.png" height="25"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#instagram"><img src="/img/logos/instagram.png" height="25"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-link--social" href="#telegram"><img src="/img/logos/telegram.png" height="25"></a>
                </li>
            </ul>

                <div class="row">

                    <div class="col-sm pageFooter__logoContainer">
                        <img src="/img/logos/internxt_light.png" height="42" class="my-5 my-sm-0">
                    </div>{{-- /.col-sm --}}

                    <div class="col-sm">
                        <ul class="nav pageFooterNav d-inline-flex">
                            <li class="nav-item pageFooter__copyright">
                                <a class="nav-link pt-0 disabled">&copy; {{ date('Y') }} Internxt S.L.U.</a>
                            </li>
                            <li class="nav-item pageFooter__terms">
                                <a class="nav-link" href="#">Terms</a>
                            </li>
                            <li class="nav-item pageFooter__privacy">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            @include('_includes.footer-social-icons')
                        </ul>
                    </div>{{-- /.col-sm --}}

                </div>{{-- /.row --}}
            </div>{{-- /.container --}}
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
