<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="light"
style="background-color: var(--navbar-background-color)!important;">
<div class="container-fluid position-relative">
    
    <!-- HAMBURGER (mobile) -->
    <button class="navbar-toggler me-2"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarMenu"
        aria-controls="navbarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

<!-- LOGO (mobile) - SEMPRE VISIBILE, fuori dal collapse -->
<a class="navbar-brand mx-auto d-lg-none" href="{{ route('welcome') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 80px; width: auto;">
</a>

<!-- MENU + LOGO (desktop) -->
<div class="collapse navbar-collapse justify-content-center" id="navbarMenu">
    
    <!-- SINISTRA -->
    <ul class="navbar-nav flex-column flex-lg-row gap-2 me-lg-3 mt-2 mt-lg-0 align-items-lg-center">
        
        <a class="nav-link" href="{{ route('welcome') }}" style="color: var(--text-light)!important;">
            Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pages.photos') }}" style="color: var(--text-light)!important;">
            Foto
        </a>
    </li>
</ul>

<!-- LOGO (desktop) - SOLO 1 VOLTA -->
<a class="navbar-brand mx-3 d-none d-lg-block" href="{{ route('welcome') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 120px; width: auto;">
</a>

<!-- DESTRA -->
<ul class="navbar-nav flex-column flex-lg-row gap-2 ms-lg-3 mt-2 mt-lg-0 align-items-lg-center">
    
    <!-- PRENOTA -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false" style="color: var(--text-light)!important;">
        Prenota
    </a>
    
    <ul class="dropdown-menu dropdown-menu-end mt-2">
        <li>
            <a class="dropdown-item d-flex align-items-center gap-2"
            href="https://www.booking.com/hotel/it/trilocale-in-via-delle-azzorre.it.html"
            target="_blank" rel="noopener">
            <img src="{{ asset('images/bookinglogo.svg') }}"
            alt="Booking Logo"
            style="width: 80px; height: 50px; object-fit: contain;">
        </a>
    </li>
    
    <li>
        <a class="dropdown-item d-flex align-items-center gap-2"
        href="https://www.airbnb.it/rooms/1155683144696836876?source_impression_id=p3_1763845796_P3VxiOh3M5XL3gfN"
        target="_blank" rel="noopener">
        <img src="{{ asset('images/airbnb.svg') }}"
        alt="Airbnb Logo"
        style="width: 80px; height: 50px; object-fit: contain;">
    </a>
</li>
</ul>
</li>

<!-- CONTATTI -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('pages.contacts') }}" style="color: var(--text-light)!important;">
        Contatti
    </a>
</li>

<!-- LINGUE -->
<li class="nav-item dropdown ms-3">
    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
    href="#" id="langDropdown" role="button"
    data-bs-toggle="dropdown" aria-expanded="false"
    style="color: var(--text-light)!important;">
    
    <img id="current-flag"
    src="https://flagcdn.com/24x18/it.png"
    width="24" height="18" alt="Lingua">
    
    <span id="current-lang-label">IT</span>
</a>

<ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
        data-lang="it" data-flag="it">
        <img src="https://flagcdn.com/24x18/it.png" width="24" alt=""> Italiano
    </a></li>
    
    <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
        data-lang="en" data-flag="gb">
        <img src="https://flagcdn.com/24x18/gb.png" width="24" alt=""> English
    </a></li>
    
    <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
        data-lang="fr" data-flag="fr">
        <img src="https://flagcdn.com/24x18/fr.png" width="24" alt=""> Français
    </a></li>
    
    <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
        data-lang="de" data-flag="de">
        <img src="https://flagcdn.com/24x18/de.png" width="24" alt=""> Deutsch
    </a></li>
    
    <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
        data-lang="es" data-flag="es">
        <img src="https://flagcdn.com/24x18/es.png" width="24" alt=""> Español
    </a></li>
</ul>
</li>

</ul>
</div>
</div>
</nav>