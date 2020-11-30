  
<html>
    <head>
    <title> Maintain train details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="maintain1.css">
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
        <div class="book-ticket-container" style=" height: 135vh">
          <h1 style="font-size: 45px;text-align: center;padding: 0;margin: 0;">Maintain Train Details</h1>
          <br>
          
            <div class="form-group row">
              <label for="text" class="col-sm-3 col-form-label">TRAIN NAME *</label>
              <div class="col-sm-8">
                <input type="text"maxlength="50" class="form-control" id="text" name="tname" pattern="[A-Za-z]*">
              </div>
            </div>

              <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">TRAIN NO.*</label>
                <div class="col-sm-8">
                  <input type="number"maxlength="5" minlength="5" class="form-control" id="number" name="tno">
                </div>
              </div>

              <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">SOURCE *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="text" name="source">
                </div>
              </div>

              <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">DESTINATION *</label>
                <div class="col-sm-8">
                  <input type="text"maxlength="50" class="form-control" id="text" name="des" >
                </div>
              </div>
               <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">AC FARE *</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="af">
                </div>
              </div>
               <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">CC FARE *</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="cf">
                </div>
              </div>
                             <div class="form-group row">
                <label for="number" class="col-sm-3 col-form-label">SL FARE *</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="number" name="sf">
                </div>
              </div>

              <div class="form-group row">
                <label for="from-city" class="col-sm-3 col-form-label">TYPE *</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" name="ttype">
                    <option>--Select--</option>
                    <option value="Express">Express</option>
                    <option value="Superfast Express">Superfast Express</option>
                    <option value="Rajdhani">Rajdhani</option>
                    <option value="Shatabdi">Shatabdi</option>
                    <option value="Mail express">Mail express</option>
                    
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="TIME" class="col-sm-3 col-form-label">ARRIVAL TIME *</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" id="TIME" name="atime" >
                </div>
              </div>
            <div class="form-group row">
                <label for="TIME" class="col-sm-3 col-form-label">DEPT. TIME *</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" id="time" placeholder="dd/mm/yyyy" name="dtime">
                </div>
              </div>

             
              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-3 pt-0">Days of running*</legend>
                 <div class="col-sm-8" style="display: flex;">

                  <div style="flex: 1">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d1" id="gridRadios1" value="1" >
                      <label class="form-check-label" for="gridRadios1">
                        sun
                      </label>
                      
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d2" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        mon
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d3" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        tue

                      </label>
                    </div>
                   
                  </div>
                  <div style="flex: 1">
                    
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d4" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        wed
                  
                      </label>
                    </div>
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d5" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                       thu
                  
                      </label>
                    </div>
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d6" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        fri
                  
                      </label>
                  </div>
                </div>
               <div style="flex: 1">
                    
                     <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="d7" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        sat
                  
                      </label>
                    </div>
                     
                </div>
                </div>
                
              </fieldset>
              
            <div class="form-group row">
              <div class="col-sm-10">
                
                <input type="submit" class="btn btn-danger btn-lg" style="float: left; margin-left: 135px;" name="addt" value="ADD">
                <!-- ADD</button> -->
                <input type="submit" onclick="window.open('deleteTrain.php');"class="btn btn-dark  btn-lg" style="float: right; margin-right: 60px;" name="deletet" value="DELETE">
                <!-- DELETE</button> -->
                <br> <br> 
                &nbsp;&nbsp;
                <h4 style="font-size: 30px;text-align: center;padding: 0;margin-left: 40px;">OR</h4>
                <br
                 > 
                <button type="submit" onclick="window.open('maintain2.php');"class="btn btn-danger btn-lg" style="float: left; margin-left: 165px;">UPDATE OLD TRAIN</button>
                <br> <br> <br>
                 <button  type="submit" onclick="window.open('Staffhomepage.php');"class="btn btn-dark  btn-lg" style="float: left; margin-left: 215px;">BACK</button>
              </div>
            </div>
          
        </div>
      </div>
      </form>
    
    <br><br>    <br>    <br>    <br>    <br>   <br>
    <br><br><br>
    <br> 
    <br>
    <br>  <br> 
    <br>
    <br> 
    <br>  <br> 
    <br>
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
        echo '<script>alert(" your train is successfully deleted ")</script>';
      }

    }
    if($w==0)
    {
         echo '<script>alert("Train with this train no. does not exist")</script>';
    } 

  }
}
$z=0;
if(@$addt)
{ 
if(empty($tname)||empty($tno)||empty($source)||empty($des)||empty($af)||empty($cf)||empty($sf)||empty($atime)||empty($dtime)||empty($ttype))
  { 
    
      echo '<script>alert("some empty fields ")</script>';
   
  
  } 
  else  if(empty($d1)&&empty($d2)&&empty($d3)&&empty($d4)&&empty($d5)&&empty($d6)&&empty($d7))
    {
      echo '<script>alert("please select atleast one day of running ")</script>';
    
    }
  else
  { if($tno<9999||$tno>99999)
  {
    echo '<script>alert("train no. should be of 5 digits")</script>';
  }
    else 
      { 
        while($row=mysqli_fetch_array($tt))
    {
      if($tno==$row[1])
      { $z=1;
        echo '<script>alert("Train with this train no. already exist")</script>';
      }
    }   
    if(empty($d1))
    {
      $d1='N';
    }else
    {
      $d1='Y';
    }

    if(empty($d2))
    {
      $d2='N';
    }else
    {
      $d2='Y';
    }

    if(empty($d3))
    {
       $d3='N';
    }else
    {
      $d3='Y';
    }

    if(empty($d4))
    {
       $d4='N';
    }else
    {
      $d4='Y';
    }

    if(empty($d5))
    {
      $d5='N';
    }else
    {
      $d5='Y';
    }

    if(empty($d6))
    {
       $d6='N';
    }else
    {
      $d6='Y';
    }

    if(empty($d7))
    {
       $d7='N';
    }else
    {
      $d7='Y';
    }

if($z==0)
{
$i=mysqli_query($con,"insert into train(trainname,trainno,source,destination,type,arrival,departure,acfare,ccfare,slfare,acseat,ccseat,slseat,d1,d2,d3,d4,d5,d6,d7)   values(     '$tname',$tno,'$source','$des','$ttype','$atime','$dtime',$af,$cf,$sf,50,50,100,'$d1','$d2','$d3','$d4','$d5','$d6','$d7')");
    echo '<script>alert("successfully added a new train ")</script>';
}  
     }
  }
}

?>