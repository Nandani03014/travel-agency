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
                <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                
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
    /* Overall section styling */
    .about-section {
      background-color:rgb(142, 189, 199); /* Adjust to match your exact yellow shade */
      padding: 60px 20px; 
      text-align: center;
      font-family: Arial, sans-serif;
    }

    /* Heading styling */
    .about-section h2 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      color: #333;
    }

    /* Subheading / paragraph styling */
    .about-section p {
      font-size: 1rem;
      max-width: 600px;
      margin: 0 auto 2rem;
      color: #555;
      line-height: 1.6;
    }

    /* Container for images */
    .about-images {
      display: flex;
      flex-wrap: wrap;         /* Allows wrapping on smaller screens */
      justify-content: center; /* Centers the images horizontally */
      gap: 1rem;               /* Space between images */
    }

    /* Individual image container */
    .about-images .img-container {
      flex: 0 1 auto;    /* Allows them to shrink/grow as needed */
      max-width: 200px;  /* Control the max width of each image box */
      overflow: hidden;  /* If you want to clip any overflow */
      border-radius: 8px; /* Rounded corners if desired */
    }

    /* Image styling */
    .about-images img {
      width: 100%;
      height: auto;
      display: block;    /* Removes extra space below images in some browsers */
      border-radius: 8px; /* Match container’s rounded corners */
    }

    /* Responsive tweak: if you want images to stack on very small screens */
    @media (max-width: 480px) {
      .about-images {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>

  <section class="about-section">
    <h2><u>About Us</h2></u>
    <p>
    "Discover the world with Umaira Travels, where each journey is curated for unforgettable experiences.
    From hidden gems to iconic destinations, we bring your travel dreams to life—effortlessly and affordably."
    </p>
    <div class="about-images">
      <div class="img-container">
        <img src="images/img1.jpg" alt="Team Image 1" style="height: 270px;">
      </div>
      <div class="img-container">
        <img src="images/img2.jpg" alt="Team Image 2">
      </div>
      <div class="img-container">
        <img src="images/img3.jpg" alt="Team Image 3" style="height: 270px;">
      </div>
      <div class="img-container">
        <img src="images/img4.jpg" alt="Team Image 4" style="height: 270px;">
      </div>
    </div>
  </section>
    

  <div class="container mt-5">
    <div class="row align-items-center">
        <!-- Content Section (Left) -->
        <div class="col-md-6">
            <h2>About Us:</h2>
            <p><u>Welcome to Umaira Travels – Your Gateway to Unforgettable Journeys! </u><br><br>

At Umaira Travels, we believe that travel is not just about visiting places; it’s about creating memories, experiencing cultures, and discovering the world in a unique way. Whether you dream of exploring breathtaking landscapes, relaxing on pristine beaches, or embarking on thrilling adventures, we are here to turn your travel dreams into reality.</p>
        </div>

        <!-- Image Section (Right) -->
        <div class="col-md-6 text-center">
            <img src="images/about.jpg" alt="Sample Image" class="img-fluid" style="height:400px; width: 400px;">
        </div>
    </div>
</div>
<style>
.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px; /* Adds spacing between text and image */
}

.content {
    flex: 1; /* Takes equal space */
}

.image img {
    max-width: 100%;
    height: auto;
}
</style>
<div class="container mt-5">
    <div class="row align-items-center">
        <!-- Video Section (Left) -->
        <div class="col-md-6 text-center">
            <video width="100%" height="auto" controls>
                <source src="vedio/vedio.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Content Section (Right) -->
        <div class="col-md-6">
            <h2>We provide the best Tour facilities</h2>
            <h3><b>Who We Are: </h3></b>
            <p>We are a passionate team of travel enthusiasts dedicated to offering exceptional travel experiences. With years of expertise in the tourism industry, we curate customized itineraries, handpicked destinations, and exclusive deals to ensure that every journey is seamless, enjoyable, and memorable.</p>
        </div>
    </div>
</div>



<!-- what we offer -->
    <style>
        /* Centering the section */
        .offer-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
            padding: 20px;
        }

        /* Offer Box */
        .offer-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        /* Icon Styles */
        .offer-box h2 i {
            color:#005f73;
            margin-right: 10px;
        }

        .offer-box p {
            font-size: 18px;
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .offer-box p i {
            font-size: 22px;
            margin-right: 12px;
            color: #005f73;
        }

        /* Hover Effect */
        .offer-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.3);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .offer-box {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>


<div class="offer-section">
    <div class="offer-box">
        <h2><i class="fas fa-plane"></i>What We Offer</h2>
        <p><i class="fas fa-map-marked-alt"></i> <strong>Tailor-Made Tours:</strong> Personalized travel packages to suit your interests and budget.</p>
        <p><i class="fas fa-tags"></i> <strong>Best Travel Deals:</strong> Affordable tour packages for domestic and international destinations.</p>
        <p><i class="fas fa-headset"></i> <strong>24/7 Customer Support:</strong> Assistance at every step of your journey.</p>
        <p><i class="fas fa-check-circle"></i> <strong>Hassle-Free Bookings:</strong> Easy and secure online booking process.</p>
        <p><i class="fas fa-users"></i> <strong>Group & Solo Tours:</strong> Whether you travel alone, with family, or in groups, we have the perfect plan for you.</p>
    </div>
</div>
<!-- why choose us -->

<style>
        body {
            background-color: #f8f9fa;
        }
        
        .why-choose-container {
            text-align: center;
            margin: auto;
             /* Reduce top and bottom padding */
             background-color: #e8f5e9;

    
        }

        .feature-card {
            display: flex;
            align-items: center;
            background: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: #f1f3f5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .feature-icon i {
            font-size: 28px;
            color: #2c3e50;
        }

        .feature-text {
            text-align: left;
        }

        .feature-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .feature-text p {
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="container why-choose-container">
        <h6 class="text-success fw-bold">OUR SUCCESS</h6>
        <h2 class="fw-bold">Why Choose Umaira Travels</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            
            <!-- Worldwide Coverage -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Worldwide Coverage</h4>
                        <p>Explore the world with us — unforgettable journeys await</p>
                    </div>
                </div>
            </div>

            <!-- Competitive Pricing -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Competitive Pricing</h4>
                        <p>Travel smart with the best rates! Quality trips, affordable prices!</p>
                    </div>
                </div>
            </div>

            <!-- Fast Booking -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Fast Booking</h4>
                        <p>Fast booking, hassle-free travel — your journey starts now</p>
                    </div>
                </div>
            </div>

            <!-- Guided Tours -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-signs"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Guided Tours</h4>
                        <p>Expert guides, unforgettable tours! Explore with confidence</p>
                    </div>
                </div>
            </div>

            <!-- Best Support 24/7 -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Best Support 24/7</h4>
                        <p>24/7 support, always here for you! Travel worry-free.</p>
                    </div>
                </div>
            </div>

            <!-- Ultimate Flexibility -->
            <div class="col">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Ultimate Flexibility</h4>
                        <p>Travel your way with ultimate flexibility! Plan with ease.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


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




<!--Bootstrap JavaScript Bundle (Including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

<!-- go to top -->
<script>
// Show button when scrolling down
window.onscroll = function() {
    let btn = document.getElementById("goTopBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

// Scroll to top smoothly
document.getElementById("goTopBtn").addEventListener("click", function() {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

</script>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>
</html>