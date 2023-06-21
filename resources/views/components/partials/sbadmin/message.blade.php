<li
    class="nav-item dropdown no-caret d-none d-sm-block dropdown-notifications me-3"
>
    <a
        class="btn btn-icon btn-transparent-dark dropdown-toggle"
        id="navbarDropdownMessages"
        href="javascript:void(0);"
        role="button"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        ><i data-feather="mail"></i
    ></a>
    <div
        class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
        aria-labelledby="navbarDropdownMessages"
    >
        <h6 class="dropdown-header dropdown-notifications-header">
            <i class="me-2" data-feather="mail"></i>
            Message Center
        </h6>

        {{ $slot }}

        <!-- Footer Link-->
        <a class="dropdown-item dropdown-notifications-footer" href="#!"
            >Read All Messages</a
        >
    </div>
</li>
