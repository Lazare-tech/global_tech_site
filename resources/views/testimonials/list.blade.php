
    <div class="position-relative">

        <!-- Contrôles en haut -->
        <div class="d-flex justify-content-center gap-3 mb-3">
            <button class="btn btn-comment" onclick="scrollTestimonials(-1)">
                <i class="fas fa-angle-left"></i>
            </button>
            <button class="btn btn-comment" onclick="scrollTestimonials(1)">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>

        <!-- Carousel horizontal -->
        <div class="d-flex overflow-auto gap-3 py-3" id="testimonialContainer" style="scroll-behavior: smooth;">
            @foreach($testimonials as $testimonial)
                <div class="flex-shrink-0 text-center" style="width: 100%; max-width: 300px;">
                    @if($testimonial->photo)
                        <img src="{{ asset('storage/'.$testimonial->photo) }}"
                             class="rounded-circle shadow-1-strong mb-3 mx-auto comment-photo-wrapper-comment"
                            >
                    @else
                        <div class="rounded-circle shadow-1-strong mb-3 bg-primary text-white fw-bold d-flex align-items-center justify-content-center mx-auto"
                             style="width:150px;height:150px;font-size:36px;">
                            {{ strtoupper(substr($testimonial->name,0,2)) }}
                        </div>
                    @endif
                    <h5 class="mb-2">{{ $testimonial->name }}</h5>
                    @if($testimonial->company)
                        <p class="text-muted mb-1">{{ $testimonial->company }}</p>
                    @endif
                    <p class="text-muted"><i class="fas fa-quote-left pe-2"></i>{{ $testimonial->message }}</p>
                </div>
            @endforeach
        </div>
    </div>