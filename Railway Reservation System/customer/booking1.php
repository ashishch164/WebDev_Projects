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
    <link rel="stylesheet" href="booking1.css">
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
 
  window.open("index.html");
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
                <a class="nav-item nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="VTdetail.php">View Train Details</a>
                 <a class="nav-item nav-link" href="booking.php"style="font-weight: bold;">Book Tickets</a>
                <a class="nav-item nav-link" href="cancellation.php">Cancellation</a>

               <!-- <a class="nav-item nav-link"href= "updateProfile.html">Update Profile</a> -->
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Update Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="updateProfile.php">Edit Profile</a>
                  <a class="dropdown-item" href="reset-paswd.php">Change password</a>
                  <div class="dropdown-divider"></div>
                  
                </div></li>

                
                
                <a class="nav-item nav-link"href="logout.php">Logout</a>
                
              </div>
            </div>
          </nav>
<br>
        <!--- BOOK-TICKET-CONTAINER -->
       <form action="" method="post">
        <div class="body-container">
          <div class="book-ticket-container">
            <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">BOOK TICKETS</h1>
            <br>
<?php
// session_start();
$con=mysqli_connect("localhost","root","");
//FARE
$edi=$_GET['eid'];
// echo $edi;
//TICKET
$edi2=$_GET['eid2'];
// echo $edi2;
//TNO
$edi3=$_GET['eid3'];
$edi4=$_GET['eid4'];
$edi5=$_GET['eid5'];
$edi9=$_GET['eid9'];
$edi6=$_GET['eid6'];
$edi10=$_GET['eid10'];
$edi11=$_GET['eid11'];
$edi12=$_GET['eid12'];
if($edi5==1)
{
 $S='AC';

}else if($edi5==2)
{
  $S='CHAIR CAR';

}else
{
  $S='SLEEPER';
}
// echo $edi3;

// $u="select * from pnr";
// $uu=mysqli_query($con,$u);
// $row=mysqli_fetch_array($uu)
// $pnr=$row[0];
// $pnr2=$pnr+1;
// $i=mysqli_query($con,"update pnr set pnr='$pnr2' where pnr='$pnr'" );

?>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">TRAIN NO. </label>
                <div class="col-sm-8">
                  <output type="text"maxlength="5" class="form-control" id="inputEmail3" name="tno"><?php echo $edi3;?></output>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">USERNAME </label>
                <div class="col-sm-8">
                  <output type="text"  class="form-control" id="inputEmail3" name="username"><?php echo $edi9;?></output>
                </div>
              </div>
              
              <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">DATE </label>
        <div class="col-sm-8">
          <output type="date" class="form-control" id="date" name="date"><?php echo $edi6;?></output>
        </div>
      </div>
      <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">AUDULT</label>
        <div class="col-sm-8">
          <output type="date" class="form-control" id="date" name="Adult"><?php echo $edi10;?></output>
        </div>
      </div>
      <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">CHILD</label>
        <div class="col-sm-8">
          <output type="date" class="form-control" id="date" name="Child"><?php echo $edi11;?></output>
        </div>
      </div>
      <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">SENIOR CITIZEN</label>
        <div class="col-sm-8">
          <output type="date" class="form-control" id="date" name="sc"><?php echo $edi12;?></output>
        </div>
      </div>


                <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">CLASS TYPE </label>
                <div class="col-sm-8">
                  <output type="text"  class="form-control" id="inputEmail3" name="username"><?php echo $S;?></output>
                </div>
              </div>

               <div class="form-group row">
                <label for="to-city" class="col-sm-3 col-form-label">SEAT AVAILABLE</label>
                <div class="col-sm-8">
                  <!-- <select class="form-control form-control-sm"> -->
                    <!-- <option>New Delhi</option> -->
                    <!-- <option>Bangalore</option> -->
                    <!-- <option>Mumbai</option> -->
                  <!-- </select> -->
                <output type="text" class="form-control" id="text"><?php echo $edi4;?></output> 
               </div>
              </div>
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
                <label for="to-city" class="col-sm-3 col-form-label">FARE</label>
                <div class="col-sm-8">
                  <!-- <select class="form-control form-control-sm"> -->
                    <!-- <option>New Delhi</option> -->
                    <!-- <option>Bangalore</option> -->
                    <!-- <option>Mumbai</option> -->
                  <!-- </select> -->
                <output type="text" class="form-control" id="text"><?php echo $edi;?></output> 
                </div>
              </div>
              <br>
              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" class="btn btn-danger btn-lg"  style="float: left; margin-left: 195px;" name="book" value=" BOOK TICKET">
                  <!-- BOOK TICKET</button>   -->
                  &nbsp;
               &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
               <button type="submit" onclick="window.open('booking.php');"class="btn btn-dark  btn-lg" sstyle="float: right; margin-right: 50px;">BACK</button>
               <!-- <button type="submit" class="btn btn-dark  btn-lg" style="float: right; margin-right: 50px;">RESET</button> <br> -->
                  <br>
                
                </div>
              </div>
            <?php
// session_start();
// @$_SESSION['date']=$_POST['date'];
@$_SESSION['book']=$_POST['book'];
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
$t="select * from pnr";
$tt=mysqli_query($con,$t);
$p=0;
$pp=0;
while($row=mysqli_fetch_array($tt))
{
  $p=$row[0];
  $pp=$p+1;
   $i=mysqli_query($con,"update pnr set pnrno=$pp" );
}
//FARE
$edi=$_GET['eid'];
// echo $edi;
//TICKET
$edi2=$_GET['eid2'];
// echo $edi2;
//TNO
$edi3=$_GET['eid3'];
// echo $edi3;
// seat
$edi4=$_GET['eid4'];
// seat type
$edi5=$_GET['eid5'];
// username
$edi9=$_GET['eid9'];
// date
$edi6=$_GET['eid6'];
// echo $edi9;
// echo $edi5;

// echo $d;
$edi10=$_GET['eid10'];
$edi11=$_GET['eid11'];
$edi12=$_GET['eid12'];

if($edi5==1)
{
 $S='AC';

}else if($edi5==2)
{
  $S='CHAIR CAR';

}else
{
  $S='SLEEPER';
}

if(@$_SESSION['book'])
{
    if($edi4!=0)
    {     if($edi2<=$edi4)
         {
            $edi4=$edi4-$edi2;
            if($edi5==1)
            $i=mysqli_query($con,"update train set acseat='$edi4' where trainno='$edi3'" );
            if($edi5==2)
            $i=mysqli_query($con,"update train set ccseat='$edi4' where trainno='$edi3'" );
            if($edi5==3)
            $i=mysqli_query($con,"update train set slseat='$edi4' where trainno='$edi3'" );
     


            $con=mysqli_connect("localhost","root","");
            $a=mysqli_select_db($con,"DB");
            $t="select * from train";
            $tt=mysqli_query($con,$t);          
          while($row=mysqli_fetch_array($tt))
          {  if($edi3==$row[1])
              {
                 $i=mysqli_query($con,"insert into history(username,trainno,pnr,source,destination,arr,dep,adult,child,sc,stype,fare,dot) values('$edi9',$edi3,$p,'$row[2]','$row[3]','$row[5]','$row[6]',$edi10,$edi11,$edi12,'$S',$edi,'$edi6')");
                 // echo $row[5];
                 // echo $row[6];
               ?>
                
  

            

  
           
             <tr>
              <td><button type="submit"   style="float: left; margin-left: 270px;" ><a href="paymentoption.php?eid=<?php echo $edi6;?>">MAKE PAYMENT</a></button></td>
              </tr>
<?php
              }
          }

         }else
         {
           echo '<script>alert("Cannot book tickets because of limited seat availabilty")</script>';
         }
    } else
    {
       echo '<script>alert("Seats are unavailable")</script>';
    } 
   
}
?>

          </div>
        </div>
   </form>


          <!-- FOOTER-->
        <section class="background">

        </section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br>
        <footer class="footer">
            <div class="footer-text">
                 © 2020 Copyright: All Rights Reserved
            </div>
        </footer>
    </nav>
    </div>
</body>

</html>
