<x-layout title="Contatti">
    <div class="position-relative mb-2">
        <a href="{{ route('welcome') }}"
        class="btn shadow position-absolute top-0 ms-5 mt-3"
        style="
        color: var(--text-impact);
        background-color: var(--accent);
        border: 2px solid var(--text-impact);
   ">
        <i class="bi bi-arrow-left" style="
        color: var(--text-impact);"></i> Indietro
    </a>
    
    
    
    <h1 class="fw-bold text-center mt-5 mb-5" style="color: var(--text-impact);">
        Contattaci
    </h1>
</div>


<x-success />


<form action="{{ route('contacts.sendMail') }}" 
method="POST" 
enctype="multipart/form-data"
class="p-3 card shadow-wrapper mx-auto mb-5"
style="max-width: 500px; color: var(--text-color);">

@csrf

<div class="row g-3">
    
    {{-- Nome --}}
    <div class="col-12 text-start">
        <label for="name" class="form-label" style="color: var(--text-color);">Nome</label>
        <input type="text" id="name" name="name" maxlength="50"
        class="form-control @error('name') is-invalid @enderror"
        style="color: var(--text-color);" placeholder="Nome">
        @error('name') 
        <span class="small text-danger fw-bold">{{ $message }}</span>
        @enderror 
    </div>
    
    {{-- Cognome --}}
    <div class="col-12 text-start">
        <label for="surname" class="form-label" style="color: var(--text-color);">Cognome</label>
        <input type="text" id="surname" name="surname" maxlength="50"
        class="form-control @error('surname') is-invalid @enderror"
        style="color: var(--text-color);" placeholder="Cognome">
        @error('surname') 
        <span class="small text-danger fw-bold">{{ $message }}</span>
        @enderror
    </div>
    
    {{-- Mail --}}
    <div class="col-12 text-start">
        <label for="mail" class="form-label" style="color: var(--text-color);">Email</label>
        <input type="email" id="mail" name="mail"
        class="form-control @error('mail') is-invalid @enderror"
        style="color: var(--text-color);" placeholder="email@example.com">
        @error('mail') 
        <span class="small text-danger fw-bold">{{ $message }}</span>
        @enderror
    </div>
    
    {{-- Telefono --}}
    <div class="col-12 text-start">
        <label for="phone" class="form-label" style="color: var(--text-color);">Telefono</label>
        <input type="tel" id="phone" name="phone"
        class="form-control @error('phone') is-invalid @enderror"
        style="color: var(--text-color);" placeholder="+39">
        @error('phone') 
        <span class="small text-danger fw-bold">{{ $message }}</span>
        @enderror
    </div>
    
    {{-- Testo --}}
    <div class="col-12 text-start">
        <label for="body" class="form-label" style="color: var(--text-color);">Testo</label>
        <textarea name="body" id="body" rows="4"
        class="form-control @error('body') is-invalid @enderror"
        style="color: var(--text-color);" placeholder="Scrivi qui..."></textarea>
        @error('body') 
        <span class="small text-danger fw-bold">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-check mt-3 d-flex justify-content-center align-items-center">
        <input class="form-check-input me-2" 
        type="checkbox" 
        id="privacy" 
        name="privacy" 
        required
        style="width: 18px; height: 18px; border: 2px solid var(--text-color); background-color: transparent;">
        
        <label class="form-check-label text-center" for="privacy" style="color: var(--text-color);">
            Ho letto e accetto la 
            <a href="{{ route('pages.privacy') }}" target="_blank" style="color: var(--text-impact);">Privacy Policy</a>
        </label>
    </div>
    
    
    
    
    {{-- Bottone --}}
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary mt-3 px-4 py-2" style="
    color: var(--text-light);
    background-color: var(--text-impact);
    border: none;
">
        Invia Richiesta
    </button>
    
</div>

<p class="text-center" style="color: var(--text-color);">Risponderemo il prima possibile</p>
</div>
</form>

</div>
</div>
</x-layout>
<x-footer />
