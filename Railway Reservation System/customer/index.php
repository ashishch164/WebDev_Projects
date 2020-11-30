<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Railway Reservation System</title>
    <script>
    function myFunction() {
        
        if (window.confirm('Invalid username or password'))
{
   
    window.open("homepage.php");
}
else
{
    die();
}
        
    }
</script>
</head>
<body>
    

    <form class="background login" action="" method="post">


        <!--  <video autoplay muted loop id="myVideo">
            <source src="download_Trim (online-video-cutter.com)_Trim.mp4" type="video/mp4">
          </video> -->
       <!--  <div class="HeadLine">DTU Railways Reservation System</div>-->
        <h1 class="HeadLine" style="color: red;" style="text-decoration: red;" style="font-weight: bold;" style="font-size: 200%;">Welcome To Railway Reservation System</h1>
        <div class="credentials" style="background: lightseagreen"style="height: 45%"> 
           <h3> <u> LOGIN AS A CUSTOMER
           </u></h3> <br>
            <div class="username">
                Username :  <input type="text" placeholder="Enter your Username" name="n"> 
            </div>
            <div class="password">    
                Password :  <input type="password" placeholder="Enter your Password" name="p">
            </div>
            <div class="button">
                <Button  type="submit" name="s" value="Login">LOGIN</Button> 
            &nbsp; &nbsp;
               <!--   <Button   type="reset" value="Reset" > Reset </Button>-->
                
              </div>
             
          
             
              <a href="forgot.php"> Forgot password?</a> 
              &nbsp; &nbsp;&nbsp; &nbsp; 
              
              &nbsp; &nbsp;&nbsp; &nbsp; 
               <a href="register.php">New User? Register here</a> 
           
        </div>
    </form>

    

    
</body>
</html>

<?php
session_start();
@$_SESSION['n']=$_POST['n'];
@$_SESSION['p']=$_POST['p'];
@$_SESSION['s']=$_POST['s'];
$x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
$t="select * from customer";
$tt=mysqli_query($con,$t);


if(@$_SESSION['s'])
{ 
  while($row=mysqli_fetch_array($tt))
  {
    if(@$_SESSION['n']==$row[1]&&@$_SESSION['p']==$row[6])
    { 
          $x=0;   
         
      header("location: homepage.php");
    
       
    }
    
  }
    if($x!=0)
      { 
            echo '<script>alert("Invalid username or password")</script>';
      }
}
?>