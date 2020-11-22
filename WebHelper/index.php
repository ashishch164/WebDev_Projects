<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/gif/png" href="img/WhatsApp Image 2020-10-07 at 11.27.49 PM.jpeg">
	<title>WebHelper</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="script.js"></script>
	
	<link href="style.css" rel="stylesheet">
</head>
<body>
<style>
.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  
  background-size: 100%, 100%;
  
  
  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: black;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: black;
}
</style>

<!-- Navigation bar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand text-primary font-weight-bold" href="#"><img src="img/WhatsApp Image 2020-10-07 at 11.27.49 PM.jpeg" height="100"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link"  style="font-weight:bolder"href="index.php">Home</a>
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
				<a class="nav-link" href="join.php">Join Us</a>
			</li>
		</ul>
	</div>
</div>	
</nav>
<!-- End Navigation bar-->

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="3000"> 
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="0"></li>
	<li data-target="#slides" data-slide-to="0"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/960x0.jpg" height="603px" width="1400px" class="mx-auto d-block" width=100%>
		<div class="carousel-caption">
			<h2 class="display-4">We look forward to a better future.</h2>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/The_4_Most_Common_Sales_Objections_And_How_to_Master_Them.jpg"height="603px" width="1200px" class="mx-auto d-block" >
		<div class="carousel-caption">
			<h1 class="display-4">We offer quality services to our customers.</h1>
		</div>
	</div>
	<div class="carousel-item">
		<img src="img/trend-forecasters.jpg"height="603px" width="1500px"  >
		<div class="carousel-caption d-none d-md-block">
		
			<h1 >We persistently evolve ourselves.</h1>
		</div>
	
	</div>
</div>
<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--- End Image Slider -->

<!--- About Us -->
<br><br><br><br><br>
<button type="button" class="fun btn btn-lg btn-block btn-outline-primary col-8 offset-2" data-toggle="collapse" data-target="#about">	<h1 class="display-4">Want to know</h1><h1 class="display-4">About Us?</h1></button>
<div id="about" class="collapse">
	<div class="container-fluid padding">
		<div class="row">
			<div class="col-8 offset-2">
				<p>As everything is digitalizing in this era, businesses need an online handle too.
					Where everything is accessible on the click of two fingers, we aim to provide people with websites, so they can take their business online to expand their reach and accessibility.
					Also, removing the bugs and providing patch fixes to constantly improve the website plays a major role in an online business firm, which we do for the people, so they won’t have to worry about it.
					</p>			
			</div> 
		</div>  
	</div>  
</div>  
<!--- End About Us -->

<br><br><br><br><br>

<!--- Connect -->
<div class="container-fluid padding">
<div class="row text-center padding">

<div class="col-12">
	<h2 class="display-4">Connect with us</h2>
	<hr width="350px">
</div>
<div class="col-12 social padding">
<a href="https://mobile.twitter.com/Webhelpersonli1"><i class="fab fa-twitter"></i></a>
<!---<a href="#"><i class="fab fa-google-plus-g"></i></a>--->
<a href="https://api.whatsapp.com/send?phone=9711783764"><i class="fab fa-whatsapp"></i></a>
<!---<a href="#"><i class="fab fa-youtube"></i></a>--->
<a href="https://instagram.com/webhelpersonline?igshid=gp6rey6whvhr"><i class="fab fa-instagram"></i></a>
</div>

</div>
</div>
<!--- End Connect -->

<br><br><br><br><br>

<!--- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">
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
<button class="btn btn-primary scroll-top"  style="position: fixed;"  data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button>
</footer>
<!--- End Footer -->

</body>
</html>
