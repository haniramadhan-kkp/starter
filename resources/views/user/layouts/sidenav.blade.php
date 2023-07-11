<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="{{ Route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Dashboard
                </a>
                <div class="sidenav-menu-heading">Accounts</div>
                <a class="nav-link"
                    href="{{ Route('dashboard.user.registrations.edit', auth()->user()->registration->id) }}">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Profile
                </a>
                <a class="nav-link" href="{{ Route('dashboard.user.profile.edit') }}">
                    <div class="nav-link-icon"><i data-feather="key"></i></div>
                    Security
                </a>
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
