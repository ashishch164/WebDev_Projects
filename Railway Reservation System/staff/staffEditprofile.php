

    
   
<html>
    <head>
    <title> Update Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="staffEditprofile.css">
    <!--<script type = "text/javascript">
        
           function Redirect() {
              window.location = "index.html";
              
           }            
           
           setTimeout('Redirect()', 10000);
        //-->
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
                <a class="dropdown-item" href="#"style="font-weight: bold">Edit Profile</a>
                <a class="dropdown-item" href="StaffChangepswd.php">Change password</a>
                <div class="dropdown-divider"></div>
                
              </div></li>
    
            <a class="nav-item nav-link"  href="stafflogin.php">Logout</a>
            
          </div>
        </div>
      </nav>
    

<br>
       <div class="body-container">
        <div class="book-ticket-container">
          <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">EDIT PROFILE</h1>
          <br>
          <form action="" method="post">

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">NAME</label>
              <div class="col-sm-8">
                <input type="text"maxlength="50" class="form-control" id="inputEmail3" name="name" pattern="[A-Za-z]*">
              </div>
            </div>

            
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">CONTACT NO.</label>
                <div class="col-sm-8">
                  <input type="number"maxlength="10" class="form-control" id="number" name="cno" >
                </div>
              </div> 
            <div class="form-group row">
              <label for="date" class="col-sm-3 col-form-label">DATE OF BIRTH</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy" name="dob">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">EMAILID</label>
                <div class="col-sm-8">
                  <input type="email"maxlength="50" class="form-control" id="inputEmail3" name="email">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">USERNAME *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="inputEmail3" name="username" >
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">PASSWORD *</label>
                <div class="col-sm-8">
                  <input type="password" minlength="8" class="form-control" id="inputEmail3" name="password" >
                </div>
              </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <!-- <button type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 200px;" name="save">SAVE DETAILS</button>
                <br> <br> <br -->
                 <!-- > -->
                  <br>
                 <input type="submit"class="btn btn-danger btn-lg" style="float: left; margin-left: 135px;" name="update" value="UPDATE">
                 <input  type="reset" class="btn btn-dark  btn-lg" style="float: right; margin-right: 60px;" name="reset" value="RESET">
                 <!-- <input type="submit" class="btn btn-dark  btn-lg" style="float: right; margin-right: 60px;" name="delete" value="DELETE"> -->
                 <br> <br> <br>
                 <!-- <input  type="reset" class="btn btn-dark  btn-lg" style="float: left; margin-left: 215px;" name="reset" value="RESET"> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    
    <br>
    
    <br><br>
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
$x=0;

if(@$delete||@$update)
{ $w=1;
  if(empty($username)||empty($password))
  {  $x=1;
     echo '<script>alert("username and password both are mandatory for updation")</script>';
  }
  else
{
  while($row=mysqli_fetch_array($tt))
  {
    if($username==$row[1]&&$password==$row[6])
    { 
          $w=0;   
          
     //      if($row[7]==NULL)
     //  
     // else
     //   header("location: staffhomepage.php");
      // header("location: index.php");
      // <!-- echo '<script>alert("We have sent you a mail to reset your password")</script>'; -->
    }
    
  }
  if($w!=0)
      { $x=1;
            echo '<script>alert("Invalid username or password")</script>';

      }
   }
    
}
if(@$delete&&$x!=1)
{
  if(empty($username)||empty($password))
  {
    echo '<script>alert("some empty fields ")</script>';
    // header("location:register.php");
  }
  else
  { 
    
    $i=mysqli_query($con,"delete from staff where username='$username'" );
    echo '<script>alert(" your profile is successfully deleted ")</script>';
     
  }
}
if(@$update&&$x!=1)
{ 
$x=0;
$y=0;
  if(!empty($username))
  { 
if(!empty($cno))
    { $x=$x+1;  
      if($cno<999999999||$cno>9999999999)
      { $x=0;
echo '<script>alert("contact no. should be of 10 digits")</script>';
$y=1;
      }
      else{
     

      $i=mysqli_query($con,"update staff set contactno='$cno' where username='$username'" );
    }

    }
    if(!empty($name)&&$y!=1)
    { $x=$x+1;
      $i=mysqli_query($con,"update staff set name='$name' where username='$username'" );
    }
    if(!empty($dob)&&$y!=1)
    {
      $x=$x+1;
      $i=mysqli_query($con,"update staff set dob='$dob' where username='$username'" );

    }
    if(!empty($email)&&$y!=1)
    {
      $x=$x+1;
      $i=mysqli_query($con,"update staff set emailid='$email' where username='$username'" );

    }
     
if($x!=0)
{
   echo '<script>alert("your profile is successfully updated")</script>';
}
else if($y!=1)
{
   echo '<script>alert("please enter atleast one field for updation")</script>';
}
  
    
  }else
  {
   // header("location:updateProfile.php");
    echo '<script>alert("username is mandatory for updation")</script>';
  }
  
}

?>
<!-- 
  UPDATE `customer` SET `name` = 'devass' WHERE `customer`.`username` = 'dev123';
DELETE FROM `customer` WHERE `customer`.`username` = 'dev123' -->