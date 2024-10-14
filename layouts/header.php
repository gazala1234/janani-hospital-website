<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/img/janani-logo.png" type="image/png" sizes="64x64">
    <title>Janani - Multispeciality Hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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

                <li class="dropdown dropdown-items nav-item nav-link"><a href="#" style="color: black;">Departments <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown dropdown-items"><a href="#">OBG (Obstetrics and Gynecology) <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="infertility.php" class="dropdown-items">Infertility</a></li>
                                <li><a href="gynecology.php" class="dropdown-items">Gynecology</a></li>
                                <li><a href="delivery.php" class="dropdown-items">Painless Normal Delivery</a></li>
                                <li><a href="endoscopy.php" class="dropdown-items">Endoscopy</a></li>
                                <li><a href="laparoscopy.php" class="dropdown-items">Laparoscopy</a></li>
                                <li><a href="hysteroscopy.php" class="dropdown-items">Hysteroscopy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">Pediatrics & Neonatology <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="nicu.php" class="dropdown-items">Pediatrics & NICU (Neonatology / Immunization)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">General Medicine <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="general-medicine.php" class="dropdown-items">General Medicine</a></li>
                                <li><a href="icu.php" class="dropdown-items">Critical Care (ICU)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">General Surgery & Surgical Gastroenterology <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="general-surgery.php" class="dropdown-items">General Surgery</a></li>
                                <li><a href="gastroenterology.php" class="dropdown-items">Surgical Gastroenterology</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">Orthopaedics <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="fracture.php" class="dropdown-items">Fracture, Trauma & Accident</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">Urology & Nephrology <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="urology.php" class="dropdown-items">Urology</a></li>
                                <li><a href="nephrology.php" class="dropdown-items">Nephrology</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-items"><a href="#">Pain Management <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="pain-clinic.php" class="dropdown-items">Pain Clinic</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Handle the search icon click event
            $('#searchIcon').on('click', function() {
                var $searchInput = $('#searchInput');

                // Toggle search input visibility
                if ($searchInput.is(':visible')) {
                    $searchInput.hide();
                } else {
                    $searchInput.show().focus();
                }
            });

            // Hide search input when clicking outside
            $(window).on('click', function(event) {
                var $searchInput = $('#searchInput');
                var $searchContainer = $('.search-container');

                if (!$searchContainer.is(event.target) && $searchContainer.has(event.target).length === 0) {
                    $searchInput.hide();
                }
            });
        });
    </script>