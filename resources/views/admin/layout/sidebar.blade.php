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
            <li class="{{ Route::current() == "/participants/div/Marketing" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'Marketing') }}">
                    <i class="ti-angle-right"></i>
                    <p>Marketing</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/Program" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'Program') }}">
                    <i class="ti-angle-right"></i>
                    <p>Program</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/General Affairs" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'General Affairs') }}">
                    <i class="ti-angle-right"></i>
                    <p>General Affairs</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/Communication" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'Communication') }}">
                    <i class="ti-angle-right"></i>
                    <p>Communication</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/LO" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'LO') }}">
                    <i class="ti-angle-right"></i>
                    <p>LO</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/Creative" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'Creative') }}">
                    <i class="ti-angle-right"></i>
                    <p>Creative</p>
                </a>
            </li>
            <li class="{{ Route::current() == "/participants/div/PID" ? "active" : "" }}">
                <a class="left-padding" href="{{ route('participants.division', 'PID') }}">
                    <i class="ti-angle-right"></i>
                    <p>PID</p>
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
