<section class="container">
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-bs-ride="carousel">
  <!-- Flèches -->
<div class="d-flex justify-content-center gap-3 mb-4">
  <button class="carousel-control-prev position-relative carousel-nav-btn bg-white"
    type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next position-relative carousel-nav-btn"
    type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>


  <!-- Slides -->
  <div class="carousel-container   carou">
     
            @foreach ($testimonials as $testimonial)
              <div class="carousel-item">
                @if($testimonial->photo)
                  <img
                    class="rounded-circle shadow-1-strong mb-3 comment-photo-wrapper-comment mx-auto"
                    src="{{ asset('storage/'.$testimonial->photo) }}" 
                    alt="{{ $testimonial->name }}">
                @else
                  <div class="rounded-circle shadow-1-strong mb-3 comment-photo-wrapper-comment bg-primary text-white fw-bold mx-auto">
                      {{ strtoupper(substr($testimonial->name,0,2)) }}
                  </div>
                @endif

                <h5 class="mb-2">{{ $testimonial->name }}</h5>
                @if ($testimonial->company)
                  <p class="text-muted mb-1">{{ $testimonial->company }}</p>
                @endif
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  {{ $testimonial->message }}
                </p>
              </div>
            @endforeach
          </div>
      
</div>
</section>

