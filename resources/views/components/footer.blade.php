<footer class="footer py-4 mt-auto" style="background-color:var(--navbar-background-color);">
  <div class="container d-flex justify-content-between align-items-center">

    <!-- COLONNA SINISTRA -->
    <div class="footer-left d-flex flex-column" style="color:var(--text-light); font-size:1rem;">

      <div class="mb-3 d-flex flex-column">
        <a href="{{ route('pages.privacy') }}" style="color:var(--text-light); margin-bottom:6px;">Privacy</a>
        <a href="{{ route('pages.contacts') }}" style="color:var(--text-light);">Contatti</a>
      </div>

      <div class="mb-3" style="font-size:0.9rem; line-height:1.4;">
        <div>CIN: <strong>IT058091C2UTNK9RO5</strong></div>
        <div>CIR: <strong>058091-ALT-10661</strong></div>
        <div>Prestazione energetica: <strong>Classe G</strong></div>
      </div>

    </div>

    <!-- COLONNA CENTRALE: LOGHI AIRBNB + BOOKING -->
    <div class="footer-center d-flex flex-column align-items-center" style="gap:16px;">
      <a href="https://www.airbnb.it/rooms/1155683144696836876" target="_blank">
        <img src="/images/airbnb.svg" alt="Airbnb" style="height:32px;">
      </a>
      <a href="https://www.booking.com/hotel/it/trilocale-in-via-delle-azzorre.it.html" target="_blank">
        <img src="/images/bookinglogo.svg" alt="Booking" style="height:55px;">
      </a>
    </div>

    <!-- COLONNA DESTRA: LOGO -->
    <div class="footer-logo d-flex align-items-center">
      <img src="/images/logo.png" alt="Azzorre Apartment" style="height:180px;">
    </div>

  </div>
</footer>
