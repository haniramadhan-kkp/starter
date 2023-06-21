<li
    class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications me-3"
>
    <a
        class="btn btn-icon btn-transparent-dark dropdown-toggle"
        id="navbarDropdownAlerts"
        href="javascript:void(0);"
        role="button"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        ><i data-feather="bell"></i
    ></a>
    <div
        class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
        aria-labelledby="navbarDropdownAlerts"
    >
        <h6 class="dropdown-header dropdown-notifications-header">
            <i class="me-2" data-feather="bell"></i>
            Alerts Center
        </h6>
        {{ $slot }}
        <a class="dropdown-item dropdown-notifications-footer" href="#!"
            >View All Alerts</a
        >
    </div>
</li>
