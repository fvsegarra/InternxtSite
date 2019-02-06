<nav class="navbar @yield('navbar-classes') navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/img/logos/@yield('navbarLogo', 'internxt_icon.svg')" height="41" class="mainLogo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto {{-- align-items-center --}}">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu dropdown-menu--products" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-item--xcloud" href="{{ route('cloud') }}">
                            <div class="media">
                                <img class="dropdown-item__image align-self-center" src="/img/logos/xcloud.svg" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">X Cloud</h5>
                                    <p class="dropdown-item__subheading">Secure cloud storage.</p>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="dropdown-item dropdown-item--xcore" href="{{ route('core') }}">
                            <div class="media">
                                <img class="dropdown-item__image align-self-center" src="/img/logos/xcore.png" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">X Core</h5>
                                    <p class="dropdown-item__subheading">Get paid to share.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Company
                    </a>
                    <div class="dropdown-menu dropdown-menu--company" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-item" href="{{ route('about') }}">
                            <div class="media d-flex align-items-center">
                                <img class="dropdown-item__image align-self-center" src="/img/icons/dropdown/about.svg" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">About us</h5>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="dropdown-item dropdown-item" href="{{ route('roadmap') }}">
                            <div class="media d-flex align-items-center">
                                <img class="dropdown-item__image align-self-center" src="/img/icons/dropdown/roadmap.svg" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">Roadmap</h5>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="dropdown-item dropdown-item" href="{{ route('merchandise') }}">
                            <div class="media d-flex align-items-center">
                                <img class="dropdown-item__image align-self-center" src="/img/icons/dropdown/merchandise.svg" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">Merchandise</h5>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="dropdown-item dropdown-item" href="{{ route('resources') }}">
                            <div class="media d-flex align-items-center">
                                <img class="dropdown-item__image align-self-center" src="/img/icons/dropdown/resources.svg" alt="Placeholder">
                                <div class="media-body">
                                    <h5 class="dropdown-item__heading">Resources</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('token') }}">INXT token</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://medium.com/internxt" target="_blank" rel="nofollow">News hub</a>
                </li>
                <li class="nav-item nav-item--xcloud">
                    <a class="nav-link nav-link--xcloud" href="https://cloud.internxt.com/" target='_blank'>Get X Cloud Beta</a>
                </li>
            </ul>
        </div>{{-- /.navbar-collapse --}}
    </div>{{-- /.container --}}
</nav>
