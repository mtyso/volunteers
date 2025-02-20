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
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
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
                    <a href="/home" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link ">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Events</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="/events" class="dropdown-item ">Our Events</a>
                            <a href="/upcomings" class="dropdown-item active">Upcoming Events</a>
                        </div>
                    </div>
                    <a href="/ourteam" class="nav-item nav-link">Our Team</a>
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

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Upcoming Events</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Events</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <br><br>
    <!-- Services Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-5 pb-4 text-primary"> COMING SOON</h1>
                <p class="mb-4">This page is under construction, follow us for update now</p>

            </div>
            <!-- <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonialimg">
                        <img src="../../template/img/main.png" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div>
                            <h4 class="mb-0">Jingle benz</h4>
                            <p class="mb-0">19.11.2007</p>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-5 my-3 my-lg-0 ">Register</a>
                        </div>
                    </div>
                </div>
            
            </div> -->
            <!-- <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonialimg">
                        <img src="../../img/main.png" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div class="col-6">
                            <h4 class="mb-0">Jingle Benz</h4>
                            <p class="mb-0">19.11.2007</p>
                        </div>
                        <div>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonialimg">
                        <img src="../../img/main.png" class="img-fluid" alt="Image">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div class="col-6">
                            <h4 class="mb-0">Jingle Benz</h4>
                            <p class="mb-0">19.11.2007</p>
                        </div>
                        <div>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonialimg">
                        <img src="../../img/main2.png.JPG" class="img-fluid" alt="Image" style="max-width: 100%; height: 186;">
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis
                            excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum
                            accusamus.
                        </p>
                    </div>
                    <div class="testimonial-title">
                        <div class="col-6">
                            <h4 class="mb-0">Jingle Benz</h4>
                            <p class="mb-0">19.11.2007</p>
                        </div>
                        <div>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="upcoming.php">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonialimg">
                        <img src="../../img/main.png" class="img-fluid" alt="Image"  style="max-width: 100%; height: 186;">
                    </div>
                    <div class="testimonial-text">
                        <h2 class="mb-0 text-primary text-start">Al-Xorazmiy Olimpiadasi krche
                        </h2>
                    </div>
                    <div class="testimonial-title">
                        <div class="col-6">
                            <p class="mb-0">Al-Xorazmiy maktabi</p>
                            <p class="mb-0">19.11.2007</p>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="/bayroq">Learn More</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>