<div>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        .carousel-inner img {
            height: 100vh;
            object-fit: cover;
        }

        .text-darkblue {
            color: rgb(44, 39, 82) !important;
        }

        .text-darkred {
            color: rgb(186, 2, 13) !important;
        }

        .btn-darkred {
            background-color: rgb(186, 2, 13) !important;
            color: white !important;
        }

        header {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.3);
            /* Semi-transparent background */
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

        footer,
        #about-us {
            background-color: #e9e9e9 !important;
        }

        .btn-custom-hover {
            background-color: rgb(186, 2, 13) !important;
            color: white !important;
            border-radius: none;
            font-size: 15px;
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
            font-size: 15px;
            text-decoration: none;
            padding: 10px 20px;
        }

        .btn-custom-without-hover2 {
            background-color: rgb(44, 39, 82) !important;
            color: white !important;
            border-radius: none;
            font-size: 15px;
            text-decoration: none;
            padding: 10px 20px;
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .services {
            background-image: url("{{ asset('assets/images/Study-aroad-platform-1-1.jpg') }}"), linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 1));
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            padding: 100px 0;
            min-height: 600px;
        }

        .counter-section {
            background-image: url("{{ asset('assets/images/counter-img.jpg') }}");
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            position: relative;
            padding: 50px 0;
        }

        .counter-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.15);
            z-index: 1;
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
    </style>

    <!-- Carousel -->
    <div style="height:100vh;width:100vw;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <!-- Header inside the carousel container but outside the carousel-inner -->
            <header class="d-flex flex-wrap justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light w-100 px-4">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="ISUK Logo" style="height: 40px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkblue fw-bold" aria-current="page"
                                    href="{{ route('home') }}" style="font-size: 15px;">Home</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkred fw-bold" aria-current="page"
                                    href="{{ route('about') }}" style="font-size: 15px;">About</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkred fw-bold" aria-current="page"
                                    href="{{ route('services') }}" style="font-size: 15px;">Services</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkred fw-bold" aria-current="page"
                                    href="{{ route('healthcare') }}" style="font-size: 15px;">Healthcare</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkred fw-bold" aria-current="page"
                                    href="{{ route('country') }}" style="font-size: 15px;">Country</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link active text-darkred fw-bold" aria-current="page"
                                    href="{{ route('contact') }}" style="font-size: 15px;">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="carousel-inner w-100">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/slider/slide_10.jpg') }}" class="d-block w-100" alt="asas">
                    <div class="carousel-caption">
                        <h2 class="text-darkred" style="font-size:4vw !important;font-weight:700 !important;">TRAVEL |
                            STUDY | WORK | LIVE</h2>
                        <p class="mt-4" style="font-size: 1.5vw; font-weight: 700 !important;">BRIDGING
                            THE GAP BETWEEN YOUR DREAMS AND REALITY</p>
                        <a href="{{ route('services') }}" class="btn btn-darkred d-inline-block px-3"
                            style="font-size:17px;">Discover
                            More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slider/slide_9.jpg') }}" class="d-block w-100" alt="asasa">
                    <div class="carousel-caption">
                        <h2 class="text-darkred" style="font-size:66px !important;font-weight:700 !important;">STUDY
                            ABROAD</h2>
                        <p style="font-size:23px !important;font-weight:500 !important;" class="mt-4">OPEN YOUR EYES
                            TO NEW
                            POSSIBILITIES</p>
                        <button class="btn btn-darkred d-inline-block px-3" style="font-size:17px">Learn
                            More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slider/slide_8.jpg') }}" class="d-block w-100" alt="asasa">
                    <div class="carousel-caption">
                        <h2 class="text-darkred" style="font-size:66px !important;font-weight:700 !important;">WORK IN
                            THE WEST</h2>
                        <p style="font-size:23px !important;font-weight:500 !important;" class="mt-2">ADDING WINGS TO
                            YOUR CAREER
                            LIFE</p>
                        <button class="btn btn-darkred d-inline-block px-3" style="font-size:17px;">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/slider/slide_4.jpg') }}" class="d-block w-100" alt="asasa">
                    <div class="carousel-caption">
                        <h2 class="text-darkred" style="font-size:66px !important;font-weight:700 !important;">GET
                            SETTLED
                            ANYWHERE</h2>
                        <p class="mt-2" style="font-size:23px !important;font-weight:500 !important;">IT'S TIME TO
                            ENJOY GLOBAL
                            CITIZEN LIFE</p>
                        <button class="btn btn-darkred d-inline-block px-3" style="font-size:17px;">Learn More</button>
                    </div>
                </div>
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

    <!-- About Us -->
    <section id="about-us" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 border" style="height:400px;">
                        <iframe class="embed-responsive-item w-100" style="height: 400px"
                            src="https://www.youtube.com/embed/cWuEZtgqjOo?controls=1&rel=0&playsinline=1&modestbranding=0&autoplay=1&enablejsapi=1&origin=https%3A%2F%2Ftropous.co.uk&widgetid=1"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="mb-4 text-darkblue" style="font-size:57px;letter-spacing:0.9px;">About ISUK</h2>
                    <p class="lead text-darkred mb-4" style="font-size:23p;font-weight:600;">Bridging the gap between
                        your dreams & reality...!</p>
                    <p class="mb-4 fw-bold" style="font-size:20px;">Are you planning to settle abroad? Sounds great!
                    </p>
                    <p class="mb-4">Then we are here to guide you. ISUK is one of the pioneering consultants, well
                        known for providing best guidance and counselling to make your western life dreams come true.
                    </p>
                    <p class="mb-4">What makes us unique is our team and goals. We dream a lot. And so, we help you
                        not only to dream, but to make your dreams a reality.</p>
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn-custom-without-hover2">Know
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->


    <!-- Services -->
    <section class="services bg-light position-relative">
        <!-- Background Overlay -->
        {{-- <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-10"></div> --}}

        <div class="container py-5">
            <div class="row">
                <!-- Study Abroad Section -->
                <div class="col-md-4 text-center mb-4">
                    <div class="bg-white rounded-circle mx-auto mb-3 p-4">
                        <i class="fas fa-user-graduate fa-2x text-darkred"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Study Abroad</h3>
                    <hr class="w-50 mx-auto">
                    <p>Explore the plethora of overseas education opportunities around you. We help you search and find
                        your dream course in the best universities around the world. Our expert advisors guide you all
                        the way from a free counselling session to your admission.</p>
                    <br><a href="#" class="btn-custom-hover">Learn More</a>
                </div>

                <!-- Travel Around Section -->
                <div class="col-md-4 text-center mb-4">
                    <div class="bg-white rounded-circle mx-auto mb-3 p-4">
                        <i class="fas fa-plane fa-2x text-darkred"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Travel Around</h3>
                    <hr class="w-50 mx-auto">
                    <p>Travel around the world &amp; feed the wanderlust in you. We provide complete travel assistance
                        to fulfill all your travel dreams. From visa assistance to accommodation, our travel experts can
                        assist you in everything to make your travelling hassle-free.</p><br>
                    <a href="" class="btn-custom-hover">Learn More</a>
                </div>

                <!-- Settle Anywhere Section -->
                <div class="col-md-4 text-center mb-4">
                    <div class="bg-white rounded-circle mx-auto mb-3 p-4">
                        <i class="fas fa-user-friends fa-2x text-darkred"></i>
                    </div>
                    <h3 class="h5 text-darkblue">Settle Anywhere</h3>
                    <hr class="w-50 mx-auto">
                    <p>Planning to settle abroad? We can guide you with all the immigration services in very few steps.
                        We do complete paper documentation &amp; everything that is required to settle in your dream
                        country. Let us know where you like to live &amp; leave us the rest.</p>
                    <br><a href="" class="btn-custom-hover">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->

    <!-- Services -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content Column -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="display-5 text-darkblue">Our Services</h1>
                    <p class="lead mt-4">We are providing a comprehensive range of services that includes visa
                        assistance, job search assistance, travel guidance, immigration assistance, and a lot more. If
                        you dream of an abroad life, and let it be for any purpose, just let us know your requirement
                        and we will get everything done.</p>
                    <a href="" class="btn-custom-without-hover2">Know more</a>
                </div>

                <!-- Image Column -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/professional-1-1536x960.jpg') }}" alt="Professional Services"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->

    <!-- Counter -->
    <section class="counter-section position-relative">
        <div class="overlay position-absolute w-100 h-100"></div>
        <div class="container py-3" style="background:rgba(138, 138, 138, 0.7)">
            <div class="row text-center text-white">
                <!-- Students Counter -->
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="counter">
                        <h2 class="display-6 display-md-4 fw-bold">7,500<span>+</span></h2>
                        <p class="h6 h-md-5">Students</p>
                    </div>
                </div>
                <!-- Universities Counter -->
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="counter">
                        <h2 class="display-6 display-md-4 fw-bold">127</h2>
                        <p class="h6 h-md-5">Universities</p>
                    </div>
                </div>
                <!-- Countries Counter -->
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="counter">
                        <h2 class="display-6 display-md-4 fw-bold">81</h2>
                        <p class="h6 h-md-5">Countries</p>
                    </div>
                </div>
                <!-- Immigrations Counter -->
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="counter">
                        <h2 class="display-6 display-md-4 fw-bold">7,500<span>+</span></h2>
                        <p class="h6 h-md-5">Immigrations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter -->


    <!-- Section -->
    <section class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img src="{{ asset('assets/images/ielts_wide-1024x386.jpeg') }}" alt="IELTS Wide Image"
                    class="img-fluid mb-4" loading="lazy" decoding="async"
                    srcset="{{ asset('assets/images/ielts_wide-1024x386.jpeg') }} 1024w,{{ asset('assets/images/ielts_wide-300x113.jpeg') }} 300w, {{ asset('assets/images/ielts_wide-768x290.jpeg') }} 768w, {{ asset('assets/images/ielts_wide-1024x386.jpeg') }} 1280w"
                    sizes="(max-width: 1024px) 100vw, 1024px">
            </div>
            <div class="col-12">
                <a href="" target="" class="btn btn-darkred btn-sm d-block mx-auto">Brochure
                </a>
            </div>
        </div>
    </section>
    <!-- Section -->

    <!-- Destination -->
    <div id="destination">
        <div class="container py-5">
            <h2 class="text-darkred text-center" style="font-size: 32px;">Top Destinations</h2>
            <p class="lead text-darkblue text-center" style="font-size: 15px;">Aspiring to live abroad? The world out
                there is quite big. And the opportunities are endless. Explore the plethora of possibilities around you.
            </p>
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="my-3 carousel-item-one">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                USA
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">USA is considered the most powerful
                                country in the world. Being a home to the most number of inventions and innovations in
                                the world, USA is best known for entrepreneurship also.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="my-3 carousel-item-two">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                United Kingdom
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">United Kingdom has the second largest
                                cluster of educational institutes in the world. It has some of the famous universities
                                of the world like Oxford, Cambridge and London universities.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="my-3 carousel-item-three">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                Canada
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">Canada is a country in the northern part
                                of North America. Canada's high-tech industrial society and a high standard of living
                                makes this country the ever-favourite immigration spot for everyone.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="my-3 carousel-item-four">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                New Zealand
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">One of the best places for higher
                                education, New Zealand is also considered the No. 1 country to retire comfortably. Rich
                                in culture, New Zealand is also packed with scenic delights and so always in the bucket
                                list of travellers.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="my-3 carousel-item-four">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                Australia
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">Australia ranks top in many areas
                                including education, comfortable retirement and the best country to travel alone. It is
                                the sixth largest country in the world and always a second home for immigrants from
                                around world.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="my-3 carousel-item-five">
                            <h5 class="m-2 p-2 text-white text-center fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.15)">
                                Europe
                            </h5>
                            <p class="text-white text-center mx-3 px-2 py-3 mt-5 fw-bold"
                                style="background-color: rgba(0, 0, 0, 0.3)">Europe holds an amazing history & a rich
                                cultural heritage. A land of beautiful landscapes, Europe is always the best tourist
                                spot. Each country in Europe has a unique culture, and holds its own identity and
                                traditions
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Destination -->

    <!-- Section -->
    <section class="consultation-section d-flex align-items-center justify-content-center">
        <div class="container py-2 text-center d-flex flex-column align-items-center justify-content-center"
            style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="row align-items-center py-1 text-white">
                <div class="col-12">
                    <h2 class="mb-3">Know the Ways, Show the Ways, Lead the Ways...!</h2>
                    <p class="mb-4">One place where you can find solutions for all your abroad life requirements and
                        fulfill your abroad dreams.</p>
                    <a href="{{ route('contact') }}" class="btn-custom-without-hover">
                        Get Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-5 ps-0 ">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Tropous Logo" class="img-fluid mb-4">
                        <p class="text-muted" style="font-size: 15px;">We can assist you to find the best destinations
                            through different ways.</p>
                        <p class="text-muted" style="font-size: 15px;">We deal with more than 65 countries across the
                            globe and we assure your dreams come true with us in the best possible manner.</p>
                    </div>
                    <div class="col-md-8 p-5 pe-0">
                        <h3 class="text-darkred" style="font-size: 24px;">Contact Details</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-darkblue fw-bold" style="font-size: 16px; color: rgb(44, 39, 82);">
                                    London</h5>
                                <p class="text-muted" style="font-size: 15px;">xyz road,<br>London E6 2JG</p>
                                <p class="text-muted" style="font-size: 15px;">Landline: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 2033 557390</a></p>
                                <p class="text-muted" style="font-size: 15px;">WhatsApp: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 7404 929210</a></p>
                                <p class="text-muted" style="font-size: 15px;">E-mail: <a
                                        href="mailto:info@isukconsultancy.co.uk"
                                        class="text-darkred text-decoration-none">info@isukconsultancy.co.uk</a></p>
                                <p class="text-muted" style="font-size: 15px;">study@isukconsultancy.co.uk</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-darkblue fw-bold" style="font-size: 16px; color: rgb(44, 39, 82);">New
                                    York</h5>
                                <p class="text-muted" style="font-size: 15px;">xyz road,<br>London E6 2JG</p>
                                <p class="text-muted" style="font-size: 15px;">Landline: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 2033 557390</a></p>
                                <p class="text-muted" style="font-size: 15px;">WhatsApp: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 7404 929210</a></p>
                                <p class="text-muted" style="font-size: 15px;">E-mail: <a
                                        href="mailto:info@isukconsultancy.co.uk"
                                        class="text-darkred text-decoration-none">info@isukconsultancy.co.uk</a></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-darkblue fw-bold" style="font-size: 16px; color: rgb(44, 39, 82);">
                                    Sydney</h5>
                                <p class="text-muted" style="font-size: 15px;">xyz road,<br>London E6 2JG</p>
                                <p class="text-muted" style="font-size: 15px;">Landline: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 2033 557390</a></p>
                                <p class="text-muted" style="font-size: 15px;">WhatsApp: <a href="tel:+447466330705"
                                        class="text-darkred text-decoration-none">+44 7404 929210</a></p>
                                <p class="text-muted" style="font-size: 15px;">E-mail: <a
                                        href="mailto:info@isukconsultancy.co.uk"
                                        class="text-darkred text-decoration-none">info@isukconsultancy.co.uk</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-3">
                    <div class="col-md-12 ps-0 d-flex align-items-center justify-content-center">
                        <p class="mb-0 text-md-center" style="font-size: 15px;">© Copyright 2024 - All Rights
                            Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
