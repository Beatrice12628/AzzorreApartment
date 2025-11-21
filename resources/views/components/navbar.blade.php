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
                    <a class="nav-link" href="#" style="color: var(--text-light)!important;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: var(--text-light)!important;">Foto</a>
                </li>
            </ul>

            <!-- LOGO CENTRALE -->
            <a class="navbar-brand mx-3" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="150">
            </a>

            <!-- DESTRA — PRENOTA + CONTATTI -->
            <ul class="navbar-nav flex-row gap-2 ms-3 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: var(--text-light)!important;">Prenota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: var(--text-light)!important;">Contatti</a>
                </li>
            </ul>

        </div>
    </div>
</nav>