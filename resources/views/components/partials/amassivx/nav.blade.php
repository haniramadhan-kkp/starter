<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ Route('home') }}"><img src="/img/logo.png" alt="logo"
                                    style="width: 150%; height: auto" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="responsive">
                            <i class="icon dripicons-align-right"></i>
                        </div>
                        <div class="main-menu text-xl-center text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub">
                                        <a href="{{ Route('home') }}"> Home</a>
                                    </li>
                                    <li>
                                        <a href="#about"> Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="#services"> Berita </a>
                                    </li>
                                    <li>
                                        <a href="#work"> Publikasi </a>
                                    </li>

                                    <li><a href="#blog">Agenda</a></li>
                                    <li>
                                        <a href="#contact">Survei</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-1 d-none d-xl-block text-right">
                        <a href="{{ Route('login') }}" class="btn-primer">Sign In</a>
                    </div>
                    <div class="col-xl-1 d-none d-xl-block text-right">
                        <a href="{{ Route('register') }}" class="btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
