@extends('layouts.app')

@section('title', $services_detail->nom_service . ' - Global Tech International Corporation')
@section('description', $services_detail->description)
<meta property="og:image" content="{{ asset('storage/' . $services_detail->image) }}">
<meta property="og:url" content="{{ url()->current() }}">
@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('storage/' . $services_detail->image) }}" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" alt="Hero Background" style="z-index:-2;">

    <!-- Overlay sombre -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index:-1;"></div>

    <!-- Contenu -->
    <div class="container  infoherocontent">
        <h1 class="fw-bold display-5">{{ $services_detail->nom_service }}</h1>
        <p class="lead">
            Nous accompagnons entreprises, institutions et particuliers dans la mise en place de solutions électriques modernes, sécurisées et durables.
        </p>
        <div class="mt-4">
            <a href="#servicessection" class="btn btn-responsive-primaryl btn-lg me-2">Découvrir</a>
        </div>
    </div>
</section>
<!-- Section Service -->
<section class="container py-5" id="services">
    <div class="row align-items-center mb-5">
      <!-- Image illustrative -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="{{ asset('storage/' . $services_detail->image) }}" class="img-fluid rounded shadow" alt="{{ $services_detail->nom_service }}">
      </div>
      
      <!-- Description -->
      
      <div class="col-lg-6 mb-5">
        <h2 class="fw-bold" style="color:#0E3253;">{{ $services_detail->nom_service }}</h2>
        <p class="text-muted">
         
          {{ $services_detail->description_service }}
        </p>
        
        <a href="https://wa.me/{{ $contact_tel }}?text=Bonjour%20je%20souhaite%20plus%20d%27infos" 
   class="btn btn-success" 
   target="_blank">
  Contacter nous via WhatsApp
</a>

      </div>
    </div>
</section>
@include('partials.ctmain')
@include('partials.newsletter')
@endsection