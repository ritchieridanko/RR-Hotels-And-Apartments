<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-3 disabled" href="#">
            <span class="text-primary user-select-none" style="font-size: 1.2rem; font-weight: bold;">
                RR Hotels & Apartments
            </span>
        </a>
  
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
  
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Hotels') ? 'active' : '' }}" href="/hotels">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Apartments') ? 'active' : '' }}" href="/apartments">Apartments</a>
                </li>
            </ul>
            <!-- Left links -->
  
            @auth
                <div class="dropdown">
                    <button type="button" style="width: 160px" class="btn btn-primary dropdown-toggle" id="dropdownMenuLink" data-mdb-toggle="dropdown" data-mdb-ripple-color="dark" aria-expanded="false">{{ auth()->user()->name }} </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="d-flex align-items-center">
                    <button href="#" type="button" style="width: 100px" class="btn btn-outline-primary me-2 px-3" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#login-modal">
                        <span style="font-size: 0.9rem">Login</span>
                    </button>
                    <button href="#" type="button" style="width: 100px" class="btn btn-primary me-2" data-mdb-ripple-color="dark" data-mdb-toggle="modal" data-mdb-target="#signup-modal">
                        <span style="font-size: 0.9rem">Sign Up</span>
                    </button>
                </div>
            @endauth
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->