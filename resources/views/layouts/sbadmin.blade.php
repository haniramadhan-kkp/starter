<!DOCTYPE html>
<html lang="en">

<head>
    <x-partials.sbadmin.head />
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
            <x-partials.sbadmin.documentation />

            <!-- Navbar Search Dropdown-->
            <x-sbadmin.small-search />

            <!-- Alerts Dropdown-->
            <x-partials.sbadmin.alert>
                <x-sbadmin.single-alert>
                    <x-slot:date>December 29, 2021</x-slot:date>
                    <x-slot:message>This is an alert message. It's nothing serious, but
                        it requires your attention.</x-slot:message>
                </x-sbadmin.single-alert>
            </x-partials.sbadmin.alert>
            <!-- Messages Dropdown-->
            <x-partials.sbadmin.message>
                <x-sbadmin.single-message>
                    <x-slot:link>#</x-slot:link>
                    <x-slot:profile>sbadmin/assets/img/illustrations/profiles/profile-2.png</x-slot:profile>
                    <x-slot:message>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </x-slot:message>
                    <x-slot:author>Thomas Wilcox</x-slot:author>
                    <x-slot:time>58m</x-slot:time>
                </x-sbadmin.single-message>
            </x-partials.sbadmin.message>
            <!-- User Dropdown-->
            <x-partials.sbadmin.user>
                <x-slot:profile>sbadmin/assets/img/illustrations/profiles/profile-1.png</x-slot:profile>
                <x-slot:name>Valerie Luna</x-slot:name>
                <x-slot:email>vluna@aol.com</x-slot:email>
            </x-partials.sbadmin.user>
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
                        <div class="sidenav-menu-heading">Core</div>
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
                                    href="{{ Route('dashboard.user.registrations.index') }}">
                                    Profile
                                    <span class="badge bg-warning-soft text-warning ms-auto">terkirim</span>
                                </a>
                                <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                                <a class="nav-link" href="dashboard-3.html">Affiliate</a>
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
                        <div class="sidenav-footer-title">Valerie Luna</div>
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
    <x-partials.sbadmin.jshere />
</body>

</html>
