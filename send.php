<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form Return</title>
<link rel="stylesheet" href="styles/index.css" />
<link rel="stylesheet" href="styles/index.css">
<link href="https://fonts.googleapis.com/css?family=Cinzel|Staatliches%26display=swap" rel="stylesheet">
    <style>
        h2, h3, h4, p, dt {padding-left:10px;}
        main a {color:whitesmoke;}
    </style>
</head>

<body class="is-preload">     
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
        
<!-- Header -->
<header id="header">

<!-- Logo-->   
<a style="padding: 1px;" href="index.html" class="dropbtn"><img style=width:55px src="images/vbas_logo_small.png" alt="logo"></a>    

<!-- Navigation -->    
<ul>    
    
<li>
    <a href="index.html">Home</a>
</li>
    
<li class="dropdown">
    <a href="about.html" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="history.html">History</a>
      <a href="people.html">Board</a>
    </div>
</li>
    
<li class="dropdown">
    <a href="facilities.html" class="dropbtn">Facilities</a>
    <div class="dropdown-content">
      <a href="library.html">Library</a>
      <a href="observatories.html">Observatory</a>
      <a href="planetarium.html">Planetarium</a>
    </div>
</li>
    
<li class="dropdown">
    <a href="members.html" class="dropbtn">Member Resources</a>
    <div class="dropdown-content">
      <a href="resources.html">Links</a>
      <a href="bylaws.html">Bylaws</a>
      <a href="ftp.html">FTP</a>
      <a href="ephemeris.html">Ephemeris</a>
    </div>
</li>
    
<li>
    <a href="events.html">Events</a>
</li>
    
<li class="dropdown">
    <a href="public.html" class="dropbtn">Information</a>
    <div class="dropdown-content">
      <a href="resources.html">Links</a>
      <a href="ephemeris.html">Ephemeris</a>
      <a href="archives.html">Archives</a>
    </div>
</li>
    
<li class="dropdown">
    <a href="contact.html" class="dropbtn">Contact</a>
</li>    
    
<li>
<a href="https://mkt.com/von-braun-astronomical-society/" target="_blank">Shop</a>
</li>
    
</ul>
</header>
        
<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1 id=mainheader>Thank you!</h1>
				</div>
			</section>       
	<main>

        <p>Thank you for your message! VBAS will try to respond as soon as possible.</p>
<?php
    $to = "VonBraunAstronomy@gmail.com";
    $subject = $_POST['subject'];
#    $body = print $_POST['name'] "said" print $_GET['message'] ". Their email address is" print $_POST['email']".";
#    $body = $_POST['name'] . "said " . $_POST['message'] . ". Their email address is " . $_POST['email'] . ".";
    $body = "You have received a message from: " . $_POST['name'] . "(" . $_POST['email'] . ")\r\n";
    $body = $body . "\r\n";
    $body = $body . "Message: " . $_POST['message'] . "\r\n";
    $body = $body . "\r\n";
    
    $headers = 'From: ' . $_POST['email'] . "\r\n" .
    'Reply-To: ' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
     mail ($to, $subject, $body, $headers);
?>  
        
    </main>
	<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h4>Planetarium</h4>
							<p>5105 Nolen Ave SE <br>Huntsville, AL 35801</p> 
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6859.133595065252!2d-86.51807256582299!3d34.74353319039971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862143c56506e63%3A0x8df2cbf6321abe7f!2sWernher%20von%20Braun%20Planetarium!5e0!3m2!1sen!2sus!4v1571076206347!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe><br>
						</section>
						<section>
							<h4>Special Thanks to Our Sponsors</h4>
							<ul class="alt">
								<li><a href="https://www.gigaparts.com">
                                <img id=spons src="images/GigaParts_logo.png" alt="GigaParts">
                                </a></li>
								<li><a href="https://www.lockheedmartin.com/en-us/index.html">
                                <img id=spons src="images/LM-logo.png" alt="Lockheed Martin">
                                </a></li>
							</ul>
						</section>
						<section>
							<h4>Follow Us on Social Media</h4>
							<ul class="plain">
								<li><a href="https://twitter.com/vbas_huntsville?lang=en"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com/groups/112004006960/"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright"> 2020
						&copy; Von Braun Astronomical Society
					</div>
				</div>
			</footer>
	
				<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
<script>    
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
	
</body>
</html>


