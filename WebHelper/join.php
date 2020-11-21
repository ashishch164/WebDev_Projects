<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/gif/png" href="img/WhatsApp Image 2020-10-07 at 11.27.49 PM.jpeg">
	<title>Join</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="script.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation bar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand text-primary font-weight-bold" href="#"><img src="img/WhatsApp Image 2020-10-07 at 11.27.49 PM.jpeg" height="100"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="mission.php">Our Mission</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="services.php">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://github.com/ashishch164/WebDev_Projects">Previous Projects</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" style="font-weight:bolder"href="join.php">Join Us</a>
			</li>
		</ul>
	</div>
</div>	
</nav>
<!-- End Navigation bar -->

<br><br>

<!--Join Us Form-->
<button type="button" class="btn btn-lg btn-block btn-outline-primary col-8 offset-2" data-toggle="collapse" data-target="#join"><h1 class="display-4">Wish to step</h1><h1 class="display-4"> forward with us?</h1></button>
  
<div id="join" class="collapse">
<div class="container">
<form action="" method="post" id="join-us">
	<div class="form-group row">
		<div class="col-8 offset-2">
		    <br><label for="name">Your Name</label>
			<input type="text" class="form-control" id="name"maxlength="50" name="name" placeholder="Your name.." pattern="[A-Za-z]*"><br>
			<label for="email">Email</label>
    			<input type="email" class="form-control"  maxlength="50" id="email" name="email" placeholder="Your email address.." ><br>
			<label for="phone">Mobile</label>
			<input type="text" class="form-control" id="phone" name="cno" placeholder="Your mobile number.." ><br>
			<label for="link">Linkedin</label>
			<input type="text" class="form-control" id="link" name="linkedin" name="linkedin"placeholder="Your linkedin address.." ><br>
			
			<label for="subject">Message</label>
			<textarea id="subject" class="form-control" name="add" placeholder="Write your message to us.." maxlength="500" style="height:100px" ></textarea><br>  
			<input type="submit" name="submit"  class="btn btn-primary btn-raised" value="SUBMIT">
		</div>
	</div>
</form>
</div>
</div>  
<!--End Join Us Form-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center font-weight-bold">

	<div class="col-sm-10 offset-sm-1 col-md-4 offset-md-0">
		<hr class="light">
		<h5>WebHelper Office</h5>
		<hr class="light">
		<p>Palam Colony,New Delhi-45,India</p>
	</div>
	<div class="col-sm-10 offset-sm-1 col-md-4 offset-md-0">
		<hr class="light">
		<a class="logo text-light" href="#"><img src="img/WhatsApp Image 2020-10-07 at 11.27.49 PM.jpeg" height="25"> WebHelper</a>
		<hr class="light">
		<p><a href="mailto: ashishkr737@gmail.com">ashishkr737@gmail.com</a></p>
</div>
<div class="col-sm-10 offset-sm-1 col-md-4 offset-md-0">
	<hr class="light">
	<h5>Contact Us</h5>
	<hr class="light">
	<p>Mobile: +91 9711783764, +91 9205053495</p>
	
</div>
<div class="col-12">
	<hr class="light-100">
	<h5> © 2020 Copyright: WebHelper</h5>
    
</div>

</div>
</div>
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
</footer>
<!--- End Footer -->

</body>
</html>



<?php

extract($_POST);
$con=mysqli_connect("localhost","root","");
$a=mysqli_select_db($con,"ADA");
$t="select * from joining";
$tt=mysqli_query($con,$t);
$z=0;
if(@$submit)
{ 
  if(empty($name)||empty($email)||empty($cno)||empty($linkedin)||empty($add))
  { 
    echo '<script>alert("some empty fields")</script>';
    
  }
  else
  { 
  	if($cno<999999999||$cno>9999999999)
  {
    echo '<script>alert("contact no. should be of 10 digits")</script>';
  }
    else 
      { 
 		$i=mysqli_query($con,"insert into joining(name,emailid,contactno,linkedinaddress,message) values('$name','$email',$cno,'$linkedin','$add')");
    	echo '<script>alert("successfully Sent ")</script>';
   	  }

  }
}

?>
