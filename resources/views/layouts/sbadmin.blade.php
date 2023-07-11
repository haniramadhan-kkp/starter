<!DOCTYPE html>
<html lang="en">

<head>
    <x-partials.sbadmin.head />
    @livewireStyles
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand justify-content-between justify-content-sm-start navbar-light bg-white shadow"
        id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-lg-0 ms-lg-2 me-lg-0 order-1 me-2" id="sidebarToggle">
            <i data-feather="menu"></i>
        </button>
        <!-- Navbar Brand-->
        <!-- * * Tip * * You can use text or an image for your navbar brand.-->
        <!-- * * * * * * When using an image, we recommend the SVG format.-->
        <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
        <a class="navbar-brand ps-lg-2 pe-3 ps-4" href="{{ Route('home') }}">Ispikani</a>
        <!-- Navbar Search Input-->
        <x-sbadmin.large-search />
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->

            <!-- Navbar Search Dropdown-->

            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications me-3">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
                    aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="bell"></i>
                        Alerts Center
                    </h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning">
                            <i data-feather="activity"></i>
                        </div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">
                                December 29, 2021
                            </div>
                            <div class="dropdown-notifications-item-content-text">
                                This is an alert message. It's nothing serious, but
                                it requires your attention.
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>

            <!-- Messages Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications me-3">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
                    aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="mail"></i>
                        Message Center
                    </h6>

                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="/sbadmin/assets/img/illustrations/profiles/profile-2.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                            <div class="dropdown-notifications-item-content-details">
                                Hani Ramadhan · 58 m
                            </div>
                        </div>
                    </a>

                    <!-- Footer Link-->
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>

            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-lg-4 me-3">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="{{ auth()->user()->getFirstMediaUrl('profile_pic') }}" /></a>
                <div class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="{{ auth()->user()->getFirstMediaUrl('profile_pic') }}" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ auth()->user()->name }}</div>
                            <div class="dropdown-user-details-email">{{ auth()->user()->email }}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon">
                            <i data-feather="settings"></i>
                        </div>
                        Account
                    </a>
                    <a class="dropdown-item" href="{{ Route('logout') }}">
                        <div class="dropdown-item-icon">
                            <i data-feather="log-out"></i>
                        </div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <!-- Sidenav Menu Heading (Account)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <x-partials.sbadmin.account />

                        <!-- Sidenav Menu Heading (Core)-->
                        <div class="sidenav-menu-heading">Registration</div>
                        <!-- Sidenav Accordion (Dashboard)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#collapseDashboards" aria-expanded="false"
                            aria-controls="collapseDashboards">
                            <div class="nav-link-icon">
                                <i data-feather="activity"></i>
                            </div>
                            Account
                            <div class="sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link"
                                    href="{{ Route('dashboard.user.registrations.edit', auth()->user()->registration->id) }}">
                                    Profile
                                    <span class="badge bg-warning-soft text-warning ms-auto">terkirim</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Sidenav Footer-->
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">
                            Logged in as:
                        </div>
                        <div class="sidenav-footer-title">{{ auth()->user()->name }}</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                {{ $slot }}
            </main>
            <footer class="footer-admin footer-light mt-auto">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">
                            Copyright &copy; Ispikani 2023
                        </div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @livewireScripts
    <x-partials.sbadmin.jshere />
</body>

</html>
