<?php
// Include the database configuration file
include 'config.php';
$statusMsg = '';

// File upload path



if(isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["name"])){
		$title =$_POST['title'];
		$comp =$_POST['company'];
		$city =$_POST['city'];
		$timings =$_POST['timings'];
		$jobdesc = addslashes($_POST['jobdesc']);
		$salary =$_POST['salary'];
		$lastdate =$_POST['lastdate'];
		$target_dir = "uploads/";
			
		$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
		$uploadOk=1;
		$FileType=pathinfo($target_file,PATHINFO_EXTENSION);
		
		if($FileType !=''){
		
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		
		}
		else{
			$target_file='';
		}
		
		$sql="INSERT INTO jobshare(title,company,city,timings,salary,image,lastdate,jobdesc) values ('$title','$comp','$city','$timings','$salary','$target_file','$lastdate','$jobdesc')";
		$result=mysqli_query($con,$sql);
if($result)
{
	
echo '<script>alert("Succesfully Posted");</script>';
echo '<script>location.href="jobsadmin.php";</script>';	
}
else
{
echo '<script>alert("Error");</script>';	

}
}
?>

<!DOCTYPE html>
<html>
<head>
<script type='text/javascript'>
<script src="https://tinymce.cachefly.net/4.2/tinymce.min.js"></script>

<script>
 tinymce.PluginManager.add('placeholder', function (editor) {
	editor.on('init', function () {
		var label = new Label;
		onBlur();
		tinymce.DOM.bind(label.el, 'click', onFocus);
		editor.on('focus', onFocus);
		editor.on('blur', onBlur);
		editor.on('change', onBlur);
		editor.on('setContent', onBlur);
		function onFocus() { if (!editor.settings.readonly === true) { label.hide(); } editor.execCommand('mceFocus', false); }
		function onBlur() { if (editor.getContent() == '') { label.show(); } else { label.hide(); } }
	});
	var Label = function () {
		var placeholder_text = editor.getElement().getAttribute("placeholder") || editor.settings.placeholder;
		var placeholder_attrs = editor.settings.placeholder_attrs || { style: { position: 'absolute', top: '2px', left: 0, color: '#aaaaaa', padding: '.25%', margin: '5px', width: '80%', 'font-size': '17px !important;', overflow: 'hidden', 'white-space': 'pre-wrap' } };
		var contentAreaContainer = editor.getContentAreaContainer();
		tinymce.DOM.setStyle(contentAreaContainer, 'position', 'relative');
		this.el = tinymce.DOM.add(contentAreaContainer, "label", placeholder_attrs, placeholder_text);
	}
	Label.prototype.hide = function () { tinymce.DOM.setStyle(this.el, 'display', 'none'); }
	Label.prototype.show = function () { tinymce.DOM.setStyle(this.el, 'display', ''); }
	
});


tinymce.init({

	selector:'textarea#mytextarea',
	height:120,
	plugins: ["placeholder image"],
	content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
	  menubar: false,
		statusbar: false,
		toolbar: false
	 
	 });
</script>
<script>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
	<meta charset="utf-8">
	<title>Ecompat Jobs</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="">
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 2% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 35px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

.form select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #FD9346;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .login-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: #fffefe;
 
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
.custom-file-upload {
 /* border: 1px solid #ccc;*/
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background-color:#28d670;
  color:white;
}
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 6px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color:#FD9346;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
<body>

<style>
.buttonn
{
padding: 13px 28px 13px 28px;
background:#ff6b79;
border-radius: 8px;	


}
@media (min-width:768px) and (max-width:1400px)
{
.logo-img
{
    width: 40% !important;
   margin-top: 5px;
    margin-bottom: 5px;
}
}
</style>	
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="https://gmpg.org/xfn/11" />
<title>Ecompat &#8211; Your Ideal Job Made Better</title>
<meta name='robots' content='noindex,nofollow' />

<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"wpemoji":"http:\/\/jobs.betterplace.co.in\/wp-includes\/js\/wp-emoji.js?ver=5.3.4","twemoji":"http:\/\/jobs.betterplace.co.in\/wp-includes\/js\/twemoji.js?ver=5.3.4"}};
			/**
 * @output wp-includes/js/wp-emoji-loader.js
 */

( function( window, document, settings ) {
	var src, ready, ii, tests;

	// Create a canvas element for testing native browser support of emoji.
	var canvas = document.createElement( 'canvas' );
	var context = canvas.getContext && canvas.getContext( '2d' );

	/**
	 * Checks if two sets of Emoji characters render the same visually.
	 *
	 * @since 4.9.0
	 *
	 * @private
	 *
	 * @param {number[]} set1 Set of Emoji character codes.
	 * @param {number[]} set2 Set of Emoji character codes.
	 *
	 * @return {boolean} True if the two sets render the same.
	 */
	function emojiSetsRenderIdentically( set1, set2 ) {
		var stringFromCharCode = String.fromCharCode;

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
		var rendered1 = canvas.toDataURL();

		// Cleanup from previous test.
		context.clearRect( 0, 0, canvas.width, canvas.height );
		context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
		var rendered2 = canvas.toDataURL();

		return rendered1 === rendered2;
	}

	/**
	 * Detects if the browser supports rendering emoji or flag emoji.
	 *
	 * Flag emoji are a single glyph made of two characters, so some browsers
	 * (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @private
	 *
	 * @param {string} type Whether to test for support of "flag" or "emoji".
	 *
	 * @return {boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var isIdentical;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		switch ( type ) {
			case 'flag':
				/*
				 * Test for Transgender flag compatibility. This flag is shortlisted for the Emoji 13 spec,
				 * but has landed in Twemoji early, so we can add support for it, too.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (white flag emoji + transgender symbol).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0x1F3F3, 0xFE0F, 0x200D, 0x26A7, 0xFE0F ],
					[ 0x1F3F3, 0xFE0F, 0x200B, 0x26A7, 0xFE0F ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDDFA, 0xD83C, 0xDDF3 ],
					[ 0xD83C, 0xDDFA, 0x200B, 0xD83C, 0xDDF3 ]
				);

				if ( isIdentical ) {
					return false;
				}

				/*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
				isIdentical = emojiSetsRenderIdentically(
					[ 0xD83C, 0xDFF4, 0xDB40, 0xDC67, 0xDB40, 0xDC62, 0xDB40, 0xDC65, 0xDB40, 0xDC6E, 0xDB40, 0xDC67, 0xDB40, 0xDC7F ],
					[ 0xD83C, 0xDFF4, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC62, 0x200B, 0xDB40, 0xDC65, 0x200B, 0xDB40, 0xDC6E, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC7F ]
				);

				return ! isIdentical;
			case 'emoji':
				/*
				 * Love is love.
				 *
				 * To test for Emoji 12 support, try to render a new emoji: men holding hands, with different skin
				 * tone modifiers.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
				isIdentical = emojiSetsRenderIdentically(
					[0xD83D, 0xDC68, 0xD83C, 0xDFFE, 0x200D, 0xD83E, 0xDD1D, 0x200D, 0xD83D, 0xDC68, 0xD83C, 0xDFFC],
					[0xD83D, 0xDC68, 0xD83C, 0xDFFE, 0x200B, 0xD83E, 0xDD1D, 0x200B, 0xD83D, 0xDC68, 0xD83C, 0xDFFC]
				);

				return ! isIdentical;
		}

		return false;
	}

	/**
	 * Adds a script to the head of the document.
	 *
	 * @ignore
	 *
	 * @since 4.2.0
	 *
	 * @param {Object} src The url where the script is located.
	 * @return {void}
	 */
	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.defer = script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	tests = Array( 'flag', 'emoji' );

	settings.supports = {
		everything: true,
		everythingExceptFlag: true
	};

	/*
	 * Tests the browser support for flag emojis and other emojis, and adjusts the
	 * support settings accordingly.
	 */
	for( ii = 0; ii < tests.length; ii++ ) {
		settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

		settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

		if ( 'flag' !== tests[ ii ] ) {
			settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
		}
	}

	settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

	// Sets DOMReady to false and assigns a ready function to settings.
	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	// When the browser can not render everything we need to load a polyfill.
	if ( ! settings.supports.everything ) {
		ready = function() {
			settings.readyCallback();
		};

		/*
		 * Cross-browser version of adding a dom ready event.
		 */
		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='eae-css-css'  href='css/eae.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'  href='css/v4-shims.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'  href='css/all.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='vegas-css-css'  href='css/vegas.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='css/elementor-icons.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='css/animations.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='css/frontend.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='css/global.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-8754-css'  href='css/post-8754.css' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-lightgallery-css'  href='css/lightgallery.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='a13-icomoon-css'  href='css/icomoon.css' type='text/css' media='all' />
<link rel='stylesheet' id='a13-main-style-css'  href='css/style1.css' type='text/css' media='all' />
<link rel='stylesheet' id='a13-user-css-css'  href='css/user.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.3.4' type='text/css' media='all' />


<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.js'></script>

<script type='text/javascript' src='js/frontend.js'></script>

<script type="text/javascript">
// <![CDATA[
WebFontConfig = {
    google: {"families":["Poppins:400,500,700,900","Poppins:400italic,500italic,300,400,500,700,900","Poppins:300italic,400italic,500italic,700italic,300,400,500,700,900","Poppins:300italic,400italic,500italic,100,300,500,700,900"]},
    active: function () {
        //tell listeners that fonts are loaded
        if (window.jQuery) {
            jQuery(document.body).trigger('webfontsloaded');
        }
    }
};
(function (d) {
    var wf = d.createElement('script'), s = d.scripts[0];
    wf.src = 'http://jobs.betterplace.co.in/wp-content/themes/rife-free/js/webfontloader.min.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    s.parentNode.insertBefore(wf, s);
})(document);
// ]]>
</script>

<body id="top" class="home page-template-default page page-id-8754 widgets_margin_top_off header-horizontal site-layout-full elementor-default elementor-kit-11570 elementor-page elementor-page-8754" itemtype="https://schema.org/WebPage" itemscope>
<div class="whole-layout">

                <div class="page-background to-move"></div>
        <header id="header" class="to-move a13-horizontal header-type-one_line a13-normal-variant header-variant-one_line narrow no-tools sticky-no-hiding" itemtype="https://schema.org/WPHeader" itemscope>
	<div class="head">
		<div class="logo-container" itemtype="#" itemscope><a class="" href="#" title="" rel="home" itemprop="url"><img src="../images/ecompatlogo.jpeg" class="logo-img" alt="" style="width: 25%;
    margin: 5%;" height="" itemprop="logo" /></a></div>
		<nav id="access" class="navigation-bar" itemtype="https://schema.org/SiteNavigationElement" itemscope><!-- this element is need in HTML even if menu is disabled -->
							<div class="menu-container"><ul id="menu-main-menu" class="top-menu opener-icons-on"><li id="menu-item-11560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8754 current_page_item menu-item-11560 normal-menu"><a href="jobsadmin.php"><span>Home</span></a></li>

<li id="menu-item-11766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11766 normal-menu"><a href="home.php"><span style="color:orange;">Logout</span></a></li>

</ul></div>					</nav>
		<!-- #access -->
		<div id="header-tools" class=" icons-0 only-menu"><img  src="images/menu.svg" id="mobile-menu-opener" class="" ></img></div></div>
	</header>

  <div class="login-page">
  <div class="form">
    <form class="register-form"  method="post" action="jobpost.php" enctype="multipart/form-data">
	<h2 style="margin-bottom:5%">Post a Job</h2>
      <input type="text" name="title" placeholder="Job Title" required />
      <input type="text" name="company" placeholder="Company Name" required />
      <input type="text" name="city" placeholder="City" required />
      <select name="timings" placeholder="Timings">
	  <option value="Part-Time">Part-Time</option>
	  <option value="Full-Time">Full-Time</option>
	  </select>
	  <textarea name="jobdesc"  id="mytextarea" placeholder="Job Description"  required ></textarea>
	  
	  <br>
	  <input type="text" name="salary" placeholder="Salary" required />
	  <!--input type="text" name="email" placeholder="Email Id" required /--> 
	  <!--input type="text" placeholder="Mobile Number" maxlength="10" minlength="10" name="mobile" required /-->
	  Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" onchange="preview_image(event)">
	  <img style="width:50%;" id="output_image"/><br>
	   Last Date to Apply      
	  <input type="date" name="lastdate" placeholder="Last date to Apply" required />
     

<br>
      <button name="submit" type="submit" style="background-color: rgb(255 102 0) !important;">Submit</button>
      
    </form>

  
  </div>
</div>
<link rel='stylesheet' id='premium-addons-css'  href='http://jobs.betterplace.co.in/wp-content/plugins/premium-addons-for-elementor/assets/frontend/css/premium-addons.css?ver=3.11.9' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var ApolloParams = {"ajaxurl":"http:\/\/jobs.betterplace.co.in\/wp-admin\/admin-ajax.php","site_url":"http:\/\/jobs.betterplace.co.in\/","defimgurl":"http:\/\/jobs.betterplace.co.in\/wp-content\/themes\/rife-free\/images\/holders\/photo.png","options_name":"apollo13_option_rife","load_more":"Load more","loading_items":"Loading next items","anchors_in_bar":"","scroll_to_anchor":"1","writing_effect_mobile":"","writing_effect_speed":"10","hide_content_under_header":"off","default_header_variant":"normal","header_sticky_top_bar":"","header_color_variants":"on","show_header_at":"0","header_normal_social_colors":"color|black_hover|color|color_hover","header_light_social_colors":"semi-transparent|color_hover|color|color_hover","header_dark_social_colors":"semi-transparent|color_hover|color|color_hover","header_sticky_social_colors":"semi-transparent|color_hover|color|color_hover","close_mobile_menu_on_click":"1","menu_overlay_on_click":"","allow_mobile_menu":"1","submenu_opener":"fa-angle-down","submenu_closer":"fa-angle-up","submenu_third_lvl_opener":"fa-angle-right","submenu_third_lvl_closer":"fa-angle-left","posts_layout_mode":"packery","products_brick_margin":"0","products_layout_mode":"packery","albums_list_layout_mode":"packery","album_bricks_thumb_video":"","works_list_layout_mode":"packery","work_bricks_thumb_video":"","people_list_layout_mode":"fitRows","lg_lightbox_share":"1","lg_lightbox_controls":"1","lg_lightbox_download":"","lg_lightbox_counter":"1","lg_lightbox_thumbnail":"1","lg_lightbox_show_thumbs":"","lg_lightbox_autoplay":"1","lg_lightbox_autoplay_open":"","lg_lightbox_progressbar":"1","lg_lightbox_full_screen":"1","lg_lightbox_zoom":"1","lg_lightbox_mode":"lg-slide","lg_lightbox_speed":"600","lg_lightbox_preload":"1","lg_lightbox_hide_delay":"2000","lg_lightbox_autoplay_pause":"5000","lightbox_single_post":""};
/* ]]> */
</script>

<script type='text/javascript' src='js/jquery.fitvids.min.js'></script>



<script type='text/javascript' src='js/isotope.pkgd.min.js'></script>

<script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var eae_editor = {"plugin_url":"http:\/\/jobs.betterplace.co.in\/wp-content\/plugins\/addon-elements-for-elementor-page-builder\/"};
/* ]]> */
</script>










<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/jobs.betterplace.co.in\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://jobs.betterplace.co.in/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7_redirect_forms = {"14791":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"14789":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"14785":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"14783":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"14344":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12865":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12856":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12838":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12699":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12115":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12109":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"12102":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"},"11851":{"page_id":"12511","external_url":"","use_external_url":"","open_in_new_tab":"","http_build_query":"","http_build_query_selectively":"","http_build_query_selectively_fields":"","delay_redirect":"0","after_sent_script":"","thankyou_page_url":"http:\/\/jobs.betterplace.co.in\/thank-you\/"}};
/* ]]> */
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var searchwp_live_search_params = [];
searchwp_live_search_params = {"ajaxurl":"http:\/\/jobs.betterplace.co.in\/wp-admin\/admin-ajax.php","origin_id":8754,"config":{"default":{"engine":"default","input":{"delay":500,"min_chars":3},"results":{"position":"bottom","width":"css","offset":{"x":0,"y":0}},"spinner":{"lines":10,"length":8,"width":4,"radius":8,"corners":1,"rotate":0,"direction":1,"color":"#000","speed":1,"trail":60,"shadow":false,"hwaccel":false,"className":"spinner","zIndex":2000000000,"top":"50%","left":"50%"},"results_destroy_on_blur":false,"parent_el":"#search-results-header"}},"msg_no_config_found":"No valid SearchWP Live Search configuration found!","aria_instructions":"When autocomplete results are available use up and down arrows to review and enter to go to the desired page. Touch device users, explore by touch or with swipe gestures."};;
/* ]]> */
</script>


<script type='text/javascript' src='js/frontend-modules.js'></script>




<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"2.9.7","urls":{"assets":"http:\/\/jobs.betterplace.co.in\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":8754,"title":"Betterplace%20%E2%80%93%20Your%20Ideal%20Job%20Made%20Better","excerpt":"","featuredImage":"http:\/\/jobs.betterplace.co.in\/wp-content\/uploads\/2018\/01\/rife-free5.jpg"}};
</script>
<script type='text/javascript' src='js/frontend1.js'></script>

</body>

</html>