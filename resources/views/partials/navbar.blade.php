<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2" id="mainNavbar">
  <div class="container">

      <!-- Logo + titre -->
      <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:50px; height:auto;">
          
          <div class="d-flex flex-column ms-2 text-global">
            <span class="fw-bold">GLOBAL <span class="text-global-tech">TECH</span></span>
            <small>INTERNATIONAL CORPORATION</small>
          </div>
      </a>

      <!-- Bouton mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarButtonsExample"
          aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Liens -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                  <a class="nav-link fw-bold text-dark" href="{{ route('home') }}">Accueil</a>
              </li>
             
              <li class="nav-item">
                  <a class="nav-link fw-bold text-dark" href="{{ route('history') }}">Notre histoire</a>
              </li>
              

              <!-- Dropdown -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle fw-bold text-dark" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Nos services
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($services_item as $nom_service )
                      
                      <li><a class="dropdown-item" href="{{ route('detail_service',['id' => $nom_service->id,'slug'=>$nom_service->slug]) }}">{{ $nom_service->nom_service }}</a></li>
                      @endforeach

                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-dark" href="{{ route('realisation') }}">Nos réalisations</a>
            </li>

              <li class="nav-item">
                  <a class="nav-link fw-bold text-dark" href="{{ route('contact') }}">
                      Contacts
                  </a>
              </li>
              <li class="nav-item">
                <a class="fw-bold text-white btn-md  btn btn-responsive btn-responsive-primaryl" href="{{  route('devis') }}">
                    Demander un devis
                </a>
            </li>

          </ul>
      </div>

  </div>
</nav>
