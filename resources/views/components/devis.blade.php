@extends('layouts.app')
@section('title','Devis')
@section('content')
<!-- Hero Demander un Devis -->

  <section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Overlay sombre -->
    <img src="{{ asset('assets/images/19315.jpg') }}" class="w-100 h-100 position-absolute top-0 start-0 object-fit-cover" alt="Hero Background" style="z-index:-2;">

    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6); z-index:-1;"></div>
    <div class="container text-center">
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
            <div class="col-lg-6">
                <div class="card shadow-lg rounded p-4 bg-white text-dark">
                    <h4 class="mb-3">Demander un devis</h4>
                    <form>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                        </div>
                        <div class="mb-3">
                            <label for="projet" class="form-label">Votre projet</label>
                            <textarea class="form-control" id="projet" rows="3" placeholder="Décrivez votre projet" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-responsive-primaryl btn-lg w-100">Envoyer ma demande</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
