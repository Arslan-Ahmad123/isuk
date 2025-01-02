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

    <!-- Hero Section -->
    <section class="hero-section bg-secondary text-white py-5 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('assets/images/contact-hero-section.jpg') }}'); background-size: cover; background-position: center; height: 80vh;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Get in Touch with Us</h1>
            <p class="lead mt-3">We are here to assist you with all your education and immigration needs.</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">Contact Information</h2>
                <p class="mt-3">Reach out to us through any of the following methods. We look forward to hearing from
                    you!</p>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5 mb-4 text-center">
                    <div class="icon-card d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0">+44 7404 929210</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4 text-center">
                    <div class="icon-card d-flex align-items-center justify-content-center">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">info@isukconsultancy.co.uk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section section-bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">Send Us a Message</h2>
                <p class="mt-3">Fill out the form below and we will get back to you as soon as possible.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
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
                        We assist you in finding the best destinations to fulfill your dreams.
                    </p>
                    <p class="text-white" style="font-size: 1rem;">
                        With partnerships in over 65 countries, we ensure your journey is seamless and your goals are
                        achieved with excellence.
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
                                <a href="tel:+447404929210" class="text-decoration-none">+447466330705</a>
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
