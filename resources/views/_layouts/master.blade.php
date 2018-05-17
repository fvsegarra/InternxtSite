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

                <a class="navbar-brand" href="#">
                    <img src="/img/logos/internxt_white.png" height="31">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-content-between w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="#">X Cloud</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">X Core</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">X Token</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('body')

        <footer class="pageFooter">
            <div class="container">
                <div class="row">

                    <div class="col-sm-5">
                        <img src="/img/logos/internxt_white.png" height="42">
                    </div>{{-- /.col-sm-5 --}}

                    <div class="col-sm-7">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link disabled">&copy; {{ date('Y') }} Internxt S.L.U.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#twitter"><img src="/img/logos/twitter.png" height="18"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#medium"><img src="/img/logos/medium.png" height="18"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#github"><img src="/img/logos/github.png" height="18"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mail"><img src="/img/logos/mail.png" height="18"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#instagram"><img src="/img/logos/instagram.png" height="18"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#telegram"><img src="/img/logos/telegram.png" height="18"></a>
                            </li>
                        </ul>

                    </div>{{-- /.col-sm-7 --}}

                </div>{{-- /.row --}}
            </div>{{-- /.container --}}
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
