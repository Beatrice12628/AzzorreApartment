<nav class="navbar navbar-expand-lg"
     style="background-color: var(--navbar-background-color)!important; position:sticky; top:0; z-index:2000;">

  <div class="container-fluid d-flex align-items-center position-relative">

    <!-- HAMBURGER (mobile) -->
    <button class="navbar-toggler position-relative"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
            style="z-index:3003;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- LOGO MOBILE PERFETTAMENTE CENTRATO -->
    <a class="navbar-brand d-lg-none position-absolute top-50 start-50 translate-middle"
       href="{{ route('welcome') }}"
       style="height:130px; margin:0; z-index:3002;">
      <img src="{{ asset('images/logo.png') }}"
           alt="Logo"
           style="height:130px; width:auto;">
    </a>

    <!-- MENU COLLASSABILE -->
    <div class="collapse navbar-collapse justify-content-center"
         id="navbarMenu"
         style="z-index:3000;">

      <!-- SINISTRA -->
      <ul class="navbar-nav flex-column flex-lg-row gap-2 me-lg-3 mt-3 mt-lg-0 align-items-lg-center">

        <li class="nav-item">
          <a class="nav-link"
             href="{{ route('welcome') }}"
             style="color: var(--text-light)!important;">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link"
             href="{{ route('pages.photos') }}"
             style="color: var(--text-light)!important;">
            Foto
          </a>
        </li>

      </ul>

      <!-- LOGO DESKTOP -->
      <a class="navbar-brand mx-3 d-none d-lg-block"
         href="{{ route('welcome') }}">
        <img src="{{ asset('images/logo.png') }}"
             alt="Logo"
             style="height:120px; width:auto;">
      </a>

      <!-- DESTRA -->
      <ul class="navbar-nav flex-column flex-lg-row gap-2 ms-lg-3 mt-3 mt-lg-0 align-items-lg-center">

        <!-- PRENOTA -->
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle"
             href="#"
             role="button"
             data-bs-toggle="dropdown"
             aria-expanded="false"
             style="color: var(--text-light)!important;">
            Prenota
          </a>

          <ul class="dropdown-menu dropdown-menu-end mt-2">

            <li>
              <a class="dropdown-item d-flex align-items-center gap-2"
                 href="https://www.booking.com/hotel/it/trilocale-in-via-delle-azzorre.it.html"
                 target="_blank"
                 rel="noopener">
                <img src="{{ asset('images/bookinglogo.svg') }}"
                     alt="Booking Logo"
                     style="width:80px; height:50px; object-fit:contain;">
                <span>Booking</span>
              </a>
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center gap-2"
                 href="https://www.airbnb.it/rooms/1155683144696836876"
                 target="_blank"
                 rel="noopener">
                <img src="{{ asset('images/airbnb.svg') }}"
                     alt="Airbnb Logo"
                     style="width:80px; height:50px; object-fit:contain;">
                <span>Airbnb</span>
              </a>
            </li>

            <li>
              <a class="dropdown-item"
                 href="{{ route('pages.contacts') }}">
                Contattaci
              </a>
            </li>

          </ul>

        </li>

      </ul>

    </div>

  </div>

</nav>