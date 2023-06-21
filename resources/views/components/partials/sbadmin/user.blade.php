<li class="nav-item dropdown no-caret dropdown-user me-lg-4 me-3">
    <a
        class="btn btn-icon btn-transparent-dark dropdown-toggle"
        id="navbarDropdownUserImage"
        href="javascript:void(0);"
        role="button"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        ><img class="img-fluid" src="{{ $profile }}"
    /></a>
    <div
        class="dropdown-menu dropdown-menu-end animated--fade-in-up border-0 shadow"
        aria-labelledby="navbarDropdownUserImage"
    >
        <h6 class="dropdown-header d-flex align-items-center">
            <img class="dropdown-user-img" src="{{ $profile }}" />
            <div class="dropdown-user-details">
                <div class="dropdown-user-details-name">{{ $name }}</div>
                <div class="dropdown-user-details-email">{{ $email }}</div>
            </div>
        </h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#!">
            <div class="dropdown-item-icon">
                <i data-feather="settings"></i>
            </div>
            Account
        </a>
        <a class="dropdown-item" href="#!">
            <div class="dropdown-item-icon">
                <i data-feather="log-out"></i>
            </div>
            Logout
        </a>
    </div>
</li>
