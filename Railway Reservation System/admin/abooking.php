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
    <link rel="stylesheet" href="booking.css">
    <title>Booking</title>

    <script>
      function myFunction() {
          
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

<script>
  function logout() {
      
      if (window.confirm('You loggout successfully. Redirecting to Login Page...'))
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

 

<marquee behavior="scroll" class="HeadLine"scrollamount="10" direction="left">Due to COVID-19, only special trains are running. Stay Home, Stay Safe!</marquee>
        

<!-- Navigation bar-->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="adminhomepage.php" >Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="Avtdetail.php">View Train Details</a>
                 <a class="nav-item nav-link" href="abooking.php" style="font-weight: bold">Book Tickets</a>
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
<br>
        <!--- BOOK-TICKET-CONTAINER -->
       <form action="" method="post" >
        <div class="body-container">
          <div class="book-ticket-container" style="height: 110vh">
            <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">BOOK TICKETS</h1>
            <br>
            

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">TRAIN NO. *</label>
                <div class="col-sm-8">
                  <input type="number"maxlength="5" class="form-control" name="tno" pattern="\d{5}">
                </div>
              </div>
                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">USERNAME *</label>
               <div class="col-sm-8">
               <input type="text"maxlength="50" class="form-control" id="inputEmail3" name="username" >
               </div>
                </div>

              <!--  -->
              <!-- <div class="form-group row">
                <label for="to-city" class="col-sm-3 col-form-label">CUSTOMER</label>
                <div class="col-sm-8" style="display: flex;">
                  <select class="" style="flex: 1;margin-right: 5px;">
                    <option>Adult</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                  <select class="" style="flex: 1;margin-left: 5px; margin-right: 5px;">
                    <option>Child</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                  <select class="" style="flex: 1; margin-left: 5px;">
                    <option>Senior Citizen</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div> -->
                <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">DATE *</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="date" name="date" >
        </div>
      </div>

            <div class="form-group row">
                <label for="to-city" class="col-sm-3 col-form-label">ADULT</label>
                <div class="col-sm-8" style="display: flex;">
                  <select class="" style="flex: 1;margin-right: 5px;" name="adult">
                    <option >--Select--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                  </div>
              </div>

              <div class="form-group row">
                <label for="to-city" class="col-sm-3 col-form-label">CHILD</label>
                <div class="col-sm-8" style="display: flex;">
                  <select class="" style="flex: 1;margin-right: 5px;" name="child">
                    <option >--Select--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                  </div>
              </div>


              <div class="form-group row">
                <label for="to-city" class="col-sm-3 col-form-label">SENIOR CITIZEN</label>
                <div class="col-sm-8" style="display: flex;">
                  <select class="" style="flex: 1;margin-right: 5px;" name="sc">
                    <option >--Select--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                  </div>
              </div>


              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-3 pt-0">CLASS</legend>
                  <div class="col-sm-8">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1" >
                      <label class="form-check-label" for="gridRadios1">
                        AC
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2" >
                      <label class="form-check-label" for="gridRadios2">
                        CHAIR CAR
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="3" >
                      <label class="form-check-label" for="gridRadios2">
                        SLEEPER
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
<br>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 185px;" name="check" value="CHECK SEAT AVAILABILTY">
                  <br>
                     <br>
                        <br>
                   <input type="submit" class="btn btn-dark btn-lg" style="float: left; margin-left: 185px;" onclick="window.open('Avtdetail.php');" name="view" value="VIEW TRAIN DETAILS">
                  <br>
<br>
<br>
                 <!--  <button type="submit" class="btn btn-dark  btn-lg" style="float: left; margin-left: 185px;">RESET</button> -->
                </div>
              </div>
            

<?php

@$_SESSION['tno']=$_POST['tno'];
@$_SESSION['adult']=$_POST['adult'];
@$_SESSION['username']=$_POST['username'];
@$_SESSION['date']=$_POST['date'];

@$_SESSION['child']=$_POST['child'];
@$_SESSION['sc']=$_POST['sc'];
@$_SESSION['gridRadios']=$_POST['gridRadios'];
// @$_SESSION['cc']=$_POST['cc'];
// @$_SESSION['sl']=$_POST['sl'];

@$_SESSION['check']=$_POST['check'];
// $x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
// $u="select * from pnr";
// $uu=mysqli_query($con,$u);
// $row=mysqli_fetch_array($uu)
// $pnr=$row[0];
// $pnr2=$pnr+1;
// $i=mysqli_query($con,"update pnr set pnr='$pnr2' where pnr='$pnr'" );
$t="select * from train";

// select distinct(source) from train;
$tt=mysqli_query($con,$t);
$user=0;
$x=0;
$adult=@$_SESSION['adult'];
$child=@$_SESSION['child'];
$sc=@$_SESSION['sc'];
$fare=1;
// @$_SESSION['fare']=0;
@$_SESSION['seat']=1;
@$_SESSION['ticket']=$adult+$child+$sc;
// echo $_SESSION['adult'];

if(@$_SESSION['check'])
{ if(empty(@$_SESSION['tno'])||empty(@$_SESSION['username'])||empty(@$_SESSION['gridRadios'])||empty(@$_SESSION['date']))
  { 
      echo '<script>alert("some fields are empty")</script>';

  } else
  { 
      if($adult>=0&&$child>=0&&$sc>=0)
   {

    while($row=mysqli_fetch_array($tt))
    {
        $con=mysqli_connect("localhost","root","");
        $s=mysqli_select_db($con,"DB");
        $m="select * from customer";
        $mm=mysqli_query($con,$m);
        // $ad="select * from admin";
        // $adad=mysqli_query($con,$ad);
        // $rowa=0;




      if(@$_SESSION['tno']==$row[1])
      {
          $x=1; 
           while($rows=mysqli_fetch_array($mm))
        { 
          if($rows[1]==@$_SESSION['username']) 
          { $user=1;
                if(!empty(@$_SESSION['gridRadios'])&&$_SESSION['gridRadios']==1)
             {
                 $fare=$row[7]*@$_SESSION['ticket'];
                @$_SESSION['seat']=$row[10];

             } 

                if(!empty(@$_SESSION['gridRadios'])&&$_SESSION['gridRadios']==2)
            {
                 $fare=$row[8]*@$_SESSION['ticket'];
                 @$_SESSION['seat']=$row[11];

            } 

              if(!empty(@$_SESSION['gridRadios'])&&$_SESSION['gridRadios']==3)
           {
              $fare=$row[9]*@$_SESSION['ticket'];
              @$_SESSION['seat']=$row[12];

            } 
               @$_SESSION['fare']=$fare;
               ?>
                 <tr>
  

             <td><button type="submit"   style="float: left; margin-left: 270px;"><a href="abooking1.php?eid=<?php echo $_SESSION['fare'];?>&eid2=<?php echo $_SESSION['ticket'];?>&eid3=<?php echo $_SESSION['tno'];?>&eid4=<?php echo $_SESSION['seat'];?>&eid5=<?php echo $_SESSION['gridRadios'];?>&eid9=<?php echo $_SESSION['username'];?>&eid6=<?php echo $_SESSION['date'];?>&eid10=<?php echo $adult;?>&eid11=<?php echo $child;?>&eid12=<?php echo $sc;?>">View</a></button></td>
  
           
             </tr>
              <?php
          }

        }
          if($user==0)
          {
            echo '<script>alert("Invalid username")</script>';
          }
       // header("location:booking1.php");
       } 
    
    }
      if($x==0)
     {
    
       echo '<script>alert("There is no train available with this train no.")</script>';
     }
   }else
   {
     echo '<script>alert("some fields are empty")</script>';
   }
    // if($x!=0)
    //   {
    //      echo '<script>alert("please select both source and destination")</script>';
    //   }
  }
}
?>


         

          </div>
        </div>
      </form>
<br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br>
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
