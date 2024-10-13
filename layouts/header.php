<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/img/janani-logo.png" type="image/png" sizes="64x64">
    <title>Janani - Multispeciality Hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Font Awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
        <a href="../layouts/index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="/img/janani-logo.png" alt="Janani Hospital" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-1 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>

                <a href="about.php" class="nav-item nav-link">About</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Departments</a>
                    <div class="dropdown-menu bg-light m-0">

                        <a href="#" class="dropdown-item dropdown-toggle">OBG (Obstetrics and Gynecology)</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Infertility</a>
                            <a href="#" class="dropdown-item">Gynecology</a>
                            <a href="#" class="dropdown-item">Painless Normal Delivery</a>
                            <a href="#" class="dropdown-item">Endoscopy</a>
                            <a href="#" class="dropdown-item">Laparoscopy</a>
                            <a href="#" class="dropdown-item">Hysteroscopy</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle">Pediatrics & Neonatology</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Pediatrics & NICU (Neonatology / Immunization)</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">General Medicine</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">General Medicine</a>
                            <a href="#" class="dropdown-item">Critical Care (ICU)</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle">General Surgery & Surgical Gastroenterology</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">General Surgery</a>
                            <a href="#" class="dropdown-item">Surgical Gastroenterology</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle">Orthopaedics</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Fracture, Trauma & Accident</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle">Urology & Nephrology</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Urology</a>
                            <a href="#" class="dropdown-item">Nephrology</a>
                        </div>

                        <a href="#" class="dropdown-item dropdown-toggle">Pain Management</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Pain Clinic</a>
                        </div>

                    </div>
                </div>

                <a href="facilities.php" class="nav-item nav-link">Facilities</a>

                <a href="doctors.php" class="nav-item nav-link">Our Doctors</a>

                <a href="gallery.php" class="nav-item nav-link">Gallery</a>

                <a href="contact.php" class="nav-item nav-link">Contact</a>

                <a href="#" class="login-button nav-item btn btn-outline-primary light" style="margin-left: 10px;">Login</a>

                <div class="nav-item nav-link search-container">
                    <i class="fas fa-search search-icon" id="searchIcon" aria-hidden="true"></i>
                    <input type="text" class="form-control search-input" placeholder="Search" aria-label="Search" id="searchInput">
                </div>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#searchIcon').on('click', function() {
                var $navItems = $('.nav-items');
                var $searchInput = $('#searchInput');

                if ($searchInput.is(':visible')) {
                    $searchInput.hide();
                    $navItems.show();
                } else {
                    $navItems.hide();
                    $searchInput.show().focus();
                }
            });

            $(window).on('click', function(event) {
                var $searchInput = $('#searchInput');
                var $searchContainer = $('.search-container');
                var $navItems = $('.nav-items');
                if (!$searchContainer.is(event.target) && $searchContainer.has(event.target).length == 0) {
                    $searchInput.hide();
                    $navItems.show();
                }
            });
        });
    </script>
