<html>
    <head>
    <title> BOOKING HISTORY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="VTdetail.css">
    
        <script>
            function logout() {
                
                if (window.confirm('You logout successfully. Redirecting to Login Page...'))
          {
           
            window.open("index.html");
          }
          else
          {
            die();
          }
                
            }
          </script>


         <style>
            body{ 
        background: #f2f2f2; 
             }
             table{ 
          width: 1000px;
          font-size: 20px;
          margin: auto;
          background-color: white;
              }
              table td,th { 
                  border:1px solid blue;
                  border-collapse: collapse;

                  text-align: center;

               }
               th,td{ 
                  padding: 15px;
                }
                th{ 
                background: darkred;
                color: lightblue;
                 }
                 td{ 
                 color: darkblue;
                  }


          </style>
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
                <a class="nav-item nav-link" href="ahistory2.php" style="font-weight: bold">Booking History</a>
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

	<br><br><br><br>
	<br><br>
	<table border="12px">
		<tr>
		<th>USERNAME</th>
		<th>TRAIN NO.</th>
    <th>PNR NO.</th>
		<th>Source</th>
		<th>Destination</th>
    <th>Arrival time</th>
    <th>Departure time</th>
    <th>Adult </th>
    <th>Child </th>
    <th>Senior Citizen</th>
    <th>CLASS type</th>
		<th>FARE</th>
		<th>DATE OF TRAVELLING</th>
		
		
		</tr>	
	


<?php
// session_start();
$con=mysqli_connect("localhost","root","");
// $edi=$_GET['eid'];
// echo $edi;
// $edi2=$_GET['eid2'];
// echo $edi2;
$a=mysqli_select_db($con,"DB");
$a=@$_SESSION['destination'];
$q="select * from history";
$qq=mysqli_query($con,$q);
while($row=mysqli_fetch_row($qq))
{
   
?>
	<tr>
	<!-- <td><?php echo $row[0];
	$_SESSION['S']=$row[0];
	?></td> -->
   <td><?php echo $row[0];?></td>
  <td><?php echo $row[1];?></td>
  <td><?php echo $row[2];?></td>
  <td><?php echo $row[3];?></td>
  <td><?php echo $row[4];?></td>
  <td><?php echo $row[5];?></td>
  <td><?php echo $row[6];?></td>
  <td><?php echo $row[7];?></td>
  <td><?php echo $row[8];?></td>
  <td><?php echo $row[9];?></td>
  <td><?php echo $row[10];?></td>
  <td><?php echo $row[11];?></td>
  <td><?php echo $row[12];?></td>
 
	
	
	</tr>
<?php
}

	?>
	


	</table>

	   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
   
<section class="background">

    </section>
    <footer class="footer" style="position: relative;">
      <div class="footer-text">
           © 2020 Copyright: All Rights Reserved
      </div>
  </footer>

</body>
</html>
