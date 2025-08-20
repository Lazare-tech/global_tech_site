<section class="team-section py-3">
    <div class="container">
      <h2 class="text-center fw-bold text-white mb-4">Notre Équipe</h2>
  
      <!-- Directeur Général -->
      <div class="text-center mb-3">
        <div class="team-photo-wrapper mx-auto">
          <img src="{{ asset('assets/images/team/person3.jpg') }}" 
               class="rounded-circle team-photo" 
               alt="Directeur Général">
        </div>
        <h5 class="fw-bold text-white mt-3">DIALLO Cheick</h5>
        <small class="text-light">Directeur Général</small>
      </div>
  
      <!-- 3 autres membres -->
      <div class="row justify-content-center g-4">
        <div class="col-md-4 text-center">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person2.png') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 1">
          </div>
          <h6 class="fw-bold text-white mt-3">Marie Koné</h6>
          <small class="text-light">Directeur support et stratégies</small>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person4.jpg') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 2">
          </div>
          <h6 class="fw-bold text-white mt-3">Ali Sawadogo</h6>
          <small class="text-light">Directeur des opérations</small>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-photo-wrapper mx-auto">
            <img src="{{ asset('assets/images/team/person1.png') }}" 
                 class="rounded-circle team-photo" 
                 alt="Membre 3">
          </div>
          <h6 class="fw-bold text-white mt-3">Fatou Diarra</h6>
          <small class="text-light">Directeur administratif et financier</small>
        </div>
      </div>
  
      <!-- Bouton Voir toute l’équipe -->
      <div class="text-center mt-5">
        <a href="{{ route('history') }}#equipe" class="btn-team px-4 py-2">Voir toute l’équipe</a>
      </div>
    </div>
  </section>
  
 
  