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
<h4 style="margin-left: 20px;"> Included and Excluded </h4> <br>
<p style="font-size: 20px; margin-left: 20px;">✔️ Choice Of Transport (Bike, Car, Or Tempo Traveller)<br><br>
✔️ Fuel For The Planned Route<br><br>
✔️ Experienced Driver/Rider Assistance (If Required)<br><br>
✔️ Safety Gear (Helmet & Riding Gloves For Bike Tours)<br><br>
✔️ Basic First Aid Kit<br><br>
✔️ Route Map & Tour Guide Assistance<br><br>
✔️ Accommodation (If Included)<br><br>
✔️ Daily Breakfast (If Included)<br><br>

❌ Any Major Vehicle Repairs & Spare Parts<br><br>
❌ Fuel For Extra/Unplanned Routes<br><br>
❌ Personal Expenses (Food, Drinks, Shopping, Etc.)<br><br>
❌ Travel Insurance & Medical Expenses<br><br>
❌ Fines, Penalties, Or Traffic Violations<br><br>
❌ Entry Fees For Temples & Tourist Attractions<br><br>
❌ Toll & Parking Charges<br><br>
❌ Accidental Or Damage Costs To The Vehicle<br><br> </p>
<h4 style="margin-left: 20px;">Highlights of the Tour</h4> <br>
<p style="font-size: 20px; margin-left: 20px;">Visit the historic Kangra Fort<br><br>
Scenic Drive through Kangra Valley<br><br>
Explore ancient temples & museums inside the fort<br><br>
Learn about the fort’s rich history & battles<br><br>
Optional: Visit Masroor Rock Cut Temples & Kangra Art Museum</p> <br><br>
  
 
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
