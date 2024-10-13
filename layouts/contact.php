<?php
include('header.php');
?>
<style>
    .card {
        background-color: #f2eeee;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>

<body>
    <!-- Contact Start -->
    <div class="container-xxl pt-4">
        <div class="container">
            <h1 class="text-center mb-4">Contact Details</h1>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="mb-4">We’re Here to Help— <br> Reach Out Anytime.</h2>
                    <p class="justify-content mb-4">Need assistance or have questions? We’re here to help! Reach out to us through our contact form, give us a call, or visit us in person. At Janani Multispeciality Hospital, your health and satisfaction are our top priorities, and we’re always ready to support you.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
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
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Phone" required>
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-4">
                        <div class="col-md-7">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope fa-2x text-primary"></i>
                                    <h5 class="card-title">Email Us</h5>
                                    <p class="card-text">jananihospital2018@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-phone-alt fa-2x text-primary"></i>
                                    <h5 class="card-title">Call Us</h5>
                                    <p class="card-text">08352-277077</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn mb-4" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://maps.google.com/maps?q=Jala%20Nagar%20Main%20Road&t=m&z=10&output=embed&iwloc=near"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</body>

<?php
include('footer.php');
?>