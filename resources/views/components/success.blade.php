@if (session()->has('success'))
    <div class="alert alert-success mx-auto" style="max-width: 600px;">
        {{ session('success') }}
    </div>   
@endif
