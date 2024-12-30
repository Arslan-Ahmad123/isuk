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

        .text-darkblue {
            color: rgb(44, 39, 82) !important;
        }

        .bg-darkblue {
            background-color: rgb(44, 39, 82) !important;
        }

        .bg-darkred {
            background-color: rgb(186, 2, 13) !important;
        }

        .text-darkred {
            color: rgb(186, 2, 13) !important;
        }

        .btn-darkred {
            background-color: rgb(186, 2, 13) !important;
            color: white !important;
        }

        .nav-pills .nav-link.active {
            background-color: rgb(44, 39, 82);
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
            background-color: #e9e9e9 !important;
        }

        .btn-custom-hover {
            background-color: rgb(44, 39, 82) !important;
            color: white !important;
            border-radius: none;
            font-size: 1rem;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-hover:hover {
            background-color: transparent !important;
            border: 1px solid rgb(44, 39, 82) !important;
            color: rgb(44, 39, 82) !important;
        }

        .btn-custom-without-hover {
            background-color: rgb(186, 2, 13) !important;
            color: white !important;
            border-radius: none;
            font-size: 1rem;
            border: none;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-without-hover2 {
            background-color: rgb(44, 39, 82) !important;
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
            background-color: rgb(44, 39, 82) !important;
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
            background-image: url("{{ asset('assets/images/consultation-bg.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 300px;
        }

        .carousel-item-one {
            background-image: url("{{ asset('assets/images/new-york-city-cityscape-1.jpg') }}");
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
        }

        .carousel-item-two {
            background-image: url("{{ asset('assets/images/united-kingdom-1.jpg') }}");
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
        }

        .carousel-item-three {
            background-image: url("{{ asset('assets/images/country_image_Canada-1.jpg') }}");
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
        }

        .carousel-item-four {
            background-image: url("{{ asset('assets/images/Wellington-Harbour-New-Zealand.webp') }}");
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
        }

        .carousel-item-five {
            background-image: url("{{ asset('assets/images/australia-1621333850705-1.jpg') }}");
            background-size: cover;
            background-position: center;
            width: 50%;
            min-height: 300px;
            margin: 0 auto;
            position: relative;
        }

        .carousel-item-six {
            background-image: url("{{ asset('assets/images/framkfurt-europe-1.jpg') }}");
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
    <header class="d-flex flex-wrap justify-content-center bg-darkblue">
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
                        <a class="nav-link active text-white fw-bold" aria-current="page"
                            href="{{ route('services') }}" style="font-size: 1rem;">Services</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white fw-bold" aria-current="page"
                            href="{{ route('healthcare') }}" style="font-size: 1rem;">Healthcare</a>
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
    <div style="height:75vh;width:100vw;">
        <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100 w-100">
                <div class="carousel-item active h-100">
                    <div class="position-relative h-100">
                        <img src="{{ asset('assets/images/slider1.jpg') }}" class="d-block w-100 h-100" alt="slider1">
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(44, 39, 82,0.3);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="text-white" style="font-size: 4vw; font-weight: 700;">Explore | Learn | Grow |
                            Achieve</h2>
                        <p class="mt-4" style="font-size: 2vw; font-weight: 700;">Turning aspirations into
                            achievements</p>
                        <a href="{{ route('services') }}" class="btn-custom-without-hover2"
                            style="font-size: 1rem;">Find Out More</a>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="position-relative h-100">
                        <img src="{{ asset('assets/images/slider5.jpg') }}" class="d-block w-100 h-100" alt="slider5">
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(44, 39, 82,0.3);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="text-white" style="font-size: 4vw; font-weight: 700;">Pursue Education Abroad</h2>
                        <p class="mt-4" style="font-size: 1.5vw; font-weight: 500;">Unlock a world of possibilities
                        </p>
                        <button class="btn-custom-without-hover2" style="font-size: 1rem;">Discover More</button>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="position-relative h-100">
                        <img src="{{ asset('assets/images/slider6.jpg') }}" class="d-block w-100 h-100" alt="slider6">
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background-color: rgba(44, 39, 82,0.5);"></div>
                    </div>
                    <div class="carousel-caption">
                        <h2 class="text-white" style="font-size: 4vw; font-weight: 700;">Build Your Career Overseas</h2>
                        <p class="mt-2" style="font-size: 1.5vw; font-weight: 500;">Step up to global opportunities
                        </p>
                        <button class="btn-custom-without-hover2" style="font-size: 1rem;">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Us -->
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="p-4 bg-white shadow rounded">
                        <img src="{{ asset('assets/images/about-us.jpg') }}" alt="About ISUK"
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h2 class="mb-4 text-darkblue" style="font-size: 2rem; font-weight: bold;">About
                        ISUK</h2>
                    <p class="lead mb-4" style="font-size: 1.2rem; font-weight: 600;">Connecting your aspirations with
                        reality...!</p>
                    <p class="mb-4" style="font-size: 1rem;">Are you considering relocating abroad? That’s
                        fantastic!</p>
                    <p class="mb-4" style="font-size: 1rem;">We are here to assist you. ISUK is a leading
                        consultancy, recognized for offering exceptional guidance and support to help you achieve your
                        dreams of living in the West.</p>
                    <p class="mb-4" style="font-size: 1rem;">What sets us apart is our dedicated team and our
                        vision. We dream big, and we empower you not just to envision your goals but to turn them into
                        reality.</p>
                    <div class="mt-4">
                        <a href="#" class="btn-custom-hover">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services bg-light position-relative">
        <p class="text-white text-center fw-light" style="font-size: 1rem;">What are you seeking?</p>
        <h2 class="text-center text-white mb-5" style="font-size: 2rem;">Our Services</h2>
        <div class="container py-5">
            <div class="row justify-content-around g-4">
                <!-- Study Abroad Section -->
                <div class="col-md-3 col-sm-12 text-center bg-white mb-4 pb-3 d-flex flex-column">
                    <div class="bg-darkblue rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center border border-white"
                        style="width: 60px; height: 60px; position: relative; top: -30px;">
                        <i class="fas fa-user-graduate fa-2x text-white"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Study Abroad</h3>
                    <hr class="w-50 mx-auto">
                    <p>Discover a wide range of international education opportunities. We assist you in finding your
                        ideal course at top universities worldwide. Our knowledgeable advisors will support you from
                        your initial free consultation all the way to your admission.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn-custom-hover">Discover More</a>
                    </div>
                </div>

                <!-- Travel Around Section -->
                <div class="col-md-3 col-sm-12 text-center bg-white mb-4 pb-3 d-flex flex-column">
                    <div class="bg-darkblue rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center border border-white"
                        style="width: 60px; height: 60px; position: relative; top: -30px;">
                        <i class="fas fa-plane fa-2x text-white"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Travel the World</h3>
                    <hr class="w-50 mx-auto">
                    <p>Embark on global adventures and satisfy your wanderlust. We offer comprehensive travel assistance
                        to help you realize all your travel aspirations. From visa support to accommodation
                        arrangements, our travel specialists are here to ensure your journey is seamless.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn-custom-hover mb-3">Discover More</a>
                    </div>
                </div>

                <!-- Settle Anywhere Section -->
                <div class="col-md-3 col-sm-12 text-center bg-white mb-4 pb-3 d-flex flex-column">
                    <div class="bg-darkblue rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center border border-white"
                        style="width: 60px; height: 60px; position: relative; top: -30px;">
                        <i class="fas fa-user-friends fa-2x text-white"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Relocate Anywhere</h3>
                    <hr class="w-50 mx-auto">
                    <p>Thinking about moving abroad? We provide expert guidance on all immigration services in just a
                        few simple steps. We manage all necessary paperwork and requirements to help you settle in your
                        desired country. Just tell us where you want to go, and we’ll take care of the rest.</p>
                    <div class="mt-auto">
                        <a href="#" class="btn-custom-hover mb-3">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter -->
    <section class="counter-section position-relative py-5">
        <h2 class="text-darkblue text-center fw-bold mb-5" style="font-size: 2rem;">The ISUK Advantages</h2>
        <div class="container mb-2">
            <div class="row text-center">
                <!-- Counter Box -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="counter p-3 border border-secondary rounded shadow-sm">
                        <h2 class="display-5 fw-bold text-darkblue">7,500<span>+</span></h2>
                        <p class="fs-5 mt-2">Students</p>
                    </div>
                </div>
                <!-- Counter Box -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="counter p-3 border border-secondary rounded shadow-sm">
                        <h2 class="display-5 fw-bold text-darkblue">127</h2>
                        <p class="fs-5 mt-2">Universities</p>
                    </div>
                </div>
                <!-- Counter Box -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="counter p-3 border border-secondary rounded shadow-sm">
                        <h2 class="display-5 fw-bold text-darkblue">81</h2>
                        <p class="fs-5 mt-2">Countries</p>
                    </div>
                </div>
                <!-- Counter Box -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="counter p-3 border border-secondary rounded shadow-sm">
                        <h2 class="display-5 fw-bold text-darkblue">7,500<span>+</span></h2>
                        <p class="fs-5 mt-2">Immigrations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destination -->
    <div id="destination">
        <div class="container py-5">
            <h2 class="text-darkblue text-center mb-4 fw-bold" style="font-size: 2rem;">Top Destinations</h2>
            <p class="lead text-darkblue text-center mb-5" style="font-size: 1rem;">
                Dreaming of an international life? The world is vast and full of opportunities. Discover the endless
                possibilities awaiting you.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">USA</h5>
                        </div>
                        <div class="card-body bg-dark">
                            <p class="card-text fw-bold">The USA is renowned for its innovation and entrepreneurial
                                spirit, making it a land of vast opportunities and global influence.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">United Kingdom</h5>
                        </div>
                        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                            <p class="card-text fw-bold">The UK boasts a prestigious array of educational institutions,
                                including globally acclaimed universities such as Oxford and Cambridge.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">Canada</h5>
                        </div>
                        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                            <p class="card-text fw-bold">Canada is renowned for its excellent quality of life and
                                thriving tech sector, making it a top choice for immigrants.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">New Zealand</h5>
                        </div>
                        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                            <p class="card-text fw-bold">New Zealand is celebrated for its excellent education system
                                and retirement options, offering a blend of cultural richness and breathtaking
                                landscapes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">Australia</h5>
                        </div>
                        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                            <p class="card-text fw-bold">Australia is renowned for its top-tier education, excellent
                                retirement options, and vibrant travel experiences, making it a favored destination for
                                immigrants globally.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 text-center text-white bg-dark card-animate">
                        <div class="card-header bg-opacity-50" style="background-color: rgba(0, 0, 0, 0.6);">
                            <h5 class="fw-bold">Europe</h5>
                        </div>
                        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.3);">
                            <p class="card-text fw-bold">Europe offers a unique blend of historical richness, cultural
                                diversity, and stunning landscapes, making it an ideal destination for both travel and
                                living.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination -->

    <!-- Section -->
    <section class="consultation-section d-flex align-items-center"
        style="background: linear-gradient(to right, #ba020d, #ff6f61); min-height: 60vh;">
        <div class="container text-center text-white d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h2 class="fw-bold mb-3" style="font-size: 2rem;">
                        Discover the Paths, Illuminate the Paths, Guide the Paths...!
                    </h2>
                    <p class="mb-4" style="font-size: 1rem; line-height: 1.8;">
                        Your one-stop solution for all your international living needs and aspirations.
                    </p>
                    <p class="mb-4" style="font-size: 1rem; line-height: 1.8;">
                        Your comprehensive resource for achieving your international living aspirations and dreams.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-custom-without-hover2" style="font-size: 1rem;">
                        Get Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section -->

    <!-- Footer -->
    <footer class="bg-darkblue text-white">
        <div class="container py-5">
            <div class="row">
                <!-- About Section -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="ISUK Logo" class="img-fluid mb-3">
                    <p class="text-white mb-2" style="font-size: 1rem;">
                        We help you discover the ideal destinations to achieve your aspirations.
                    </p>
                    <p class="text-white" style="font-size: 1rem;">
                        Partnering with over 65 countries, we guarantee a smooth journey and help you achieve your goals
                        with excellence.
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
                                <a href="tel:+447404929210" class="text-primary text-decoration-none">+44 7404
                                    929210</a>
                            </span>
                        </li>
                        <li class="mb-2">
                            <span class="text-white" style="font-size: 1rem;">E-mail:
                                <a href="mailto:info@isukconsultancy.co.uk"
                                    class="text-primary text-decoration-none">info@isukconsultancy.co.uk</a>
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- Quick Links Section -->
                <div class="col-md-4">
                    <h5 class="text-uppercase fw-bold mb-3 text-light">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">About Us</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">Services</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">Contact</a>
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
