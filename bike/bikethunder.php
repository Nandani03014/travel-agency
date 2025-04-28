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

<!-- Cancel ride -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




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
            
<header style="background-color:rgb(112, 184, 198); color:#191213; padding: 10px;">
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
</header>



    <style>
       .container-custom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    
    
}

.info-card {
    width: 350px;
    background: #f8f8f0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-right: 200px;
}

.carousel {
    flex-grow: 1;
    max-width: 700px; /* Adjust based on design */
}
        

    </style>

<div class="container-custom d-flex align-items-center">
    <!-- Image Carousel (Left Side) -->
    <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/thunder.jpg" class="d-block w-100" alt="Bike 1" style="width: 700px; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="../images/thunder2.jpg" class="d-block w-100" alt="Bike 2" style="width: 700px; height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="../images/thunder3.jpg" class="d-block w-100" alt="Bike 3" style="width: 700px; height: 500px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Info Card (Right Side) -->
    <div class="info-card p-4">
        <h5><strong>Reserve Your Transport</strong></h5>
        <p>Reserve your beautiful travel: Dhaka-Sajek Valley transportation for a peaceful adventure.</p>
        
         <!--Button to trigger modal -->
<button type="button" class="btn btn-success w-100 mb-2" data-bs-toggle="modal" data-bs-target="#bookingModal">
    Online Booking
</button>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel">Bike Booking Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="bikeType" class="form-label">Select Bike Model</label>
            <select class="form-select" id="bikeType">
              <option value="sports">Bajaj Pulsar</option>
              <option value="cruiser">Royal Enfeild</option>
              
            </select>
          </div>
          <div class="mb-3">
            <label for="pickupDate" class="form-label">Pickup Date</label>
            <input type="date" class="form-control" id="pickupDate">
          </div>
          <div class="mb-3">
            <label for="rentalDuration" class="form-label">Rental Duration (in days)</label>
            <input type="number" class="form-control" id="rentalDuration" min="1">
          </div>
          <button type="submit" class="btn btn-success">Book Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (for Modal functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <button class="btn btn-outline-success w-100" data-bs-toggle="collapse" data-bs-target="#inquiryForm">Inquiry Form</button>

        <!-- Inquiry Form (Hidden by default) -->
        <div class="collapse mt-3" id="inquiryForm">
            <form>
                <div class="mb-2">
                    <input type="text" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="mb-2">
                    <input type="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="mb-2">
                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
            </form>
        </div>
    </div>
</div>
<style>
.cancel-btn {
    background: #d9534f; /* Red color */
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
}

.cancel-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.3);
    transition: left 0.4s ease-in-out;
}

.cancel-btn:hover::before {
    left: 100%;
}

.cancel-btn:hover {
    background: #c9302c;
    transform: scale(1.05);
}

.cancel-btn:active {
    transform: scale(0.95);
}
</style>
<h3><u> Free Cancellation <u> </h3> <br>
<button class="cancel-btn" onclick="cancelRide()">Cancel</button> <br> <br>
<h3> Included and Excluded </h3> <br>
<p style= "font-size: 20px;"> ✔️Royal Enfield Thunderbird Bike for the entire tour<br> <br>
✔️Fuel for the planned route<br> <br>
✔️Safety Gear (Helmet & Riding Gloves)<br> <br>
✔️Basic First Aid Kit<br> <br>
✔️Route Map & Tour Guide Assistance<br> <br>
✔️Mechanical Support for Minor Repairs<br> <br>
✔️Accommodation (if included in the package)<br> <br>
✔️Daily Breakfast (if included in the package)<br> <br>
❌Any Major Bike Repairs & Spare Parts<br> <br>
❌Fuel for Extra/Unplanned Routes<br> <br>
❌Personal Expenses (Food, Drinks, Shopping, etc.)<br> <br>
❌Travel Insurance & Medical Expenses<br> <br>
❌Fines, Penalties, or Traffic Violations<br> <br>
❌Entry Fees for Tourist Spots & Activities<br> <br>
❌Toll & Parking Charges<br> <br>
❌Accidental or Damage Costs to the Bike </p>


    

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div style="padding: 10px;">
                    <img src="../images/picture.jpg" alt="Image" class="img-fluid" style="height: 600px; width: 600px;">
                </div>
            </div>
            <div class="col-lg-5 ml-auto">
                <span class="sub-title">Frequently asked questions</span>
                <h2 class="font-weight-bold text-black mb-5">FAQs</h2>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                1. How can I book a tour package on your website?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Booking a tour package is easy! Simply browse through our available destinations...
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                2.  What is your cancellation and refund policy?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                "We understand that travel plans can change. Our cancellation policy varies depending on the package and service provider. Generally, cancellations made at least 7 days before departure are eligible for a partial refund, while last-minute cancellations may incur charges.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                3. Do you offer customized travel itineraries?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Yes! We offer personalized tour packages tailored to your preferences. Whether you want a romantic getaway, an adventure trip, or a family vacation, our travel experts will help you create a custom itinerary that suits your budget and interests. Simply fill out our Custom Tour Request form, and we’ll get in touch with you.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                4.  What is the best time to visit Himachal Pradesh?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            a. Summer (March to June): Ideal for sightseeing, trekking, and adventure sports. <br><br>

                            b.Monsoon (July to September): Not recommended due to landslides in hilly areas.<br><br>

                            c.Winter (October to February): Best for snowfall lovers, especially in Manali, Kufri, and Spiti Valley  
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                5.  What are the best travel options within Himachal Pradesh?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            You can explore Himachal Pradesh by: <br> <br>

                           a. Private taxis & rental cars for a comfortable trip.<br> <br>

                           b. HRTC Volvo & local buses – Affordable and well-connected to major tourist spots.<br> <br>

                           c. Toy Train (Kalka to Shimla) – A scenic heritage ride through the mountains.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                6.  Do I need any permits to visit Himachal Pradesh?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Generally, no permits are required for most destinations. However: <br> <br>

                           a. If visiting Spiti Valley, an Inner Line Permit is required for foreign nationals.<br> <br>

                           b. Rohtang Pass requires a permit for vehicles, which can be obtained online.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                                7.  What are the best local foods to try in Himachal Pradesh?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            a. Don't miss these authentic Himachali dishes:

                            b. Siddu – A stuffed wheat bun, best with ghee <br> <br>

                            c. Dham – A traditional Himachali meal served on special occasions<br> <br>

                            d. Chha Gosht – Spiced mutton curry cooked in yogurt <br> <br>

                            e.Babru – Himachali version of kachori <br> <br>

                            f. Mittha – A sweet dish made with rice and raisins
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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

    <div class="comment-container">
        <h2>Leave a comment:</h2>
        <p>Your email address will not be published.</p>

        <form>
            <label for="name">Your Name* :</label>
            <input type="text" id="name" placeholder="Jackson Mile">

            <label for="email">Your Email* :</label>
            <input type="email" id="email" placeholder="example@gmail.com">

            <label for="message">Your Message* :</label>
            <textarea id="message" placeholder="Write Something..."></textarea>

            <button type="submit" class="submit-btn">Post Comment</button>
            <div class="checkbox">
                <input type="checkbox" id="save-info">
                <label for="save-info">Save my name, email, and website in this browser for the next time I comment.</label>
            </div>
        </form>
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
      

<script>
    function cancelRide() {
        alert("😢 Your ride has been cancelled!");
    }
</script>

<script>
    function cancelRide() {
        Swal.fire({
            icon: 'warning',
            title: '😢 Your ride has been cancelled!',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d9534f'
        });
    }
</script>

<!-- Bootstrap JS (Include Popper.js for Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
function confirmBooking() {
    alert("Thank you! Your bike booking request has been received. We will contact you soon.");
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

