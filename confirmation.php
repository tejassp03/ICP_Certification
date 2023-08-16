<?php
include 'config.php';
if(isset($_POST['resumeupload']))
{

$name= $_FILES['userresume']['name'];  
        $temp_name  = $_FILES['userresume']['tmp_name']; 
  	
        if(isset($name) and !empty($name))
		{
            $location ='resumes/';
			
          move_uploaded_file($temp_name, $location.$name);

		}
$sql="Update icpregistration set resume='$name' where id='8' ";
$res=mysqli_query($con,$sql);
if($res>0)
{

echo '<script>alert("Resume Uploaded Succesfully");</script>';

}
else
{
  echo '<script>alert("Error Uploading, Please try again.");</script>';

}

}


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
    <link rel="stylesheet" href="assets/css/enroll.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/framework.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="enroll.css" />
    <link rel="stylesheet" href="footer.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Coda&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

</head>
<style>
      .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
color: #aaa;
float: right;
margin-top: -15px;
margin-right: -22px;
font-size: 30px;
font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
h2
{
    margin:0 0 0 0 !important;
}
  </style>
<?php
include 'dashheader.php';
?>
  <body>
    <div class="banner" >
      
      <p style="color: black; font-size: 25px; font-weight: 700">
        Python Programming
      </p>
    </div>

    <div class="container">
      <div class="howitworks">
        <h2>How You'll be Certified</h2>
        <ul style="font-size: 22px; line-height: 50px; padding: 20px">
          <li>Prepare by Practising the Sample Papers</li>
          <li>Schedule an appointment for the ICP exam</li>
          <li>Clear it with a Decent Score</li>
          <li>Congrats! You're now an <span style="font-weight: 800;">International Certified Professional</span></li>
        </ul>
      </div>
      <div class="container-right">
        
        <div class="rightcontent">
            
               <div class="contenticon">
             <i style="display: flex;" class="material-icons">star</i>    
            </div>
            <div class="content">
          <h2>Expert Guidance</h2>
          <p>Skillful Mentors</p>  
            </div>
           
        </div>
        <div class="rightcontent">
            
               <div class="contenticon">
             <i style="display: flex;" class="material-icons">photo_filter</i>    
            </div>
            <div class="content">
          <h2>Boost in your Resume</h2>
          <p>Serves as a Golden Spoon in your Resume.</p>  
            </div>
           
        </div>
        <div class="rightcontent">
            
               <div class="contenticon">
             <i style="display: flex;" class="material-icons">leaderboard</i>    
            </div>
            <div class="content">
          <h2>3 Levels</h2>
          <p>Crack all the Levels.</p>  
            </div>
           
        </div>
        <div class="rightcontent">
            
               <div class="contenticon">
             <i style="display: flex;" class="material-icons">payment</i>    
            </div>
            <div class="content">
          <h2>&#8377; 4,999/-</h2>
          <p>For the Certification Program</p>  
            </div>
           
        </div>
      <button id="enrollModal" class="enrollnow"><i class="icon-material-outline-access-time"></i> Wait For Confirmation</button>
        
     
    </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
            <form style="height: 63vh;" method="post" action="candidatedashboard.php">
                <div class="loginform">
                    <span class="close">&times;</span>
                <h2 style="margin: auto;display: table;">Login to Enroll</h2>
                <img src="images/googlesignin.png" alt="">
                <input class="inputfield" type="text" name="name" placeholder="Username"></input>
                <input class="inputfield" type="text" name="password" placeholder="Password"></input>
                <button class="buttonsubmit" type="submit">Login</button>
                </div>
                </form>
        
      
      </div>
  </body>
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


</html>