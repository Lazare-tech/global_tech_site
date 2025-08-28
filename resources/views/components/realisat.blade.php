@extends('layouts.app')
@section('title','Nos réalisations')

@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('assets/images/IMG-20250815-WA0023.jpg') }}" alt="Hero Background" id="herocontent">

    <!-- Overlay sombre -->
    <div class="hero-opaciti-hero"></div>

    <!-- Contenu -->
    <div class="container  infoherocontent"">
        <h1 class="fw-bold display-4">Nos réalisations</h1>
        <p class="lead">
            Nous accompagnons entreprises, institutions et particuliers dans la mise en place de solutions électriques modernes, sécurisées et durables.
        </p>
        <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">
          <a href="{{ route('realisation') }}#portofolio-section" class="btn btn-responsive-primaryl btn-lg me-2">Explorer nos projets</a>
             </div>
    </div>
</section>
  <!-- Section Chiffres Clés -->
<section class="container py-5" id="chiffres-cles">
    <div class="row g-4 text-center">
  
      <!-- Projets réalisés -->
      <div class="col-md-3">
        <div class="card shadow-sm p-4 border-0 rounded">
          <i class="fas fa-project-diagram fa-2x text-warning mb-3"></i>
          <h2 class="fw-bold text-warning counter" data-target="150" data-suffix="+">0</h2>
          <p class="text-muted">Projets réalisés</p>
        </div>
      </div>
  
      <!-- Années d'expérience -->
      <div class="col-md-3">
        <div class="card shadow-sm p-4 border-0 rounded">
          <i class="fas fa-history fa-2x text-primary mb-3"></i>
          <h2 class="fw-bold text-primary counter" data-target="10" data-suffix="+">0</h2>
          <p class="text-muted">Années d'expérience</p>
        </div>
      </div>
  
      <!-- Clients satisfaits -->
      <div class="col-md-3">
        <div class="card shadow-sm p-4 border-0 rounded">
          <i class="fas fa-users fa-2x text-success mb-3"></i>
          <h2 class="fw-bold text-success counter" data-target="50" data-suffix="+">0</h2>
          <p class="text-muted">Clients satisfaits</p>
        </div>
      </div>
  
      <!-- Zones d'intervention -->
      <div class="col-md-3">
        <div class="card shadow-sm p-4 border-0 rounded">
          <i class="fas fa-map-marker-alt fa-2x text-danger mb-3"></i>
          <h2 class="fw-bold text-danger counter" data-target="8">0</h2>
          <p class="text-muted">Zones d'intervention</p>
        </div>
      </div>
  
    </div>
  </section>
  <!-- Section Réalisations -->
<section class="container py-5" id="portofolio-section">

    <!-- Header -->
    <div class="row mb-4 align-items-center">
      <div class="col-6">
        <h3 class="fw-bold" style="color:#0E3253;">Quelques réalisations</h3>
      </div>
      <div class="col-6 text-end">
        <button class="btn btn-dark" id="toggleProjects">Voir tous nos réalisations</button>
      </div>
    </div>
  
    <!-- Filtre par date -->
    <form id="filterForm" class="row g-2 mb-4">
      <div class="col-md-2">
        <input type="date" id="startDate" class="form-control" placeholder="Date début">
      </div>
      <div class="col-md-2">
        <input type="date" id="endDate" class="form-control" placeholder="Date fin">
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-responsive-primaryl w-100">Filtrer</button>
      </div>
    </form>
  
    <!-- Grille des projets -->
    <div class="row g-4" id="projectsContainer">
  
      <!-- Projet 1 -->
      <div class="col-md-4 project-card" data-year="2023">
        <div class="card shadow-sm h-100">
          <img src="assets/images/systeme_courant_faible.jpg" class="card-img-top" alt="Installation solaire">
          <div class="card-body">
            <h5 class="card-title">Installation Solaire</h5>
            <p class="card-text text-muted">Site industriel - Ouagadougou (2023)</p>
            <a href="{{ route('detail_realisation') }}" class="btn btn-responsive-primaryl">En savoir plus</a>
          </div>
        </div>
      </div>
  
      <!-- Projet 2 -->
      <div class="col-md-4 project-card" data-year="2022">
        <div class="card shadow-sm h-100">
          <img src="assets/images/electronique_puissance.jpg" class="card-img-top" alt="Câblage immeuble">
          <div class="card-body">
            <h5 class="card-title">Câblage d’un Immeuble</h5>
            <p class="card-text text-muted">Bureaux - Bobo Dioulasso (2022)</p>
            
          </div>
        </div>
      </div>
  
      <!-- Projet 3 -->
      <div class="col-md-4 project-card" data-year="2021">
        <div class="card shadow-sm h-100">
          <img src="assets/images/ingenierie_securite.jpg" class="card-img-top" alt="Poste électrique">
          <div class="card-body">
            <h5 class="card-title">Poste Électrique</h5>
            <p class="card-text text-muted">Projet gouvernemental - Koudougou (2021)</p>
          </div>
        </div>
      </div>
  
      <!-- Projet 4 (caché par défaut) -->
      <div class="col-md-4 project-card d-none extra-project" data-year="2020">
        <div class="card shadow-sm h-100">
          <img src="assets/images/projet4.jpg" class="card-img-top" alt="Maintenance électrique">
          <div class="card-body">
            <h5 class="card-title">Maintenance Électrique</h5>
            <p class="card-text text-muted">Entreprise privée - Ouagadougou (2020)</p>
          </div>
        </div>
      </div>
  
      <!-- Projet 5 (caché par défaut) -->
      <div class="col-md-4 project-card d-none extra-project" data-year="2019">
        <div class="card shadow-sm h-100">
          <img src="assets/images/projet5.jpg" class="card-img-top" alt="Projet solaire">
          <div class="card-body">
            <h5 class="card-title">Projet Solaire</h5>
            <p class="card-text text-muted">Zone rurale - Fada (2019)</p>
          </div>
        </div>
      </div>
  
    </div>
  </section>

  <!-- Témoignages -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="fw-bold mb-4 text-center">Ils nous font confiance</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 bg-white shadow rounded">
            <p>"Service impeccable et équipe professionnelle. Nous sommes très satisfaits."</p>
            <h6 class="fw-bold mb-0">Entreprise XYZ</h6>
            <small>Directeur Technique</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-white shadow rounded">
            <p>"Installation rapide et conforme aux normes de sécurité."</p>
            <h6 class="fw-bold mb-0">ONG Énergie Verte</h6>
            <small>Responsable Projets</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-white shadow rounded">
            <p>"Une équipe réactive et des solutions adaptées à nos besoins."</p>
            <h6 class="fw-bold mb-0">Ministère des Infrastructures</h6>
            <small>Chef de Projet</small>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('partials.ctmain', ['bg' => 'linear-gradient(135deg, #0056A6, #030e14)'])

@include('partials.newsletter')
@endsection