<?php
include('header.php');
?>

<body>
    <!-- About Start -->
    <div class="container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h1 class="text-center about-text mb-4">About Janani</h1>
                    <p class="janani-about">At Janani Hospital, we believe that every birth is a precious moment, and we are honored to be a part of your journey into motherhood. Established with the mission of providing compassionate and expert care, Janani Hospital has become a trusted name in maternity and women’s healthcare.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p>Our hospital is dedicated to offering a full spectrum of services, from comprehensive prenatal and postnatal care to advanced gynecology and fertility treatments. Our team of experienced obstetricians, gynecologists, neonatologists, and nurses work together to ensure that every woman and newborn receives the highest standard of care.</p>
                    <p>What sets Janani Hospital apart is our unwavering commitment to a patient-centered approach. We understand that every woman’s journey is unique, and we take the time to listen, understand, and tailor our care to meet your specific needs. Our state-of-the-art facilities are designed to provide a comfortable, safe, and nurturing environment, where you and your family are supported every step of the way.</p>
                </div>
            </div>
        </div>

        <!-- About Slider -->
        <div id="facilitiesSlider" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/about/about1.jpeg" class="d-block w-100" alt="Suite Room">
                </div>
                <div class="carousel-item">
                    <img src="../img/about/about2.jpeg" class="d-block w-100" alt="General Wards">
                </div>
                <div class="carousel-item">
                    <img src="../img/about/about3.jpeg" class="d-block w-100" alt="ICU">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#facilitiesSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#facilitiesSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="services">
            <h1 class="custom-justify py-5">Our medical expertise and comprehensive care <br> extends well past maternity services. They include:</h1>
            <div class="service-item">
                <i class="fas fa-baby service-icon"></i>
                <div class="service-title">Pregnancy Care</div>
            </div>

            <div class="service-item">
                <i class="fas fa-heartbeat service-icon"></i>
                <div class="service-title">Infertility Care</div>
            </div>

            <div class="service-item">
                <i class="fas fa-female service-icon"></i>
                <div class="service-title">Gynecological Care</div>
            </div>

            <div class="service-item">
                <i class="fas fa-child service-icon"></i>
                <div class="service-title">Pediatric Care</div>
            </div>

            <div class="service-item">
                <i class="fas fa-hospital service-icon"></i>
                <div class="service-title">New Born Intensive Care</div>
            </div>
        </div>
    </div>

    <div class="vision-mission-wrapper">
        <div class="container vision-mission">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-icon mb-3">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h2 class="heading">
                        <span class="our-text">OUR</span>
                        <span class="vision-text">VISION</span>
                    </h2>
                    <p>
                        To be the kind of leader in the space of women and child health that India has not witnessed yet, by providing premier quality healthcare to women and children.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card-icon mb-3">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h2 class="heading">
                        <span class="our-text">OUR</span>
                        <span class="vision-text">MISSION</span>
                    </h2>
                    <p>
                        Our aim is the pursuit of excellence in providing the best maternal and neonatal care by setting higher standards for ourselves and striving constantly to achieve them.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
</body>

<?php
include('footer.php');
?>