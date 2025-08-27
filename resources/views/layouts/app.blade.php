<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homepage')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
   
</head>
<body>

    {{-- Navbar incluse --}}
    @include('partials.navbar')

    {{-- Contenu spécifique à chaque page --}}
    <section>
    
        @yield('content')
        
    </section>

    @include('partials.footer')
    <a href="#" class="back-to-top" id="myBtn" onclick="topFunction()">
        <i class="fas fa-chevron-up"></i> <!-- Icône pour le bouton -->
      </a>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/carousel-category.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @if ($errors->any() || session('success'))
    
   
      
    @endif
    
</body>
</html>
