<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Titre SEO -->
        <title>@yield('title', 'Solutions en Électricité, Automatisation et Sécurité')</title>
        
        <!-- Meta description SEO -->
        <meta name="description" content="@yield('description', 'GLobal Tech International Corporation propose des services professionnels en électricité, automatisation, sécurité incendie, vidéosurveillance, réseaux de communication et domotique. Contactez-nous pour un devis rapide.')">
        
        <!-- Mots-clés SEO -->
        <meta name="keywords" content="électricité, automatisation, sécurité incendie, vidéosurveillance, contrôle d’accès, domotique, réseaux de communication, fibre optique, GTB, LED, groupe électrogène, UPS">
        
        <!-- Robots -->
        <meta name="robots" content="index, follow">
        
        <!-- Open Graph (partage réseaux sociaux) -->
        <meta property="og:title" content="@yield('title', 'Solutions en Électricité, Automatisation et Sécurité')">
        <meta property="og:description" content="@yield('description', 'GLobal Tech International Corporation propose des services professionnels en électricité, automatisation et sécurité.')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
        
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">
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
