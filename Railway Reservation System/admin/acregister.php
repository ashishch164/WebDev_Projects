
<style>  
    body{  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: bisque;  
    }  
    
    hr {  
      border: 1px solid #f1f1f1;  
      margin-bottom: 25px;  
    }  
    .registerbtn {  
      background-color: #4CAF50;  
      color: white;  
      padding: 10px 15px;  
      margin: 8px 0;  
      border: none;  
      cursor: pointer;  
      width: 50%;  
      opacity: 0.9;  
    }  
    .registerbtn:hover {  
      opacity: 1;  
    }  
    </style>
<html>
<head>
<title> Add Customer</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
   <!-- <script src="registerscript.js"></script> -->
  <link rel="stylesheet" href="model.css">
<!--<script type = "text/javascript">
    
       function Redirect() {
          window.location = "index.html";
          
       }            
       
       setTimeout('Redirect()', 10000);
    //-->
 </script>
</head>

 
<body>
  <!-- <video autoplay muted loop id="myVideo">
    <source src="download_Trim (online-video-cutter.com)_Trim.mp4" type="video/mp4">
  </video> -->

<div class="bg-image" style="
   
    background: url('https://i.ytimg.com/vi/KuDn-EWuZew/maxresdefault.jpg');
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);
    position: fixed;
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
"></div>
   <!-- <img src=  
               "https://i.ytimg.com/vi/KuDn-EWuZew/maxresdefault.jpg"
        width="100%" height="100%" alt="filter applied" />  -->

  <div class="container">
    <section class="Page-Top" width=100%>
        <!--<marquee behavior="scroll" direction="left" scrollamount="10">-->
            <div class="Heading head">
                <img id="logo" src="favicon.png" alt="logo"height="100" width="120">
                <div class="Heading-Text">Railway Reservation System</div>
            </div>
        </marquee>
    </section>

    
    
 <marquee style="color: red" behavior="scroll" class="HeadLine"scrollamount="10" direction="left">Due to COVID-19, only special trains are running. Stay Home, Stay Safe!   </marquee>
  <!-- <div class="bg-image"></div> -->
    
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="adminhomepage.php" >Home </a>
                <a class="nav-item nav-link" href="Avtdetail.php">View Train Details</a>
                 <a class="nav-item nav-link" href="abooking.php">Book Tickets</a>
                <a class="nav-item nav-link" href="ahistory2.php">Booking History</a>
                <a class="nav-item nav-link" href="acancellation.php">Cancellation</a>

                <a class="nav-item nav-link" href="amaintain1.php">Maintain Train Details</a>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold">
                     Profile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="asregister.php" >Add staff</a>
                    <a class="dropdown-item" href="acregister.php" style="font-weight: bold">Add customer</a>
                    <a class="dropdown-item" href="asdelete.php">Delete staff</a>
                    <a class="dropdown-item" href="acdelete.php">Delete customer</a>
                    <a class="dropdown-item" href="achangepassword.php" >Change password</a>
                    <div class="dropdown-divider"></div>
                    
                  </div></li>

              <a class="nav-item nav-link" href="alogout.php">Logout</a>
                
              </div>
            </div>
          </nav>
<br>
 <form   action="" method="post">
<div class="body-container">
  <div class="book-ticket-container">
    <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">ADD CUSTOMER</h1> <br>
    <h4 style="font-size: 18px;text-align: center;padding: 0;margin: 0;">* represents compulsory details</h4>
    <br>
   

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">NAME *</label>
        <div class="col-sm-8">
          <input type="text" maxlength="50" class="form-control" id="inputEmail3" name="name" pattern="[A-Za-z]*">
        </div>
      </div>

      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">USERNAME *</label>
          <div class="col-sm-8">
            <input type="text"maxlength="50" class="form-control" id="inputEmail3" name="username" >
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">CONTACT NO. *</label>
          <div class="col-sm-8">
            <input type="text"maxlength="10" class="form-control" id="inputEmail3" name="cno" >
          </div>
        </div>
      <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">DATE OF BIRTH *</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy" name="dob">
        </div>
      </div>
      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">EMAILID *</label>
          <div class="col-sm-8">
            <input type="email"maxlength="50" class="form-control" id="inputEmail3" name="email" >
          </div>
        </div>

       <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">RESEDENTIAL ADDRESS *</label>
          <div class="col-sm-8">
            <input type="address"maxlength="250" class="form-control" id="inputEmail3" name="add">
          </div>
        </div>

        <div class="form-group row ">
          <label for="inputEmail3" class="col-sm-3 col-form-label">PASSWORD *</label>
          <div class="col-sm-8">
            <input type="password"maxlength="50" minlength="8" class="form-control" id="inputEmail3" name="pass1">
          </div>
        </div>

        <div class="form-group row ">
          <label for="inputEmail3" class="col-sm-3 col-form-label">CONFIRM YOUR PASSWORD *</label>
          <div class="col-sm-8">
            <input type="password"maxlength="50" minlength="8" class="form-control" id="inputEmail3" name="pass2">
          </div>
        </div>
      
      <div class="form-group row">
        <div class="col-sm-10">
            <br>
          <input  type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 220px;" name="register" value="ADD">
          <button type="submit" class="btn btn-dark  btn-lg" style="float: right; margin-right: 60px;">RESET</button>
<br> <br><br>
                                     
          <!-- <button type="submit" onclick="window.open('index.php');"class="btn btn-dark  btn-lg" style="float: left; margin-left: 220px;">BACK TO LOGIN</button> -->
        </div>
      </div>
    
  </div>
</div>
</form>
 
<br> <br><br> <br><br> <br>
<!-- FOOTER-->
<section class="background">

</section>
<br> <br><br> <br> <br>
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
$t="select * from customer";
$tt=mysqli_query($con,$t);
$z=0;
if(@$register)
{ 
  if(empty($name)||empty($username)||empty($cno)||empty($dob)||empty($email)||empty($add)||empty($pass1)||empty($pass2))
  { 
    echo '<script>alert("some empty fields ")</script>';
    
  }
  else
  { if($cno<999999999||$cno>9999999999)
  {
    echo '<script>alert("contact no. should be of 10 digits")</script>';
  }
    else 
      { if($pass1==$pass2)
   { 
         while($row=mysqli_fetch_array($tt))
    {
      if($username==$row[1])
      { $z=1;
        echo '<script>alert("customer with this username name already exist")</script>';
      }
    }   

   if($z==0)
   {
    $i=mysqli_query($con,"insert into customer(name,username,contactno,dob,emailid,address,password) values('$name','$username',$cno,'$dob','$email','$add','$pass1')");
    echo '<script>alert("successfully registered ")</script>';
   }
  }else
  {
    echo '<script>alert("password and confirm password must be same ")</script>';
  }
     }
  }
}

?>