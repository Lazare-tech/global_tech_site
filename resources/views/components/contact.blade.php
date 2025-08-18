@extends('layouts.app')
@section('title','contacts')
@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('assets/images/IMG-20250815-WA0023.jpg') }}" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" alt="Hero Background" style="z-index:-2;">

    <!-- Overlay sombre -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index:-1;"></div>

    <!-- Contenu -->
    <div class="container">
        <h1 class="fw-bold display-4">Nous vous repondons </h1>
        <p class="lead">
            Nous apprécions vos retours et sommes là pour vous aider avec toutes vos
            questions.
        </p>
        <div class="mt-4">
            <a href="" class="btn btn-primary btn-lg me-2">Découvrir nos solutions</a>
            <a href="" class="btn btn-warning text-white btn-lg">Demander un devis</a>
        </div>
    </div>
</section>
<section class="">
    <div class="container py-5">
        <div class="row">
      
          <!-- Formulaire de contact -->
          <div class="col-12 col-lg-6 order-2 order-lg-1 py-5 contact-form">
            <div class="bg-white border rounded shadow-sm p-4 p-xl-5">
              <form method="post" enctype="multipart/form-data">
                
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="nom">
                      <i class="fas fa-user"></i> Nom <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="nom" class="form-control" placeholder="Votre nom" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="email">
                      <i class="fas fa-envelope"></i> Email <span class="text-danger">*</span>
                    </label>
                    <input type="email" id="email" class="form-control" placeholder="Votre email" required>
                  </div>
                </div>
      
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="telephone">
                      <i class="fas fa-phone-alt"></i> Téléphone <span class="text-danger">*</span>
                    </label>
                    <input type="tel" id="telephone" class="form-control" placeholder="Votre numéro" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="objet">
                      <i class="fas fa-tag"></i> Objet <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="objet" class="form-control" placeholder="Objet de votre message" required>
                  </div>
                </div>
      
                <div class="row mb-3">
                  <div class="col-12">
                    <label class="form-label" for="message">
                      <i class="fas fa-comment-alt"></i> Message <span class="text-danger">*</span>
                    </label>
                    <textarea id="message" class="form-control" rows="4" placeholder="Votre message" required></textarea>
                  </div>
                </div>
      
                <div class="col-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                      <i class="fas fa-paper-plane"></i> Envoyer
                    </button>
                  </div>
                </div>
      
              </form>
            </div>
          </div>
      
          <!-- Carte et réseaux sociaux -->
          <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="social-card bg-light p-4 rounded shadow-sm text-center">
              <h6 class="fw-bold mb-3">Contactez-nous comme vous voulez !</h6>
              <a href="https://wa.me/1234567890?text=Bonjour,%20je%20souhaite%20en%20savoir%20plus"
                 class="btn btn-success btn-sm d-block"
                 target="_blank" rel="noopener noreferrer">
                <i class="bi bi-whatsapp"></i> Contactez-nous via WhatsApp
              </a>
            </div>
      
            <div class="card mt-4 mb-3 shadow-sm">
              <h5 class="card-title p-3">Trouvez-nous sur la carte</h5>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15586.868723957801!2d-1.539952767526978!3d12.401856862952236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2e9524ab18bdbf%3A0xa4af7b9438417197!2sTangen%2C%20Ouagadougou!5e0!3m2!1sfr!2sbf!4v1711723664675!5m2!1sfr!2sbf"
                height="290"
                style="width: 100%; border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
      
        </div>
      </div>
      
</section>
@include('partials.newsletter')
@endsection