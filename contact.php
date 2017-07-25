<!DOCTYPE html> 
<html dir="ltr" lang="en-US"> 
<head> 
<meta charset="UTF-8" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<title>Getaways</title>
<!--[if !IE 7]><!--><link rel="stylesheet" type="text/css" media="all" href="css/style2.css" /><!--<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="css/iestyle.css" />
<![endif]-->


<script type="text/javascript">
function validateForm()
{
var x=document.forms["contactform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>

<link rel="shortcut icon" href="images/favicon.ico"> 

<script type="text/javascript">



</script>

</head>

<body>

<!--<div id="headerback">
</div>-->

<div id="container">


<header>
<!--<img src="images/getaways2.png" alt="presenter" class="logo" />-->

<img src="images/getaways_title.png" alt="Logo" class="logo"/>

<!--<div id="strap2">
<p> TV Travel Series</p>
</div>

<div class="strap"> Your Opinions - Your Show</div>-->

</header>
<div id="wrapper">







<div id="blank">

</div>

<nav>
	



<ul id="nav">

    <li> <a href="index.html">Home</a></li>

  <li><a href="#">Destinations</a>

  		<ul>
  		<li><a href="/sanfran">San Francisco</a></li>

  		
  		
  	
  		
		
		
	
       </ul></li>

       

   <li><a href="/contact.php">Contact</a>

</li>

   

</ul>

</nav>


<section id="questions">
<article id="welcome">
<h2> Contact us</h2>

<p>Please fill in the contact form below:</p>

	<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $info = $_POST['info'];
    $from = 'From: Getaways'; 
    $to = 'laureen@waddellmedia.com'; 
    $subject = 'Contact us';
    
    $body = "Name: $fullname\n\n Email: $email\n\n Enquiry: $info\n\n 
    ";
    
    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<h3>Your message has been sent!</h3>';
    } else { 
        echo '<h3>Something went wrong, go back and try again!</h3>'; 
    }
}
?>

</article>



<form action="contact.php" name="contactform" onsubmit="return validateForm()" method="post">
		<fieldset>
				
			
			<label for="fullname"><h4>Name*:</h4></label>
			<textarea name="fullname" id="fullname" placeholder="Please fill in your name here."></textarea> <br />
			
			<label for="email"><h4>Email*: </h4></label>
			<textarea name="email" id="email" placeholder="Please fill in your email here."></textarea> <br />
			
			<label for="info"><h4>Message*:</h4></label>
			<textarea name="info" id="info" placeholder="Please fill in your message here."></textarea> <br />

 			<br /><input type="submit" id="submit" name="submit" value="Send message" />

		</fieldset>
	</form>
	
	<div class="left"><p>* Required fields</p></div>
</section>

</div></div>
<div id="footerback">
<footer>
<section id="footerleft">
<p>Waddell Media</p>

<p>Email: <a href="mailto:laureen@waddellmedia.com">laureen@waddellmedia.com</a></p><p>
Tel: 0044 2890 427 646</p>
</section>

<section id="navright">
<a href="http://www.waddellmedia.com/"><img src ="images/waddellmedia.png" alt="waddell" class="navimg" /></a>
<a href="http://www.rte.ie/tv/programmes/lifestyle.html"><img src ="images/rte_logo.png" alt="RTE" class="navimg" /></a>
<a href="http://www.bbc.co.uk/northernireland/"><img src ="images/bbc_ni.png" alt="BBC" class="navimg" /></a>
</section>

<section id="footerright">
<p>Waddell Media is registered with the Data Protection Agency and all personal data will be processed in accordance with the rights of data subjects under the Data Protection Act 1998.</p>

</section>

</footer>
</div>