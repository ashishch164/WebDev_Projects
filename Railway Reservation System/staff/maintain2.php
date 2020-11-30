

    
   
<html>
    <head>
    <title> Update old train</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="maintain2.css">
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
             <a class="nav-item nav-link" href="#"style="font-weight: bold;">Maintain Train Details</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Update Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="staffEditprofile.php">Edit Profile</a>
                <a class="dropdown-item" href="StaffChangepswd.php">Change password</a>
                <div class="dropdown-divider"></div>
                
              </div></li>
    
            <a class="nav-item nav-link" href="stafflogin.php">Logout</a>
            
          </div>
        </div>
      </nav>
    

<br>
<form action="" method="post">
      <div class="body-container">
        <div class="book-ticket-container" style=" height: 125vh">
          <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">Update old Train</h1>
          <br>
          <form>

           
              <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">TRAIN NO. *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="5" minlength="5" class="form-control" id="number" name="utno" >
                </div>
              </div>

              <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">UPDATE TRAIN NAME</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="text" name="utn" pattern="[A-Za-z]*">
                </div>
              </div>
  

              <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">UPDATE SOURCE NAME</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="text" name="usn">
                </div>
              </div>

              <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">UPDATE DESTINATION NAME </label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="text" name="udn">
                </div>
              </div>

 <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">UPDATE AC FARE</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="uaf">
                </div>
              </div>
               <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">UPDATE CC FARE</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="ucf">
                </div>
              </div>
                             <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">UPDATE SL FARE</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="usf">
                </div>
              </div>

              <div class="form-group row">
                <label for="from-city" class="col-sm-3 col-form-label">TYPE</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" name="utype">
                    <option value="" >Select </option>
                    <option value="Express">Express</option>
                    <option value="Superfast Express">Superfast Express</option>
                    <option value="Rajdhani">Rajdhani</option>
                    <option value="Shatabdi">Shatabdi</option>
                    <option value="Mail express">Mail express</option>
                    
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="TIME" class="col-sm-3 col-form-label">UPDATE ARRIVAL TIME</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" id="TIME" name="uat">
                </div>
              </div>
            <div class="form-group row">
                <label for="TIME" class="col-sm-3 col-form-label">UPDATE DEPT. TIME</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" id="time" placeholder="dd/mm/yyyy" name="udt">
                </div>
              </div>

              
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-3 pt-0">UPDATE Days of Running</legend>
                   <div class="col-sm-8" style="display: flex;">

                  <div style="flex: 1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud1" id="gridRadios1" value="1" >
                      <label class="form-check-label" for="gridRadios1">
                        sun
                      </label>
                      
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud2" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        mon
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud3" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        tue

                      </label>
                    </div>
                   
                  </div>
                  <div style="flex: 1">
                    
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud4" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        wed
                  
                      </label>
                    </div>
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud5" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                       thu
                  
                      </label>
                    </div>
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud6" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        fri
                  
                      </label>
                  </div>
                </div>
               <div style="flex: 1">
                    
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="ud7" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        sat
                  
                      </label>
                    </div>
                     
                </div>
                </div>
              </fieldset>
              
            <div class="form-group row">
              <div class="col-sm-10">
                
                <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 130px;" name="uot" value="Update Train">
                <!-- Update Train</button> -->
                <button type="submit" onclick="window.open('maintain1.php');"class="btn btn-dark  btn-lg" style="float: right; margin-right: 60px;">BACK</button>
                 </div>
            </div>
          
        </div>
      </div>
    
  </form>
    
  
  <br>
    <br>
    <br>
    <br>
   
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
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
$x=0;
if(@$uot)
{
  if(empty($utno))
  {
     echo '<script>alert("Train no. is mandatory for updation")</script>';
  }
  else
  { 
    $x=0;
    while($row=mysqli_fetch_array($tt))
    {
      if($utno==$row[1])
        {
            $w=1; 
            // echo $utn,$utno,$usn,$udn,$uaf,$ucf,$usf,$utype,$uat,$udt,$ud1,$ud2,$ud3,$ud4,$ud4,$ud5,$ud6,$ud7;
        
          
          if(!empty($utn))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set trainname='$utn' where trainno=$utno" );
            } 
             if(!empty($usn))
            {
             $x=1;
              $i=mysqli_query($con,"update train set source='$usn' where trainno=$utno" );
            } 
             if(!empty($udn))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set destination='$udn' where trainno=$utno" );
            } 
             if(!empty($uaf))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set acfare='$uaf' where trainno=$utno" );
            } 
             if(!empty($ucf))
            {
             $x=1;
              $i=mysqli_query($con,"update train set ccfare='$ucf' where trainno=$utno" );
            } 
             if(!empty($usf))
            {
             $x=1;
              $i=mysqli_query($con,"update train set slfare='$usf' where trainno=$utno" );
            } 
             if(!empty($utype))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set type='$utype' where trainno=$utno" );
            } 
             if(!empty($uat))
            {
             $x=1;
              $i=mysqli_query($con,"update train set arrival='$uat' where trainno=$utno" );
            } 
             if(!empty($udt))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set departure='$udt' where trainno=$utno" );
            } 
            if(!empty($ud1))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set d1='Y' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d1='N' where trainno=$utno" );
            }
             if(!empty($ud2))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set d2='Y' where trainno=$utno" );
            }
             else
            { $i=mysqli_query($con,"update train set d2='N' where trainno=$utno" );
            }
             if(!empty($ud3))
            {
             $x=1;
              $i=mysqli_query($con,"update train set d3='Y'' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d3='N' where trainno=$utno" );
            }
             if(!empty($ud4))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set d4='Y' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d4='N' where trainno=$utno" );
            }
             if(!empty($ud5))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set d5='Y' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d5='N' where trainno=$utno" );
            }
             if(!empty($ud6))
            {
             $x=1;
              $i=mysqli_query($con,"update train set d6='Y' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d6='N' where trainno=$utno" );
            }
             if(!empty($ud7))
            { 
              $x=1;
              $i=mysqli_query($con,"update train set d7='Y' where trainno=$utno" );
            } 
            else
            { $i=mysqli_query($con,"update train set d7='N' where trainno=$utno" );
            }
          if($x==1)
          {
            echo '<script>alert("Train is updated successfully")</script>';
          }
          else
          {
            echo '<script>alert("atleast fill one field other than train no. for updation ")</script>';
          }
        }
    }   
    
    if($w==0)
    {
         echo '<script>alert("Train with this train no. does not exist")</script>';
    } 
    
    
  } 

}



    ?>