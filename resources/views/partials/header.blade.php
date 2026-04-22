<nav class="navbar navbar-expand-lg">                
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo1-removebg-preview.png') }}" 
                 class="navbar-brand-image img-fluid" 
                 alt="Explore Sreemangal">

            <span class="navbar-brand-text">
                Explore
                <small>Sreemangal</small>
            </span>
        </a>

        <div class="d-lg-none ms-auto me-3">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-success me-2">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">
                    Login
                </a>
            @endauth
        </div>

        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/destinations">Destinations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/hotels">Hotels & Resorts</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/tours">Tour Packages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>

            <div class="d-none d-lg-block ms-lg-3">
                @auth

                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="btn custom-btn custom-border-btn me-2">
                            Admin Panel
                        </a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="btn custom-btn custom-border-btn me-2">
                            Dashboard
                        </a>
                    @endif

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Logout
                        </button>
                    </form>

                @else
                    <a href="{{ route('login') }}" class="btn custom-btn custom-border-btn me-2">
                        Login
                    </a>

                    <a href="{{ route('register') }}" class="btn custom-btn">
                        Register
                    </a>
                @endauth
            </div>

        </div>
    </div>
</nav>