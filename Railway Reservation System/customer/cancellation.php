   
<html>
    <head>
    <title> Cancellation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="cancellation.css">
    <!--<script type = "text/javascript">
        
           function Redirect() {
              window.location = "index.html";
              
           }            
           
           setTimeout('Redirect()', 10000);
        //-->
        <script>
          function myFunction() {
              
              if (window.confirm('Ticket cancelled successfully. Redirecting to Homepage...'))
      {
         
          window.open("homepage.php");
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
            <a class="nav-item nav-link" href="booking_history.php">Booking History</a>
            <a class="nav-item nav-link" href="#" style="font-weight: bold">Cancellation</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Update Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="updateProfile.php">Edit Profile</a>
                <a class="dropdown-item" href="reset-paswd.php">Change password</a>
                <div class="dropdown-divider"></div>
                
              </div></li>
            
           
    		<a class="nav-item nav-link"  href="logout.php">Logout</a>
           <!--  <a class="nav-item nav-link"  --> 
            
          </div>
        </div>
      </nav>
    

<br>
    <form action="" method="post" >
      <div class="body-container">
        <div class="book-ticket-container">
          <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">Cancellation</h1>
          <br>
          

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">PNR NO. *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="10" class="form-control" id="inputEmail3" name="pnr">
                </div>
              </div>
           
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">TRAIN NO. *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="5" class="form-control" id="inputEmail3" name="tno">
                </div>
              </div>
           
            <div class="form-group row">
              <div class="col-sm-10">
                 <br> <br> 
                 
                <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 130px;" name="cancel" value="Cancel Ticket">
                <!-- Cancel Ticket</button> -->
                <button  type="submit" onclick="window.open('homepage.php')"; class="btn btn-dark  btn-lg" class="nav-item nav-link" style="float: right; margin-right: 60px;">BACK</button>
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
$t="select * from history";
$tt=mysqli_query($con,$t);
$x=0;
$w=1;
$seat=0;
$t=0;
$sty='type';
if(@$cancel)
{ 

  if(empty($tno)||empty($pnr))
  {
    echo '<script>alert("some empty fields ")</script>';
    // header("location:register.php");
  }
  else
  {   $w=1;
      while($row=mysqli_fetch_array($tt))
     {
        if($tno==$row[1]&&$pnr==$row[2])
       { 
          $w=0;   
          $t=$row[7]+$row[8]+$row[9];
          $sty=$row[10];

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
            echo '<script>alert(" Invalid PNR no. or Train no.")</script>';

      }
   
    if($x!=1)
    {
       $i=mysqli_query($con,"delete from history where trainno = $tno and pnr=$pnr " );
       $con=mysqli_connect("localhost","root","");
        $a=mysqli_select_db($con,"DB");
        $t="select * from train";
        $tt=mysqli_query($con,$t);
      while($row=mysqli_fetch_array($tt))
      {
        if($row[1]==$tno)
        { 

         if($sty=='AC')
         {

          $seat=$row[10]+$t;
           $i=mysqli_query($con,"update train set acseat='$seat' where trainno=$tno" );
         }else if($sty=='CHAIR CAR')
         {
          $seat=$row[11]+$t;
           $i=mysqli_query($con,"update train set ccseat ='$seat' where trainno=$tno" );
         }else
         {
          $seat=$row[12]+$t;
           $i=mysqli_query($con,"update train set slseat='$seat' where trainno=$tno" );

         }

         
        }
      }
       
        echo '<script>alert(" your Ticket has been successfully cancelled, you will get your refund amount in 3-4 working days")</script>';
    }    
  }
}

?>