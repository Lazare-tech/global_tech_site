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
        <h1 class="fw-bold display-4">Construisons ensemble l'avenir numérique</h1>
        <p class="lead">Des solutions innovantes pour propulser votre entreprise vers le succès.</p>
        <div class="mt-4">
            <a href="" class="btn btn-primary btn-lg me-2">Découvrir nos solutions</a>
            <a href="" class="btn btn-warning text-white btn-lg">Demander un devis</a>
        </div>
    </div>
</section>
@include('partials.newsletter')
@endsection