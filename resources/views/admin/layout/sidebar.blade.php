<div class="sidebar" data-background-color="black" data-active-color="warning">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
                Oprec FLS
            </a>
        </div>

        <ul class="nav">
            <li class="{{ Route::currentRouteName() == "dashboard" ? "active" : "" }}">
                <a href="{{ route('dashboard') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == "participants.index" ? "active" : "" }}">
                <a href="{{ route('participants.index') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Tabel Pendaftar</p>
                </a>
            </li>
            @if (Auth::user()->role == 0)
                <li class="active-pro">
                    <a href="{{ route('users.index') }}">
                        <p>Pengguna</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
