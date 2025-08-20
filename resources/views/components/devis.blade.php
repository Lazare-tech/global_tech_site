@extends('layouts.app')
@section('title','Devis')
@section('content')
<section class="devis-section py-5 text-white" style="background: linear-gradient(135deg, #0056A6, #030e14);">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texte + Icône -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
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
@include('partials.newsletter')
@endsection
