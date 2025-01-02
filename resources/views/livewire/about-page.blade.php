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

        .mission-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .mission-section.in-view {
            opacity: 1;
            transform: translateY(0);
        }

        .call-to-action-section {
            background-color: #2c2752;
            padding: 60px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .call-to-action-section.in-view {
            opacity: 1;
            transform: translateX(0);
        }

        .cta-heading {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffffff;
        }

        .cta-text {
            font-size: 1.2rem;
            color: #f8f9fa;
            line-height: 1.6;
        }

        .cta-button {
            background-color: #ffffff;
            color: #2c2752;
            border-radius: 5px;
            font-size: 1rem;
            padding: 10px 20px;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #1a1a2e;
            color: #ffffff;
        }

        .hero-section {
            background: url('{{ asset('assets/images/about-hero.jpg') }}') center/cover no-repeat;
            position: relative;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-top: 1rem;
        }
    </style>
    <header class="d-flex flex-wrap justify-content-center bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light w-100 px-4">
            <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('assets/images/newlogo.png') }}" alt="ISUK Consultancy Logo"
                    style="width: 200px; height: auto;">
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
    <section class="hero-section">
        <div class="container">
            <h1>Your Trusted Partner for Education & Immigration</h1>
            <p>Empowering your dreams of studying and settling abroad with expert guidance and seamless processes.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5 mission-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 mb-4">
                    <h2 class="text-primary">Our Mission</h2>
                    <p class="mt-3">To provide aspiring individuals with personalized and reliable guidance for
                        achieving their educational and immigration goals with utmost integrity and professionalism.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary">Our Vision</h2>
                    <p class="mt-3">To be the most trusted consultancy worldwide, known for turning dreams into
                        reality and creating a bridge for opportunities across borders.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-5 bg-primary text-white call-to-action-section">
        <div class="container text-center">
            <h2 class="cta-heading">Ready to Start Your Journey?</h2>
            <p class="cta-text mt-3">Contact us today to schedule a consultation and take the first step towards your
                dream!</p>
            <a href="{{ route('contact') }}" class="btn btn-light mt-3 cta-button">Get in Touch</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const missionSection = document.querySelector('.mission-section');
        const ctaSection = document.querySelector('.call-to-action-section');

        const observerOptions = {
            threshold: 0.1
        };

        const observerCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        observer.observe(missionSection);
        observer.observe(ctaSection);
    });
</script>
