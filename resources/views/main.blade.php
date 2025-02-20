@extends('layout.footer')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Al-Khwarizmi Volunteers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Template Stylesheet -->
    <link href="/css/stil.css" rel="stylesheet">

    <link rel="shortcut icon" href="/img/logo.png" />
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="/img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/home" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Events</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="/events" class="dropdown-item">Our Events</a>
                            <a href="/upcomings" class="dropdown-item">Upcoming Events</a>
                        </div>
                    </div>
                    <a href="ourteam" class="nav-item nav-link">Our Team</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="/partners" class="dropdown-item">Partners</a>
                            <a href="/reviews" class="dropdown-item">Reviews</a>
                            <a href="/FAQ" class="dropdown-item">FAQs</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact Us</a>
                </div>

                @auth
                    <a href="/profile" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Profile</a>
                @else
                    <a href="/login" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Login</a>
                @endauth
            </div>
        </nav>
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="/img/main.png" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-0 ">
                    <div class="col-lg-0 col-xl-6"></div>
                    <div class="col-xl-6 animated fadeInLeft ">
                        <div class="text-sm-center text-md-end">
                            <h1 class="display-4 text-uppercase text-primary mb-4">Al-Khwarizmi Volunteers</h1>
                            <p class="mb-5 fs-5">Helping hands, caring hearts. Volunteer with us. 
                            </p>
                            
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://t.me/akv_uz" target="_blank"><i class="fab fa-telegram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/al_khwarizmi_volunteers?igsh=Y3NoNGs2ejA1MWtq" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="/img/main2.png.JPG" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h1 class="display-4 text-uppercase text-primary mb-4">Al-Khwarizmi Volunteers</h1>
                            <p class="mb-5 fs-5">Join our volunteer family. Be part of something amazing.</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://t.me/akv_uz" target="_blank"><i class="fab fa-telegram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href="https://www.instagram.com/al_khwarizmi_volunteers?igsh=Y3NoNGs2ejA1MWtq" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->


<!-- About Us Block Start -->
@include('blocks.aboutUsblock')
<!-- About Us Block End -->

<!-- About Us Glance Block Start -->
@include('blocks.aboutCounterblock')
<!-- About Us Clance Block End -->

<!-- Events Block Start -->
@include('blocks.eventsBlock')
<!-- Events  Block End -->

<!-- Parnters Block Start -->
@include('blocks.partnersBlock')
<!-- Partners  Block End -->

<!-- FAQ Block Start -->
@include('blocks.faqBlock')
<!-- FAQ Block End -->

<!-- Rewiews Block Start -->
@include('blocks.reviewsBlock')
<!-- Rewiews Block End -->

<!-- Dev Team Block Start -->
@include('blocks.devTeamBlock')
<!-- Dev Team Block End -->