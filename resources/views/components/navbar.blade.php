<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trilocale via delle Azzorre</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="light" style="background-color: var(--navbar-background-color)!important;">
    <div class="container-fluid position-relative">

        <!-- Bottone hamburger -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU SINISTRO + DESTRO -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">

            <!-- SINISTRA — HOME + FOTO -->
            <ul class="navbar-nav flex-row gap-2 me-3 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}" style="color: var(--text-light)!important;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.photos') }}" style="color: var(--text-light)!important;">Foto</a>
                </li>
            </ul>

            <!-- LOGO CENTRALE -->
            <a class="navbar-brand mx-3" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="150">
            </a>

            <!-- DESTRA — PRENOTA + CONTATTI -->
            <ul class="navbar-nav flex-row gap-2 ms-3 mt-3 mt-lg-0">
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
       aria-expanded="false" style="color: var(--text-light)!important;">
        Prenota
    </a>

    <ul class="dropdown-menu dropdown-menu-end mt-2">

    <li>
        <a class="dropdown-item d-flex align-items-center gap-2" 
           href="https://www.booking.com/hotel/it/trilocale-in-via-delle-azzorre.it.html" 
           target="_blank">
            <img src="{{ asset('images/bookinglogo.svg') }}" 
                 alt="Booking Logo" 
                 style="width: 80px; height: 50px; object-fit: contain;">
        </a>
    </li>

    <li>
        <a class="dropdown-item d-flex align-items-center gap-2" 
           href="https://www.airbnb.it/rooms/1155683144696836876?source_impression_id=p3_1763845796_P3VxiOh3M5XL3gfN" 
           target="_blank">
            <img src="{{ asset('images/airbnb.svg') }}" 
                 alt="Airbnb Logo" 
                 style="width: 80px; height: 50px; object-fit: contain;">
        </a>
    </li>

</ul>

</li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.contacts') }}" style="color: var(--text-light)!important;">Contatti</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
