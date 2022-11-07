<?php
    define('PAGE_TITLE', 'Home Page | Docx Physiotherapy ');
    
    //start session
	session_start();
 
	//redirect if logged in
	// if(isset($_SESSION['user'])):
        
    include 'inc/header.php';

?>

<div class="page-hero bg-image overlay-dark" style="background-image: url(assets/img/blog/blog_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Let's make your life happier</span>
            <h1 class="display-4">Healthy Living</h1>
            <a href="contact.php" class="btn btn-primary">Let's Consult</a>
        </div>
    </div>
</div>


<div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>

                        <p><span>Chat</span> with a doctors</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>One</span>-Health Protection</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>One</span>-Health Pharmacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Docx Club</h1>
                    <p class="text-grey mb-4">We provide Physiotherapy Home Sessions in Rwp & Isb (24/7).
                        For patients who are unable to come to clinic.
                        Our Qualified Physios are treating Disorders with latest Machines.
                        Professional Doctors Visit and provide proper treatment at Home. You just need to make
                        an appointment.
                        We put our all efforts to help you in relieving of your pain.

                        If you are facing issues with Mental health & Weakness We also provide you Professional
                        Nutritionists & Clinical Psychologists!</p>
                    <a href="about.html" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="assets/img/cardimage.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Services</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Home Physiotherapy</p>
                        <span class="text-sm text-grey">Session</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc-2.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Home Physiotherapy</p>
                        <span class="text-sm text-grey">Facility</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc-3.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Back Pain</p>
                        <span class="text-sm text-grey">Treated</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc-4.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Knee Pain</p>
                        <span class="text-sm text-grey">Treatred</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc-5.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Shoulder Pain</p>
                        <span class="text-sm text-grey">Treated</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="assets/img/doctors/doc-6.jpeg" alt="">
                        <div class="meta">
                            <a href="tel:+923069016763"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+923069016763"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Neck Pain</p>
                        <span class="text-sm text-grey">Treated</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="page-section bg-light">
    <div class="container">
    <h1 class="text-center wow fadeInUp">Latest News</h1>
    <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
            <div class="header">
            <div class="post-category">
                <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
                <img src="assets/img/blog/blog_1.jpg" alt="">
            </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
            <div class="site-info">
                <div class="avatar mr-2">
                <div class="avatar-img">
                    <img src="assets/img/person/person_1.jpg" alt="">
                </div>
                <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
            <div class="header">
            <div class="post-category">
                <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
                <img src="assets/img/blog/blog_2.jpg" alt="">
            </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
            <div class="site-info">
                <div class="avatar mr-2">
                <div class="avatar-img">
                    <img src="assets/img/person/person_1.jpg" alt="">
                </div>
                <span>Roger Adams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
            <div class="header">
            <div class="post-category">
                <a href="#">Covid19</a>
            </div>
            <a href="blog-details.html" class="post-thumb">
                <img src="assets/img/blog/blog_3.jpg" alt="">
            </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
            <div class="site-info">
                <div class="avatar mr-2">
                <div class="avatar-img">
                    <img src="assets/img/person/person_2.jpg" alt="">
                </div>
                <span>Diego Simmons</span>
                </div>
                <span class="mai-time"></span> 2 months ago
            </div>
            </div>
        </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
        <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

    </div>
    </div>
</div> .page-section -->

<div class="page-section">
    <div class="container" id="appoint">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form">
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Full name" required>
                </div>
                <!-- <div class="col-12 col-sm-6 py-2 wow fadeInRight" required>
                    <input type="text" class="form-control" placeholder="Email address..">
                </div> -->
                <!-- <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control">
                </div> -->
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Number.." required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Location" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Sector" required>
                </div>
                <div class="col-12 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="departement" id="departement" class="custom-select">
                        <option value="general">Physiotherapy session</option>
                        <option value="cardiology">Psychological session</option>
                        <option value="dental">Diet and Nutrition</option>
                        <option value="neurology">Personal Gym Training</option>
                        <!-- <option value="orthopaedics">Orthopaedics</option> -->
                    </select>
                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6"
                        placeholder="Enter message.."></textarea>
                </div>
            </div>

            <input type="submit" class="btn btn-primary mt-3 wow zoomIn" value="Submit">
            <!-- <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> -->
        </form>
    </div>
</div> <!-- .page-section -->

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

<?php 
    // else: 
    
    // echo "Not Logged in"    
?>
<?php 
    // endif; 
?>