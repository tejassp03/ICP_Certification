<?php
include 'config.php';
$course=$_GET['course'];
$img='';
$amount='';
$oldamount='';
?>
<!doctype html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Certifications</title>
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
<style>
    .header.header-transparent {
  position: static !important;
}
.page-content{
    margin-top:0px !important;
}
</style>
</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper" class="bg-white" style="background-color: #fcfcfc !important;">

        <!-- Header Container
        ================================================== -->
        <?php
     include 'header.php';
?>

    <!-- Content
            ================================================== -->
    <div class="page-content">
  <div class="course-details-wrapper topic-1 uk-light">
            <div class="container p-sm-0 coursedetails" style="">

                <div >
                    <div class="uk-width-2-3@m">

                        <div class="course-details">
                            <?php
                            $hcourse="select * from coursesinfo where courseName='$course'";
                            $rescourse=mysqli_query($con,$hcourse);
                            while($row=mysqli_fetch_array($rescourse)){
                                $img=$row['image'];
                                $amount=$row['amount'];
                                $oldamount=$row['oldAmount'];
                            ?>
                            <h1><?php echo $row['courseName'].'&nbsp;Certification';?></h1>
                            <p> <?php echo $row['description'];?></p>

                            <div class="course-details-info mt-4">
                                <ul>
                                    <li>
                                        <div class="star-rating"><span class="avg"> <?php echo $row['rating'];?> </span>
                                        <?php
                                        $rate1=$rate2='';
                                        if(strpos($row['rating'],'.')!==false){
                                        $rateexp=explode('.',$row['rating']);
                                        $rate1=$rateexp[0];
                                        $rate2=$rateexp[1];
                                        }
                                        else{
                                            $rate1=$row['rating'];
                                        }
                                        for($r=0;$r<$rate1;$r++){                                        
                                        ?>
                                        <span class="star"></span>
                                        <?php
                                        }
                                        if($rate2!=''){
                                            if($rate2>4){
                                                ?>
                                                <span class="star half"></span>
                                            <?php
                                            }
                                        }
                                        ?><!--span class="star"></!--span><span
                                                class="star"></span><span class="star"></span><span-- class="star"></span-->
                                        </div>
                                    </li>
                                    <li> <i class="icon-feather-users"></i> <?php echo rand(1000,5000);?> Enrolled </li>
                                </ul>
                            </div>

                           
                        </div>
                        <?php
                        }
                        ?>
                        <nav class="responsive-tab style-5">
                            <ul
                                uk-switcher="connect: #course-intro-tab ;animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                                
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Announcement</a></li>
                                <li><a href="#">Reviews</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="uk-grid-large mt-4" uk-grid>
                <div class="uk-width-2-3@m">
                    <ul id="course-intro-tab" class="uk-switcher mt-4">
                        <!-- course description -->
                        <li class="course-description-content">

                            <h4> Description </h4>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                commodo
                                consequat</p>
                            <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci</p>


                            <h4> What you’ll learn </h3>
                                <div class="uk-child-width-1-2@s" uk-grid>
                                    <div>
                                        <ul class="list-2">
                                            <li>Setting up the environment </li>
                                            <li>Advanced HTML Practices</li>
                                            <li>Build a portfolio website</li>
                                            <li>Responsive Designs</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="list-2">
                                            <li>Understand HTML Programming</li>
                                            <li>Code HTML</li>
                                            <li>Start building beautiful websites</li>
                                        </ul>
                                    </div>
                                </div>


                                <h4> Requirements </h4>
                                <ul class="list-1">
                                    <li>Any computer will work: Windows, macOS or Linux</li>
                                    <li>Basic programming HTML and CSS.</li>
                                    <li>Basic/Minimal understanding of JavaScript</li>
                                </ul>

                                <h4> Here is exactly what we cover in this course: </h4>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad
                                    minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                    veniam,
                                    quis
                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo
                                    consequat</p>

                                <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet
                                    dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud
                                    exerci</p>

                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut
                                    aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                                    option
                                    congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                                    Lorem
                                    ipsum
                                    dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim
                                    veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip
                                    ex
                                    ea commodo consequat.</p>


                        </li>

                        <!-- course Faq-->
                        <li>

                            <h4 class="my-4"> Course Faq</h4>

                            <ul class="course-faq" uk-accordion>

                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"> Html Introduction </a>
                                    <div class="uk-accordion-content">
                                        <p> The primary goal of this quick start guide is to introduce you to
                                            Unreal
                                            Engine 4`s (UE4) development environment. By the end of this guide,
                                            you`ll
                                            know how to set up and develop C++ Projects in UE4. This guide shows
                                            you
                                            how
                                            to create a new Unreal Engine project, add a new C++ class to it,
                                            compile
                                            the project, and add an instance of a new class to your level. By
                                            the
                                            time
                                            you reach the end of this guide, you`ll be able to see your
                                            programmed
                                            Actor
                                            floating above a table in the level. </p>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> Your First webpage</a>
                                    <div class="uk-accordion-content">
                                        <p> The primary goal of this quick start guide is to introduce you to
                                            Unreal
                                            Engine 4`s (UE4) development environment. By the end of this guide,
                                            you`ll
                                            know how to set up and develop C++ Projects in UE4. This guide shows
                                            you
                                            how
                                            to create a new Unreal Engine project, add a new C++ class to it,
                                            compile
                                            the project, and add an instance of a new class to your level. By
                                            the
                                            time
                                            you reach the end of this guide, you`ll be able to see your
                                            programmed
                                            Actor
                                            floating above a table in the level. </p>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                    <div class="uk-accordion-content">
                                        <p> The primary goal of this quick start guide is to introduce you to
                                            Unreal
                                            Engine 4`s (UE4) development environment. By the end of this guide,
                                            you`ll
                                            know how to set up and develop C++ Projects in UE4. This guide shows
                                            you
                                            how
                                            to create a new Unreal Engine project, add a new C++ class to it,
                                            compile
                                            the project, and add an instance of a new class to your level. By
                                            the
                                            time
                                            you reach the end of this guide, you`ll be able to see your
                                            programmed
                                            Actor
                                            floating above a table in the level. </p>
                                    </div>
                                </li>

                                <li>
                                    <a class="uk-accordion-title" href="#"> Html Introduction </a>
                                    <div class="uk-accordion-content">
                                        <p> The primary goal of this quick start guide is to introduce you to
                                            Unreal
                                            Engine 4`s (UE4) development environment. By the end of this guide,
                                            you`ll
                                            know how to set up and develop C++ Projects in UE4. This guide shows
                                            you
                                            how
                                            to create a new Unreal Engine project, add a new C++ class to it,
                                            compile
                                            the project, and add an instance of a new class to your level. By
                                            the
                                            time
                                            you reach the end of this guide, you`ll be able to see your
                                            programmed
                                            Actor
                                            floating above a table in the level. </p>
                                    </div>
                                </li>

                            </ul>

                        </li>

                        <!-- course Announcement-->
                        <li>
                            <h4> Announcement </h4>

                            <div class="user-details-card">
                                <div class="user-details-card-avatar">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-details-card-name">
                                    Stella Johnson <span> Instructor <span> 1 year ago </span> </span>
                                </div>
                            </div>



                            <article class="uk-article">

                                <p class="lead"> Nam liber tempor cum soluta nobis eleifend option
                                    congue </p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia
                                    deserunt mollit anim id est laborum.</p>

                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut
                                    aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                                    option congue nihil imperdiet doming id quod mazim placerat facer possim
                                    assum.
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                    enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut
                                    aliquip ex ea commodo consequat.</p>


                            </article>
                        </li>

                        <!-- course Reviews-->
                        <li>

                            <div class="review-summary">
                                <h4 class="review-summary-title"> Student feedback </h4>
                                <div class="review-summary-container">
                                    <div class="review-summary-avg">
                                        <div class="avg-number">
                                            4.8
                                        </div>
                                        <div class="review-star">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star half"></span></div>
                                        </div>
                                        <span>Course Rating</span>
                                    </div>


                                    <div class="review-summary-rating">
                                        <div class="review-summary-rating-wrap">
                                            <div class="review-bars">
                                                <div class="full_bar">
                                                    <div class="bar_filler" style="width:95%"></div>
                                                </div>
                                            </div>
                                            <div class="review-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star"></span></div>
                                            </div>
                                            <div class="review-avgs">
                                                95 %
                                            </div>
                                        </div>
                                        <div class="review-summary-rating-wrap">
                                            <div class="review-bars">
                                                <div class="full_bar">
                                                    <div class="bar_filler" style="width:80%"></div>
                                                </div>
                                            </div>
                                            <div class="review-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star empty"></span>
                                                </div>
                                            </div>
                                            <div class="review-avgs">
                                                80 %
                                            </div>
                                        </div>
                                        <div class="review-summary-rating-wrap">
                                            <div class="review-bars">
                                                <div class="full_bar">
                                                    <div class="bar_filler" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="review-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star empty"></span><span class="star empty"></span>
                                                </div>
                                            </div>
                                            <div class="review-avgs">
                                                60 %
                                            </div>
                                        </div>
                                        <div class="review-summary-rating-wrap">
                                            <div class="review-bars">
                                                <div class="full_bar">
                                                    <div class="bar_filler" style="width:45%"></div>
                                                </div>
                                            </div>
                                            <div class="review-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star empty"></span><span
                                                        class="star empty"></span><span class="star empty"></span>
                                                </div>
                                            </div>
                                            <div class="review-avgs">
                                                45 %
                                            </div>
                                        </div>
                                        <div class="review-summary-rating-wrap">
                                            <div class="review-bars">
                                                <div class="full_bar">
                                                    <div class="bar_filler" style="width:25%"></div>
                                                </div>
                                            </div>
                                            <div class="review-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star empty"></span><span class="star empty"></span><span
                                                        class="star empty"></span><span class="star empty"></span>
                                                </div>
                                            </div>
                                            <div class="review-avgs">
                                                25 %
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="comments">
                                <h4>Reviews <span class="comments-amount"> (4610) </span> </h4>

                                <ul>
                                    <li>
                                        <div class="comments-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-by">Stella Johnson<span>Student</span>
                                                <div class="comment-stars">
                                                    <div class="star-rating"><span class="star"></span><span
                                                            class="star"></span><span class="star"></span><span
                                                            class="star"></span><span class="star"></span></div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                tation
                                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                consequat.
                                            </p>
                                            <div class="comment-footer">
                                                <span> Was this review helpful? </span>
                                                <button> Yes </button>
                                                <button> No </button>
                                                <a href="#"> Report</a>
                                            </div>
                                        </div>

                                    </li>

                                    <li>
                                        <div class="comments-avatar"><img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-by"> Adrian Mohani <span>Instructor </span>
                                                <div class="comment-stars">
                                                    <div class="star-rating"><span class="star"></span><span
                                                            class="star"></span><span class="star"></span><span
                                                            class="star"></span><span class="star half"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                                ullamcorper
                                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam
                                                liber
                                                tempor cum soluta nobis eleifend
                                            </p>
                                            <div class="comment-footer">
                                                <span> Was this review helpful? </span>
                                                <button> Yes </button>
                                                <button> No </button>
                                                <a href="#"> Report</a>
                                            </div>
                                        </div>

                                    </li>

                                    <li>
                                        <div class="comments-avatar"><img src="assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-by"> Adrian Mohani <span>Student</span>
                                                <div class="comment-stars">
                                                    <div class="star-rating"><span class="star"></span><span
                                                            class="star"></span><span class="star"></span><span
                                                            class="star"></span><span class="star"></span></div>
                                                </div>
                                            </div>
                                            <p> Nam liber tempor cum soluta nobis eleifend option congue nihil
                                                imperdiet doming id quod mazim placerat facer possim assum.
                                                Lorem
                                                ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy
                                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                                volutpat.
                                            </p>
                                            <div class="comment-footer">
                                                <span> Was this review helpful? </span>
                                                <button> Yes </button>
                                                <button> No </button>
                                                <a href="#"> Report</a>
                                            </div>
                                        </div>

                                    </li>

                                    <li>
                                        <div class="comments-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-by">Stella Johnson<span>Student</span>
                                                <div class="comment-stars">
                                                    <div class="star-rating"><span class="star"></span><span
                                                            class="star"></span><span class="star"></span><span
                                                            class="star"></span><span class="star"></span></div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat
                                                volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                tation
                                                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                consequat.
                                            </p>
                                            <div class="comment-footer">
                                                <span> Was this review helpful? </span>
                                                <button> Yes </button>
                                                <button> No </button>
                                                <a href="#"> Report</a>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div>

                            <div class="comments">
                                <h3>Submit Review </h3>
                                <ul>
                                    <li>
                                        <div class="comments-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <form class="uk-grid-small" uk-grid>
                                                <div class="uk-width-1-2@s">
                                                    <label class="uk-form-label">Name</label>
                                                    <input class="uk-input" type="text" placeholder="Name">
                                                </div>
                                                <div class="uk-width-1-2@s">
                                                    <label class="uk-form-label">Email</label>
                                                    <input class="uk-input" type="text" placeholder="Email">
                                                </div>
                                                <div class="uk-width-1-1@s">
                                                    <label class="uk-form-label">Comment</label>
                                                    <textarea class="uk-textarea"
                                                        placeholder="Enter Your Comments her..."
                                                        style=" height:160px"></textarea>
                                                </div>
                                                <div class="uk-grid-margin">
                                                    <input type="submit" value="submit" class="btn btn-default">
                                                </div>
                                            </form>

                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>

                <div class="uk-width-1-3@m">
                    <div class="course-card-trailer" uk-sticky="top: 10 ;offset:105 ; media: @m ; bottom:true">

                        <div class="course-thumbnail">
                            <img src="<?php echo $img;?>" alt="">
                        </div>

                        <!-- video demo model -->
                        <div id="trailer-modal" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-default mt-2  mr-1" type="button" uk-close></button>
                                <div class="uk-modal-header">
                                    <h4> Trailer video </h4>
                                </div>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/nOCXXHGMezU" class="uk-padding-remove"
                                        uk-video="automute: true" frameborder="0" allowfullscreen
                                        uk-responsive></iframe>
                                </div>

                                <div class="uk-modal-body">
                                    <h3>Build Responsive Websites </h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident,
                                        sunt
                                        in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-3">

                            <p class="my-3 text-center">
                                <span class="uk-h1"> &#x20B9; <?php echo $amount;?></span>
                                <s class="uk-h4 text-muted">  &#x20B9; <?php echo $oldamount;?> </s>
                            </p>

                            <p> 1 Hour Left to avail offfer at this price</p>

                            <div class="uk-child-width-1-2 uk-grid-small mb-4"  uk-grid>
                                <div style="margin: auto;" >
                                    <a href="page-register.php"
                                        class="uk-width-1-1 btn btn-default transition-3d-hover"> 
                                        <i class="uil-play"></i> Enroll</a>
                                </div>
                                
                            </div>

                            <p class="uk-text-bold"> This Certification Includes </p>

                            <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                                
                                <div>
                                    <span> <i class="uil-award"></i> Certificate </span>
                                </div>
                                <br>
                                <div>
                                    <span> <i class="uil-award"></i> Badge </span>
                                </div>
                                
                                
                        
                            </div>
                        </div>
                    </div>
                </div>

            </div>


           


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