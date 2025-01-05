<div>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
            font-family: 'Arial', sans-serif;
        }

        .text-primary {
            color: #2c2752 !important;
        }

        .bg-primary {
            background-color: #2c2752 !important;
        }

        .text-secondary {
            color: #ba020d !important;
        }

        .bg-secondary {
            background-color: #ba020d !important;
        }

        .btn-primary {
            background-color: #2c2752 !important;
            color: white !important;
        }

        .btn-secondary {
            background-color: #ba020d !important;
            color: white !important;
        }

        .section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2c2752;
            text-align: center;
            margin-bottom: 40px;
        }

        .section-content {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        .section-content p {
            margin-bottom: 20px;
        }

        .section-bg-light {
            background-color: #f8f9fa;
        }

        .section-bg-dark {
            background-color: #2c2752;
            color: white;
        }

        .section-bg-dark .section-title {
            color: white;
        }

        .btn-custom-hover {
            background-color: #2c2752 !important;
            color: white !important;
            border-radius: none;
            font-size: 1rem;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-hover:hover {
            background-color: transparent !important;
            border: 1px solid #2c2752 !important;
            color: #2c2752 !important;
        }

        .btn-custom-without-hover {
            background-color: #ba020d !important;
            color: white !important;
            border-radius: none;
            font-size: 1rem;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-without-hover2 {
            background-color: #2c2752 !important;
            color: white !important;
            border-radius: none;
            font-size: 1rem;
            text-decoration: none;
            padding: 10px 20px;
        }

        .card-animate {
            transition: transform 0.3s ease-in-out;
        }

        .card-animate:hover {
            transform: scale(1.05);
        }
    </style>

    <!-- Header -->
    <header class="d-flex flex-wrap justify-content-center bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light w-100 px-4">
            <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">
                <img class="img-fluid" src="{{ $headerFooter?->content['logo'] ?? '' }}" alt="ISUK Consultancy Logo"
                    style="width: 130px; height: auto;">
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('home') }}"
                            style="font-size: 1rem;">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('about') }}"
                            style="font-size: 1rem;">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('services') }}"
                            style="font-size: 1rem;">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('country') }}"
                            style="font-size: 1rem;">Country</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="{{ route('contact') }}"
                            style="font-size: 1rem;">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    @php
        $hero = $country?->where('section_name', 'hero')->first()?->content ?? [];
    @endphp
    <section class="hero-section bg-secondary text-white py-5 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ $hero['image'] ?? '' }}'); background-size: cover; background-position: center; height: 80vh;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">{{ $hero['title'] ?? '' }}</h1>
            <p class="lead mt-3">{{ $hero['description'] ?? '' }}</p>
        </div>
    </section>

    <!-- Why Choose These Countries Section -->
    @php
        $destinations = $country?->where('section_name', 'destinations')->first()?->content ?? [];
    @endphp
    <section class="section section-bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">{{ $destinations['heading'] ?? '' }}</h2>
                <p class="mt-3">{{ $destinations['subHeading'] ?? '' }}</p>
            </div>
            <div class="row">
                @foreach ($destinations['destinations'] ?? [] as $destination)
                    <div class="col-md-4 mb-4">
                        <div class="icon-card d-flex align-items-center">
                            <img src="{{ $destination['image'] ?? '' }}" alt="{{ $destination['title'] ?? '' }}"
                                class="img-fluid me-3" style="height: 60px; width: 60px;">
                            <div>
                                <h5>{{ $destination['title'] ?? '' }}</h5>
                                <p>{{ $destination['description'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Top Opportunities Section -->
    @php
        $opportunities = $country?->where('section_name', 'opportunities')->first()?->content ?? [];
    @endphp
    <section class="section section-bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">{{ $opportunities['heading'] ?? '' }}</h2>
                <p class="mt-3">{{ $opportunities['subHeading'] ?? '' }}</p>
            </div>
            <div class="row">
                @foreach ($opportunities['opportunities'] ?? [] as $index => $opportunity)
                    @php
                        $count = count($opportunities['opportunities']);
                        $colClass =
                            $count % 3 == 1 && $index == $count - 1
                                ? 'col-md-12'
                                : ($count % 3 == 2 && $index >= $count - 2
                                    ? 'col-md-6'
                                    : 'col-md-4');
                    @endphp
                    <div class="{{ $colClass }} mb-4">
                        <div class="card border-0 shadow mb-4 card-animate">
                            <img src="{{ $opportunity['image'] ?? '' }}" class="card-img-top"
                                alt="{{ $opportunity['title'] ?? '' }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $opportunity['title'] ?? '' }}</h5>
                                <p class="card-text">{{ $opportunity['description'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    @php
        $contact = $country?->where('section_name', 'contact')->first()?->content ?? [];
    @endphp
    <section class="section section-bg-dark">
        <div class="container text-center">
            <h2 class="section-title">{{ $contact['heading'] ?? '' }}</h2>
            <div class="section-content">
                <p class="mt-3">{{ $contact['subHeading'] ?? '' }}</p>
                <a href="{{ $contact['buttonLink'] ?? route('contact') }}"
                    class="btn-custom-without-hover2 mt-3">{{ $contact['buttonText'] ?? '' }}</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white">
        <div class="container py-5">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-4 mb-md-0 text-center">
                    <img src="{{ $headerFooter?->content['logo'] ?? '' }}" alt="ISUK Logo"
                        class="img-fluid mb-3 mx-auto" style="">
                    <p class="text-white mb-2" style="font-size: 1rem;">
                        {{ $headerFooter?->content['firstPara'] ?? '' }}
                    </p>
                    <p class="text-white" style="font-size: 1rem;">
                        {{ $headerFooter?->content['secondPara'] ?? '' }}
                    </p>
                </div>
                <!-- Contact Section -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase fw-bold mb-3 text-light">Contact Details</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <strong>London Office:</strong><br>
                        </li>
                        <li class="mb-2">
                            <span class="text-white" style="font-size: 1rem;">
                                <i class="fab fa-whatsapp"></i> WhatsApp:
                                <a href="tel:+{{ $headerFooter?->content['footerNumber'] ?? '' }}"
                                    class="text-decoration-none">+{{ $headerFooter?->content['footerNumber'] ?? '' }}</a>
                            </span>
                        </li>
                        <li class="mb-2">
                            <span class="text-white" style="font-size: 1rem;">E-mail:
                                <a href="mailto:{{ $headerFooter?->content['footerEmail'] ?? '' }}"
                                    class="text-decoration-none">{{ $headerFooter?->content['footerEmail'] ?? '' }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5 class="text-uppercase fw-bold mb-3 text-light">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('services') }}" class="text-white text-decoration-none">Services</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p class="mb-0 text-white" style="font-size: 1rem;">
                        © Copyright 2024 - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
