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

        .carousel-inner img {
            height: 100vh;
            object-fit: cover;
        }

        .text-primary {
            color: #2c2752 !important;
        }

        .bg-primary {
            background-color: #2c2752 !important;
        }

        .bg-primary-light {
            background-color: #756cb8 !important;
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

        .btn-primary-light {
            background-color: #756cb8 !important;
            color: white !important;
        }

        .btn-secondary {
            background-color: #ba020d !important;
            color: white !important;
        }

        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            animation: slideDown .5s ease-out;
        }

        .carousel-caption h2 {
            animation: slideDown 1s ease-out;
        }

        .carousel-caption p {
            animation: slideUp 1s ease-out;
        }

        .carousel-caption button {
            margin-top: 20px;
            animation: fadeIn 1s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-30%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        footer {
            background-color: #f8f9fa !important;
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
            border: none;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-without-hover2 {
            background-color: #2c2752 !important;
            color: white !important;
            border-radius: none;
            border: none;
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

        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .services {
            background-color: #2c2752 !important;
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            padding: 100px 0;
            min-height: 500px;
        }

        .counter-section {
            background-color: rgba(44, 39, 82, 0.15) !important;
            position: relative;
            padding: 50px 0;
        }

        .counter-section .container {
            position: relative;
            z-index: 2;
        }

        .consultation-section {
            background-color: #2c2752 !important;
            background-size: cover;
            background-position: center;
            min-height: 300px;
        }

        .carousel-item-one,
        .carousel-item-two,
        .carousel-item-three,
        .carousel-item-four,
        .carousel-item-five,
        .carousel-item-six {
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
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

    <!-- Carousel -->
    @php
        $sliders = $home?->where('section_name', 'hero')->first()?->content['sliders'] ?? [];
    @endphp
    @if (count($sliders) > 0)
        <div style="height:75vh;width:100vw;">
            <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100 w-100">
                    @foreach ($sliders as $index => $slider)
                        <div class="carousel-item h-100 {{ $index == 0 ? 'active' : '' }}">
                            <div class="position-relative h-100">
                                <img src="{{ $slider['image'] ?? '' }}" class="d-block w-100 h-100" alt="slider1">
                                <div class="position-absolute top-0 start-0 w-100 h-100"
                                    style="background-color: rgba(44, 39, 82,0.3);"></div>
                            </div>
                            <div class="carousel-caption">
                                <h2 class="text-white" style="font-size: 4vw; font-weight: 700;">
                                    {{ $slider['title'] ?? '' }}
                                </h2>
                                <p class="mt-4" style="font-size: 2vw; font-weight: 700;">
                                    {{ $slider['description'] ?? '' }}</p>
                                <a href="{{ $slider['buttonLink'] }}" class="btn-custom-without-hover2"
                                    style="font-size: 1rem;">{{ $slider['buttonText'] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif


    <!-- About Us -->
    @php
        $about = $home?->where('section_name', 'about')->first()?->content ?? [];
    @endphp
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-4 bg-white shadow rounded">
                        <img src="{{ $about['image'] ?? '' }}" alt="About ISUK" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h2 class="mb-4 text-primary" style="font-size: 2rem; font-weight: bold;">
                        {{ $about['heading'] ?? '' }}</h2>
                    <p class="lead mb-4" style="font-size: 1.2rem; font-weight: 600;">{{ $about['subHeading'] ?? '' }}
                    </p>
                    <p class="mb-4" style="font-size: 1rem;">{{ $about['firstPara'] ?? '' }}</p>
                    <p class="mb-4" style="font-size: 1rem;">{{ $about['secondPara'] ?? '' }}</p>
                    <p class="mb-4" style="font-size: 1rem;">{{ $about['thirdPara'] ?? '' }}</p>
                    <div class="mt-4">
                        <a href="{{ $about['buttonLink'] ?? '' }}"
                            class="btn-custom-hover">{{ $about['buttonText'] ?? '' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    @php
        $services = $home?->where('section_name', 'services')->first()?->content ?? [];
    @endphp
    <section class="services bg-light position-relative">
        <h2 class="text-center text-white mb-5" style="font-size: 2rem;">{{ $services['heading'] ?? '' }}</h2>
        <div class="container py-5">
            <div class="row justify-content-around g-4">
                @foreach ($services['services'] as $service)
                    <div class="col-md-3 col-sm-12 text-center bg-white mb-4 pb-3 d-flex flex-column">
                        <div class="bg-primary rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center border border-white"
                            style="width: 60px; height: 60px; position: relative; top: -30px;">
                            <i class="fas fa-user-graduate fa-2x text-white"></i>
                        </div>
                        <h3 class="h5 text-primary">{{ $service['title'] }}</h3>
                        <hr class="w-50 mx-auto">
                        <p>{{ $service['description'] }}</p>
                        <div class="mt-auto">
                            <a href="{{ $service['buttonLink'] }}"
                                class="btn-custom-hover">{{ $service['buttonText'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Counter -->
    @php
        $counter = $home?->where('section_name', 'counter')->first()?->content ?? [];
    @endphp
    <section class="counter-section position-relative py-5">
        <h2 class="text-primary text-center fw-bold mb-5" style="font-size: 2rem;">{{ $counter['heading'] ?? '' }}
        </h2>
        <div class="container mb-2">
            <div class="row text-center">
                @foreach ($counter['counters'] as $item)
                    <!-- Counter Box -->
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="counter p-3 border border-secondary rounded shadow-sm">
                            <h2 class="display-5 fw-bold text-primary"><span class="counter-value"
                                    data-count="{{ $item['number'] }}">0</span>+</h2>
                            <p class="fs-5 mt-2">{{ $item['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter-value');
            const speed = 200; // The lower the slower

            counters.forEach(counter => {
                const animate = () => {
                    const value = +counter.getAttribute('data-count');
                    const data = +counter.innerText;
                    const time = value / speed;
                    if (data < value) {
                        counter.innerText = Math.ceil(data + time);
                        setTimeout(animate, 1);
                    } else {
                        counter.innerText = value;
                    }
                };
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animate();
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                });
                observer.observe(counter);
            });
        });
    </script>

    <!-- Destination -->
    @php
        $country = $home?->where('section_name', 'country')->first()?->content ?? [];
    @endphp
    <div id="destination">
        <div class="container py-5">
            <h2 class="text-primary text-center mb-4 fw-bold" style="font-size: 2rem;">
                {{ $country['heading'] ?? '' }}</h2>
            <p class="lead text-primary text-center mb-5" style="font-size: 1rem;">
                {{ $country['subHeading'] ?? '' }}
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($country['countries'] as $item)
                    <div class="col">
                        <div class="card h-100 text-center text-white bg-dark card-animate">
                            <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                                <h5 class="fw-bold">{{ $item['title'] }}</h5>
                            </div>
                            <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                                <p class="card-text fw-bold">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Destination -->

    <!-- Section -->
    @php
        $contact = $home?->where('section_name', 'contact')->first()?->content ?? [];
    @endphp
    <section class="consultation-section d-flex align-items-center"
        style="background: linear-gradient(to right, #ba020d, #ff6f61); min-height: 60vh;">
        <div class="container text-center text-white d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h2 class="fw-bold mb-3" style="font-size: 2rem;">
                        {{ $contact['heading'] ?? '' }}
                    </h2>
                    <p class="mb-4" style="font-size: 1rem; line-height: 1.8;">
                        {{ $contact['firstPara'] ?? '' }}
                    </p>
                    <p class="mb-4" style="font-size: 1rem; line-height: 1.8;">
                        {{ $contact['secondPara'] ?? '' }}
                    </p>
                    <a href="{{ $contact['buttonLink'] ?? '' }}" class="btn-custom-without-hover2"
                        style="font-size: 1rem;">
                        {{ $contact['buttonText'] ?? '' }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->

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
