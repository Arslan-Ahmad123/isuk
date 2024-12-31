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
                ISUK Consultancy
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
    <section class="hero-section position-relative text-white"
        style="height: 80vh; background: url('{{ asset('assets/images/service-bg.jpg') }}') center/cover no-repeat;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);">
        </div>
        <div class="container h-100 d-flex flex-column justify-content-center align-items-start position-relative">
            <h1 class="display-4 fw-bold mb-3" style="font-size: 3rem;">Our Services</h1>
            <p class="lead mb-4" style="font-size: 1.2rem;">Explore tailored solutions to help you achieve your dreams
                of
                studying, working, and living abroad.</p>
            <a href="#services" class="btn-custom-without-hover2">Explore Services</a>
        </div>
    </section>
    <section class="container py-5" id="services">
        <div class="row align-items-center">
            <!-- Left Column with Divider -->
            <div class="col-4">
                <hr class="divider divider-left">
            </div>

            <!-- Center Column with Heading -->
            <div class="col-4 text-center">
                <h2 class="text-uppercase text-secondary">Visa Services</h2>
            </div>

            <!-- Right Column with Divider -->
            <div class="col-4">
                <hr class="divider divider-right">
            </div>
        </div>

        <!-- Second Row with Image Boxes -->
        <div class="row mt-5">
            <!-- First Image Box: Abroad Studies -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 animate-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/images/abroad-studies.jpg') }}" class="card-img-top" alt="Abroad Studies"
                        class="card-img-top" alt="Abroad Studies">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">Abroad Studies</h5>
                        <p class="card-text">Making your overseas education dream come true by assuring you a seat in
                            your
                            dream university.</p>
                    </div>
                </div>
            </div>

            <!-- Second Image Box: Tours & Travels -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 animate-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/images/tours-travels.jpg') }}" class="card-img-top"
                        alt="Tours & Travels">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">Tours & Travels</h5>
                        <p class="card-text">Helps to clear all the busy & time-consuming issues including different
                            visa
                            processes in different countries, hotel
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Row with Image Boxes -->
        <div class="row mt-5">
            <!-- Third Image Box: Settle Abroad -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 animate-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/images/settle-abroad.jpg') }}" class="card-img-top" alt="Settle Abroad">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">Settle Abroad</h5>
                        <p class="card-text">Grab the job opportunities around the world & settle in your dream
                            country.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fourth Image Box: Work Overseas -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 animate-card" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('assets/images/work-overseas.jpg') }}" class="card-img-top"
                        alt="Work Overseas">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">Work Overseas</h5>
                        <p class="card-text">We assist skilled people who want to make their career in different
                            countries and contribute to that country’s economy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-primary text-white">
        <div class="container py-5">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="ISUK Logo" class="img-fluid mb-3">
                    <p class="text-white mb-2" style="font-size: 1rem;">
                        We help you find the best destinations to achieve your dreams.
                    </p>
                    <p class="text-white" style="font-size: 1rem;">
                        With partnerships in over 65 countries, we ensure a seamless journey and help you reach your
                        goals with excellence.
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
                            <span class="text-white" style="font-size: 1rem;">WhatsApp:
                                <a href="tel:+447404929210" class="text-decoration-none">+44 7404
                                    929210</a>
                            </span>
                        </li>
                        <li class="mb-2">
                            <span class="text-white" style="font-size: 1rem;">E-mail:
                                <a href="mailto:info@isukconsultancy.co.uk"
                                    class="text-decoration-none">info@isukconsultancy.co.uk</a>
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
