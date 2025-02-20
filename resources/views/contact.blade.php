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
                    <a href="/ourteam" class="nav-item nav-link">Our Team</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="/partners" class="dropdown-item">Partners</a>
                            <a href="/reviews" class="dropdown-item active">Reviews</a>
                            <a href="/FAQ" class="dropdown-item">FAQs</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link active">Contact Us</a>
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-light rounded p-5 mb-5">
                            <h4 class="text-primary mb-4">Get in Touch</h4>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0">8838+58J, Mahtumkuli Street, Tashkent</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">aslbeksalixov24@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">(+998) 90 026 95 22</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-add-item">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>akv.uz</h4>
                                            <p class="mb-0">(+998) 95 073 73 13</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-primary">Send Your Message</h4>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                                form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                                and you're done. <a class="text-primary fw-bold"
                                    href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone"
                                                placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="project"
                                                placeholder="Project">
                                            <label for="project">Your Project</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="subject"
                                                placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here"
                                                id="message" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded h-100">
                        <iframe class="rounded h-100 w-100" style="height: 400px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.271484495113!2d69.31319387616884!3d41.30295727131081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef5378726fbaf%3A0x2d84fd21efda8919!2sAl%20Xorazmiy%20nomidagi%20Axborot%20Texnologiyalari%20Maktabi!5e0!3m2!1sen!2sbd!4v1730450938296!5m2!1sen!2sbd"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
