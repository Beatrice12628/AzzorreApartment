<footer class="footer py-4 mt-auto" style="background-color:var(--navbar-background-color);">
  <div class="container">
    <div class="row align-items-center text-center text-md-start gy-4">

      <!-- SINISTRA (solo desktop/tablet) -->
      <div class="col-12 col-md-4 d-none d-md-block"
           style="color:var(--text-light); font-size:1rem;">
        <div class="mb-3">
          <a href="{{ route('pages.privacy') }}" class="d-block mb-2 text-decoration-none"
             style="color:var(--text-light);">Privacy</a>
          <a href="{{ route('pages.contacts') }}" class="d-block text-decoration-none"
             style="color:var(--text-light);">Contatti</a>
        </div>

        <div style="font-size:0.9rem; line-height:1.4;">
          <div>CIN: <strong>IT058091C2UTNK9RO5</strong></div>
          <div>CIR: <strong>058091-ALT-10661</strong></div>
          <div>Prestazione energetica: <strong>Classe G</strong></div>
        </div>
      </div>

      <!-- CENTRO (sempre visibile) -->
      <div class="col-12 col-md-4 d-flex flex-column align-items-center" style="gap:16px;">
        <a href="https://www.airbnb.it/rooms/1155683144696836876" target="_blank" rel="noopener">
          <img src="/images/airbnb.svg" alt="Airbnb" style="height:32px; max-width:100%;">
        </a>
        <a href="https://www.booking.com/hotel/it/trilocale-in-via-delle-azzorre.it.html" target="_blank" rel="noopener">
          <img src="/images/bookinglogo.svg" alt="Booking" style="height:55px; max-width:100%;">
        </a>

        <!-- BLOCCO MOBILE (appare SOLO su mobile, quindi 1 volta) -->
        <div class="d-block d-md-none w-100 mt-3"
             style="color:var(--text-light); font-size:1rem;">
          <div class="mb-3">
            <a href="{{ route('pages.privacy') }}" class="d-block mb-2 text-decoration-none"
               style="color:var(--text-light);">Privacy</a>
            <a href="{{ route('pages.contacts') }}" class="d-block text-decoration-none"
               style="color:var(--text-light);">Contatti</a>
          </div>

          <div style="font-size:0.9rem; line-height:1.4;">
            <div>CIN: <strong>IT058091C2UTNK9RO5</strong></div>
            <div>CIR: <strong>058091-ALT-10661</strong></div>
            <div>Prestazione energetica: <strong>Classe G</strong></div>
          </div>
        </div>
      </div>

      <!-- DESTRA LOGO (solo desktop/tablet) -->
      <div class="col-12 col-md-4 d-none d-md-flex justify-content-md-end justify-content-center">
        <img src="/images/logo.png" alt="Azzorre Apartment" style="height:140px; max-width:100%;">
      </div>

    </div>
  </div>
</footer>