<div>
    <style>
        footer {
            background-color: #f8f9fa !important;
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

        @media (max-width: 768px) {

            .btn-custom-hover,
            .btn-custom-without-hover,
            .btn-custom-without-hover2 {
                font-size: 0.875rem;
            }
        }

        @media (max-width: 576px) {

            .btn-custom-hover,
            .btn-custom-without-hover,
            .btn-custom-without-hover2 {
                font-size: 0.75rem;
            }
        }

        .divider-left {
            border-left: 3px solid #000;
            height: 30px;
            margin-left: 20px;
        }

        .divider-right {
            border-right: 3px solid #000;
            height: 30px;
            margin-right: 20px;
        }
    </style>

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

    @php
        $hero = $services?->where('section_name', 'hero')->first()?->content ?? [];
    @endphp
    <section class="hero-section position-relative text-white"
        style="height: 80vh; background: url('{{ $hero['image'] ?? asset('assets/images/service-bg.jpg') }}') center/cover no-repeat;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);">
        </div>
        <div class="container h-100 d-flex flex-column justify-content-center align-items-start position-relative">
            <h1 class="display-4 fw-bold mb-3" style="font-size: 3rem;">{{ $hero['title'] ?? '' }}</h1>
            <p class="lead mb-4" style="font-size: 1.2rem;">{{ $hero['description'] ?? '' }}</p>
            <a href="#services" class="btn-custom-without-hover2">{{ $hero['buttonText'] ?? '' }}</a>
        </div>
    </section>

    @php
        $services = $services?->where('section_name', 'services')->first()?->content ?? [];
    @endphp
    <section class="container py-5" id="services">
        <div class="row align-items-center">
            <!-- Left Column with Divider -->
            <div class="col-4">
                <hr class="divider divider-left">
            </div>

            <!-- Center Column with Heading -->
            <div class="col-4 text-center">
                <h2 class="text-uppercase text-secondary">{{ $services['heading'] ?? '' }}</h2>
            </div>

            <!-- Right Column with Divider -->
            <div class="col-4">
                <hr class="divider divider-right">
            </div>
        </div>

        <!-- Services Rows -->
        @foreach ($services['services'] ?? [] as $index => $service)
            @if ($index % 2 == 0)
                <div class="row mt-5">
            @endif

            <div class="col-md-6 mb-4">
                <div class="card h-100 animate-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <img src="{{ $service['image'] ?? '' }}" class="card-img-top" alt="{{ $service['title'] ?? '' }}">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">{{ $service['title'] ?? '' }}</h5>
                        <p class="card-text">{{ $service['description'] ?? '' }}</p>
                    </div>
                </div>
            </div>

            @if ($index % 2 == 1)
</div>
@endif
@endforeach
</section>
<!-- Footer -->
<footer class="bg-primary text-white">
    <div class="container py-5">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4 mb-md-0 text-center">
                <img src="{{ $headerFooter?->content['logo'] ?? '' }}" alt="ISUK Logo" class="img-fluid mb-3 mx-auto"
                    style="">
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
