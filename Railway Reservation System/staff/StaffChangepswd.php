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
   <script src="script.js"></script>
<link rel="stylesheet" href="StaffChangepswd.css">
    <title>Reset Password</title>

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
                <a class="nav-item nav-link" href="staffVTdetails.php">View Train Details</a>
                
               
                
                <a class="nav-item nav-link" href="maintain1.php">Maintain Train Details</a>
        
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold">
                Update Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="staffEditprofile.php">Edit Profile</a>
                <a class="dropdown-item" href="#" style="font-weight: bold">Change password</a>
                <div class="dropdown-divider"></div>
                
              </div></li>
                 <a class="nav-item nav-link"  href="stafflogin.php">Logout</a>

            
                
              </div>
            </div>
          </nav>
    
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <form method="post" action="" >
<div class="credentials"  > 
  <div class="container" >
    <div class="row">
      <div class="col-sm-4">
               
                <label>Username*</label> 
                <div > 
                    <input type="text"  class="form-control" placeholder="username" name="username"> 
                </div> 
                <label>Old Password*</label> 
                <div class="form-group pass_show "> 
                    <input type="password"  class="form-control" placeholder="Old Password" name="oldpass" minlength="8"> 
                </div> 
                   <label>New Password*</label>
                <div class="form-group pass_show"> 
                    <input type="password"  class="form-control" placeholder="New Password" name="newpass" minlength="8" > 
                </div> 
                   <label>Confirm Password*</label>
                <div class="form-group pass_show"> 
                    <input type="password"  class="form-control" placeholder="Confirm Password" name="confirmpass" minlength="8"> 
                </div> 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         

          <input type="submit" class="btn btn-primary" name="change" value="Change Password" >
          <!-- Change Password</button> -->
                
      </div>  
    </div>
  </div>
</div>
</form> 
<footer class="footer">
    <div class="footer-text">
         © 2020 Copyright: All Rights Reserved
    </div>
</footer>


</body>
</html>

<?php

extract($_POST);
$con=mysqli_connect("localhost","root","");
$a=mysqli_select_db($con,"DB");
$t="select * from staff";
$tt=mysqli_query($con,$t);
$w=0;
if(@$change)
{ 
  if(empty($username)||empty($oldpass)||empty($newpass)||empty($confirmpass))
{
 echo '<script>alert("some fields are empty")</script>';
}
else
{ 
  while($row=mysqli_fetch_array($tt))
  {

    if($username==$row[1])
    { $w=1;
      if($oldpass==$row[6])
       {

        if($newpass==$confirmpass)
          {  
           // if($newpass<9999999)

             $i=mysqli_query($con,"update staff set password=$newpass where username='$username'" );
               echo '<script>alert("password changed successfully")</script>';
          }
         else
             {
              echo '<script>alert("new password sholud be match with confirm password")</script>';
             }
       }
       else
          {
            echo '<script>alert("old password is incorrect")</script>';
          }
    }
    

  }
  if($w==0)
    {
     echo '<script>alert("unregistered username")</script>';
    }

}



}

?>