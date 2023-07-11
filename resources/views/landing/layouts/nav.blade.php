<!-- header -->
<header class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{ Route('home') }}"><img src="/img/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="responsive">
                            <i class="icon dripicons-align-right"></i>
                        </div>
                        <div class="main-menu text-xl-center text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ Route('home') }}">Home</a></li>
                                    @auth
                                        <li class="d-xl-none"><a href="{{ Route('dashboard') }}">Dashboard</a></li>
                                    @else
                                        <li class="d-xl-none"><a href="{{ Route('login') }}">Sign In</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @auth
                        <div class="col-xl-2 d-none d-xl-block text-right">
                            <div class="header-btn second-header-btn">
                                <a href="{{ Route('dashboard') }}" class="btn">Dashboard</a>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-2 d-none d-xl-block text-right">
                            <div class="header-btn second-header-btn">
                                <a href="{{ Route('login') }}" class="btn">Sign in</a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
