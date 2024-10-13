<?php
include('header.php');
?>
<style>
  .home-card {
    border: 1px solid #e53089;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
  }

  .facilities {
    max-height: 200px;
    width: 100%;
    object-fit: cover;
  }
</style>

<body>
  <!-- slider code  -->
  <div id="uniqueSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#uniqueSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/home/slider1.jpg" class="d-block w-100" alt="First Slide">
      </div>
      <div class="carousel-item">
        <img src="../img/home/slider2.jpg" class="d-block w-100" alt="Second Slide">
      </div>
      <div class="carousel-item">
        <img src="../img/home/slider3.jpg" class="d-block w-100" alt="Third Slide">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#uniqueSlider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#uniqueSlider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Expertise  -->
  <div class="container text-center pt-5">
    <h1>Nurturing New Life with Compassion and Expertise</h1>
    <p class="custom-justify mt-4">Janani Hospital is a leading maternity and women’s healthcare facility dedicated to providing exceptional care for mothers and newborns. With a team of experienced specialists and state-of-the-art facilities, we offer a comprehensive range of services, from prenatal care and childbirth to gynecology and fertility treatments. Our patient-centered approach ensures that every woman receives personalized care in a warm, supportive environment. At Janani Hospital, we are committed to nurturing new life and supporting women at every stage of their journey to motherhood.</p>
  </div>

  <div class="hospital-stats">
    <div class="stat-item">
      <i class="fas fa-briefcase-medical"></i>
      <h2>5+ Years of Experience</h2>
    </div>
    <div class="stat-item">
      <i class="fas fa-user-md"></i>
      <h2>10+ Expert Doctors</h2>
    </div>
    <div class="stat-item">
      <i class="fas fa-smile"></i>
      <h2>100+ Happy Patients</h2>
    </div>
    <div class="stat-item">
      <i class="fas fa-procedures"></i>
      <h2>Deliveries & Surgeries</h2>
    </div>
  </div>

  <!-- Treatments -->
  <div class="treatments text-center py-5">
    <h1>Our Treatments</h1>
    <p class="custom-justify">
      We offer comprehensive and advanced treatments tailored to your needs, <br> ensuring effective care and optimal recovery in a compassionate environment.
    </p>
    <div class="container">
      <div class="row mt-4">

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/obstetrics.jpg" class="treatment-img" alt="Obstetrics">
          <h5 class="card-title">Obstetrics</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/infertility.jpg" class="treatment-img" alt="Infertility">
          <h5 class="card-title">Infertility</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/gynaecology.jpg" class="treatment-img" alt="Gynaecology">
          <h5 class="card-title">Gynaecology</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/laparoscopy.jpg" class="treatment-img" alt="Laparoscopy">
          <h5 class="card-title">Laparoscopy</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/nicu.jpg" class="treatment-img" alt="Pediatrics & NICU">
          <h5 class="card-title">Pediatrics & NICU</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/orthopaedics.jpg" class="treatment-img" alt="Orthopaedics">
          <h5 class="card-title">Orthopaedics</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/general_medicine.jpg" class="treatment-img" alt="General Medicine">
          <h5 class="card-title">General Medicine</h5>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 my-4">
          <img src="../img/home/general_surgery.jpg" class="treatment-img" alt="General Surgery">
          <h5 class="card-title">General Surgery</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Facilities  -->
  <div class="container text-center mt-5">
    <h1>Our Facilities</h1>
    <p class="custom-justify my-4">Our hospital is equipped with cutting-edge technology and modern amenities to ensure a <br> comfortable and effective treatment experience for all our patients.</p>

    <!-- Second Carousel: Facilities Slider -->
    <div id="facilitiesSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#facilitiesSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/facilities/suite_room.jpg" class="d-block w-100" alt="Suite Room">
        </div>
        <div class="carousel-item">
          <img src="../img/facilities/general.jpeg" class="d-block w-100" alt="General Wards">
        </div>
        <div class="carousel-item">
          <img src="../img/facilities/icu.jpg" class="d-block w-100" alt="ICU">
        </div>
        <div class="carousel-item">
          <img src="../img/facilities/consulting.jpeg" class="d-block w-100" alt="Consulting Room">
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

    <button type="button" class="btn btn-primary my-5" id="viewFacilitiesButton">View All Facilities</button>
  </div>

  <hr>

  <!-- Appointment form -->
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="display-5 mb-4">Why Choose Janani Multispeciality Hospital?</h3>
        <p class="justift-content">Janani Multispeciality Hospital offers comprehensive, expert care across a wide range of medical specialties in a compassionate and state-of-the-art environment.</p>
        <section id="appointment-section">
          <form id="appointment-form">
            <h3>Book Appointment</h3>
            <h1>Healthcare at Its Finest</h1>
            <div class="row g-3">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" placeholder="Name" required>
                  <label for="name">Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" placeholder="Email" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" placeholder="Phone" required>
                  <label for="phone">Phone Number</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="date" class="form-control" id="date" placeholder="Date" required>
                  <label for="date">Date</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="time" class="form-control" id="time" placeholder="Time" required>
                  <label for="time">Time</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary py-3 px-4" type="submit">Book Appointment</button>
              </div>
            </div>
          </form>
          <section>
      </div>
      <div class="col-lg-6">
        <div class="row g-4 align-items-center">
          <div class="col-md-6">
            <div class="row g-4">
              <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                  <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <i class="fas fa-heartbeat"></i>
                  </div>
                  <h4 class="mb-0">Health Screening</h4>
                  <p class="justify-content">
                    Health Screening involves preventive tests and assessments to detect potential health issues early.
                  </p>
                </div>
              </div>
              <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                  <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                    <i class="fas fa-ambulance"></i>
                  </div>
                  <h4 class="mb-0">Emergency Service</h4>
                  <p class="justify-content">
                    Emergency Service provides immediate medical care for acute illnesses and injuries.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
              <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                <i class="fas fa-stethoscope"></i>
              </div>
              <h4 class="mb-0">Lab Test</h4>
              <p class="justify-content">
                Lab Tests analyze samples to diagnose and monitor health conditions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hospital-reviews pt-5">
    <h1 class="text-center pt-3">What Makes Us the Best Among Others?</h1>
    <div class="reviews-container py-4">

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocI_6JmI2RVVH0t_lQJLhZH4hbHVJBR446EQNFVFRVhgBDx0uw=s56-c0x00000000-cc-rp-mo" data-src="https://lh3.googleusercontent.com/a/ACg8ocI_6JmI2RVVH0t_lQJLhZH4hbHVJBR446EQNFVFRVhgBDx0uw=s56-c0x00000000-cc-rp-mo" alt="Hanamanth Koli" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/102106547244203358743/reviews" class="wp-google-name" target="_blank" rel="nofollow noopener">Hanamanth Koli</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p></p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a-/ALV-UjWz6t-ImJXm82D20ysNyo-baFVsF3gNo-2G0HzWYykjdvWhtrS_=s56-c0x00000000-cc-rp-mo" data-src="https://lh3.googleusercontent.com/a-/ALV-UjWz6t-ImJXm82D20ysNyo-baFVsF3gNo-2G0HzWYykjdvWhtrS_=s56-c0x00000000-cc-rp-mo" class="rplg-review-avatar rplg-blazy" alt="Kumar Biradar" width="50" height="50" title="Kumar Biradar" onerror="if(this.src!='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png')this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/113326322460949206648/reviews/@16.8082822,75.7248957,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" class="wp-google-name" target="_blank" rel="nofollow noopener">Kumar Biradar</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>Super treatment</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocJvPL_H7bZ_hJgRNhFEq4rbD8rIvCv9aNK9wV25teoLB25Z6Q=s56-c0x00000000-cc-rp-mo" data-src="https://lh3.googleusercontent.com/a-/ALV-UjWz6t-ImJXm82D20ysNyo-baFVsF3gNo-2G0HzWYykjdvWhtrS_=s56-c0x00000000-cc-rp-mo" class="rplg-review-avatar rplg-blazy" alt="Jangeer m" width="50" height="50" title="Jangeer m" onerror="if(this.src!='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png')this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/103868582029635280577/reviews/@16.8001536,75.726848,14z/data=!4m3!8m2!3m1!1e1?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" class="wp-google-name" target="_blank" rel="nofollow noopener">Jangeer m</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p></p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocKd2QxzVi-0e4nyoGVGHih3fryK1Yb7zP5uaHBFOxP5edLprg=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocKd2QxzVi-0e4nyoGVGHih3fryK1Yb7zP5uaHBFOxP5edLprg=s56-c0x00000000-cc-rp-mo"
            class="rplg-review-avatar rplg-blazy" alt="Prakash Mulawad" width="50" height="50" title="Prakash Mulawad"
            onerror="if(this.src!='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png')this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/108381169021563515604/reviews" class="wp-google-name" target="_blank" rel="nofollow noopener">Prakash Mulawad</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>We are happy to have such facilities here and will be more likely to come back</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocLHBKZp7nSRPgsHpWCv_7XgMS2rCszHb3YOfuTH3yMINRV_0KE=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocLHBKZp7nSRPgsHpWCv_7XgMS2rCszHb3YOfuTH3yMINRV_0KE=s56-c0x00000000-cc-rp-mo" alt="chandru konnur" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/109043871895038646504/reviews/@16.8578116,75.7102772,13z/data=!3m1!4b1!4m3!8m2!3m1!1e1?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" class="wp-google-name" target="_blank" rel="nofollow noopener">chandru konnur</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>Good</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocJmIbg1rR1V_ZmBKBWwKw7AQlEAQE-a_S8Zng8FbQGLYMQxSg=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocJmIbg1rR1V_ZmBKBWwKw7AQlEAQE-a_S8Zng8FbQGLYMQxSg=s56-c0x00000000-cc-rp-mo" alt="Yashoda Chalwadi" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/107646461106664903250/reviews" class="wp-google-name" target="_blank" rel="nofollow noopener">Yashoda Chalwadi</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>Hospital staff and doctors are good well maintained clean hospital I feel good with treatment thank u doctors 🙏</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocJ07E8wFzLHy_h1JhxHMhRz3RS5rcWqy8jL2aXl4ui3oRoRbw=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocJ07E8wFzLHy_h1JhxHMhRz3RS5rcWqy8jL2aXl4ui3oRoRbw=s56-c0x00000000-cc-rp-mo" alt="Ningappa Paramagond" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/102939886611252940771/reviews/@16.1776008,74.742616,9z/data=!3m1!4b1!4m3!8m2!3m1!1e1?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" class="wp-google-name" target="_blank" rel="nofollow noopener">Ningappa Paramagond</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>My wife admitted here for delivery I am totally happy with Dr Hampanagouda sir and Dr Sphoorty mam and also all the staff are very best and also hospital is well maintained and clean.</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocIcXzZ7Pzm4G7dfdv2I1F2gkquBiICPclQ4Cm8lEaQ1IzQchQ=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocIcXzZ7Pzm4G7dfdv2I1F2gkquBiICPclQ4Cm8lEaQ1IzQchQ=s56-c0x00000000-cc-rp-mo" alt="mukund amalyal" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/118376546592609259918/reviews" class="wp-google-name" target="_blank" rel="nofollow noopener">mukund amalyal</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>Best service I have ever seen...Thanks janani hospital..</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a/ACg8ocJpb_xsRuui0UzCvcjZkrcJoGwdIe4JN7gA3kXJ7PhItXk8ww=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a/ACg8ocJpb_xsRuui0UzCvcjZkrcJoGwdIe4JN7gA3kXJ7PhItXk8ww=s56-c0x00000000-cc-rp-mo" alt="Hasan i d hasan i d" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/105834683549834827562/reviews" class="wp-google-name" target="_blank" rel="nofollow noopener">Hasan i d hasan i d</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>hospital staff and doctors are very good one of best hospital i seen</p>
        </div>
      </div>

      <div class="review-card">
        <div class="google-logo">
          <svg viewBox="0 0 512 512" height="18" width="18">
            <g fill="none" fill-rule="evenodd">
              <path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" />
              <path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" />
              <path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" />
              <path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" />
              <path d="M20 20h472v472H20V20z" />
            </g>
          </svg>
        </div>
        <div class="review-avatar">
          <img loading="lazy" decoding="async" src="https://lh3.googleusercontent.com/a-/ALV-UjVQhmsJ8NIftbQPLmyx7rwYLOeuvMD7p5cPX88pnNLTAd9QH3jR=s56-c0x00000000-cc-rp-mo"
            data-src="https://lh3.googleusercontent.com/a-/ALV-UjVQhmsJ8NIftbQPLmyx7rwYLOeuvMD7p5cPX88pnNLTAd9QH3jR=s56-c0x00000000-cc-rp-mo" alt="Chandrashekhar Koshti" onerror="this.onerror=null; this.src='https://janani-hospitals.com/wp-content/plugins/widget-google-reviews/assets/img/guest.png';" />
          <div class="reviewer-info">
            <a href="https://www.google.com/maps/contrib/106311702259219160084/reviews/@16.8121322,75.7213693,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" class="wp-google-name" target="_blank" rel="nofollow noopener">Chandrashekhar Koshti</a>
            <div class="wp-google-time">a month ago</div>
          </div>
        </div>
        <div class="review-stars">
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
          <span class="star">★</span>
        </div>
        <div class="review-feedback">
          <p>It's very hygineic and best doctors and staffs are very co ordinate.. facilities are good and comfortable..</p>
        </div>
      </div>

    </div>
  </div>
</body>

<script>
  document.getElementById('viewFacilitiesButton').onclick = function() {
    window.location.href = 'facilities.php';
  };
</script>

<?php
include('footer.php');
?>