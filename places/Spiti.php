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
          <a href="../index.php">
                <img src="../images/logo1.png" width="150" height="150" alt="logo" class="img">
            </a>
            
        </div>


        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="../rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>

                 <li class="nav-item"><a class="nav-link" href="../trip.php">Trip Packages and Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="destinationsMenu" data-bs-toggle="dropdown">
                        Destinations
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Himachal -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Himachal <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../places/mannali.php">Shimla Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/kasol.php">Kasol Tour Package</a></li>
                                <li><a class="dropdown-item" href="../manali1.php">Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/kullu.php">Kullu Manali Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/dalhousie.php">Dharamshala Dalhousie Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/Kinnaur.php">Kinnaur Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/Chamba.php">Chamba Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/Spiti.php">Spiti Valley Tour Package</a></li>
                                <li><a class="dropdown-item" href="../places/lahul.php">Lahaul Spiti Tour Package</a></li>
                               <li><a class="dropdown-item" href="../places/tirthan.php">Tirthan Valley Tour Package Itinerary (3N/4D)</a></li>
                            </ul>
                                </li>
                            
                        <!-- Kashmir -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Kashmir <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../places/groupjammu.php">Kashmir Group Tour Package (5N/6D)</a></li>
                                <li><a class="dropdown-item" href="../places/jammu.php">Kashmir Tour Package (5N/6D)</a></li>
                            </ul>
                        </li>
                        <!-- Leh Ladakh -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Leh Ladakh <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../places/ladakh.php">Ladakh Tour Package</a></li>
                            </ul>
                        </li>
                        <!-- Rajasthan -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Rajasthan <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../Rajasthan.php">Rajasthan Group Tour Package (3N/4D)</a></li>
                                <li><a class="dropdown-item" href="../rajasthan.php">Rajasthan Tour Package (7N/8D)</a></li>
                            </ul>
                        </li>
                        <!-- Uttarakhand -->
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Uttarakhand <span class="expand-icon">+</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../places/chardham.php">Char Dham Yatra (10N/11D)</a></li>
                                <li><a class="dropdown-item" href="../places/dehradun.php">Dehradun Tour Package </a></li>
                            </ul>
                        </li>
                    </ul>
                </li> <!-- Close Destinations Dropdown -->

                <!-- Holidays Dropdown (Separate) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Holidays</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../tour/spiritual.php">Spiritual Tours</a></li>
                        <li><a class="dropdown-item" href="../tour/culture.php">Cultural Tours</a></li>
                        <li><a class="dropdown-item" href="../tour/adventure.php">Adventure Tours</a></li>
                        <li><a class="dropdown-item" href="../tour/monument.php">Monumental Tours</a></li>
                        <li><a class="dropdown-item" href="../tour/battle.php">Battlefield Tours</a></li>
                    </ul>
                </li> <!-- Close Holidays Dropdown -->

            </ul>
        </nav>
    </div>
</header>

<style>
    .gallery img, .gallery video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Pop-Up Effect on Hover */
    .gallery img:hover, .gallery video:hover {
        transform: scale(1.08);
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.4);
    }

    .gallery {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        grid-template-rows: auto auto;
        gap: 10px;
    }

    .gallery .large {
        grid-row: span 2;
    }

    /* Overlay Styling with Fade-In Effect */
    .overlay {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background: url('../images/sp4.jpg') center/cover no-repeat;
        color: white;
        font-size: 18px;
        border-radius: 10px;
        transition: background 0.5s ease-in-out, opacity 0.5s ease-in-out;
        opacity: 0.9;
    }

    .overlay:hover {
        opacity: 1;
        background-size: 110%;
    }

    /* Alternative Overlay */
    .overlay2 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        color: black;
        font-size: 18px;
        border-radius: 10px;
        transition: background 0.4s ease-in-out;
    }

    /* Dark overlay to improve text visibility */
    .overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
    }

    .overlay:hover::before {
        background: rgba(0, 0, 0, 0.8);
    }

    /* Ensures text is above the overlay */
    .overlay a, .overlay span {
        position: relative;
        z-index: 1;
    }

   /* Glow Effect on View More */
   .overlay a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 20px;
        padding: 10px 20px;
        border: 2px solid white;
        border-radius: 10px;
        transition: box-shadow 0.4s ease, transform 0.3s ease;
    }

    .overlay a:hover {
        box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.8);
        transform: scale(1.1);
        text-decoration: none;
    }
</style>


<div class="container mt-4">
    <div class="gallery">
        <div class="large">
            <img src="../images/sp1.jpg" alt="Main Image">
        </div>
        <div>
            <img src="../images/sp2.jpg" alt="Small Image">
        </div>
        <div>
            <img src="../images/sp3.jpg" alt="Small Image">
        </div>
        <!-- Video Instead of Image 3  -->
        <div class="overlay2">
            <video controls style=" height: 450px; max-width: 700px;">
                <source src="../vedio/spiti.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video> 
        </div> 
        <div class="overlay">
            <a href="/int.php/des.php/gallery/gallery2.php">View More Images</a>
        </div>
    </div>
</div> 

<style>
        .tour-info {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .icon {
            color: green;
        }

        .location {
            display: flex;
            align-items: center;
        }

        .location img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
    </style>


<div class="tour-info" style="margin-left: 20px; margin-top: 20px;">
    <div class="duration">
        <i class="fas fa-clock icon"></i> 7 Days / 6 Night
    </div>
    <div class="location">
        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location Icon">
         Himachal Pradesh , Spiti Valley
    </div>
</div>
<br>
<h4 style="margin-left: 20px;"> Included and Excluded </h4> <br>
<p style="font-size: 20px; margin-left: 20px;">✔️Accommodation (Hotels/Homestays)<br><br>

✔️Meals (Breakfast & Dinner) <br> <br>
✔️Private Vehicle for Sightseeing <br><br>
✔️Permits & Toll Taxes<br> <br>
❌Airfare/Train tickets <br><br>
❌Personal expenses & adventure activities <br><br>
❌Travel insurance <br>
   


<h4 style="margin-left: 20px;">Highlights of the Tour</h4> <br>
<p style="font-size: 20px; margin-left: 20px;">A. Visit Key Monastery – The largest monastery in Spiti <br> <br>
B.Explore Chandratal Lake – The mesmerizing moon lake <br><br>
C.Discover the world’s highest villages – Komic, Hikkim, Langza <br><br> 
D. Drive through Kunzum Pass & breathtaking landscapes <br><br>
E. Enjoy Spitian hospitality with homestays & local cuisine <br><br>
F. Witness the beauty of the Pin Valley National Park </p>
  
 
<style>
    .custom-margin {
        margin-left: -150px; /* Adjust this value to move further left */
    }
    .accordion-button {
        font-size: 18px; /* Increase button text size */
    }
    .accordion-body {
        font-size: 16px; /* Increase body text size */
    }
</style>

<div class="site-section">
    <div class="container">
        <div class="row">
            <!-- Accordion on the left with increased width -->
            <div class="col-lg-7 custom-margin">
                <span class="sub-title" style="font-size: 24px; font-weight: bold;">Itinerary</span>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                1. Admire Big Ben , Buckingham Palace and St. Paul Cathedral
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Start your journey early from Shimla or Manali towards Kaza via Kunzum Pass (if open). Enjoy breathtaking views of the Himalayan landscapes and Spiti River. Check-in at the hotel in Kaza, followed by dinner and an overnight stay.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                2. Kaza- Key monastry and Kibber Village Exploration
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Visit Key Monastery, a 1000-year-old Buddhist monastery offering panoramic views. Explore Kibber Village, one of the highest motorable villages in the world. Discover Chicham Bridge, Asia’s highest suspension bridge. Return to Kaza for dinner and an overnight stay.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                3. Kaza- Hikkim,Komic and Lanza (High Altitude Villages)
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Visit Hikkim, home to the world’s highest post office. Explore Komic, the highest motorable village at 15,000 ft. Discover Langza, famous for its fossil hunting and the giant Buddha statue. Return to Kaza and enjoy the evening at leisure.
                            </div>
                        </div>
                    </div><div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                4. Kaza to Pin Valley National Park
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Drive towards Pin Valley, a scenic wildlife reserve home to snow leopards. Visit Kungri Monastery, the main Buddhist monastery of the valley. Experience the peaceful surroundings of Mudh Village. Return to Kaza for an overnight stay.
                            </div>
                        </div>
                    </div><div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                5. Kaza to Tabu and Dhankar monastry
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Visit Tabo Monastery, one of the oldest Buddhist monasteries in the Himalayas. Explore Dhankar Monastery, offering breathtaking views of the confluence of Spiti and Pin Rivers. Hike up to Dhankar Lake, a serene high-altitude lake (optional). Return to Kaza for an overnight stay.
                            </div>
                        </div>
                    </div><div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                6. Kaza to Chandratal Lake
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Drive towards the mesmerizing Chandratal Lake. Enjoy a short trek to the lake, surrounded by snow-capped peaks. Spend time soaking in the beauty and stay overnight in camps under the starlit sky.
                            </div>
                        </div>
                    </div><div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                          7. Chandratal To Manali/Shimla departure
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Early morning departure towards Manali or Shimla via Rohtang Pass (if open). Drop-off at Manali/Shimla, marking the end of a memorable Spiti Valley adventure.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

             <!-- Image Column -->
                      <div class="col-lg-5">
                   <img src="../images/picture.jpg" alt="Tour Image" style="width: 100%; height: 100%; max-height: 500px; object-fit: cover; border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
 
    <h3 class="text-center mt-5 mb-3">📍 Location of Lahaul-Spiti</h3>

    <div class="map-container" style="position: relative; overflow: hidden; width: 100%; max-width: 800px; height: 600px; margin: auto; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13970.016095803226!2d77.6119559465499!3d32.55172361226954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39068df444f70a6b%3A0x8625f83bb2430552!2sLahaul%20and%20Spiti%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1682081458442!5m2!1sen!2sin" 
    style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>





<style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f9f9f2; /* Light beige gradient */
            margin: 0;
            padding: 40px;
        }
        .comment-container {
            background: linear-gradient(to bottom right, #f9f9f2, #fdf7eb);
            padding: 30px;
            border-radius: 5px;
            max-width: 700px;
            margin: auto;
        }
        h2 {
            font-size: 24px;
            font-weight: bold;
        }
        p {
            font-size: 14px;
            color: #666;
        }
        label {
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        textarea {
            height: 100px;
            resize: none;
        }
        .checkbox {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .checkbox input {
            margin-right: 5px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .submit-btn:hover {
            background-color: #3d8b40;
        }
    </style>

<style>
    .inquiry-box {
      background: linear-gradient(135deg, #f8f9fa, #e0f7fa);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .inquiry-box h3 {
      margin-bottom: 25px;
      font-weight: 700;
      color: #333;
    }

    .btn-animated {
      transition: all 0.3s ease-in-out;
    }

    .btn-animated:hover {
      transform: scale(1.05);
      background-color: #17a2b8 !important;
      color: white !important;
    }

    #cancelMessage {
      display: none;
      margin-top: 20px;
      font-size: 20px;
      color: red;
      font-weight: bold;
    }

    .form-popup {
      display: none;
      position: fixed;
      z-index: 999;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.3);
      width: 90%;
      max-width: 500px;
    }

    .form-popup h4 {
      margin-bottom: 20px;
    }

    .form-popup .form-control {
      margin-bottom: 15px;
    }

    .form-popup .btn-close {
      position: absolute;
      top: 10px;
      right: 15px;
    }
  </style>


<!-- Main Trip Booking Box -->
<div class="container mt-5">
  <div class="inquiry-box text-center">
    <h3>Plan Your Perfect Trip!</h3>
    <button class="btn btn-success btn-animated m-2" onclick="openBookingForm()">✈️ Book My Trip</button>
    <button class="btn btn-primary btn-animated m-2" onclick="openInquiryForm()">📩 Send Inquiry</button>
    <button class="btn btn-danger btn-animated m-2" onclick="cancelTrip()">❌ Cancel</button>
    <div id="cancelMessage" style="display:none;"></div>
  </div>
</div>

<!-- Booking Form -->
<div class="form-popup" id="bookingForm" style="display:none;">
  <button type="button" class="btn-close" onclick="closeForms()"></button>
  <h4>Trip Booking Details</h4>
  
  <input type="text" id="userName" class="form-control mb-2" placeholder="Your Name">
  <input type="email" id="userEmail" class="form-control mb-2" placeholder="Your Email">
  <input type="tel" id="userPhone" class="form-control mb-2" placeholder="Phone Number">

  <!-- Custom Vehicle Input -->
  <div class="form-group mb-2">
    <div id="selectVehicle" class="form-control text-muted" style="cursor: pointer;">Select Vehicle</div>
    <input type="text" id="vehicleInputBox" class="form-control mt-2" placeholder="Enter vehicle name" style="display: none;">
  </div>

  <input type="date" id="bookingDate" class="form-control mb-3" placeholder="Choose Date">

  <button class="btn btn-success w-100" onclick="submitBooking()">Confirm Booking</button>
</div>

<!-- Payment Options -->
<div class="form-popup" id="paymentOptions" style="display:none;">
  <button type="button" class="btn-close" onclick="closeForms()"></button>
  <h5>Select Payment Method</h5>
  <button class="btn btn-outline-dark w-100 mb-2" onclick="bookCOD()">💵 Cash On Delivery (COD)</button>
  <button class="btn btn-outline-success w-100" onclick="showUPIScanner()">📱 UPI Payment</button>
</div>

<!-- COD Message -->
<div class="form-popup" id="codMessage" style="display:none;">
  <h5>✅ Your trip has been booked successfully! 🧳✈️</h5>
</div>

<!-- UPI Scanner -->
<div class="form-popup" id="upiScanner" style="display:none;">
  <button type="button" class="btn-close" onclick="closeForms()"></button>
  <h5>Scan this QR to Pay via UPI</h5>
  <img src="images/upi.png" alt="UPI QR Code" style="width: 200px; height: 200px; margin-top: 10px;">
</div>

<!-- Inquiry Form -->
<div class="form-popup" id="inquiryForm" style="display:none;">
  <button type="button" class="btn-close" onclick="closeForms()"></button>
  <h4>Inquiry Form</h4>
  <input type="text" class="form-control mb-2" placeholder="Your Name">
  <input type="email" class="form-control mb-2" placeholder="Your Email">
  <input type="tel" class="form-control mb-2" placeholder="Phone Number">
  <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
  <button class="btn btn-primary w-100 mt-3">Submit Inquiry</button>
</div>

<!-- Cancel Trip Form -->
<div class="form-popup" id="cancelForm" style="display:none;">
  <button type="button" class="btn-close float-end" onclick="closeForms()"></button>
  <h4>Cancel Your Trip</h4>
 
  
  <input type="text" class="form-control mb-2" placeholder="Your Name" id="cancelName">
  <input type="tel" class="form-control mb-2" placeholder="Phone Number" id="cancelPhone">

  <select class="form-control mb-2" id="cancelReason" onchange="toggleOtherReason(this)">
    <option disabled selected>Select Reason</option>
    <option>Change in travel plans</option>
    <option>Found a better deal</option>
    <option>Weather concerns</option>
    <option>Health issues</option>
    <option>Personal emergency</option>
    <option>Travel companion unavailable</option>
    <option>Visa/Documentation issue</option>
    <option value="other">Other</option>
  </select>

   <!-- Shown only if "Other" is selected -->
  <input type="text" class="form-control mb-2" id="otherReasonInput" placeholder="Enter your reason" style="display:none;">

  <button class="btn btn-danger w-100" onclick="submitCancellation()">Submit Cancellation</button>
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
                
                

<!-- Final Cancel Message -->
<div id="cancelMessage" class="form-popup" style="display:none;"></div>

<script>
  function openBookingForm() {
    closeForms();
    document.getElementById("bookingForm").style.display = "block";
    document.getElementById("cancelMessage").style.display = "none";
  }

  function openInquiryForm() {
    closeForms();
    document.getElementById("inquiryForm").style.display = "block";
    document.getElementById("cancelMessage").style.display = "none";
  }

  function closeForms() {
    document.getElementById("bookingForm").style.display = "none";
    document.getElementById("inquiryForm").style.display = "none";
  }

  function cancelTrip() {
    closeForms();
    document.getElementById("cancelMessage").style.display = "block";
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
function openBookingForm() {
  closeForms();
  document.getElementById("bookingForm").style.display = "block";
}

function openInquiryForm() {
  closeForms();
  document.getElementById("inquiryForm").style.display = "block";
}

function showPaymentOptions() {
  closeForms();
  document.getElementById("paymentOptions").style.display = "block";
}

function bookCOD() {
  closeForms();
  document.getElementById("codMessage").style.display = "block";
}

function showUPIScanner() {
  closeForms();
  document.getElementById("upiScanner").style.display = "block";
}

function cancelTrip() {
  let reason = prompt("Please enter the reason for cancellation:");
  if (reason) {
    document.getElementById("cancelMessage").style.display = "block";
    document.getElementById("cancelMessage").innerHTML = `❌ Your trip has been cancelled.<br>Reason: ${reason}`;
  }
}

function closeForms() {
  let forms = ["bookingForm", "inquiryForm", "paymentOptions", "codMessage", "upiScanner"];
  forms.forEach(id => {
    document.getElementById(id).style.display = "none";
  });
}

function cancelTrip() {
  closeForms();
  document.getElementById("cancelForm").style.display = "block";
}

function toggleOtherReason(selectEl) {
  const otherInput = document.getElementById("otherReasonInput");
  if (selectEl.value === "other") {
    otherInput.style.display = "block";
  } else {
    otherInput.style.display = "none";
  }
}

function submitCancellation() {
  const name = document.getElementById("cancelName").value.trim();
  const phone = document.getElementById("cancelPhone").value.trim();
  const reasonSelect = document.getElementById("cancelReason").value;
  const otherReason = document.getElementById("otherReasonInput").value.trim();

  let finalReason = reasonSelect === "other" ? otherReason : reasonSelect;

  if (!name || !phone || !finalReason) {
    alert("Please fill in all required fields.");
    return;
  }

  closeForms();
  const msgBox = document.getElementById("cancelMessage");
  msgBox.style.display = "block";
  msgBox.innerHTML = `
    <h5>❌ Your trip has been cancelled</h5>
    <p><strong>Name:</strong> ${name}</p>
    <p><strong>Phone:</strong> ${phone}</p>
    <p><strong>Reason:</strong> ${finalReason}</p>
  `;
}

function closeForms() {
  const forms = [
    "bookingForm",
    "inquiryForm",
    "paymentOptions",
    "codMessage",
    "upiScanner",
    "cancelForm", // <- include this
    "cancelMessage"
  ];
  forms.forEach(id => {
    const el = document.getElementById(id);
    if (el) el.style.display = "none";
  });
}
</script>
</body>
</html>
