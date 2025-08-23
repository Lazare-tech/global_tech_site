<!-- ===================  NEWSLETTER  =================== -->
<section class="container-fluid py-5   text-white" style="background: #0c0c0c;">
    <div class="container">
      <div class="mx-auto text-center" style="max-width: 700px;">
        <!-- Ruban -->
        <span class="badge rounded-pill bg-light text-primary mb-3">
          🎯 Restez informé
        </span>
  
        <h2 class="fw-bold">Inscrivez-vous à notre newsletter</h2>
     
  
        <!-- Formulaire Bootstrap -->
        <form action="#" method="post" class="needs-validation" novalidate>
          <div class="row g-2 justify-content-center">
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-text bg-white text-primary">
                  <i class="fas fa-envelope"></i>
                </span>
                <input type="email" 
                       class="form-control" 
                       name="email" 
                       placeholder="Votre email" 
                       required 
                       autocomplete="email">
                <div class="invalid-feedback text-start">
                  Veuillez entrer un email valide.
                </div>
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