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


    <style>
        body {
            background-color: #F4F1F6;
        }

        .container-custom {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .heading {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4d79b5;
        }

        .subheading {
            font-size: 1.25rem;
            color: #6C757D;
        }

        .btn-custom {
            background-color: #4d79b5;
            color: white;
            border-radius: 30px;
            padding: 10px 30px;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 20px;
        }

        .text-content h3 {
            color: #4a1c6f;
        }

        .icon-circle {
            width: 50px;
            height: 50px;
            background-color: #e63c90;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        @media (max-width: 768px) {
            .heading {
                font-size: 1.75rem;
            }

            .subheading {
                font-size: 1rem;
            }
        }
    </style>
    
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
                            <a href="/events" class="dropdown-item active">Our Events</a>
                            <a href="/upcomings" class="dropdown-item ">Upcoming Events</a>
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Events</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Events</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>

   <!-- Event Content Start -->
   <div class="container my-5">
    <div class="row align-items-center container-custom">
        <div class="col-md-6 image-container">
            <img src="/img/{{$event->img}}" alt="img" style="margin: 10px;">
            <img src="/img/{{$event->img2}}" alt="img2" style="margin: 10px;">
        </div>
        <div class="col-md-6">
            <h1 class="heading">{{$event->name}}</h1>
            <p class="subheading">{{$event->intro}}</p>
            <div class="mt-4">
                <div class="d-flex align-items-start">
                    <div>
                        <p>{!! $event->content !!}</p>
                    </div>
                </div>
            </div>
            <!-- Edit and Delete buttons (only visible for admins) -->
            @if (auth()->check() && auth()->user()->is_admin)
                <div class="mt-4">
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endif
        </div>
        <div style="display: flex; flex-direction: column; justify-content: flex-end;">
            <a href="/events" class="btn btn-light mt-4" style="align-self: flex-end; ">Go Back</a>
        </div>
    </div>
</div>