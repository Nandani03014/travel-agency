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
                <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="./rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>

                 <li class="nav-item"><a class="nav-link" href="./trip.php">Trip Packages and Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="destinationsMenu" data-bs-toggle="dropdown">
                        Destinations
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Himachal -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Himachal <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./places/mannali.php">Shimla Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/kasol.php">Kasol Tour Package</a></li>
                                <li><a class="dropdown-item" href="./manali1.php">Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/kullu.php">Kullu Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/dalhousie.php">Dharamshala Dalhousie Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/Kinnaur.php">Kinnaur Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/Chamba.php">Chamba Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/Spiti.php">Spiti Valley Tour Package</a></li>
                                <li><a class="dropdown-item" href="./places/lahul.php">Lahaul Spiti Tour Package</a></li>
                               <li><a class="dropdown-item" href="./places/tirthan.php">Tirthan Valley Tour Package Itinerary (3N/4D)</a></li>
                            </ul>
                                </li>
                            
                        <!-- Kashmir -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Kashmir <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./places/groupjammu.php">Kashmir Group Tour Package (5N/6D)</a></li>
                                <li><a class="dropdown-item" href="./places/jammu.php">Kashmir Tour Package (5N/6D)</a></li>
                            </ul>
                        </li>
                        <!-- Leh Ladakh -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Leh Ladakh <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./places/ladakh.php">Ladakh Tour Package</a></li>
                            </ul>
                        </li>
                        <!-- Rajasthan -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Rajasthan <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./Rajasthan.php">Rajasthan Group Tour Package (3N/4D)</a></li>
                                <li><a class="dropdown-item" href="./rajasthan.php">Rajasthan Tour Package (7N/8D)</a></li>
                            </ul>
                        </li>
                        <!-- Uttarakhand -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Uttarakhand <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./places/chardham.php">Char Dham Yatra (10N/11D)</a></li>
                                <li><a class="dropdown-item" href="./places/dehradun.php">Dehradun Tour Package </a></li>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- cards -->
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                    <img src = "./images/bajaj.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                    <h5 class="card-title" style="font-size: 40px;">Bajaj Pulsar</h5>
                    <a href="bike/bikebajaj.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                <img src = "./images/bajajavenger.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                <h5 class="card-title" style="font-size: 40px;">Bajaj Avenger</h5>
                <a href="bike/bikeavenger.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                <img src = "./images/standard.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                    <h5 class="card-title" style="font-size: 40px;">Royal Enfield Standard </h5>
                    <a href="bike/bikeroyal enfield.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                <img src = "./images/350.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                    <h5 class="card-title" style="font-size: 40px;">Royal Enfield Classic 350</h5>
                    <a href="bike/Bikeclassic.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                <img src = "./images/thunder.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                    <h5 class="card-title" style="font-size: 40px;">Royal Enfield Thunderbird</h5>
                    <a href="bike/bikethunder.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow">
                <div class="card-body">
                <img src = "./images/him.jpg" alt= "image 1" style= "width: 550px; height: 550px;">
                    <h5 class="card-title" style="font-size: 40px;">Royal Enfield Himalyan</h5>
                    <a href="bike/bikehim.php" class="btn btn-primary">Click Me</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






























































































































































































































































































































<style>
           
.footer {
    background-color: #111; /* Dark background */
    color: white;
    text-align: center;
    padding: 40px 0; /* Adds vertical padding */
    width: 100%;
    position: relative; /* Ensures it stays in place */
    margin-top: 30px;
    
}

html, body {
    margin: 0;
    padding: 0;
    height: 100%;
}

.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Full viewport height */
    
}

.content {
    flex: 1; /* Pushes the footer to the bottom */
}


</style>
<div> 
<footer class="footer pt-4 pb-3">
    <div class="container-fluid">
        <div class="row"> 
            <!-- About Section -->
            <div class="col-md-4">
                <h5 style="color: rgb(230, 176, 101);">About Us</h5>
                <p>Umaira Travels is your ultimate travel<br> 
                   companion, offering the best destinations,<br> 
                   travel guides, and exclusive deals.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 style="color: rgb(230, 176, 101);">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Destinations</a></li>
                    <li><a href="#" class="text-white">Travel Packages</a></li>
                    <li><a href="#" class="text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-md-4">
                <h5 style="color: rgb(230, 176, 101);"
                >Contact Us</h5>
                <p>Email: <a href="mailto:umairatravels@gmail.com" class="text-white">umairatravels@gmail.com</a></p>
                <p>Phone: <a href="tel:+919805050625" class="text-white">+91 94597-28930 , +91 8350837399</a></p>
                <p>
 Adress : Bisheshwer Bhawan Lower Khalini Near Bus Stand Jhanjhiri Shimla-171009 <br>

Address : Puran Chand Building Col Dem Colony Near Government Schools Sunni, Shimla 171301</p>

                <!-- Social Media Icons -->
                <div>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <!-- button -->
         <h4 style= "color:rgb(230, 176, 101);">Want to take tour packages?</h4>
         <button>Book your tour now</button>

        <!-- Copyright -->
        <div class="text-center mt-3">
            <p class="mb-0">&copy; 2024 Umaira Travels. All Rights Reserved.</p>
        </div>
    </div>
  </footer>
  </div>
  <!-- go to top-->
<button id="goTopBtn">
    ↑
</button>
<style>
 /* Go To Top Button */
#goTopBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, #4CAF50, #2E8B57);
    color: white;
    font-size: 28px;
    border: none;
    border-radius: 50% 50% 0 0;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    display: none; /* Initially hidden */
    z-index: 9999; /* Ensure it's above other elements */
}

/* Hover Effect */
#goTopBtn:hover {
    background: linear-gradient(45deg, #FF5733, #C70039);
    transform: scale(1.1);
}

</style>



<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-KIT.js"></script>
  
  

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
  <!-- Bootstrap JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
