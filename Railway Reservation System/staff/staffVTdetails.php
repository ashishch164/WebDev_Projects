

    
   
<html>
    <head>
    <title> Train DETAILS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="staffVTdetails.css">
    
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
            <a class="nav-item nav-link active" href="Staffhomepage.php">Home <span class="sr-only">(current)</span></a>
            
            <a class="nav-item nav-link" href="#"style="font-weight: bold;">View Train Details</a>
            
            <a class="nav-item nav-link" href="maintain1.php">Maintain Train Details</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Update Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="staffEditprofile.php">Edit Profile</a>
                  <a class="dropdown-item" href="StaffChangepswd.php">Change password</a>
                  <div class="dropdown-divider"></div>
                  
                </div></li>
    
            <a class="nav-item nav-link"  href="stafflogin.php">Logout</a>
            
          </div>
        </div>
      </nav>


<br>
<form action="" method="post">
 <!--- BOOK-TICKET-CONTAINER -->
 <div class="body-container">
  <div class="book-ticket-container">
    <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">VIEW TRAIN DETAILS</h1>   <br>
    <h4 style="font-size: 18px;text-align: center;padding: 0;margin: 0;">Train between stations</h4>
    <br>
 

  
     <div class="form-group row">
        <label for="from-city" class="col-sm-3 col-form-label" >FROM STATION</label>
        <div class="col-sm-8">
          <!-- <select class="form-control form-control-sm"> -->
            <!-- <option>Select </option> -->
            <!-- <option>delhi</option> -->
            <!-- <option>bangalore</option> -->
            <!-- <option>mumbai</option> -->
          <!-- </select> -->
           <input type="text" class="form-control" id="text" name="source" placeholder="enter source station">
        </div>
      </div>
      <div class="form-group row">
        <label for="to-city" class="col-sm-3 col-form-label" >TO STATION</label>
        <div class="col-sm-8">
          <!-- <select class="form-control form-control-sm"> -->
            <!-- <option>Select </option> -->
            <!-- <option>delhi</option> -->
            <!-- <option>bangalore</option> -->
            <!-- <option>mumbai</option> -->
          <!-- </select> -->
           <input type="text" class="form-control" id="text" name="destination" placeholder="enter destination station">
        </div>
      </div>
      
      
      
     <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 130px;"target="_blank" name="search" value="SEARCH TRAIN">
          <button type="submit" onclick="window.open('Staffhomepage.php');"class="btn btn-dark  btn-lg" style="float: right; margin-right: 50px;">BACK</button>
        </div>
      </div>
    
  <?php

@$_SESSION['source']=$_POST['source'];
@$_SESSION['destination']=$_POST['destination'];
@$_SESSION['search']=$_POST['search'];
// $x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
$t="select * from train";
// select distinct(source) from train;
$tt=mysqli_query($con,$t);
$x=0;

if(@$_SESSION['search'])
{ 
  while($row=mysqli_fetch_array($tt))
  {
    
    if(@$_SESSION['source']==$row[2]&&@$_SESSION['destination']==$row[3])
    {
        $x=1;  
?>
  
  

    <button><a href="st.php?eid=<?php echo $_SESSION['source'];?>&eid2=<?php echo $_SESSION['destination'];?>">View</a></button>
  
  
  
<?php
   // header("location:login.php");
    } 
    
  }
  if($x==0)
  {
    
       echo '<script>alert("There is no train available for this source and destination  ")</script>';

    
    
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
