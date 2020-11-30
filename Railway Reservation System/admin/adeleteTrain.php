<html>
    <head>
    <title> DELETE TRAIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="deletetrain.css">
    
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
                <a class="nav-item nav-link active" href="adminhomepage.php" >Home </a>
                <a class="nav-item nav-link" href="Avtdetail.php">View Train Details</a>
                 <a class="nav-item nav-link" href="abooking.php">Book Tickets</a>
                <a class="nav-item nav-link" href="ahistory2.php">Booking History</a>
                <a class="nav-item nav-link" href="acancellation.php">Cancellation</a>

                <a class="nav-item nav-link" href="amaintain1.php" style="font-weight: bold">Maintain Train Details</a>
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



<br>

<form action="" method="post">
 <!--- BOOK-TICKET-CONTAINER -->
 <div class="body-container">
  <div class="book-ticket-container">
    <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">DELETE TRAIN</h1>   <br>
    <!-- <h4 style="font-size: 18px;text-align: center;padding: 0;margin: 0;">Train between stations</h4> -->
    <br>
 

  
     <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">TRAIN NO.*</label>
                <div class="col-sm-8">
                  <input type="number"maxlength="5" minlength="5" class="form-control" id="number" name="tno" placeholder="Enter Train number">
                </div>
              </div>
      
      
      
      
     <br>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 130px;"target="_blank" name="deletet" value="DELETE">
          <button type="submit" onclick="window.open('amaintain1.php');"class="btn btn-dark  btn-lg" style="float: right; margin-right: 50px;">BACK</button>
        </div>
      </div>
    
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



     <?php

extract($_POST);
$con=mysqli_connect("localhost","root","");
$a=mysqli_select_db($con,"DB");
$t="select * from train";
$tt=mysqli_query($con,$t);
$w=0;

// if(@$deletet)
// {
//   if(empty($tno))
//   { 
//      echo '<script>alert("train no. is mandatory for deletion")</script>';
//   }
//   else
// { if($tno<9999||$tno>99999)
//   {
//     echo '<script>alert("train no. should be of 5 digits")</script>';
//   }else 
// {
//   while($row=mysqli_fetch_array($tt))
//   {
//     if($tno==$row[1])
//     { 
//            $w=0;   
          
//           if($row[7]==NULL)
      
//      else
//        header("location: staffhomepage.php");
//       header("location: index.php");
//       <!-- echo '<script>alert("We have sent you a mail to reset your password")</script>'; -->
//        $i=mysqli_query($con,"delete from train where trainno='$tno'" );
//     echo '<script>alert(" your train is successfully deleted ")</script>';

//     }
    
//   }
// }
//   if($w!=0)
//       { $x=1;
//             echo '<script>alert("Train with this train no. does not exist ")</script>';

//       }
// }
// }

if(@$deletet)
{
  if(empty($tno))
  {
    echo '<script>alert("train no. is mandatory for deletion")</script>';
    // header("location:register.php");
  }
  else
  { 
     while($row=mysqli_fetch_array($tt))
    {
      if($tno==$row[1])
      {
      $w=1;
        $i=mysqli_query($con,"delete from train where trainno=$tno" );
        echo '<script>alert(" Train is successfully deleted ")</script>';
      }

    }
    if($w==0)
    {
         echo '<script>alert("Train with this train no. does not exist")</script>';
    } 

  }
}


?>