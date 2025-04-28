<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Interior Design &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
   
<!-- Swiper CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- icon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">



</head>
 <body>
<div class="wrapper">
 <div class="content">
   
<style>
/* Dropdown width and spacing */
.dropdown-menu {
    min-width: 200px;
}

/* Submenu styling */
.dropdown-submenu {
    position: relative;
}

/* Initially hide second-level dropdown */
.dropdown-submenu .dropdown-menu {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    margin-top: -1px;
}

/* Show second-level dropdown on hover */
.dropdown-submenu:hover > .dropdown-menu {
    display: block;
}

/* Align submenu properly */
.dropdown-submenu .dropdown-menu {
    left: 100%;
    top: 0;
}

/* Style for expand icon */
.expand-icon {
    font-size: 18px;
    font-weight: bold;
    color: #28a745;
    float: right;
}
</style>
            
<header style="background-color: rgb(112, 184, 198); color:#191213; padding: 10px;">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo and Text Container -->
        <div class="d-flex align-items-center">
            <a href="./index.php">
                <img src="./images/logo1.png" width="150" height="150" alt="logo" class="img">
            </a>
            
        </div>


        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>

                 <li class="nav-item"><a class="nav-link" href="trip.php">Trip Packages and Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="destinationsMenu" data-bs-toggle="dropdown">
                        Destinations
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Himachal -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Himachal <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="places/mannali.php">Shimla Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/kasol.php">Kasol Tour Package</a></li>
                                <li><a class="dropdown-item" href="manali1.php">Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/kullu.php">Kullu Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/dalhousie.php">Dharamshala Dalhousie Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/Kinnaur.php">Kinnaur Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/Chamba.php">Chamba Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/Spiti.php">Spiti Valley Tour Package</a></li>
                                <li><a class="dropdown-item" href="places/lahul.php">Lahaul Spiti Tour Package</a></li>
                               <li><a class="dropdown-item" href="places/tirthan.php">Tirthan Valley Tour Package Itinerary (3N/4D)</a></li>
                            </ul>
                                </li>
                            
                        <!-- Kashmir -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Kashmir <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="places/groupjammu.php">Kashmir Group Tour Package (5N/6D)</a></li>
                                <li><a class="dropdown-item" href="places/jammu.php">Kashmir Tour Package (5N/6D)</a></li>
                            </ul>
                        </li>
                        <!-- Leh Ladakh -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Leh Ladakh <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="places/ladakh.php">Ladakh Tour Package</a></li>
                            </ul>
                        </li>
                        <!-- Rajasthan -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Rajasthan <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="places/Rajasthan.php">Rajasthan Group Tour Package (3N/4D)</a></li>
                                <li><a class="dropdown-item" href="places/rajasthan.php">Rajasthan Tour Package (7N/8D)</a></li>
                            </ul>
                        </li>
                        <!-- Uttarakhand -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Uttarakhand <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="places/chardham.php">Char Dham Yatra (10N/11D)</a></li>
                                <li><a class="dropdown-item" href="places/dehradun.php">Dehradun Tour Package </a></li>
                            </ul>
                        </li>
                    </ul>
                </li> <!-- Close Destinations Dropdown -->

                <!-- Holidays Dropdown (Separate) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Holidays</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./tour/spiritual.php">Spiritual Tours</a></li>
                    <li><a class="dropdown-item" href="./tour/culture.php">Cultural Tours</a></li>
                    <li><a class="dropdown-item" href="./tour/adventure.php">Adventure Tours</a></li>
                    <li><a class="dropdown-item" href="./tour/monument.php">Monumental Tours</a></li>
                    <li><a class="dropdown-item" href="./tour/battle.php">Battlefield Tours</a></li>
                    </ul>
                </li> <!-- Close Holidays Dropdown -->

               
    
            </ul>
        </nav>
    </div>
</header>
<style>
.contact-section {
    background-color: rgb(112, 184, 198);
    min-height: 100vh; /* Ensures full-page coverage */
    padding-bottom: 50px;
}
</style>
  <section class="contact-section" style="background-color: rgb(112, 184, 198);">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7">
              <h2 class="font-weight-bold text-center">Contact Us</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-10">
              <form action="contact1.php" method="post">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <textarea name="message" class="form-control" placeholder="Your Message" rows="5" required></textarea>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Final Cancel Message -->
<div id="cancelMessage" class="form-popup" style="display:none;"></div>
<div class="custom-alert">
  Note: Kindly , You have to Call on this number(+91 94597-28930 , +91 8350837399)for booking your trip , cancellation or any query  <br>
                                                OR <br>
Send an E-mail on umairatravels@gmail.com    {Sorry on the inconvenience}
</div>

<style>
.custom-alert {
  background-color: #f8d7da;
  color: #721c24;
  padding: 15px;
  border: 1px solid #f5c6cb;
  border-radius: 5px;
  margin: 10px 0;
}
</style>
      </section>
      
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
</script>

<!--Bootstrap JavaScript Bundle (Including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>