@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

        <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('assets/images/work1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-overlay"></div>

                <div class="carousel-caption text-center  infoherocontent">
                    <h1 class="fw-bold text-white">Découvrez votre partenaire idéale pour vos projets en génie electrique</h1>
                    <p>Des solutions innovantes pour propulser votre entreprise vers le succès.</p>
                    <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">
                        <a href="{{ route('realisation') }}" class="btn btn-responsive-primaryl btn-lg me-2 btn-responsive">Découvrir nos
                            realisations</a>
                        <a href="{{ route('devis') }}"
                            class="btn btn-responsive-warning  btn-lg btn-responsive">Demander un devis</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('assets/images/work2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-overlay"></div>

                <div class="carousel-caption text-center  infoherocontent">
                    <h1 class="fw-bold text-white">Des services sur mesure</h1>
                    <p>Nous adaptons chaque projet à vos besoins spécifiques.</p>
                    <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">
                        <a href="{{ route('realisation') }}" class="btn btn-responsive-primaryl btn-lg me-2 btn-responsive">Découvrir nos
                            realisations</a>
                        <a href="{{ route('devis') }}"
                            class="btn btn-responsive-warning  btn-lg btn-responsive">Demander un devis</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/images/work3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-overlay"></div>

                <div class="carousel-caption text-center  infoherocontent">
                    <h1 class="fw-bold text-white">Votre partenaire de confiance</h1>
                    <p>Un accompagnement de bout en bout pour vos projets digitaux.</p>
                    <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">
                        <a href="{{ route('realisation') }}" class="btn btn-responsive-primaryl btn-lg me-2 btn-responsive">Découvrir nos
                            realisations</a>
                        <a href="{{ route('devis') }}"
                            class="btn btn-responsive-warning  btn-lg btn-responsive">Demander un devis</a>
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
                    Velit amet dolore magna officia cupidatat laboris velit. Officia et elit id incididunt non qui occaecat
                    do
                    labore ea. Do ullamco consequat labore duis laboris eiusmod ut esse et ea pariatur aliquip Lorem
                    cupidatat.
                    Nisi magna qui pariatur cupidatat incididunt exercitation enim. Anim minim anim eu nisi aute labore
                    excepteur do. Id eu sit tempor labore ut minim ipsum.
                </p>

                <!-- Points forts -->
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Expertise de plus de 10 ans</li>
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Une équipe qualifiée et engagée</li>
                    <li><i class="fas fa-check-circle text-success me-2 fa-2x"></i> Des solutions adaptées à vos besoins
                    </li>
                </ul>

                <!-- Bouton -->
                <a href="{{ route('history') }}" class="btn btn-dark mt-3">Notre histoire</a>
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
 <div class="d-flex">
                <button class="carousel-button prev" onclick="scrollCarousel(-1)">
                  <i class="fas fa-angle-left"></i>
                </button>
                <button class="carousel-button next" onclick="scrollCarousel(1)">
                  <i class="fas fa-angle-right"></i>
                </button>
              </div>
        <div class="carousel-container   carou ">
            <!-- Service 1 -->
            <div class="carousel-item">
                <div class="card border-0 shadow-sm">
                    <!-- Header avec titre stylisé -->
                    <div class="bg-dark p-3 d-flex align-items-center">
                        <h6 class="m-0 text-white  px-3 py-2"
                          >
                            Distribution et alimentation électrique
                            <!-- effet plié -->
                            <span class="band"
                              >
                            </span>
                        </h6>
                    </div>

                    <!-- Contenu -->
                    <div class="card-body text">
                        <p class="text-muted text-band">
                            Installation et maintenance de réseaux électriques fiables pour vos infrastructures.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" class="band-log">
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn btn-dark btn-sm mt-2  float-end text-white">
                            Plus de détails
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="card border-0 shadow-sm">
                    <!-- Header avec titre stylisé -->
                    <div class="bg-dark p-3 d-flex align-items-center">
                        <h6 class="m-0 text-white  px-3 py-2"
                          >
                            Distribution et alimentation électrique
                           
                        </h6>
                    </div>

                    <!-- Contenu -->
                    <div class="card-body text">
                        <p class="text-muted mt-2 text-band">
                            Installation et maintenance de réseaux électriques fiables pour vos infrastructures.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" class="band-log"
>
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn btn-dark btn-sm mt-2 float-end text-white">
                            Plus de détails
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="carousel-item">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-dark p-3">



                        <h6 class="m-0 text-white  px-3 py-2"
                           >
                            Systèmes de courants faibles et communications
                           
                        </h6>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mt-2 text-band">
                            Solutions modernes pour vos réseaux informatiques, téléphoniques et domotiques.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" class="band-log">
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn  btn-dark  btn-sm mt-2 float-end text-white">
                            Plus de détails
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="carousel-item">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-dark p-3">



                        <h6 class="m-0 text-white  px-3 py-2"
                           >
                            Systèmes de courants faibles et communications
                           
                        </h6>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mt-2 text-band">
                            Conception et intégration de systèmes de contrôle et de gestion de l’énergie.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" class="band-log">
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn  btn-dark  btn-sm mt-2 float-end text-white">
                            Plus de détails
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card border-0 shadow-sm">
                    <div class="d-flex align-items-center bg-dark p-3">



                        <h6 class="m-0 text-white  px-3 py-2"
                           >
                            Systèmes de courant&ensp;&ensp;&ensp;&ensp;&ensp;
                            &ensp;&ensp;&ensp;&ensp;&ensp;
                         
                        </h6>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mt-2 text-band">
                            Conception et intégration de systèmes de contrôle et de gestion de l’énergie.
                        </p>
                        <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" class="band-log">
                        <!-- bouton un peu décalé à droite -->
                        <a href="#" class="btn  btn-dark  btn-sm mt-2 float-end text-white">
                            Plus de détails
                        </a>
                    </div>
                </div>
            </div>

            
        </div>

        </div>
    </section>
    <!-- Section Pourquoi Nous Choisir -->
    <section class="container-fluid" style="background:#f8f9fa">
<div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Pourquoi nous choisir ?</h2>
      <p class="text-dark">
        Nous mettons notre expertise au service de vos projets avec un seul objectif : 
        garantir des solutions fiables, sécurisées et livrées dans les temps.
        
      </p>
    </div>
  
    <div class="row g-4">
      <!-- Point 1 -->
      <div class="col-md-4">
        <div class=" h-100  border-0 text-center p-4">
          <div class="mb-3">
            <i class="fas fa-bolt fa-2x choiceglobtech"></i>
          </div>
          <h5 class="fw-bold">Expertise éprouvée & polyvalence</h5>
          <p class="text-muted">
               
            Notre équipe est composée d'ingénieurs et de techniciens hautement qualifiés,
            possédant une vaste expérience dans tous les aspects du génie électrique.
          </p>
        </div>
      </div>
  
      <!-- Point 2 -->
      <div class="col-md-4">
        <div class=" h-100 border-0 text-center p-4">
          <div class="mb-3">
            <i class="fas fa-shield-alt fa-2x text-success"></i>
          </div>
          <h5 class="fw-bold">Qualité & sécurité sans compromis</h5>
          <p class="text-muted">
                 
            La sécurité est une priorité absolue.Nous nous engageons a fournir des installations
            électriques qui respectent  les normes de sécurité les plus strictes,minimisant
            ainsi les risques pour les personnes et les biens.
          </p>
        </div>
      </div>
  
      <!-- Point 3 -->
      <div class="col-md-4">
        <div class="h-100 border-0 text-center p-4">
          <div class="mb-3">
            <i class="fas fa-clock fa-2x choiceglobtech"></i>
          </div>
          <h5 class="fw-bold">Respect des délais & du budget</h5>
          <p class="text-muted">
          Nous savons que le temps,c'est de l'argent.C'est pourquoi nous nous engageons a respecter
          scrupuleusement les délais convenus et le budget alloué a chaque projet.
                  </p>
        </div>
      </div>
    </div>
</div>
  </section>
  
    <!-- Section Mission – Vision – Valeurs -->
    <section class="container-fluid py-5">
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



    @include('partials.ctmain', ['bg' => 'linear-gradient(135deg, #0056A6, #030e14'])

    @include('partials.ctteam')

    @include('partials.newsletter')
@endsection
