<x-layout title="Azzorre Appartamenti">
    <div class="hero-wrapper">
        <img src="{{ asset('images/salottoHero.jpg') }}" alt="AzzorreApartment" class="hero-img">
        <img src="{{ asset('images/letto.jpg') }}" alt="AzzorreApartment" class="hero-img">
        <img src="{{ asset('images/cucina.jpg') }}" alt="AzzorreApartment" class="hero-img">
    </div>
    
    <div class="text-center mt-5 mb-5 px-3">
        <h1 style="color: var(--text-impact); font-size: 2.5rem; font-weight: 700;">
            Benvenuti ad Azzorre Apartment
        </h1>
        
        <p style="color: var(--text-color); font-size: 1.2rem; max-width: 800px; margin: 1.5rem auto;">
            A soli <strong>1 km dalla Spiaggia di Ostia Lido</strong>, il nostro trilocale situato in Via delle Azzorre
            offre un ambiente moderno, luminoso e ideale per chi desidera vivere il litorale romano in totale relax.
            La struttura dispone di <strong>balcone</strong>, <strong>WiFi gratuito</strong> e 
            <strong>parcheggio privato</strong>, rendendola perfetta per soggiorni sia brevi che prolungati.
        </p>
        
        <p style="color: var(--text-color); font-size: 1.2rem; max-width: 800px; margin: 1.5rem auto;">
            L’appartamento, completamente climatizzato e arredato con cura, include:
        </p>
        
        <ul style="color: var(--text-color); list-style: none; padding: 0; font-size: 1.15rem; line-height: 1.8;">
            <li><strong style="color: var(--text-impact)">•</strong> Due camere da letto accoglienti</li>
            <li><strong style="color: var(--text-impact)">•</strong> Un ampio soggiorno perfetto per rilassarsi</li>
            <li><strong style="color: var(--text-impact)">•</strong> Una cucina attrezzata con frigorifero, utensili e macchina da caffè</li>
            <li><strong style="color: var(--text-impact)">•</strong> Due bagni moderni con doccia e bidet</li>
            <li><strong style="color: var(--text-impact)">•</strong> Asciugamani e biancheria inclusi</li>
        </ul>
    </div>
    
    
    <hr class="my-5" style="border: none; border-top: 4px solid var(--color-simple); opacity: 1; width: 80%; margin: 3rem auto;">
    
    <div class="container my-5">
        
        <!-- Titolo centrato -->
        <h2 class="text-center mb-5 mt-5" style="color: var(--text-impact);">
            Dove siamo <i class="bi bi-geo-alt-fill"></i>
        </h2>
        
        <div class="row align-items-center">
            
            
            <!-- MAPPA A SINISTRA -->
            <div class="col-lg-6 mb-4">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.084868608337!2d12.263557975956532!3d41.740262271257215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325f00353476e77%3A0xb37d76e6fe9336a1!2sVia%20delle%20Azzorre%2C%20374%2C%2000121%20Roma%20RM!5e0!3m2!1sit!2sit!4v1763746712407!5m2!1sit!2sit" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <!-- TESTO A DESTRA -->
        <!-- TESTO A DESTRA -->
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h4 style="color: var(--text-impact);">Nei Dintorni</h4>
            
            <p style="color: var(--text-color); font-size: 1.1rem;">
                <i class="bi bi bi-train-front" style="color: var(--text-impact);"></i>
                A circa 23 km dal Palalottomatica e dalla Stazione Metro EUR Fermi, entrambe facilmente raggiungibili in auto.
            </p>
            
            <p style="color: var(--text-color); font-size: 1.1rem;">
                <i class="bi bi-airplane" style="color: var(--text-impact);"></i>
                L’Aeroporto di Roma Fiumicino si trova a soli 8 km, rendendo la struttura ideale per chi arriva da fuori città.
            </p>
            
            <p style="color: var(--text-color); font-size: 1.1rem;">
                <i class="bi bi-tsunami" style="color: var(--text-impact);"></i>
                A 1 km dalla Spiaggia di Ostia Lido, perfetta per godersi mare e relax.
            </p>

            <p style="color: var(--text-color); font-size: 1.1rem;">
                <i class="bi bi-shop" style="color: var(--text-impact);"></i>
                A 13 km dal centro commerciale Parco Leonardo e Parco Da Vinci per lo shopping e l'intrattenimento.
            </p>
        </div>
        
    </div>
    <hr class="my-5" style="border: none; border-top: 4px solid var(--text-impact); opacity: 1; width: 80%; margin: 3rem auto;">
    
    <div class="container mb-5 mt-5">
        
        
    <h2 class="text-center mb-5 mt-5" style="color: var(--text-impact);">
            Dicono di noi <i class="bi bi-chat-heart-fill"></i>
        </h2>
    
    <x-carousel />
    
    </div>
 
</x-layout>

<x-footer />