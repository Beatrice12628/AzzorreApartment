<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trilocale via delle Azzorre</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .navbar-nav li { list-style: none !important; }

    /* Nasconde elementi Google */
    .goog-te-banner-frame.skiptranslate { display: none !important; }
    body { top: 0 !important; }
    .goog-tooltip, .goog-tooltip:hover { display: none !important; }
    .goog-text-highlight { background: none !important; }
    #google_translate_element { display: none !important; }
  </style>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="light" style="background-color: var(--navbar-background-color)!important;">
    <div class="container-fluid position-relative">

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">

            <!-- SINISTRA -->
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

            <!-- DESTRA -->
            <ul class="navbar-nav flex-row gap-2 ms-3 mt-3 mt-lg-0">

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

                <!-- CONTATTI -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.contacts') }}" style="color: var(--text-light)!important;">Contatti</a>
                </li>

                <!-- LINGUE — spostato un po’ a destra -->
                <li class="nav-item dropdown ms-4">
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
                            <img src="https://flagcdn.com/24x18/it.png" width="24"> Italiano
                        </a></li>

                        <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
                            data-lang="en" data-flag="gb">
                            <img src="https://flagcdn.com/24x18/gb.png" width="24"> English
                        </a></li>

                        <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
                            data-lang="fr" data-flag="fr">
                            <img src="https://flagcdn.com/24x18/fr.png" width="24"> Français
                        </a></li>

                        <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
                            data-lang="de" data-flag="de">
                            <img src="https://flagcdn.com/24x18/de.png" width="24"> Deutsch
                        </a></li>

                        <li><a class="dropdown-item lang-select d-flex align-items-center gap-2"
                            data-lang="es" data-flag="es">
                            <img src="https://flagcdn.com/24x18/es.png" width="24"> Español
                        </a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- GOOGLE TRANSLATE HIDDEN -->
<div id="google_translate_element" style="display:none;"></div>

<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'it',
        includedLanguages: 'it,en,fr,de,es',
        autoDisplay: false
    }, 'google_translate_element');
}

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".lang-select");
    const flagImg = document.getElementById("current-flag");
    const langLabel = document.getElementById("current-lang-label");

    items.forEach(item => {
        item.addEventListener("click", function () {
            const lang = this.dataset.lang;
            const flag = this.dataset.flag;

            flagImg.src = `https://flagcdn.com/24x18/${flag}.png`;
            langLabel.textContent = lang.toUpperCase();

            translateTo(lang);
        });
    });
});

function translateTo(lang) {
    const select = document.querySelector("select.goog-te-combo");

    if (select) {
        select.value = lang;
        select.dispatchEvent(new Event("change"));
    }
}
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
