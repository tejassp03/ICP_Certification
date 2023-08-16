<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courses</title>
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

 

    <body class="course-watch-page">

        <!-- Wrapper -->
        <div id="wrapper">

            <div class="course-layouts">

                <div class="course-content bg-dark">

                    <div class="course-header">
                        
                        <a href="#" class="btn-back" uk-toggle="target: .course-layouts; cls: course-sidebar-collapse">
                            <i class="icon-feather-chevron-left"></i>
                        </a>

                        <h4 class="text-white"> Build Responsive Websites </h4>

                        <div>
                            <a href="#">
                                <i class="icon-feather-help-circle btns"></i> </a>
                            <div uk-drop="pos: bottom-right;mode : click">
                                <div class="uk-card-default p-4">
                                    <h4> Elementum tellus id mauris faucibuss soluta nobis </h4>
                                    <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum
                                        soluta nobis eleifend option congue nihil imperdiet</p>
                                </div>
                            </div>

                            <a hred="#">
                                <i class="icon-feather-more-vertical btns"></i>
                            </a>
                            <div class="dropdown-option-nav " uk-dropdown="pos: bottom-right ;mode : click">
                                <ul>

                                    <li><a href="#">
                                            <i class="icon-feather-bookmark"></i>
                                            Add To Bookmarks</a></li>
                                    <li><a href="#">
                                            <i class="icon-feather-share-2"></i>
                                            Share With Friend </a></li>

                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-line-awesome-lightbulb-o"></i> Night mode
                                            <label class="btn-night-mode-switch">
                                                <div class="uk-switch-button"></div>
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                    </div>

                    <div class="course-content-inner">

                        <ul id="video-slider" class="uk-switcher">


                            <li>
                                <!-- to autoplay video uk-video="automute: true" -->
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ?rel=0&amp;fs=0&amp;showinfo=0" frameborder="0"
                                        uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                                </div>

                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/YcApt9RgiT0" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>

                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

                <!-- course sidebar -->

                <div class="course-sidebar">
                    <div class="course-sidebar-title">
                        <h3> Table of Contents </h3>
                    </div>
                    <div class="course-sidebar-container" data-simplebar>

                        <ul class="course-video-list-section" uk-accordion>

                            <li>
                                <a class="uk-accordion-title" href="#"> Getting Started with HTML5 </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list highlight-watched">
                                        <li class="watched"> <a href="#"> What Is HTML? <span> 2 min </span> </a> </li>
                                        <li class="watched"> <a href="#"> Introduction to HTML5 <span> 3 min </span>
                                            </a>
                                        </li>
                                        <li class="watched"> <a href="#"> Getting the Browser <span> 5 min </span> </a>
                                        </li>
                                        <li class="watched"> <a href="#"> Setting Up the Editor <span> 2 min </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#"> Your First webpage </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list highlight-watched"
                                        uk-switcher=" connect: #video-slider  ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                        <li class="watched"> <a href="#"> Creating First Page <span> 23 min </span> </a>
                                        </li>
                                        <li> <a href="#"> Headings in HTML <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> The paragraph tag <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Emphasis and Strong Tag <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Text Formatting <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Working with Images <span> 23 min </span> </a> </li>
                                    </ul>

                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list">
                                        <li class=" "> <a href="#"> Inserting Images <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> Constructing Lists <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> Horizontal Rule Tag <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> Validation <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> Comments Tag <span> 23 min </span> </a> </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#"> HTML Advanced level </a>
                                <div class="uk-accordion-content">

                                    <!-- course-video-list -->
                                    <ul class="course-video-list">
                                        <li class=" "> <a href="#"> The Basics of Forms<span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> Link Targets <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> HTML Iframes <span> 23 min </span> </a> </li>
                                        <li class=" "> <a href="#"> The End <span> 23 min </span> </a> </li>
                                    </ul>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>



        </div>


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

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script>
            function make_button_active(tab) {
                //Get item siblings
                var siblings = tab.siblings();

                /* Remove active class on all buttons
                siblings.each(function(){
                    $(this).removeClass('active');
                }) */

                //Add the clicked button class
                tab.addClass('watched');
            }

            //Attach events to highlight-watched
            $(document).ready(function () {

                if (localStorage) {
                    var ind = localStorage['tab']
                    make_button_active($('.highlight-watched li').eq(ind));
                }

                $(".highlight-watched li").click(function () {
                    if (localStorage) {
                        localStorage['tab'] = $(this).index();
                    }
                    make_button_active($(this));
                });

            });
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