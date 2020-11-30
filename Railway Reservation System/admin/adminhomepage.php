<?php
session_start();
if($_SESSION['n']=='')
{
  header("location:adminlogin.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="Staffhomepage.css">
    <title>AdminHomePage</title>
    <script>
      function logout() {
          
          if (window.confirm('You logout successfully. Redirecting to Login Page...'))
    {
     
      window.open("index.php");
    }
    else
    {
      die();
    }
          
      }
    </script>
</head>

<body>
    <div class="container">
        <section class="Page-Top" width=100%>
            <!--<marquee behavior="scroll" direction="left" scrollamount="10">-->
                <div class="Heading head">
                    <img id="logo" src="favicon.png" alt="logo"height="100" width="120">
                    <div class="Heading-Text">Railway Reservation System</div>
                </div>
            </marquee>
        </section>

 

<marquee behavior="scroll" class="HeadLine"scrollamount="10" direction="left">Due to COVID-19, only special trains are running. Stay Home, Stay Safe!   </marquee>

        <!-- Navigation bar-->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="adminhomepage.php" style="font-weight: bold">Home </a>
                <a class="nav-item nav-link" href="Avtdetail.php">View Train Details</a>
                 <a class="nav-item nav-link" href="abooking.php">Book Tickets</a>
                <a class="nav-item nav-link" href="ahistory2.php">Booking History</a>
                <a class="nav-item nav-link" href="acancellation.php">Cancellation</a>

                <a class="nav-item nav-link" href="amaintain1.php">Maintain Train Details</a>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="asregister.php">Add staff</a>
                    <a class="dropdown-item" href="acregister.php">Add customer</a>
                    <a class="dropdown-item" href="asdelete.php">Delete staff</a>
                    <a class="dropdown-item" href="acdelete.php">Delete customer</a>
                    <a class="dropdown-item" href="achangepassword.php" >Change password</a>
                    <div class="dropdown-divider"></div>
                    
                  </div></li>

              <a class="nav-item nav-link" href="alogout.php">Logout</a>
                
              </div>
            </div>
          </nav>

        <!--- Image Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="Indian-Railway-Train-Wallpaper-40-Group-Wallpapers.jpg"height="503px" width="1400px" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="Railways-1.jpg" height="503px" width="1400px"alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="New Picture (56).bmp"height="503px" width="1400px" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>





          <!-- FOOTER-->
        <section class="background">

        </section>

        <footer class="footer">
            <div class="footer-text">
                 © 2020 Copyright: All Rights Reserved
            </div>
        </footer>
    </nav>
    </div>
</body>

</html>