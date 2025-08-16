@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-overlay"></div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/images/work1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-center">
                    <h1 class="fw-bold text-white">Construisons ensemble l'avenir numérique</h1>
                    <p>Des solutions innovantes pour propulser votre entreprise vers le succès.</p>
                    <div class="mt-3">
                        <a href="" class="btn btn-primary solu btn-lg">Découvrir nos solutions</a>

                        <a href="" class="btn btn-warning warn text-white btn-lg me-2">Demander un devis</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/images/work2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-center">
                    <h1 class="fw-bold text-white">Des services sur mesure</h1>
                    <p>Nous adaptons chaque projet à vos besoins spécifiques.</p>
                    <div class="mt-3">
                        <a href="" class="btn btn-primary solu btn-lg">Découvrir nos solutions</a>

                        <a href="" class="btn btn-warning warn text-white btn-lg me-2">Demander un devis</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/images/work3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption text-center">
                    <h1 class="fw-bold text-white">Votre partenaire de confiance</h1>
                    <p>Un accompagnement de bout en bout pour vos projets digitaux.</p>
                    <div class="mt-3">
                        <a href="" class="btn btn-primary solu btn-lg">Découvrir nos solutions</a>

                        <a href="" class="btn btn-warning warn text-white btn-lg me-2">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class='container'>
        <h3 class="pt-4 fw-bold" style="color:#0E3253;">Qui sommes-nous?</h3>
        <div class="row">
            <div class="col-lg-6">
                <p>
                    Velit amet dolore magna officia cupidatat laboris velit. Officia et elit id incididunt non qui occaecat do
                    labore ea. Do ullamco consequat labore duis laboris eiusmod ut esse et ea pariatur aliquip Lorem cupidatat.
                    Nisi magna qui pariatur cupidatat incididunt exercitation enim. Anim minim anim eu nisi aute labore
                    excepteur do. Id eu sit tempor labore ut minim ipsum.
                </p>
    
                <!-- Points forts -->
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Expertise de plus de 10 ans</li>
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Une équipe qualifiée et engagée</li>
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Des solutions adaptées à vos besoins</li>
                </ul>
    
                <!-- Bouton -->
                <a href="#about" class="btn btn-dark mt-3">Notre histoire</a>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/global_groupe.jpg') }}" alt="Notre équipe" class="img-fluid">
                </div>
            </div>
        </div>


    </section>

    <section class="container pt-5">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold" style="color:#0E3253;">Nos Services</h2>
                <p class="text-muted">Des solutions innovantes et fiables adaptées à vos besoins</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="#" class="btn btn-dark">Voir tous nos services</a>
            </div>
        </div>

        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <!-- Header avec titre stylisé -->
                    <div class="bg-dark p-3 d-flex align-items-center">
                        <h6 class="m-0 text-white  px-3 py-2"
                            style="background: #d7910b; 
                                   position: relative; 
                                   display: inline-block; 
                                   border-radius: 0 5px 5px 0;">
                            Distribution et alimentation électrique
                            <!-- effet plié -->
                            <span style="content:''; position:absolute; left:-15px; top:0; 
                                         width:0; height:0; 
                                         border-top: 18px solid transparent; 
                                         border-bottom: 18px solid transparent; 
                                         border-right:15px solid #d7910b"></span>
                        </h6>
                    </div>
                
                    <!-- Contenu -->
                    <div class="card-body text">
                        <p class="text-muted">
                            Installation et maintenance de réseaux électriques fiables pour vos infrastructures.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:40px; height:auto;">
                
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn btn-primary btn-sm mt-3 float-end">
                            Plus de détails
                        </a>
                    </div>
                </div>
                
                
                
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-dark p-3">

                    <span class="fw-bold text-white ms-3">Systèmes de courants faibles et communications</span>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mt-2">
                            Solutions modernes pour vos réseaux informatiques, téléphoniques et domotiques.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:40px; height:auto;">
 <!-- bouton un peu décalé à droite -->
 <a href="#" class="btn btn-primary btn-sm mt-2 float-end">
    Plus de détails
</a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-secondary p-3">
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:40px; height:auto;">
                        <span class="fw-bold text-white ms-3">                        Électronique de puissance et systèmes de contrôle
                        </span>

                    </div>
                    <div class="card-body text-center">
                        <p class="text-muted mt-2">
                            Conception et intégration de systèmes de contrôle et de gestion de l’énergie.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-secondary p-3">
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:40px; height:auto;">
                        <span class="fw-bold text-white ms-3">Ingénierie de la sécurité
                        </span>

                    </div>                   
                    <div class="card-body text-center">
                        <p class="text-muted mt-2">
                            Systèmes de surveillance, contrôle d’accès et solutions de sécurité avancées.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Section Mission – Vision – Valeurs -->
    <section class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#0E3253;">Mission, Valeurs & Vision</h2>
                <p class="text-muted">Notre engagement envers l'excellence et l'innovation</p>
            </div>
            <div class="row g-4">

                <!-- Mission -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-bullseye fa-3x" style="color:#0E3253;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Mission</h5>
                            <p class="card-text text-muted">
                                Offrir des solutions digitales innovantes et accessibles pour accompagner la transformation
                                des entreprises en Afrique.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Valeurs -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-heart fa-3x" style="color:#0E3253;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Valeurs</h5>
                            <p class="card-text text-muted">
                                Innovation, intégrité, excellence et collaboration sont les piliers qui guident toutes nos
                                actions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-eye fa-3x" style="color:#0E3253;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Vision</h5>
                            <p class="card-text text-muted">
                                Devenir le leader africain de la transformation digitale, en favorisant l’innovation et la
                                croissance durable.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="container-fluid py-5" style="background: linear-gradient(135deg, #0056A6, #0099FF);
">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold text-dark" style="color:#0E3253;">excepteur do. Id eu sit tempor labore ut minim ipsum.
                </h2>
                <p class="text-white">Des solutions innovantes et fiables adaptées à vos besoins</p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="#" class="btn btn-dark">Nous contacter</a>
            </div>
        </div>
    </div>
</section>
<!-- ===================  NEWSLETTER  =================== -->
<section class="container-fluid py-5 bg-primary bg-gradient text-white">
    <div class="container">
      <div class="mx-auto text-center" style="max-width: 700px;">
        <!-- Ruban -->
        <span class="badge rounded-pill bg-light text-primary mb-3">
          🎯 Restez informé
        </span>
  
        <h2 class="fw-bold">Inscrivez-vous à notre newsletter</h2>
        <p class="text-light opacity-75 mb-4">
          Des actus sélectionnées, zéro spam. 1 à 2 emails / mois.
        </p>
  
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
              <button type="submit" class="btn btn-dark fw-bold">
                S’inscrire
              </button>
            </div>
          </div>
  
          <!-- Consentement + honeypot anti-bot -->
          <div class="form-check mt-3 text-start">
            <input class="form-check-input" type="checkbox" value="" id="consent" required>
            <label class="form-check-label" for="consent">
              J’accepte de recevoir les communications par email.
            </label>
            <div class="invalid-feedback">
              Vous devez accepter pour continuer.
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
@endsection
