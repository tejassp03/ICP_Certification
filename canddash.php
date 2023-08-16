<?php
include 'config.php';
session_start();

$course='';
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Candidate Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/night-mode.css">
    <link rel="stylesheet" href="assets/css/framework.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!---JS
    =====================================================-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
</head>

<body>
<?php
if(isset($_SESSION['icpcourse'])){
    $course=$_SESSION['icpcourse'];
    $_SESSION['icpcourse']=$course;

    if($course=='Python'){
        $imgpath="assets/images/pyth.jpg";
    }
    else if($course=='JavaScript'){
        $imgpath="assets/images/js.png";
    }
    echo "<script>
    $(document).ready(function(){
        document.getElementById('modalimage').src='".$imgpath."';
           $('#myModal2').modal({backdrop: 'static', keyboard: false}) 
     });
 </script>";
}

$courses= mysqli_query($con,'select course from icpregistration');

?>
    <div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header class="header header-transparent uk-light" uk-sticky="top:20 ; cls-active:header-sticky ; cls-inactive: uk-light">

            <div class="container">
                <nav uk-navbar>

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: mobile-active"></span>



                        <!-- logo -->
                        <a href="index.php" class="logo" style="display: block !important;">
                            <h3 style="margin-top: 10px;color:#3e416d !important;">ICP Certification</h3>
                        </a>

                        <!-- breadcrumbs -->
                        
                        <nav id="navigation">
                            
                        </nav>

                    </div>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">

                        <div class="header-widget">
                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s"
                                uk-toggle="target: .header-widget ; cls: is-active" style="color: rgb(14 12 12 / 70%) !important;"> </span>


                            <a href="#" class="header-widget-icon"
                               >
                               Your Certifications
                            </a>

                            <!-- courses dropdown List -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications my-courses-dropdown">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Your Certifications</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="course-intro.php">
                                                <span class="notification-image">
                                                    <img src="assets/images/course/1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title"><?php 
                                                    $row=mysqli_fetch_array($courses);
                                                                    if($row>0)
                                                                    {
                                                                   
                                                                    echo $row['course'];
                                                                    }
                                                                    else
                                                                    {
                                                                    echo "You Have No Pending Certifications";

                                                                    }
                                                                    ?>
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                               
                                                
                                            </a>

                                        </li>
                                        
                                        
                                        
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> See All</a>
                                </div>
                            </div>

                            <!-- notificiation icon  -->

                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: Announcements ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <!-- notificiation dropdown -->
                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Announcements</h4>
                                    <a href="#">
                                        
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-thumbs-up"></i></span>
                                                <span class="notification-text">
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-primary">Javascript Introduction </span>
                                                    <br> <span class="time-ago"> 9 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-primary disabled">
                                                    <i class="icon-feather-message-circle"></i></span>
                                                <span class="notification-text">
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-primary">Programming for Games</span>
                                                    <br> <span class="time-ago"> 12 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-success disabled">
                                                    <i class="icon-feather-star"></i></span>
                                                <span class="notification-text">
                                                    <strong>Alex Dolgove</strong> Added New Review In Course
                                                    <span class="text-primary">Full Stack PHP Developer</span>
                                                    <br> <span class="time-ago"> 19 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-share-2"></i></span>
                                                <span class="notification-text">
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-primary">Css Flex Box </span>
                                                    <br> <span class="time-ago"> Yesterday </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>


                            </div>


                            <!-- Message  -->

                            


                            <!-- profile-icon-->

                            <a href="#" class="header-widget-icon profile-icon">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="header-profile-icon">
                            </a>

                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                                <!-- User Name / Avatar -->
                                <a href="profile-1.html">

                                    <div class="dropdown-user-details">
                                        <div class="dropdown-user-avatar">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="dropdown-user-name">
                                            Richard Ali <span>Students</span>
                                        </div>
                                    </div>

                                </a>

                                <!-- User menu -->

                                <ul class="dropdown-user-menu">
                                    
                                    
                                    <li><a href="#">
                                            <i class="icon-feather-help-circle"></i>Profile</a>
                                    </li>
                                    <li><a href="index.php">
                                            <i class="icon-feather-log-out"></i> Sign Out</a>
                                    </li>
                                </ul>


                            </div>


                        </div>



                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s"
                            uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>
                        
                        <!-- User icons -->
                            <a href="#" class="uil-user icon-small uk-hidden@s"
                            uk-toggle="target: .header-widget ; cls: is-active">
                            </a>
                            

                    </div>
                    <!-- End Right Side Content / End -->


                </nav>

            </div>
            <!-- container  / End -->

        </header>

        <!-- overlay seach on mobile-->
        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
            style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
                href="#"></a>
        </div>


        <!-- side nav-->
        <div class="side-nav uk-animation-slide-left-medium">


            <div class="side-nav-bg"></div>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="index.php">
                    <i class=" uil-graduation-hat"></i>
                </a>
            </div>

            <ul>
                <li>
                    <a href="#"> <i class="uil-play-circle"></i> </a>
                    <div class="side-menu-slide">
                        <div class="side-menu-slide-content">
                            <ul data-simplebar>
                                <li>
                                    <a href="courses.html"> <i class="uil-brush-alt "></i> Web Development </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-android-alt"></i> Mobile App </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-bag-alt"></i> Business </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-window"></i> IT Software </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-palette"></i> Desings </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-megaphone"></i> Marketing </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-life-ring"></i> Life Style </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class=" uil-camera"></i> Photography </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-medkit"></i> Health Fitness </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-music"></i> Music </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-shopping-cart-alt"></i> Ecommerce
                                    </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-utensils-alt "></i> Food cooking </a>
                                </li>
                                <li>
                                    <a href="courses.html"> <i class="uil-lightbulb-alt"></i> Teaching academy </a>
                                </li>
                        </div>
                    </div>
                </li>
                <li>
                    <!-- book -->
                    <a href="book.html"> <i class="uil-book-alt"></i> <span class="tooltips"> Book</span> </a>
                </li>
                <li>
                    <!-- Episodes -->
                    <a href="episode.html"> <i class="uil-youtube-alt"></i> <span class="tooltips"> Episodes</span></a>
                </li>
                <li>
                    <!-- Paths-->
                    <a href="course-path.html"> <i class="uil-rss-interface"></i> <span class="tooltips">
                            Paths</span></a>
                </li>
                <li>
                    <!-- Blog-->
                    <a href="blog-1.html"> <i class="uil-file-alt"></i> <span class="tooltips"> Blog</span></a>
                </li>
                <li>
                    <!--  Pages -->
                    <a href="#"> <i class="uil-layers"></i></a>
                    <div class="side-menu-slide">
                        <div class="side-menu-slide-content">
                            <ul uk-accordion>
                                <!-- to make it open default   class="uk-open" -->
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-layers"></i> Pages </a>
                                    <div class="uk-accordion-content">
                                        <a href="page-pricing.html"> Pricing</a>
                                        <a href="page-faq.html"> faq</a>
                                        <a href="page-term.html"> term</a>
                                        <a href="page-privacy.html"> Privacy</a>
                                        <a href="specialty-comming-soon.html"> Comming soon</a>
                                        <a href="specialty-maintanence.html"> Maintanence</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-sign-out-alt"></i> authentication </a>
                                    <div class="uk-accordion-content">
                                        <a href="form-login.html"> Login </a>
                                        <a href="form-register.html"> Register </a>
                                        <a href="form-modern-login.html"> Simple Register</a>
                                        <a href="form-modern-singup.html"> Simple Register</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="uk-accordion-title">
                                        <i class="uil-code"></i> Development </a>
                                    <div class="uk-accordion-content">
                                        <a href="development-elements.html"> Elements </a>
                                        <a href="development-compounents.html"> Components </a>
                                        <a href="development-icons.html"> Icons </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" uk-toggle="target: #searchbox; cls: is-active"><i class="uil-search-alt"></i></a>
                </li>

            </ul>
            <ul class="uk-position-bottom">
                <li>
                    <!-- Lunch information box -->
                    <a href="#">
                        <i class="uil-paint-tool"></i>
                    </a>
                    <div uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small">
                        <div class="uk-card-default rounded p-0">
                            <h5 class="mb-0 p-3 px-4  bg-light"> Night mode</h5>
                            <div class="p-3 px-4">
                                <p>Turns the light surfaces of the page dark, creating an experience ideal for night.
                                </p>
                                <div class="uk-flex">
                                    <p class="uk-text-small text-muted">DARK THEME </p>
                                    <!-- night mode button -->
                                    <span href="#" id="night-mode" class="btn-night-mode">
                                        <label class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </label>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <a href="#">
                        <span class="icon-feather-user"></span>
                    </a>
                    <div uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-right-small">
                        <div class="uk-card-default rounded p-0">
                            <a href="user-profile.html" class="p-0">

                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="dropdown-user-name">
                                        Richard Ali <span>Students</span>
                                    </div>
                                </div>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                </li>
                                <li><a href="user-profile-edit.html">
                                        <i class="icon-feather-settings"></i> Account Settings</a>
                                </li>
                                <li><a href="#" class="text-grey">
                                        <i class="icon-feather-star"></i> Upgrade To Premium</a>
                                </li>
                                <li class="menu-divider">
                                </li>
                                <li><a href="#">
                                        <i class="icon-feather-help-circle"></i> Help</a>
                                </li>
                                <li><a href="page-login.php">
                                        <i class="icon-feather-log-out"></i> Sing Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="page-content">


            <div class="home-hero" data-src="assets/images/home-hero.png" uk-img>
                <div class="uk-width-1-1">
                    <div class="page-content-inner uk-position-z-index">
                        <h1>Welcome , Tejas</h1>
                        <h4 class="my-lg-4"> Learn how to build websites & apps <br> write a code or start a business </h4>
                        <a href="#" class="btn btn-default"> </a>
                    </div>
                </div>
            </div>

            <div class="container">


                <!-- course card resume sliders  -->
                <br>


                <div class="section-small pt-0">

                    <div class="course-grid-slider" uk-slider="finite: true">

                        <div class="grid-slider-header">
                            <div>
                                <h4 class="uk-text-truncate">Your <a href="#" class="text-muted">Certifications</a> </h4>
                            </div>
                            <div class="grid-slider-header-link">

                                <a href="course-path.html" class="button transparent uk-visible@m"> View all </a>
                                <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                                <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                            </div>
                        </div>

                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                            <li>
                                <a href="course-intro.php" class="skill-card">
                                    <i class="icon-brand-js skill-card-icon" style=""></i>
                                    <div>
                                        <h2 class="skill-card-title"> Angular Certification</h2>
                                        <p class="skill-card-subtitle"> 3/5 Sample Assignments Done
                                        </p>
                                    </div>
                                </a>
                            </li>
                            
                            
                           
                            
                            
                        </ul>

                    </div>

                </div>


                <div class="section-small pt-0">

                    <div class="course-grid-slider" uk-slider="finite: true">

                        <div class="grid-slider-header">
                            <div>
                                <h4 class="uk-text-truncate"> Browse Web Development
                                    <a href="episode.html" class="text-muted">Episodes</a> </h4>
                            </div>
                            <div class="grid-slider-header-link">

                                <a href="courses.html" class="button transparent uk-visible@m"> View all </a>
                                <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                                <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                            </div>
                        </div>

                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                            <li>
                                <a href="takecouse.php">
                                    <div class="course-card episode-card animate-this">
                                        <div class="course-card-thumbnail ">
                                            <span class="item-tag">HTML</span>
                                            <span class="duration">2:39</span>
                                            <img src="assets/images/episodes/2.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="takecouse.php">
                                    <div class="course-card episode-card animate-this">
                                        <div class="course-card-thumbnail ">
                                            <span class="item-tag">Tips</span>
                                            <span class="duration">5:39</span>
                                            <img src="assets/images/episodes/3.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <h4 class="mb-0"> er Creating a Laravel Package </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="takecouse.php">
                                    <div class="course-card episode-card animate-this">
                                        <div class="course-card-thumbnail ">
                                            <span class="item-tag">PHP</span>
                                            <span class="duration">5:39</span>
                                            <img src="assets/images/episodes/1.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <h4 class="mb-0"> The PHP Singleton class </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="takecouse.php">
                                    <div class="course-card episode-card animate-this">
                                        <div class="course-card-thumbnail ">
                                            <span class="item-tag">Design</span>
                                            <span class="duration">2:39</span>
                                            <img src="assets/images/episodes/5.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <h4 class="mb-0"> Dev Design Quickie </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="takecouse.php">
                                    <div class="course-card episode-card animate-this">
                                        <div class="course-card-thumbnail ">
                                            <span class="item-tag">HTML</span>
                                            <span class="duration">2:39</span>
                                            <img src="assets/images/episodes/2.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>


                <div class="section-small pt-0">

                    <div class="course-grid-slider" uk-slider="finite: true">

                        <div class="grid-slider-header">
                            <div>
                                <h4 class="uk-text-truncate"> Browse Web Development
                                    <a href="#" class="text-muted">Courses</a> </h4>
                            </div>
                            <div class="grid-slider-header-link">

                                <a href="courses.html" class="button transparent uk-visible@m"> View all </a>
                                <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
                                <a href="#" class="slide-nav-next" uk-slider-item="next"></a>

                            </div>
                        </div>

                        <ul class="uk-slider-items uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                            <li>
                                <a href="course-intro.php">
                                    <div class="course-card">
                                        <div class="course-card-thumbnail ">
                                            <img src="assets/images/course/2.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <div class="course-card-info">
                                                <div>
                                                    <span class="catagroy">Angular</span>
                                                </div>
                                                <div>
                                                    <i class="icon-feather-bookmark icon-small"></i>
                                                </div>
                                            </div>
                                            <h4>Learn Angular Fundamentals </h4>
                                            <p> Learn how to build and launch React web applications with .. </p>
                                            <div class="course-card-footer">
                                                <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                                                <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="course-intro.php">
                                    <div class="course-card">
                                        <div class="course-card-thumbnail ">
                                            <img src="assets/images/course/3.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <div class="course-card-info">
                                                <div>
                                                    <span class="catagroy">JavaScript</span>
                                                </div>
                                                <div>
                                                    <i class="icon-feather-bookmark icon-small"></i>
                                                </div>
                                            </div>
                                            <h4>The Complete JavaScript </h4>
                                            <p> JavaScript is how you build interactivity on the web.. </p>
                                            <div class="course-card-footer">
                                                <h5> <i class="icon-feather-film"></i> 14 Lectures </h5>
                                                <h5> <i class="icon-feather-clock"></i> 55 Hours </h5>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="course-intro.php">
                                    <div class="course-card">
                                        <div class="course-card-thumbnail ">
                                            <img src="assets/images/course/1.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <div class="course-card-info">
                                                <div>
                                                    <span class="catagroy">HTML</span>
                                                </div>
                                                <div>
                                                    <i class="icon-feather-bookmark icon-small"></i>
                                                </div>
                                            </div>

                                            <h4>Ultimate Web Developer Course </h4>
                                            <p> HTML is the building blocks of the web. It gives pages structure .
                                            </p>

                                            <div class="course-card-footer">
                                                <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                                <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="course-intro.php">
                                    <div class="course-card">
                                        <div class="course-card-thumbnail ">
                                            <img src="assets/images/course/6.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <div class="course-card-info">
                                                <div>
                                                    <span class="catagroy">HTML</span>
                                                </div>
                                                <div>
                                                    <i class="icon-feather-bookmark icon-small"></i>
                                                </div>
                                            </div>
                                            <h4>Learn Modern HTML &amp; CSS </h4>
                                            <p> HTML is the building blocks of the web. It gives pages structure.. </p>

                                            <div class="course-card-footer">
                                                <h5> <i class="icon-feather-film"></i> 16 Lectures </h5>
                                                <h5> <i class="icon-feather-clock"></i> 52 Hours </h5>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="course-intro.php">
                                    <div class="course-card">
                                        <div class="course-card-thumbnail ">
                                            <img src="assets/images/course/5.png">
                                            <span class="play-button-trigger"></span>
                                        </div>
                                        <div class="course-card-body">
                                            <div class="course-card-info">
                                                <div>
                                                    <span class="catagroy">HTML</span>
                                                </div>
                                                <div>
                                                    <i class="icon-feather-bookmark icon-small"></i>
                                                </div>
                                            </div>

                                            <h4>Ultimate Web Developer Course </h4>
                                            <p> HTML is the building blocks of the web. It gives pages structure.
                                            </p>

                                            <div class="course-card-footer">
                                                <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                                                <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </li>
                        </ul>

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
                                    <li><a href="course-card.html"> Courses </a></li>
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
        </div>

    </div>



    <style>
        .flex-wrapper {
            display: flex;
            flex-flow: row nowrap;
        }

        .single-chart {
            width: 33%;
            justify-content: space-around;
        }

        .circular-chart {
            display: block;
            margin: 10px auto;
            max-width: 80%;
            max-height: 250px;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }

        .circular-chart.orange .circle {
            stroke: #ff9f00;
        }

        .circular-chart.green .circle {
            stroke: #4CC790;
        }

        .circular-chart.blue .circle {
            stroke: #3c9ee5;
        }

        .percentage {
            fill: #666;
            font-family: sans-serif;
            font-size: 0.5em;
            text-anchor: middle;
        }
    </style>

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
    <!--script src="assets/js/jquery-3.3.1.min.js"></!--script-->
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog " style="width:95% !important;" >
        <div class="modal-content">
           
          <div class="modal-body" style="padding:15px 15px 0px">
            <!--h4 class="modal-title " style="font-family: Verdana;">Recharge your account</h4-->
            <div class="heading">
            <img id="modalimage" src="assets/images/prepare.gif" width="30%"/>
            <h3>Javascript Certification</h3>
            </div>
            <br>
            <div class="modalbody">
                <form action="confirmation.php" method="post" enctype="multipart/form-data">

                    <div class="uk-form-group">
                        <label class="uk-form-label">Name</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-user"></i>
                            </span>
                            <input class="uk-input" type="email" name="email" placeholder="Tejas SP" readonly>
                            
                        </div>

                    </div>
                    
                    <div class="uk-form-group">
                        <label class="uk-form-label">Email</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input class="uk-input" type="email" name="email" placeholder="tejasprasad2003@gmail.com" readonly>
                        </div>

                    </div>
                    
                    <div class="uk-form-group">
                        <label class="uk-form-label">Level</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-material-baseline-star-border"></i>
                            </span>
                            <input class="uk-input" type="email" name="email" placeholder="Level 1 - Junior" readonly>
                        </div>

                    </div>


                    <div class="uk-margin" uk-margin> <div uk-form-custom="target: true">
                        <label class="uk-form-label">Upload Resume</label>
                         <input type="file" name="userresume" > <input class="uk-input uk-form-width-medium" style="width: 468px !important; "  type="text" placeholder="Select file" required > </div>
                         
                         
                         
                </div>

                <label style="font-weight: 500;"><input class="uk-radio" type="radio" name="radio1" required> By Clicking You Agree to the <a style="color: darkblue;text-decoration: underline;">Terms & Conditions</a></label>
                    <!--div class="uk-form-group">
                        <label class="uk-form-label"> Confirm password</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" type="password" placeholder="********">
                        </div>

                    </div-->

                    <div style="display: grid;"><button type="submit"  name="resumeupload" class="enrollsubmit" style="">Proceed</button>
                    </div> 

                </form>
                
            

            </div>
           <!--button type="button" class="close" data-dismiss="modal" style="background-color:blue;color:white;width:20%;height:40%;font-weight:100">ok</button-->
          
          <!--button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Ok</button-->
          
        </div>
        </div>
      </div>
    </div>

</body>

</html>