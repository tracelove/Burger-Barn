<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Burger Barn</title>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/burgerlogo2.jpg">
</head>
<body>
	<div class="banner">
     <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
     <img src="img/burgerlogo2.jpg" alt="Logo" id="logo">
     <img src="img/burgerlogo2.jpg"alt="Logo" id="logo2">
	   <h1 class="headline">Burger Barn</h1>
	   <span class="tagline">"Real Homemade Hamburgers"</span>
    
	</div><!--/.banner-->

	<header class="main-header">
		<div class="container clearfix">
			<ul class="main-nav" id="h">
        <li><a href="index.html"><b>Home</b></a></li>
				<li><a href="menu.html"><b>Menu</b></a></li>
        <li><a href="contact.html"><b>Contact</b></a></li>
        <li><a href="about.html"><b>About</b></a></li>
				<li><a href="testimonial.html"><b>Testimonials</b></a></li>
        <li><a href="pictures.html"><b>Pictures</b></a></li>
			</ul>
		</div>
	</header><!--/.main-header-->   

	<div class="container clearfix">
  
		<div class="tertiary col">
			<h2 class="h2">Hours</h2>
      <table style="width:100%" class="hourtable">
  <tr class="hours">
    <td><strong>Monday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
  <tr class="hours">
    <td><strong>Tuesday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
  <tr class="hours">
    <td><strong>Wednesday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
  <tr class="hours">
    <td><strong>Thursday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
  <tr class="hours">
    <td><strong>Friday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
  <tr class="hours">
    <td><strong>Saturday:</strong></td>
    <td class="timetable">10:00am-6:00pm</td> 
  </tr>
</table>
      &nbsp;
     	
      <h2 class="h2">Contact Us</h2>
      <p> When you are too busy to drive by and stay a little while, feel free to call ahead and order to go! You can find our <a href="tel:7314272168">phone number </a> below or on our <a href="contact.html">contact</a> page.</p>
		</div><!--/.secondary-->
		
		<div class="primary col">
			<h2 class="h2">"Real Homemade Hamburgers"</h2>
			
			<!--featured image-->
			<figure>
				<img src="img/burgerbarn.jpg" class="main-pic">
					<p>Our slogan "real homemade hamburgers" is something we take pride in for our business. We don't just throw a frozen patty on the grill - we take real hamburger meat and flatten it into a patty and grill it into something anyone would love to eat!</p>
			</figure>
		</div><!--/.primary-->
	
		<div class="secondary col">
      
      	<h2 class="h3">Thank You!</h2>
			<p class="thankyou"><strong>Your email has been sent. We appreciate your feedback and would love to hear from you again.</strong></p>    
		 </div><!--/.tertiary-->
		
	</div><!--/.container-->
    
	<footer class="main-footer footer-text">
   
    <div class="clearfix">
             
    <a href="https://www.facebook.com/pages/Burger-Barn/115610295129013"><img class="social" class="fb" src="img/facebook.png" alt="Facebook"></a>
      
      <ul class="foot-ul">
        <li class="strong-f3"><strong>Phone Number: </strong></li>
        <li class="phone"><a href="tel:7314272168"> (731) 427-2168</a></li>
        <li class="strong-f2"><strong>Email: </strong><a href="mailto:burgerbarnjackson@gmail.com">burgerbarnjackson@gmail.com</a></li>
        <li class="strong-f3"><strong>Address: </strong></li>
        <li class="phone">123 Lexington Ave. Jackson, TN 38301</li>
      </ul> 
    
      <ul id="position" class="main-nav" class="foot-nav">
        <li><a href="index.html">Home</a></li>
				<li><a href="menu.html">Menu</a></li>
				<li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
				<li><a href="testimonial.html">Testimonials</a></li>
        <li><a href="pictures.html" class="fix">Pictures</a></li>
			</ul>
      
      <ul class="foot-ul2">
        <li class="strong-f"><strong>Hours:</strong></li>
         <li>Mon-Sat: 10:00AM to 6:00PM</li>
      </ul>
      
		</div>
    <p class="footp">&copy;2017 Burger Barn</p>
	</footer>
	
</body>
</html>


<?php 
    /* send the submitted data to gmail */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    /* shows echo "All fields are required, please fill out the again." if information is not filled out */
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        }  
    /* shows echo "Email sent!" if all information filled out */  
   else {         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("burgerbarnjackson@gmail.com", $subject, $message, $from);  
        } 
    }   
?>