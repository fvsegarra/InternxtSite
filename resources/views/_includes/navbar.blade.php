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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('cloud') }}">X Cloud</a>
                        <a class="dropdown-item" href="{{ route('core') }}">X Core</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Company
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('about') }}">About us</a>
                        <a class="dropdown-item" href="{{ route('roadmap') }}">Roadmap</a>
                        <a class="dropdown-item" href="{{ route('resources') }}">Resources</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('token') }}">INXT token</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://medium.com/internxt" target="_blank" rel="nofollow">News hub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link--xcloud" href="#" data-toggle="modal" data-target="#modalXCloud">Get X Cloud Beta</a>
                </li>
            </ul>
        </div>{{-- /.navbar-collapse --}}
    </div>{{-- /.container --}}
</nav>
