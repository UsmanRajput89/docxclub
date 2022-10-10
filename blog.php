<?php
    define('PAGE_TITLE', 'Home Page | Docx Physiotherapy ');
    include 'inc/header.php';

?>


        <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/blog/blog_1.jpg);">
            <div class="banner-section">
                <div class="container text-center wow fadeInUp">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Join As Doctor</li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">Join As Doctor</h1>
                </div> <!-- .container -->
            </div> <!-- .banner-section -->
        </div> <!-- .page-banner -->

        <div class="page-section">
            <div class="container">
                <h1 class="text-center wow fadeInUp">Required Information</h1>

                <form class="about-form mt-5">
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2 wow fadeInLeft">
                            <label for="fullName">Name</label>
                            <input type="text" id="fullName" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col-sm-6 py-2 wow fadeInRight">
                            <label for="emailAddress">Email</label>
                            <input type="text" id="emailAddress" class="form-control" placeholder="Email address">
                        </div>

                        <div class="col-12 py-2 wow fadeInUp">
                            <label for="subject">Phone</label>
                            <input type="text" id="subject" class="form-control" placeholder="Enter Phone Number">
                        </div>

                        <div class="col-12 py-2 wow fadeInUp">
                            <label for="subject">Qualifications</label>
                            <input type="text" id="subject" class="form-control" placeholder="Enter Qualifications">
                        </div>
                        <div class="col-12 py-2 wow fadeInUp">
                            <label for="subject">
                                Experience</label>
                            <input type="text" id="subject" class="form-control"
                                placeholder="Enter your experience in related field">
                        </div>
                        <div class="col-12 py-2 wow fadeInUp">
                            <label for="message">Upload Cv</label>
                            </br>
                            <input name="fileupload" type="file" />
                        </div>
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                        <label for="message">Description</label>
                        <textarea id="message" class="form-control" rows="8"
                            placeholder="Freely Ask Something"></textarea>
                    </div>
            </div>

            <a style="margin-left: 50%;" type="submit" class="btn btn-primary wow zoomIn"
                href="https://wa.me/+923069016763">Send Message </a>
            </form>
        </div>
        </div>

        <div class="maps-container wow fadeInUp">
            <div id="google-maps"></div>
        </div>

        <div class="page-section banner-home bg-image" style="background-image: url(assets/img/banner-pattern.svg);">
            <div class="container py-5 py-lg-0">
                <div class="row align-items-center">
                    <div class="col-lg-4 wow zoomIn">
                        <div class="img-banner d-none d-lg-block">
                            <img src="assets/img/mobile_app.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight">
                        <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application
                        </h1>
                        <a href="#"><img src="assets/img/google_play.svg" alt=""></a>
                        <a href="#" class="ml-2"><img src="assets/img/app_store.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div> <!-- .banner-home -->

        <?php include 'inc/footer.php';?>