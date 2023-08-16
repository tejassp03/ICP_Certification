<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>ICP Certification</title>
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
    <div id="wrapper">


        <!-- Header Container
        ================================================== -->
        <header class="header header-horizontal">

            <div class="container">
                <nav uk-navbar>

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <!-- menu icon -->
                        <span class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>

                        <!-- logo -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo-dark.svg" alt="">
                            <span> Courseplus</span>
                        </a>

                        <!-- Main Navigation -->

                        <nav id="navigation">
                            <ul id="responsive">
                                <li><a href="#">Home</a> </li>
                                <li><a href="#">Explore</a>
                                    <ul class="dropdown-nav nav-large nav-courses">

                                        <li><a href="course-card.html#">
                                                <i class="icon-brand-js-square" style="color: #f7df1e;"></i> JavaScript
                                            </a>
                                        </li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-node-js" style="color: green;"></i> NodeJS </a>
                                        </li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-angular" style="color:#dd0031"></i> Angular </a>
                                        </li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-css3-alt" style="color: blue;"></i> CSS </a></li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-html5" style=" color:#f0653f"></i> HTML5 </a></li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-react" style=" color:#67fcef"></i> React </a></li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-vuejs" style="color: green;"></i> Vue JS </a></li>
                                        <li><a href="course-card.html">
                                                <i class="icon-brand-python" style="color: #b1b172;"></i> Python </a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a href="course-path.html" class="nav-active">Track</a> </li>
                                <li><a href="book.html">Book</a> </li>
                                <li><a href="blog-1.html">Blog</a> </li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="page-pricing.html">Pricing</a> </li>
                                        <li><a href="page-Privacy.html">Privacy</a></li>
                                        <li><a href="page-term.html">Terms</a></li>
                                        <li><a href="page-contact.html">Contact</a></li>
                                        <li><a href="#">Account</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="page-login.html">login</a></li>
                                                <li><a href="page-register.html">register</a></li>
                                                <li><a href="page-simple-login.html">Simple login</a></li>
                                                <li><a href="page-simple-register.html">Simple register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Development</a>
                                            <ul class="dropdown-nav">
                                                <li><a href="page-elements.html">Elements</a></li>
                                                <li><a href="page-components.html">Components</a></li>
                                                <li><a href="page-icons.html">Icons</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->

                    </div>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">

                        <div class="header-widget">

                            <div class="searchbox uk-visible@s">

                                <input class="uk-search-input" type="search" placeholder="Search...">
                                <button class="btn-searchbox"> </button>

                            </div>
                            <!-- Search box dropdown -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-search">
                                <div class="erh BR9 MIw"
                                    style="top: -27px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                                    <svg width="22" height="22">
                                        <path d="M0 24 L12 12 L24 24"></path>
                                    </svg></div>
                                <!-- User menu -->

                                <ul class="dropdown-search-list">
                                    <li class="list-title">
                                        Recent Searches
                                    </li>
                                    <li>
                                        <a href="course-intro.php">
                                            Ultimate Web Designer And Developer Course</a>
                                    </li>
                                    <li><a href="course-intro.php">
                                            The Complete Ruby on Rails Developer Course </a>
                                    </li>
                                    <li><a href="course-intro.php">
                                            Bootstrap 4 From Scratch With 5 Real Projects </a>
                                    </li>
                                    <li> <a href="course-intro.php">
                                            The Complete 2020 Web Development Bootcamp </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="course-intro.php">
                                            Bootstrap 4 From Scratch With 5 Real Projects </a>
                                    </li>
                                    <li> <a href="course-intro.php">
                                            The Complete 2020 Web Development Bootcamp </a>
                                    </li>
                                </ul>

                            </div>



                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s"
                                uk-toggle="target: .header-widget ; cls: is-active"> </span>


                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                <i class="uil-youtube-alt"></i>
                            </a>

                            <!-- courses dropdown List -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications my-courses-dropdown">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Your Courses</h4>
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
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="course-intro.php">
                                                <span class="notification-image">
                                                    <img src="assets/images/course/3.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">The Complete JavaScript Course Build Real
                                                        Projects !</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.php">
                                                <span class="notification-image">
                                                    <img src="assets/images/course/2.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Learn Angular Fundamentals From The
                                                        Beginning</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.php">
                                                <span class="notification-image">
                                                    <img src="assets/images/course/1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler"
                                                            style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav"
                                                    uk-dropdown="pos: top-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all</a>
                                </div>
                            </div>

                            <!-- notificiation icon  -->

                            <a href="#" class="header-widget-icon"
                                uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <!-- notificiation dropdown -->
                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small"
                                class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Notifications </h4>
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

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                                <i class="uil-envelope-alt"></i>
                                <span>1</span>
                            </a>

                            <!-- Message  notificiation dropdown -->
                            <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Messages</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings"
                                            uk-tooltip="title: Message settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar>

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Stella Johnson</strong>
                                                    <p> Alex will explain you how to keep the HTML structure and all
                                                        that...</p>
                                                    <span class="time-ago"> 7 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Alex Dolgove</strong>
                                                    <p> Alia Joseph just joined Messenger! Be the first to send a
                                                        welcome message..</p>
                                                    <span class="time-ago"> 19 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Adrian Mohani</strong>
                                                    <p> Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> Yesterday </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                </div>
                            </div>


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
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li><a href="#">
                                            <i class="icon-feather-bookmark"></i> Bookmark </a>
                                    </li>
                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Account Settings</a>
                                    </li>
                                    <li><a href="#" style="color:#62d76b">
                                            <i class="icon-feather-star"></i> Upgrade To Premium</a>
                                    </li>
                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-feather-moon"></i> Night mode
                                            <span class="btn-night-mode-switch">
                                                <span class="uk-switch-button"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="#">
                                            <i class="icon-feather-help-circle"></i> Help</a>
                                    </li>
                                    <li><a href="page-login.php">
                                            <i class="icon-feather-log-out"></i> Sing Out</a>
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



    <!-- Content
        ================================================== -->

    <div class="page-content">

        <div class="page-content-inner">


            <div class="mt-lg-4" uk-grid>
                <div class="uk-width-1-4@m">
                    <img src="assets/images/course/9.png" alt="" class="rounded shadow">
                </div>
                <div class="uk-width-expand">
                    <p class="my-0 uk-text-small">Topic</p>
                    <h3 class="mt-0"> CSS3 Basics </h3>
                    <p> CSS is what makes the web beautiful. It describes how HTML should be displayed and how to
                        layout elements. Take this class and get familiar with CSS!
                        <a href="#">Read more</a></p>
                </div>
                <div class="uk-width-1-4@m">
                    <h5> Related tags </h5>
                    <div uk-margin>
                        <a href="#" class="mr-1">Web Developments</a>
                        <a href="#" class="mr-1">Angular</a>
                        <a href="#" class="mr-1">React</a>
                        <a href="#" class="mr-1">Swift</a>
                    </div>
                </div>

            </div>

            <div class="course-path-info my-4 my-lg-5">
                <h4 class="uk-text-bold"> What you will learn </h4>
                <ul>
                    <li>Basics of programming </li>
                    <li>Built-in types</li>
                    <li>JavaScript operators</li>
                    <li>Applying CSS Filters</li>
                    <li>Flexible Box</li>
                    <li>Floating and Clearing Elements</li>
                    <li>Grid </li>
                    <li>CSS Variables</li>
                    <li>How Elements are Rendered</li>
                    <li>CSS Grid Layout </li>
                </ul>
            </div>

            <ul class="course-path-level" uk-accordion>

                <li class="uk-open">
                    <a class="uk-accordion-title" href="#">Beginner Level </a>
                    <div class="uk-accordion-content">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                            quis nostrud exerci tation ullamcorper suscipit,</p>

                        <div class="path-wrap">

                            <div class=" course-grid-slider" uk-slider="finite: true">

                                <ul
                                    class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-5@m uk-grid-match uk-grid">
                                    <li>
                                        <div class="course-card completed">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">5:39</span>
                                            </div>
                                            <div class="course-card-body">
                                                <span class="completed-text"> Completed </span>
                                                <h4> Getting Started </h4>
                                                <p> Get setup so you are ready to begin styling .</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">2:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:25%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> Applying CSS Styles </h4>
                                                <p> Learn different ways in which you can apply CSS</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">1:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:15%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> Background colors </h4>
                                                <p> how to Add background colors and images </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">2:19</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:0%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4>Fonts and Text </h4>
                                                <p>Learn how to do so in this lesson on fonts and..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">3:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:5%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> Applying CSS Styles </h4>
                                                <p> Learn different ways in which you can apply CSS </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">5:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:25%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> CSS variables </h4>
                                                <p> Giving you native and dynamic styles ..</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover slidenav-prev"
                                    href="#" uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover slidenav-next"
                                    href="#" uk-slider-item="next"></a>

                            </div>

                        </div>

                    </div>
                </li>

                <li class="uk-open">
                    <a class="uk-accordion-title" href="#"> Intermediate Level </a>
                    <div class="uk-accordion-content">
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                            quis nostrud exerci tation ullamcorper suscipit,</p>

                        <div class="path-wrap">

                            <div class="course-grid-slider" uk-slider="finite: true">

                                <ul
                                    class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-5@m uk-grid-match uk-grid">
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">5:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:25%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> CSS variables </h4>
                                                <p> Giving you native and dynamic styles not..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">2:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:25%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> Flexible Box </h4>
                                                <p>The Flexible Box layout and flexible layout for ..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">1:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:15%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4>Grid CSS </h4>
                                                <p> Create a grid layout for your page to follow.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">2:19</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:0%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4>Position </h4>
                                                <p> Learn how to position elements on your..
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">3:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:5%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> Flexible Box </h4>
                                                <p>The Flexible Box layout and flexible layout for ..</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-card">
                                            <div class="course-card-thumbnail">
                                                <img src="assets/images/course/9.png">
                                                <a href="takecouse.php" class="play-button-trigger show"> </a>
                                                <span class="duration">5:39</span>
                                            </div>
                                            <div class="course-progressbar">
                                                <div class="course-progressbar-filler" style="width:25%"></div>
                                            </div>
                                            <div class="course-card-body">
                                                <h4> CSS variables </h4>
                                                <p> Giving you native and dynamic styles not..</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover slidenav-prev"
                                    href="#" uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover slidenav-next"
                                    href="#" uk-slider-item="next"></a>

                            </div>

                        </div>

                    </div>
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
                        Courseplus
                    </a>
                    <p class="footer-description"> Launch your site in style with Courseplus, Create rich layouts A
                        unique and beautiful collection of UI elements that are all flexible and modular.</p>
                </div>
                <div class="uk-width-expand@s uk-width-1-2">
                    <div class="footer-links pl-lg-8">
                        <h3>Explore </h3>
                        <ul>
                            <li><a href="course-card.html"> Courses </a></li>
                            <li><a href="course-path.html"> Track </a></li>
                            <li><a href="blog-card.html"> Blog </a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand@s uk-width-1-2">
                    <div class="footer-links pl-lg-8">
                        <h3> Account </h3>
                        <ul>
                            <li><a href="profile-1.html"> Profile </a></li>
                            <li><a href="#"> Settings </a></li>
                            <li><a href="#"> Projects </a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand@s uk-width-1-2">
                    <div class="footer-links pl-lg-8">
                        <h3> Resources</h3>
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
                    <p>© 2019 <strong>Courseplus</strong>. All Rights Reserved. </p>
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