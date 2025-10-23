<style>
    .navbar .nav-link {
    white-space: nowrap;   /* force single line */
    color: #0b1b2b;
    margin: 0 14px;        /* space between links */
    transition: all 0.3s ease;
}

/* Active and hover states */
.navbar .nav-link.active,
.navbar .nav-link:hover {
    color: #dc3545 !important; /* red highlight */
}
</style>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top shadow-sm">
    <div class="container-fluid">
        <!-- Brand -->
       <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{ asset('img/wsslogo.jpg') }}" alt="WSS Sports Logo"
         class="img-fluid" style="height:90px; width:auto; padding: 2%;">
</a>


        <!-- Toggler -->
        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto px-4 px-lg-5">
                <li class="nav-item">
                    <a href="{{ url('/') }}"
                       class="nav-link fw-bold {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about-us') }}"
                       class="nav-link fw-bold {{ request()->is('about-us') ? 'active' : '' }}">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/our-family') }}"
                       class="nav-link fw-bold {{ request()->is('our-family') ? 'active' : '' }}">
                        Our Family
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/programs-academies') }}"
                       class="nav-link fw-bold {{ request()->is('programs-academies') ? 'active' : '' }}">Programs & Academies</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/affiliation') }}"
                       class="nav-link fw-bold {{ request()->is('affiliation') ? 'active' : '' }}">Affiliation</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/social-commitment') }}"
                       class="nav-link fw-bold {{ request()->is('social-commitment') ? 'active' : '' }}">Social Commitment</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/news-achievements') }}"
                       class="nav-link fw-bold {{ request()->is('news-achievements') ? 'active' : '' }}">News</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact-us') }}"
                       class="nav-link fw-bold {{ request()->is('contact-us') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
