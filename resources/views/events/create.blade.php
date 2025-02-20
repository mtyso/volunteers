@extends('layout.footer')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Event | Al-Khwarizmi Volunteers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

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
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active text-primary">Events</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
</div>

     <!-- Event Creation Form -->
    <div class="container my-5">
        <div class="row align-items-center container-custom">
            <div class="col-md-12">
                <h1 class="heading">Create Event</h1>

                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Event Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Intro -->
                    <div class="mb-3">
                        <label for="intro" class="form-label">Event Intro</label>
                        <input type="text" class="form-control" id="intro" name="intro" value="{{ old('intro') }}" required>
                        @error('intro') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Place -->
                    <div class="mb-3">
                        <label for="place" class="form-label">Event Place</label>
                        <input type="text" class="form-control" id="place" name="place" value="{{ old('place') }}" required>
                        @error('place') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Date -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                        @error('date') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Content -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Event Content</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                        @error('content') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Image -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Event Image (16:9)</label>
                        <input type="file" class="form-control" id="img" name="img" accept="image/*" required>
                        @error('img') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <!-- Event Second Image -->
                    <div class="mb-3">
                        <label for="img2" class="form-label">Second Event Image (16:9)</label>
                        <input type="file" class="form-control" id="img2" name="img2" accept="image/*">
                        @error('img2') 
                            <div class="text-danger">{{ $message }}</div> 
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>

@endsection
