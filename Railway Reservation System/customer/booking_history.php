

    
   
<html>
  <head>
  <title> BOOKING HISTORY</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="booking_history.css">
  <script>
    function myFunction() {
        
        if (window.confirm('Your QUERY Requested sucessfully. Redirecting to Homepage...'))
{
   
    window.open("homepage.html");
}
else
{
    die();
}
        
    }
</script>

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
  
      <div class="bg-image"></div>
  
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
          <a class="nav-item nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="VTdetail.php">View Train Details</a>
          <a class="nav-item nav-link" href="booking.php">Book Tickets</a>
          <a class="nav-item nav-link" href="#" style="font-weight: bold">Booking History</a>
          <a class="nav-item nav-link" href="cancellation.php">Cancellation</a>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Update Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="updateProfile.php">Edit Profile</a>
              <a class="dropdown-item" href="reset-paswd.php">Change password</a>
              <div class="dropdown-divider"></div>
              
            </div></li>
  
          <a class="nav-item nav-link" href="logout.php">Logout</a>
          
        </div>
      </div>
    </nav>
  

<br>

<!--- BOOK-TICKET-CONTAINER -->
  <form action="" method="post">
 <div class="body-container">
  <div class="book-ticket-container">
    <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">VIEW BOOKING HISTORY</h1>   <br>
      <br>
   

      

      <div class="form-group row">
       <!--  <label for="from-city" class="col-sm-3 col-form-label" >USERNAME</label> -->
        <div class="col-sm-8">
          <!-- <select class="form-control form-control-sm"> -->
            <!-- <option>Select </option> -->
            <!-- <option>delhi</option> -->
            <!-- <option>bangalore</option> -->
            <!-- <option>mumbai</option> -->
          <!-- </select> -->
           <input type="text" class="form-control" id="text" name="username" placeholder="USERNAME" style="float: left; margin-left: 80px;">
           <br>
           <br>
        <input type="password" class="form-control" id="password" name="pass" placeholder="PASSWORD" style="float: left; margin-left: 80px;">
       </div>
      </div>
      
      
      
     <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" class="btn btn-danger btn-lg"  style="float: left; margin-left: 145px;" target="_blank" name="search" value=" BOOKING HISTORY">
          <!-- TRAIN</button> -->
          <br>
          <br>
                <br>

          <button type="submit" onclick="window.open('homepage.php');"class="btn btn-dark  btn-lg" style="float: left; margin-left: 190px;">BACK</button>
        </div>
      </div>
   
<?php

@$_SESSION['username']=$_POST['username'];
@$_SESSION['pass']=$_POST['pass'];

@$_SESSION['search']=$_POST['search'];
// $x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
$t="select * from history";
$tt=mysqli_query($con,$t);

$z="select * from customer";
$zz=mysqli_query($con,$z);
$x=0;
$y=0;
while($rows=mysqli_fetch_array($zz))
  {
    
    if(@$_SESSION['username']==$rows[1]&&@$_SESSION['pass']==$rows[6])
    {
        $y=1;  
    }


  }    
  if($y==0)
  {
       echo '<script>alert("Invalid username or password")</script>';
  }
if(@$_SESSION['search']&&$y==1)
{ 
  while($row=mysqli_fetch_array($tt))
  {
    
    if(@$_SESSION['username']==$row[0])
    {
        $x=1;  
?>
  
  

    <button><a href="history2.php?eid=<?php echo $_SESSION['username'];?>">View</a></button>
  
  
  
<?php
   // header("location:login.php");
    } 
    
  }
  if($x==0)
  {
    
       echo '<script>alert("Their is no booking history as you have not booked any ticket yet.")</script>';

    
    
  }
    // if($x!=0)
    //   {
    //      echo '<script>alert("please select both source and destination")</script>';
    //   }
}
?>
  </div>
</div>
 </form>
        <br><br><br><br>
        <br>
            <footer class="footer">
        <div class="footer-text">
             © 2020 Copyright: All Rights Reserved
        </div>
    </footer>
     
    </body>
    </html>
