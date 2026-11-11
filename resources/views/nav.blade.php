<nav class="navbar navbar-expand-lg hotel-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ Auth::user()->role == 'admin' ? route('adminhome') : route('home') }}">HavenStay</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotelNavbar" aria-controls="hotelNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="hotelNavbar">
            <div class="navbar-nav ms-auto align-items-lg-center">
                @if(Auth::user()->role == 'admin')
                    <a href="{{ route('adminhome') }}" class="nav-link {{ request()->routeIs('adminhome') ? 'active' : '' }}">Dashboard</a>
                    <a href="{{ route('rooma') }}" class="nav-link {{ request()->routeIs('rooma') ? 'active' : '' }}">Data Kamar</a>
                @elseif(Auth::user()->role == 'customer')
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Jelajahi Kamar</a>
                    <a href="{{ route('riwayat') }}" class="nav-link {{ request()->routeIs('riwayat') ? 'active' : '' }}">Riwayat Booking</a>
                @endif
                <form action="{{ route('logout') }}" method="GET" class="ms-lg-3">
                    @csrf
                    <button type="submit" class="logout-btn">Keluar</button>
                </form>
            </div>
        </div>
    </div>
</nav>