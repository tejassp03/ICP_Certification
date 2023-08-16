<?php
include 'config.php';
session_start();
$course='';
if(isset($_GET['course'])){
    $course=$_GET['course'];
    $_SESSION['icpcourse']=$course;
} 
else if(isset($_SESSION['icpcourse'])){
    $course=$_SESSION['icpcourse'];
    $_SESSION['icpcourse']=$course;
}
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cellno=$_POST['cellno'];
    $cpwd=$_POST['confirmpassword'];
    $location=$_POST['location'];
   
    $target_dir = "userimages/";
    $target_file = $target_dir . basename(time().$_FILES["userimage"]["name"]);
    echo $target_file;
   if(move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file)){
    $insrt="insert ignore into icpregistration values (null,'$username','$email','$cellno','$password','$target_file','$location')";
    $resinsrt=mysqli_query($con,$insrt);
    if($resinsrt){
        echo "<script>location.href='canddash.php';</script>";
    }
    else{
        echo "<script> if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }</script>";
    }
}
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>ICP Login</title>
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

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

 
</head>

<body>
    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0"> Register </h3>
                    <p class="my-2">To Enroll for ICP Certification.</p>
                </div>
                <form class="uk-child-width-1-1 uk-grid-small" method="POST" action="page-register.php" uk-grid enctype="multipart/form-data"> 
                <div class="uk-form-group">
                            <label class="uk-form-label"> Name</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                                <input class="uk-input" type="text" name="username" placeholder="Full name" required>
                            </div>

                        </div>
            
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Email</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                                <input class="uk-input" type="email" placeholder="name@example.com" name="email" required>
                            </div>

                        </div>
                 
				
					<div class="uk-form-group">
                            <label class="uk-form-label"> Mobile</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                                </span>
                                <input class="uk-input" type="text" placeholder="1234567890" maxlength='10' minlength='10' name="cellno" required>
                            </div>

                        </div>
                   

                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Password</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="password" placeholder="********" name="password" id="password" required onfocus="passwordchnge()">
                            </div>

                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="uk-form-group">
                            <label class="uk-form-label"> Confirm password</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="password" placeholder="********" name="confirmpassword" id="confirmpassword" required onfocusout="checkpwd()">
                            </div>

                        </div>
                    </div>

                    <script>
                        function passwordchnge(){
                            document.getElementById('confirmpassword').style.borderColor="Red";
                            document.getElementById('confirmpassword').value="";
                            document.getElementById('signup').disabled=true;
                        }
	function checkpwd(){
        var pwd=document.getElementById('password').value;
        var cpwd=document.getElementById('confirmpassword').value;
        if(pwd!=cpwd){
            document.getElementById('confirmpassword').style.borderColor="Red";
            document.getElementById('signup').disabled=true;
        }
        else if(pwd==cpwd){
            document.getElementById('confirmpassword').style.borderColor="Green";
            document.getElementById('signup').disabled=false;
        }
    }
	</script>

<div class="uk-form-group">
                            <label class="uk-form-label"> Location</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-material-outline-location-on"></i>
                                </span>
                                <input class="uk-input" type="text" placeholder="Location" minlength='2' name="location" required>
                            </div>

                        </div>
                <div class="uk-margin" uk-margin> <div uk-form-custom="target: true"> <input type="file" name="userimage"> <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled> </div> 
                <button class="uk-uk-button uk-button-default" type="submit" name="signup">Submit</button> </div> 
            </form>
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

    <!-- javaScripts
      ================================================== -->
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
</body>
</html>