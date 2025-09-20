<section class="container my-3">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="collapse" id="testimonialForm">
                <div class="card card-body shadow-sm mb-3 p-3">
                    @if (session('success'))
                        <div class="alert alert-success py-2 px-3">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Nom*</label>
                            <input type="text" name="name" class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Entreprise</label>
                            <input type="text" name="company" class="form-control form-control-sm">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control form-control-sm">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Message*</label>
                            <textarea name="message" class="form-control form-control-sm" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-comment btn-sm text-white">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
