<?php
include 'config.php';
session_start();
session_unset();
?>
<!doctype html>
<html lang="en">
<head>
 <!-- Basic Page Needs
    ================================================== -->
    <title>ICP CERTIFICATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/night-mode.css">
    <link rel="stylesheet" href="assets/css/framework.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="bg-white" style="background-color: #fcfcfc !important;">

        <!-- Header Container
        ================================================== -->
  <?php
     include 'header.php';
?>

        <div class="page-content" style="margin-top: 0 !important;">
            <div class="home-hero" data-src="assets/images/home-hero.png" uk-img>
                <div class="uk-width-1-1">
                    <div class="page-content-inner" style="margin: 0 !important;">
                        <h1>Get Certified Anywhere, Anytime with Online Testing <br> Online Certification</h1>
                        <h4 class="my-lg-4">Enroll and take the test whenever and wherever you want. <br>Lots of Courses to chose from.
                        </h4>
                        <a href="#certificates" class="btn btn-default" style="font-size: 16px !important; ">Enroll Now </a>
                    </div>
                </div>
            </div>

            <!-- Content
        ================================================== -->

            <div class="section">
                <div class="page-content-inner">

                    <div class="section-medium text-md-left text-center">
                        <div class="uk-child-width-1-2@m uk-gird-large uk-flex-middle" uk-grid>
                            <div>
                                <img src="assets/images/cert.png" alt="">
                            </div>
                            <div>
                                <h2>Ready to Get ICP Certified?</h1>
                                    <p>Holding an ICP Certification brings professional reliablility, increased earning power, and greater job satisfaction. </p>
                                    <a href="#" class="btn btn-soft-light"> Get Started </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container" style="padding-left: 34px !important;">

            <div class="section-small delimiter-top">

                <div class="container-small">

                    <div class="text-center mb-5">
                        <h3>NEED HELP GETTING STARTED? </h3>
                    </div>
                    <div class="course-grid-slider mt-lg-5" uk-slider="finite: true">
                        <div class="uk-slider-container pb-3">
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                                <li>
                                    <a href="#certificates">
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets/images/choose.gif">
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info" >
                                                    <div>
                                                        <span class="catagroy" >STEP 1</span>
                                                    </div>
                                                    
                                                </div>
                                                <h4 style="white-space: break-spaces !important;">Choose your Certification Course.</h4>
                                                <p>Wide range of Courses to choose from.</p>
                                                <div class="course-card-footer">
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                </li>
                                <li>
                                    
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets/images/prepare.gif">
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info" >
                                                    <div>
                                                        <span class="catagroy" >STEP 2</span>
                                                    </div>
                                                    
                                                </div>
                                                <h4 style="white-space: break-spaces !important;">Prepare to pass the Certification Exam.</h4>
                                                <p>Sample Papers will be provided after you enroll</p>
                                                <div class="course-card-footer">
                                                    
                                                </div>
                                            </div>

                                        </div>
                                    

                                </li>
                                <li>
                                    
                                        <div class="course-card">
                                            <div class="course-card-thumbnail ">
                                                <img src="assets/images/exam.gif">
                                            </div>
                                            <div class="course-card-body">
                                                <div class="course-card-info" >
                                                    <div>
                                                        <span class="catagroy" >STEP 3</span>
                                                    </div>
                                                    
                                                </div>
                                                <h4 style="white-space: break-spaces !important;">Take the Certification Exam.</h4>
                                                <p>Enroll to take the exam on a particular date and a center of your choice.</p>
                                                <div class="course-card-footer">
                                                    
                                                </div>
                                            </div>

                                        </div>
                                

                                </li>
                               
                                
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover slidenav-prev" href="#"
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover slidenav-next" href="#"
                            uk-slider-item="next"></a>

                            

                        </div>
                    </div>

                   
                </div>
            </div>
            </div>


            <div class="section text-center" style="padding-top: 10px !important;" id="certificates">
                <div class="page-content-inner">

                    <h2 class="mb-4"> Choose a Certification Course</h2>
                    <br>
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
                        <div>
                            <a href="course-path-level.html">
                                <div class="course-path-card" style="">
                                    <center><img src="assets/images/js.png"  alt="" style="width:400px;height:125px;"></center>
                                    <div class="course-path-card-contents">
                                        <h3> JavaScript Certification</h3>
                                        <p> JavaScript is how you build interactivity on the web.
                                        </p>
                                        <br>
                                        <a href="page-login.php?course=JavaScript" class="btn btn-default" style="font-size: 12px !important; ">Enroll Now </a>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="course-path-level.html">
                                <div class="course-path-card" style="">
                                    <center><img src="assets/images/pyth.jpg"  alt="" style="width:400px;height:125px;"></center>
                                    <div class="course-path-card-contents">
                                        <h3> Python Certification</h3>
                                        <p> Python is how you build interactivity on the web.
                                        </p>
                                        <br>
                                        <a href="page-login.php?course=Python" class="btn btn-default" style="font-size: 12px !important; ">Enroll Now </a>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="course-path-level.html">
                                <div class="course-path-card" style="">
                                    <center><img src="assets/images/course/p-1.png"  alt="" style="width:400px;height:125px;"></center>
                                    <div class="course-path-card-contents">
                                        <h3> JavaScript Certification</h3>
                                        <p> JavaScript is how you build interactivity on the web.
                                        </p>
                                        <br>
                                        <a href="page-login.php" class="btn btn-default" style="font-size: 12px !important; ">Enroll Now </a>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="course-path-level.html">
                                <div class="course-path-card" style="">
                                    <center><img src="assets/images/course/p-1.png"  alt="" style="width:400px;height:125px;"></center>
                                    <div class="course-path-card-contents">
                                        <h3> JavaScript Certification</h3>
                                        <p> JavaScript is how you build interactivity on the web.
                                        </p>
                                        <br>
                                        <a href="page-login.php" class="btn btn-default" style="font-size: 12px !important; ">Enroll Now </a>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                        
                    </div>

                </div>
            </div>

            <div class="section bg-white" style="padding-left: 5px !important;">
                <div class="container-small">
                    <h2 class="text-center my-lg-6">Register to get lots of Courses for Completely Free.</h2>
                    <form class="uk-grid-small d-flex align-items-end" uk-grid action="page-register.html" >
                        <div class="uk-width-1-3@s">
                            <div class="uk-form-label">Email </div>
                            <input class="uk-input" type="text" placeholder="Enter your Email Address" required>
                        </div>
                        <div class="uk-width-1-3@s">
                            <div class="uk-form-label">Phone Number</div>
                            <input class="uk-input" type="tel" placeholder="Enter your Phone Number" maxlength="10" required>
                        </div>
                        <div class="uk-width-1-3@s">
                            <button class="btn  btn-light btn-lg" type="submit" name="submit"> Register</button>
                        </div>
                        <div class="uk-width-1-1@s">
                            <label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1"> 
                                        <span class="checkmark uk-text-small"> I agree to the </span>
                                <a href="pages-terms.html" target="_blank"
                                    class="uk-text-bold uk-text-small uk-link-reset">
                                    Terms and Conditions </a>

                                    </label>
                                </div>

                                
                            </label>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- footer
        ================================================== -->
        <div class="footer">
            <div class="container">
                <div uk-grid>
                    <div class="uk-width-1-3@m">
                        <a href="home.html" class="uk-logo">
                            <!-- logo icon -->
                            <i class="uil-graduation-hat"> </i>
                            ICP Certification
                        </a>
                        <p class="footer-description">One Certification to take your Resume to the next level</p>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5>Explore </h5>
                            <ul>
                                <li><a href="course-intro.php"> Courses </a></li>
                                <li><a href="course-path.html"> Track </a></li>
                                <li><a href="blog-card.html"> Blog </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5> Account </h5>
                            <ul>
                                <li><a href="profile-1.html"> Profile </a></li>
                                <li><a href="#"> Settings </a></li>
                                <li><a href="#"> Projects </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-expand@s uk-width-1-2">
                        <div class="footer-links pl-lg-8">
                            <h5> Resources</h5>
                            <ul>
                                <li><a href="#"> Contact </a></li>
                                <li><a href="page-Privacy.html"> Privacy Policy </a></li>
                                <li><a href="page-term.html"> Terms of Use </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-width-expand@s uk-first-column">
                        <p>© 2020 <strong>ICP Certification</strong>. All Rights Reserved. </p>
                    </div>
                    <div class="uk-width-auto@s">
                        <nav class="footer-nav-icon">
                            <ul>
                                <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                                <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
                ================================================== -->
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/mmenu.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>