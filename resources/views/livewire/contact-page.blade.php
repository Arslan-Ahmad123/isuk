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
        $hero = $contact?->where('section_name', 'hero')->first()?->content ?? [];
    @endphp
    <section class="hero-section bg-secondary text-white py-5 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ $hero['image'] ?? '' }}'); background-size: cover; background-position: center; height: 80vh;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">{{ $hero['title'] ?? '' }}</h1>
            <p class="lead mt-3">
                {{ $hero['description'] ?? '' }}
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    @php
        $contact1 = $contact?->where('section_name', 'contact')->first()?->content ?? [];
    @endphp
    <section class="section section-bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">{{ $contact1['heading'] ?? '' }}</h2>
                <p class="mt-3">
                    {{ $contact1['subHeading'] ?? '' }}
                </p>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5 mb-4 text-center">
                    <div class="icon-card d-flex align-items-center justify-content-center">
                        <i class="fas fa-phone-alt fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="mb-0">+{{ $contact1['number'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4 text-center">
                    <div class="icon-card d-flex align-items-center justify-content-center">
                        <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">{{ $contact1['email'] ?? '' }}</p>
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
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form wire:submit.prevent="submit">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model="email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" wire:model="message" required></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
