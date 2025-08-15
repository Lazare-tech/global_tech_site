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
                Velit amet dolore magna officia cupidatat laboris velit. Officia et elit id incididunt non qui occaecat do
                labore ea. Do ullamco consequat labore duis laboris eiusmod ut esse et ea pariatur aliquip Lorem cupidatat.
                Nisi magna qui pariatur cupidatat incididunt exercitation enim. Anim minim anim eu nisi aute labore
                excepteur do. Id eu sit tempor labore ut minim ipsum.

            </div>
            <div class="col-lg-6">
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
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/images/distribution.jpg') }}" class="card-img-top" alt="Distribution et alimentation électrique">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Distribution et alimentation électrique</h5>
                        <p class="text-muted mt-2">
                            Installation et maintenance de réseaux électriques fiables pour vos infrastructures.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/images/systeme_courant_faible.jpg') }}" class="card-img-top" alt="Systèmes de courants faibles et communications">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Systèmes de courants faibles et communications</h5>
                        <p class="text-muted mt-2">
                            Solutions modernes pour vos réseaux informatiques, téléphoniques et domotiques.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('assets/images/electronique_puissance.jpg') }}" class="card-img-top"
                        alt="Électronique de puissance et systèmes de contrôle">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Électronique de puissance et systèmes de contrôle</h5>
                        <p class="text-muted mt-2">
                            Conception et intégration de systèmes de contrôle et de gestion de l’énergie.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{asset('assets/images/ingenierie_securite.jpg')}}" class="card-img-top" alt="Ingénierie de la sécurité">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Ingénierie de la sécurité</h5>
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


    <section class='container'>
        <h3 class="fw-bold" style="color:#0E3253;">Notre parcours</h3>
        <div class="row">
            <div class="col-lg-6">
                Velit amet dolore magna officia cupidatat laboris velit. Officia et elit id incididunt non qui occaecat do
                labore ea. Do ullamco consequat labore duis laboris eiusmod ut esse et ea pariatur aliquip Lorem cupidatat.
                Nisi magna qui pariatur cupidatat incididunt exercitation enim. Anim minim anim eu nisi aute labore
                excepteur do. Id eu sit tempor labore ut minim ipsum.

            </div>
            <div class="col-lg-6">
            </div>
        </div>


    </section>
@endsection
