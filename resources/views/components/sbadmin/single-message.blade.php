<!-- Example Message 1  -->
<a class="dropdown-item dropdown-notifications-item" href="#!">
    <img class="dropdown-notifications-item-img" src="{{ $profile }}" />
    <div class="dropdown-notifications-item-content">
        <div class="dropdown-notifications-item-content-text">
            {{ $message }}
        </div>
        <div class="dropdown-notifications-item-content-details">
            {{ $author }} · {{ $time }}
        </div>
    </div>
</a>
