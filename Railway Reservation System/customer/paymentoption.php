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

    
    <script src="paymentscript.js"></script>
    <link rel="stylesheet" href="paymentoption.css">
    <title>Payment Option</title>
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
                 <a class="nav-item nav-link" href="booking.php" style="font-weight: bold">Book Ticket</a>
                <a class="nav-item nav-link" href="booking_history.php">Booking History</a>
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

                
                <a class="nav-item nav-link"  href="logout.php">Logout</a>
                
              </div>
            </div>
          </nav>


         

          <div class="body-container">
            <div class="book-ticket-container">
                <div class="paymentCont">
                                <div class="headingWrap">
                                        <h3 class="headingTop text-center">Select Your Payment Method</h3>	<br>
                                        <h4 style="font-size: 18px;text-align: left;padding-left:75px;margin: 0;">Debit/Credit Card  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;   &nbsp;    UPI Payment       </h4>
                                        
                                </div>
                                <br>
                                <div class="paymentWrap">
                                    <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                        <label class="btn paymentMethod active">
                                            <div onclick="window.open('payment1.php');"class="method visa"></div>
                                            <input type="radio" name="options" checked> 
                                        </label>
                                       <br>
                                        <label class="btn paymentMethod">
                                            <div onclick="window.open('payment2.php');"class="method UPI"></div>
                                            <input type="radio" name="options">
                                        </label>
                                        
                                     
                                    </div>        
                                </div>
                                <div class="footerNavWrap clearfix">
                                    <button type="submit"onclick="window.open('booking.php');" class="btn btn-dark  btn-lg" style=" margin-left: 50px;">BACK</button>
                                    
                                </div>
                            </div>
                
            </div>
        </div>

            <!-- FOOTER-->
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