@extends('layouts.app')
@section('title','Nos réalisations')

@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('storage/' .$realisations_detail->image) }}" class="" alt="{{ $realisations_detail->titre }}" id="herocontent">

    <!-- Overlay sombre -->
    <div class="hero-opaciti-hero"></div>

    <!-- Contenu -->
    <div class="container  infoherocontent">
        <h1 class="fw-bold display-4">{{ $realisations_detail->titre }}</h1>
        <p class="lead">
            Nous accompagnons entreprises, institutions et particuliers dans la mise en place de solutions électriques modernes, sécurisées et durables.
        </p>
        <div class="mt-4">
            <a href="" class="btn btn-responsive-primaryl btn-lg me-2">Découvrir</a>
        </div>
    </div>
</section>
<!-- Section Service -->
<section class="container py-5">
    <div class="row align-items-center mb-5">
      <!-- Image illustrative -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('storage/' . $realisations_detail->image) }}" class="img-fluid rounded shadow project-imaged" alt="{{ $realisations_detail->titre }}">
      </div>
      
      <!-- Description -->
      
      <div class="col-lg-6">
        <h2 class="fw-bold" style="color:#0E3253;">{{ $realisations_detail->titre }}</h2>
        <p class="text-muted">
         
          {{ $realisations_detail->description }}
        </p>
        {{-- <ul class="list-unstyled">
          <li><i class="fas fa-check-circle text-success me-2"></i> Études et conception de réseaux électriques</li>
          <li><i class="fas fa-check-circle text-success me-2"></i> Installation et mise en service</li>
          <li><i class="fas fa-check-circle text-success me-2"></i> Maintenance préventive et corrective</li>
        </ul> --}}
        <a href="#" class="btn btn-success">Contacter nous via whatsApp</a>
      </div>
    </div>
  
  
  <!-- Images sur le terrain -->
  <div class="text-center mb-4">
    <h3 class="fw-bold" style="color:#0E3253;">Quelques images sur le terrain</h3>
    <p class="text-muted">Aperçu de nos réalisations pendant ce service</p>
  </div>

  <div class="row g-4">
  @foreach ($realisations_images->realisationImages as $image )
    
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid rounded shadow-sm project-imagesim" alt="Travaux terrain 1">
    </div>
    @endforeach

  </section>
@include('partials.ctmain')
@endsection