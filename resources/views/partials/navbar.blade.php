<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2" id="mainNavbar">
  <div class="container">

      <!-- Logo + titre -->
      <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="{{ asset('assets/images/logo_noire.png') }}" alt="logo" style="width:50px; height:auto;">
          
          <div class="d-flex flex-column ms-2">
            <span class="fw-bold" style="font-size: 1.1rem; color: #000000;">GLOBAL TECH</span>
            <small style="font-size: 0.85rem; color: #555555;">INTERNATIONAL CORPORATION</small>
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
                      <li><a class="dropdown-item" href="#">Service 1</a></li>
                      <li><a class="dropdown-item" href="#">Service 2</a></li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-dark" href="#">Nos réalisations</a>
            </li>

              <li class="nav-item">
                  <a class="nav-link fw-bold text-dark px-3" href="{{ route('contact') }}">
                      Contacts
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-white px-3" href="{{  route('devis') }}" style="background-color:#0056A6; border-radius:4px;">
                    Demander un devis
                </a>
            </li>

          </ul>
      </div>

  </div>
</nav>
