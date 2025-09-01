<!-- ===================  NEWSLETTER  =================== -->
<section class="container-fluid py-5   text-white" style="background: linear-gradient(135deg, #0A2342, #030e14);
">
    <div class="container" id="newsletterForm" >
      <div class="mx-auto text-center" style="max-width: 700px;">
        <!-- Ruban -->
        <span class="badge rounded-pill bg-light text-primary mb-3">
          🎯 Restez informé
        </span>
  
        <h2 class="fw-bold">Inscrivez-vous à notre newsletter</h2>
     
  
        <!-- Formulaire Bootstrap -->
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('newsletter.store') }}" method="post">
          <div class="row g-2 justify-content-center">
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-text bg-white text-primary">
                  <i class="fas fa-envelope"></i>
                </span>
                @csrf
                
                <input type="email" 
                       class="form-control" 
                       name="email" 
                       placeholder="Votre email" 
                       required 
                       >
                 
              </div>
            </div>
            <div class="col-md-3 d-grid">
              <button type="submit" class="btn btn-dark bg-white text-dark fw-bold">
                S’inscrire
              </button>
            </div>
          </div>
  
         
  
          <!-- Honeypot caché -->
          <input type="text" name="_gotcha" class="d-none" tabindex="-1" autocomplete="off">
  
          <p class="small text-light opacity-75 mt-3">
            Vous pourrez vous désabonner à tout moment via le lien présent dans nos emails.
          </p>
        </form>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Vérifie si un message Laravel est présent
        const form = document.getElementById("newsletterForm");
        const hasError = document.querySelector(".invalid-feedback");
        const hasSuccess = document.querySelector(".alert-success");
    
        if ((hasError && hasError.innerText.trim() !== "") || hasSuccess) {
            if (form) {
                window.location.hash = "newsletterForm";
            }
        }
    });
    </script>
    