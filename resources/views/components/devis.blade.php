@extends('layouts.app')
@section('title', 'Demander un devis - Global Tech International Corporation')
@section('description', 'Remplissez notre formulaire pour obtenir un devis rapide et personnalisé pour vos projets en électricité, automatisation, sécurité incendie et domotique.')


@section('content')
<!-- Hero Demander un Devis -->

  <section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Overlay sombre -->
    <img src="{{ asset('assets/images/19315.jpg') }}"  alt="Hero Background" id="herocontent">

    <div class="hero-opaciti-hero"></div>
    <div class="container text-center infoherocontent">
        <h1 class="fw-bold display-5 text-white">
          Demandez votre devis en ligne
        </h1>
        <p class="lead mt-3">
          Recevez un devis gratuit, rapide et personnalisé selon vos besoins.  
          <br>Un conseiller vous répond sous 24h, sans aucun engagement.
        </p>
            <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">

          <a href="#form-devis" class="btn btn-responsive-primaryl btn-lg me-2 btn-responsive">
            Remplir le formulaire
          </a>
          <a href="{{ route('contact') }}#contacteconsl" class="btn btn-outline-light btn-lg btn-responsive">
            Contacter un conseiller
          </a>
        </div>
    </div>
    
</section>

  
<section class="devis-section py-5 text-white" id="form-devis">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texte + Icône -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start text-dark">
                <div class="mb-3">
                    <i class="fas fa-lightbulb fa-3x"></i>
                </div>
                <h2 class="fw-bold mb-3">Propulsez votre projet dès aujourd'hui !</h2>
                <p class="lead mb-4">Remplissez le formulaire ci-contre et obtenez un devis personnalisé en quelques minutes.</p>
                <p>Nos experts vous répondront rapidement avec des solutions adaptées à vos besoins.</p>
            </div>

            <!-- Formulaire -->
            <div class="col-lg-6" id="form-devis">
                <div class="card shadow-lg rounded p-4 bg-white text-dark">
                    <h4 class="mb-3">Demander un devis</h4>
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
                <form action="{{ route('devis.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="projet" class="form-label">Votre projet</label>
                        <textarea class="form-control" id="projet" name="message" rows="3" placeholder="Décrivez votre projet" required></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-responsive-primaryl btn-lg w-100">Envoyer ma demande</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
