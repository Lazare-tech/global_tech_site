@extends('layouts.app')
@section('title','Notre histoire')
@section('content')
<!-- Hero Section -->
<section class="hero position-relative text-center text-white d-flex align-items-center" style="height:100vh;">
    <!-- Image de fond -->
    <img src="{{ asset('assets/images/IMG-20250815-WA0023.jpg') }}" alt="Hero Background" id="herocontent">

    <!-- Overlay sombre -->
    <div class="hero-opaciti-hero"></div>

    <!-- Contenu -->
    <div class="container  infoherocontent">
        <h1 class="fw-bold display-4">Notre histoire</h1>
        <p class="lead">
          Depuis notre création, nous accompagnons les entreprises avec passion et innovation.        
        </p>
        <div class="mt-4 d-flex flex-row justify-content-center flex-nowrap">
            <a href="#story-section" class="btn btn-responsive-primaryl btn-lg me-2 ">  En savoir plus</a>
        </div>
        
        
    </div>
</section>
<section class="container-fluid" id="hist">

    <div class="timeline container" id="story-section">

        <!-- Étape 1 : Texte - Ligne - Image -->
        <div class="row align-items-center mb-5 flex-column flex-md-row">
            <div class="col-md-5 text-start mb-3 mb-md-0">
                <div class="content bg-white shadow rounded p-4 d-inline-block">
                    <h2 class="text-history">2018</h2>
                    <p>
                        Une équipe d'ingénieurs passionnés, forts de plusieurs années d'expérience, crée une entité capable de relever 
                        les défis complexes de l'électricité. Début avec de petits projets qui ont permis de consolider les bases techniques.
                    </p>
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center position-relative mb-3 mb-md-0">
                <div class="line"></div>
            </div>
            <div class="col-md-5 d-flex justify-content-start hex-placment">
                <div class="hex-img" style="background-image: url('{{ asset('assets/images/hist_one.jpg') }}');"></div>
            </div>
        </div>
    
        <!-- Étape 2 : Image - Ligne - Texte -->
        <div class="row align-items-center mb-5 flex-column-reverse flex-md-row">
            <div class="col-md-5 d-flex justify-content-end hex-placment">
                <div class="hex-img" style="background-image: url('{{ asset('assets/images/hist_two.jpg') }}');"></div>
            </div>
            <div class="col-md-2 d-flex justify-content-center position-relative mb-3 mb-md-0">
                <div class="line"></div>
            </div>
            <div class="col-md-5 text-start text-md-start mb-3 mb-md-0">
                <div class="content bg-white shadow rounded p-4 d-inline-block">
                    <h2 class="text-history">Années suivantes</h2>
                    <p>
                        Nos expertises se diversifient avec les énergies renouvelables, l’automatisation industrielle et les solutions smart grid. 
                        Chaque projet est une opportunité de démontrer notre savoir-faire et d’accroître la confiance de nos clients.
                    </p>
                </div>
            </div>
        </div>
    
        <!-- Étape 3 : Texte - Ligne - Image -->
        <div class="row align-items-center mb-5 flex-column flex-md-row">
            <div class="col-md-5 text-start mb-3 mb-md-0">
                <div class="content bg-white shadow rounded p-4 d-inline-block">
                    <h2 class="text-history">Aujourd'hui</h2>
                    <p>
                        Nous sommes fiers du chemin parcouru. Notre histoire est celle d’une croissance constante, d’une adaptation aux évolutions du marché et d’un engagement pour l’innovation. 
                        Nous projetons un avenir où l’électricité sera toujours plus efficace, plus sûre et plus respectueuse de l’environnement.
                    </p>
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-center position-relative mb-3 mb-md-0">
                <div class="line"></div>
            </div>
            <div class="col-md-5 d-flex justify-content-start hex-placment">
                <div class="hex-img" style="background-image: url('{{ asset('assets/images/hist_free.jpg') }}');"></div>
            </div>
        </div>
    
    </div>
     
</section>
<section class="team-section py-3">
    <div class="container" id="equipe">
      <h2 class="text-center fw-bold text-dark mb-4">Notre Équipe</h2>
  
      <!-- Directeur Général -->
      <div class="text-center mb-3 text-dark">
        <div class="team-photo-wrapper mx-auto">
          <img src="{{ asset('assets/images/team/person3.jpg') }}" 
               class="rounded-circle team-photo" 
               alt="Directeur Général">
        </div>
        <h5 class="fw-bold  mt-3">Jean Dupont</h5>
        <small class="">Directeur Général</small>
      </div>
  
      <!-- 3 autres membres -->
      <div class="row justify-content-center g-4">
        <div class="col-md-4 text-center text-dark">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person2.png') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 1">
          </div>
          <h6 class="fw-bold  mt-3">Marie Koné</h6>
          <small class="">Directeur support et stratégies</small>
        </div>
        <div class="col-md-4 text-center text-dark">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person4.jpg') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 2">
          </div>
          <h6 class="fw-bold mt-3">Ali Sawadogo</h6>
          <small class="">Directeur des opérations</small>
        </div>
        <div class="col-md-4 text-center text-dark">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person1.png') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 3">
          </div>
          <h6 class="fw-bold mt-3">Fatou Diarra</h6>
          <small class="">Directeur administratif et financier</small>
        </div>
      </div>
      <!--second row team-->
      <div class="row justify-content-center g-4 py-5">
        <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person9.jpg') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold mt-3">SIRIMA Chadrack</h6>
            <small class="">Directeur de maintenance et services</small>
          </div>
          <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person6.jpg') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold mt-3">Fatou Diarra</h6>
            <small class="">Directeur administratif et financier</small>
          </div>
          <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person7.jpg') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold  mt-3">KONE Rachid</h6>
            <small class="">Directeur des projets</small>
          </div>
          <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person8.jpg') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold mt-3">Fatou Diarra</h6>
            <small class="">Directeur administratif et financier</small>
          </div>
          <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person5.jpg') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold mt-3">SOULAMA Mariam</h6>
            <small class="">Directrice ressources humaines</small>
          </div>
          <div class="col-md-2 text-center text-dark">
            <div class="team-photo-wrapper mx-auto">
              <img src="{{ asset('assets/images/team/person1.png') }}" 
                   class="rounded-circle team-photo" 
                   alt="Membre 3">
            </div>
            <h6 class="fw-bold mt-3">CISSE Junior</h6>
            <small class="">Directeur comptable et commercial</small>
          </div>
      </div>
  
    </div>
  </section>
@include('partials.newsletter')
@endsection