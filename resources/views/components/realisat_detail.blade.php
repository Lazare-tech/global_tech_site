@extends('layouts.app')
@section('title','Nos réalisations')

@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('assets/images/IMG-20250815-WA0023.jpg') }}" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" alt="Hero Background" style="z-index:-2;">

    <!-- Overlay sombre -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index:-1;"></div>

    <!-- Contenu -->
    <div class="container">
        <h1 class="fw-bold display-4">Installation solaire</h1>
        <p class="lead">
            Nous accompagnons entreprises, institutions et particuliers dans la mise en place de solutions électriques modernes, sécurisées et durables.
        </p>
        <div class="mt-4">
            <a href="" class="btn btn-primary btn-lg me-2">Découvrir nos solutions</a>
            <a href="" class="btn btn-warning text-white btn-lg">Demander un devis</a>
        </div>
    </div>
</section>
<!-- Section Service -->
<section class="container py-5">
    <div class="row align-items-center mb-5">
      <!-- Image illustrative -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('assets/images/ingenierie_securite.jpg') }}" class="img-fluid rounded shadow" alt="Illustration du service">
      </div>
      
      <!-- Description -->
      <div class="col-lg-6">
        <h2 class="fw-bold" style="color:#0E3253;">Installation solaire</h2>
        <p class="text-muted">
          Nous proposons des solutions électriques fiables et sécurisées pour les particuliers, entreprises et institutions.
          Nos services couvrent la conception, l’installation et la maintenance des systèmes électriques, avec un haut niveau de qualité
          et de sécurité.
        </p>
        <ul class="list-unstyled">
          <li><i class="fas fa-check-circle text-success me-2"></i> Études et conception de réseaux électriques</li>
          <li><i class="fas fa-check-circle text-success me-2"></i> Installation et mise en service</li>
          <li><i class="fas fa-check-circle text-success me-2"></i> Maintenance préventive et corrective</li>
        </ul>
        <a href="#" class="btn btn-success">Contacter nous via whatsApp</a>
      </div>
    </div>
  
  
  <!-- Images sur le terrain -->
  <div class="text-center mb-4">
    <h3 class="fw-bold" style="color:#0E3253;">Quelques images sur le terrain</h3>
    <p class="text-muted">Aperçu de nos réalisations pendant ce service</p>
  </div>

  <div class="row g-4">
    <div class="col-md-4">
      <img src="{{ asset('assets/images/electronique_puissance.jpg') }}" class="img-fluid rounded shadow-sm"            style="height: 250px; object-fit: cover;" 
           alt="Travaux terrain 1">
    </div>
    <div class="col-md-4">
      <img src="{{ asset('assets/images/systeme_courant_faible.jpg') }}" class="img-fluid rounded shadow-sm"            style="height: 250px; object-fit: cover;" 
           alt="Travaux terrain 2" >
    </div>
    <div class="col-md-4">
      <img src="{{ asset('assets/images/work1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Travaux terrain 3"  style="height: 250px; object-fit: cover;" 
           alt="Travaux terrain 3">
    </div>
    <!--second linge-->
    <div class="col-md-4">
        <img src="{{ asset('assets/images/work2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Travaux terrain 1"  style="height: 250px; object-fit: cover;" 
           alt="Travaux terrain 4">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('assets/images/work3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Travaux terrain 1"  style="height: 250px; object-fit: cover;" 
           alt="Travaux terrain 5">
      </div>
      <div class="col-md-4">
        <img src="{{ asset('assets/images/hist_free.jpg') }}" class="img-fluid rounded shadow-sm" alt="Travaux terrain 1"  style="height: 250px; object-fit: cover;" 
        alt="Travaux terrain 6">
      </div>
  
  </section>
@include('partials.ctaskmain')
@include('partials.ctmain')
@endsection