<section class="team-section py-3">
    <div class="container">
        <h2 class="text-center fw-bold text-dark mb-4">Notre Équipe</h2>

        <!-- Directeur Général (le premier de la liste) -->
        @if($equipes->count() > 0)
            @php $dg = $equipes->first(); @endphp
            <div class="text-center mb-3">
                <div class="team-photo-wrapper mx-auto">
                    <img src="{{ asset('storage/' .$dg->image) }}" 
                         class="rounded-circle team-photo" 
                         alt="{{ $dg->nom }}">
                </div>
                <h5 class="fw-bold text-dark mt-3">{{ $dg->nom }}</h5>
                <small class="text-dark">{{ $dg->post }}</small>
            </div>
        @endif

        <!-- Autres membres -->
        <div class="row justify-content-center g-4">
            @foreach($equipes->skip(1)->take(3) as $member)
                <div class="col-md-4 text-center text-dark">
                    <div class="team-photo-wrapper mx-auto">
                        <img src="{{ asset('storage/' .$member->image) }}" 
                             class="rounded-circle team-photo" 
                             alt="{{ $member->nom }}">
                    </div>
                    <h6 class="fw-bold mt-3">{{ $member->nom }}</h6>
                    <small>{{ $member->post }}</small>
                </div>
            @endforeach
        </div>

        <!-- Bouton Voir toute l’équipe -->
        <div class="text-center mt-5">
            <a href="{{ route('history') }}#equipe" class="btn-team px-4 py-2">Voir toute l’équipe</a>
        </div>
    </div>
</section>
