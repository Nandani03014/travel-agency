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
            <a href="../index.php">
                <img src="./images/logo1.png" width="150" height="150" alt="logo" class="img">
            </a>
            
        </div>
<nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                
                 <li class="nav-item"><a class="nav-link active" href="trip.php">Trip Packages and Pricing</a></li>
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
.card:hover {
  background-color: #87CEEB; /* Sky Blue */
  color: white;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.card:hover .card-title,
.card:hover .card-text {
  color: white;
}
</style>
<div class="container mt-4">
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Himachal</h5>
          <p class="card-text">
15% off<br>
shimla<br>
Shimla, Kinnour and Spiti full package of 10 night 11 days<br>
₹27,999<br>
₹24,999<br>
08 Nights/09 Days<br>
Availability : 15th July to 15th Dec, 5th Jan to 15th April.<br>
Enjoy the trip of heaven Himachal in which you explore Shimla, Manali, Kinnaur<br>
10% Off</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Delhi – Manali- Delhi Volvo Package- 02 Nights / 03 Days</h5>
          <p class="card-text">
₹7,500 <br>
₹6,500<br>
3 Days<br>
Availability : Jan 16’ - Dec 16’<br>
Manali Volvo tour from Delhi is a 2 nights 3 days tour<br>
10% off.</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
   <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">South India Holiday Delight Pro</h5>
          <p class="card-text">
5N/6D <br>
2N Coorg<br>
2N Ooty<br>
1N Mysore<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
8 Activities<br>
Selected Meals<br>
Highlight IconComplimentary Coffee Plantation Tour<br>
Highlight IconComplimentary Inclusions<br>
Highlight IconComplimentary Traditional South Indian Meal<br>
Includes extra ₹3,550 discount for packages with flights<br>
₹43,262 /Person<br>

Total Price ₹86,524</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Dharamshala</h5>
          <p class="card-text">
Dharamshala Dalhousi Tous Package 04 Night/ 05 days.<br>
₹13,500<br>
₹11,500<br>
5 Days<br>
Availability : Jan 16’ - Dec 16’<br>
Book 5 days 4 nights Dalhousie Dharamshala Customized Holidays Tour package for a memorable<br>
10% off.</p>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Shimla</h5>
          <p class="card-text">Shimla Package 3 night 4 days<br>
₹10,000<br>
₹7,600<br>
5 Days<br>
Availability : Jan 16’ - Dec 16’<br>
Book 3 night 4 days Package of Shimla and enjoy the view of hills.<br>
10% off</p>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Shimla Manali</h5>
          <p class="card-text">SHIMLA & MANALI FOR 5 NIGHTS 6 DAYS<br>
₹14,000<br>
₹13,000<br>
6 Days<br>
Availability : Jan 16’ - Dec 16’<br>
5 nights and 6 days Package of Shimla Manali. A budget trip to Himachal.<br>
10% off.</p>
        </div>
      </div>
    </div>
     <!-- Card 7 -->
     <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Shimla, Dharamshala and dalhousie</h5>
          <p class="card-text">
A full tour of Shimla, Dharamshala and dalhousie 4 night 5 days by volvo<br>
₹12,999<br>
₹10,999<br>
5 Days<br>
Availability : Jan 16’ - Dec 16’<br>
Book 5 days 4 nights Shimla Dalhousie Dharamshala Customized Holidays Tour package</p>
        </div>
      </div>
    </div>
     <!-- Card 8 -->
     <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Himachal Pradesh</h5>
          <p class="card-text">Breathtaking Himachal Family Tour Package of 7 night 8 days<br>
₹11,999<br>
₹9,999<br>
08 Nights/09 Days<br>
Availability : 15th July to 15th Dec, 5th Jan to 15th April.<br>
Get best offers on Himachal 8N/9D Holiday Package - Hotel, Meal and sightseeingbr>
10% off</p>
        </div>
      </div>
    </div>
     <!-- Card 9 -->
     <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Himachal With Amritsar</h5>
          <p class="card-text">Breathtaking Himachal Family Tour Package with Amristar 9 nights 10 days <br>
₹26,000<br>
₹24,000<br>
09 Nights/10 Days<br>
Availability : 15th July to 15th Dec, 5th Jan to 15th April.<br>
Get best offers on Himachal With Amritsar 9N/10D Holiday Package - Hotel and Meal <br>
10% Off</p>
        </div>
      </div>
    </div>
    <!-- Card 10 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Andaman Retreat in 5 nights</h5>
          <p class="card-text">

5N/6D<br>
1N Port Blair
2N Havelock
1N Neil Island
1N Port Blair <br>
Round Trip Flights
Intercity Car Transfers
5 Star, 4 Star, 3 Star Hotels<br>
Airport Transfers
14 Activities<br>
Selected Meals <br>
Highlight IconVisit to Radhanagar Beach, Elephant Beach, Corbyn's Cove ,
Highlight IconDeparture Gift &
Highlight IconCellular Jail Visit <br>
This price is lower than the average price in May <br>
₹59,159 /Person

Total Price ₹1,18,318</p>
        </div>
      </div>
    </div>
    <!-- Card 11 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Honeymoon Package</h5>
          <p class="card-text">Shimla
Honeymoon Special Heaven Himachal 05 Nights/06 Days<br>
₹19,999<br>
₹17,999<br>
05 Nights/06 Days<br>
Availability : 15th July to 15th Dec, 5th Jan to 15th April.<br>
Book your honeymoon special BEAUTIFUL HEAVENS HIMACHAL TOUR BY CAB FOR 05 NIGHTS 06.</p>
        </div>
      </div>
    </div>
    <!-- Card 12 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Three Nights Goa Getaway</h5>
          <p class="card-text">

3N/4D<br>
3N Goa<br>
Round Trip Flights
4 Star Hotel
Airport Transfers <br>
Selected Meals
Includes extra ₹1,734 discount for packages with flights <br>
₹21,127 /Person <br>

Total Price ₹42,254.</p>
        </div>
      </div>
    </div>
    <!-- Card 13 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Best of Himachal</h5>
          <p class="card-text">
5N/6D <br>
2N Shimla<br>
3N Manali<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Pickup & Drop<br>
5 Activities<br>
Selected Meals<br>
Highlight IconVisit to Solang Valley, Viceregal Lodge, Mall road<br>
Highlight IconSnow Kingdom and Sky Swinger Combo<br>
Highlight IconMMT Tour Manager Assistance<br>
No Cost EMI at ₹3,673/month<br>
₹23,786 /Person<br>

Total Price ₹47,572
</p>
        </div>
      </div>
    </div>
    <!-- Card 14 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Meghalaya - Shillong and Kaziranga Special</h5>
          <p class="card-text">

5N/6D<br>
2N Shillong<br>
2N Kaziranga<br>
1N Guwahati<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
4 Activities<br>
Selected Meals<br>
Highlight IconVisit to Umiam Lake, Seven Sister Falls, Mawsmai Falls,Cherrapunji<br>
Highlight IconVisit to Thankarang Park, Kynrem Falls, Kaziranga National Park<br>
Highlight IconVisit to Kamakhya Temple<br>
Includes extra ₹3,765 discount for packages with flights<br>
₹45,883 /Person<br>

Total Price ₹91,766
</p>
        </div>
      </div>
    </div>
    <!-- Card 15 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Stunning Kashmir - Book Now Pay Later</h5>
          <p class="card-text">

5N/6D<br>
1N Srinagar Houseboat<br>
1N Gulmarg<br>
2N Pahalgam<br>
1N Srinagar<br>
Intercity Car Transfers<br>
3 Star Hotels & 3 Star Houseboat<br>
Airport Pickup & Drop<br>
8 Activities<br>
Selected Meals<br>
Highlight IconPhotoshoot in Kashmiri Dress on Shikara<br>
Highlight IconGulmarg Gondola<br>
Highlight IconVisit to Shankaracharya Temple, Avantipura Ruins, Cheshma Shahi<br>
No Cost EMI at ₹4,721/month<br>
₹28,829 /Person<br>

Total Price ₹57,658

</p> 
</div>
</div>
</div>
<!-- Card 16 -->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Himachal Retreat - Book Now Pay Later</h5>
          <p class="card-text">
5N/6D<br>
2N Shimla<br>
3N Manali<br>
Intercity Car Transfers<br>
3 Star Hotel & 3 Star Homestay<br>
Airport Pickup & Drop<br>
4 Activities<br>
Selected Meals<br>
Highlight IconVisit to Solang Valley, Viceregal Lodge, Mall road<br>
Highlight IconTour Manager Assistance<br>
Highlight IconVisit to Scandal Point, Townhall, Shimla Church<br>
No Cost EMI at ₹3,356/month<br>
₹21,732 /Person<br>

Total Price ₹43,464


</p> 
</div>
</div>
</div>
<!-- Card 17 -->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Stunning Kashmir - Book Now Pay Later</h5>
          <p class="card-text">

5N/6D<br>
1N Srinagar Houseboat<br>
1N Gulmarg<br>
2N Pahalgam<br>
1N Srinagar<br>
Intercity Car Transfers<br>
3 Star Hotels & 3 Star Houseboat<br>
Airport Pickup & Drop<br>
8 Activities<br>
Selected Meals<br>
Highlight IconPhotoshoot in Kashmiri Dress on Shikara<br>
Highlight IconGulmarg Gondola<br>
Highlight IconVisit to Shankaracharya Temple, Avantipura Ruins, Cheshma Shahi<br>
No Cost EMI at ₹4,721/month<br>
₹28,829 /Person<br>

Total Price ₹57,658

</p> 
</div>
</div>
</div>
<!-- Card 18 -->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Best of Ladakh Package</h5>
          <p class="card-text">
5N/6D<br>
2N Leh<br>
1N Nubra Valley<br>
1N Pangong<br>
1N Leh<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
Cottages & 3 Star Camp<br>
Airport Transfers<br>
7 Activities<br>
Selected Meals<br>
Highlight IconPicnic in Leh<br>
Highlight IconVisit to Shanti Stupa, Hall of Fame, Magnetic Hill<br>
Highlight IconInner Line Permit<br>
Book this now by paying only ₹16,676<br>
₹57,633 /Person<br>

Total Price ₹1,15,266

</p>  
</div>
</div>
</div>                                                               
<!-- Card 19 -->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Gangtok, Pelling & Darjeeling Holiday</h5>
          <p class="card-text">
          6N/7D <br>
2N Gangtok<br>
2N Pelling<br>
2N Darjeeling<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
8 Activities<br>
Selected Meals<br>
Highlight IconVisit to Baba Mandir, Khecheopalri Lake, Changu Lake<br>
Highlight IconToy Train Ride in Darjeeling<br>
Highlight IconTea Tasting Session at Local Tea lounge<br>
Includes extra ₹5,189 discount for packages with flights<br>
₹63,227 /Person<br>

Total Price ₹1,26,454

</p>   
        </div>
      </div>
    </div>
   <!-- Card 20 -->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">South India Holiday Delight Pro</h5>
          <p class="card-text">
          5N/6D<br>
2N Coorg<br>
2N Ooty<br>
1N Mysore<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
8 Activities<br>
Selected Meals<br>
Highlight IconComplimentary Coffee Plantation Tour<br>
Highlight IconComplimentary Inclusions<br>
Highlight IconComplimentary Traditional South Indian Meal<br>
Includes extra ₹3,550 discount for packages with flights<br>
₹43,262 /Person<br>

Total Price ₹86,524
</p>   
        </div>
      </div>
    </div>
      <!-- Card 21-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title"> North East Grandeur - Gangtok and Darjeeling</h5>
          <p class="card-text">
          4N/5D <br>
2N Gangtok<br>
2N Darjeeling<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
7 Activities<br>
Selected Meals<br>
Highlight IconToy Train Ride in Darjeeling<br>
Highlight IconTea Tasting Session at Local Tea lounge<br>
Highlight IconTour Manager<br>
Includes extra ₹4,141 discount for packages with flights<br>
₹50,456 /Person<br>

Total Price ₹1,00,912

</p>   
        </div>
      </div>
    </div>
     <!-- Card 22-->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title"> North East Grandeur - Gangtok and Darjeeling</h5>
          <p class="card-text">
          4N/5D <br>
2N Gangtok<br>
2N Darjeeling<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
7 Activities<br>
Selected Meals<br>
Highlight IconToy Train Ride in Darjeeling<br>
Highlight IconTea Tasting Session at Local Tea lounge<br>
Highlight IconTour Manager<br>
Includes extra ₹4,141 discount for packages with flights<br>
₹50,456 /Person<br>

Total Price ₹1,00,912

</p>   
        </div>
      </div>
    </div>
     <!-- Card 23-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">4N - Most Wanted Kerala Package</h5>
          <p class="card-text">

4N/5D <br>
2N Munnar <br>
1N Thekkady<br>
1N Alleppey<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels & Houseboat<br>
Airport Transfers <br>
6 Activities<br>
Selected Meals<br>
Highlight IconSpice Plantation Tour<br>
Highlight IconVisit to Alappuzha Beach, Periyar Lake, Eravikulam national park<br>
Highlight IconVisit to Tata Tea Museum, Valara Waterfalls, Mattupetty Dam<br>
Includes extra ₹3,653 discount for packages with flights<br>
₹44,513 /Person<br>

Total Price ₹89,026</p>
        </div>
      </div>
    </div>
       <!-- Card 24-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Gangtok, Pelling & Darjeeling Holiday</h5>
          <p class="card-text">
6N/7D <br>
2N Gangtok<br>
2N Pelling<br>
2N Darjeeling<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
8 Activities<br>
Selected Meals<br>
Highlight IconVisit to Baba Mandir, Khecheopalri Lake, Changu Lake<br>
Highlight IconToy Train Ride in Darjeeling<br>
Highlight IconTea Tasting Session at Local Tea lounge<br>
Includes extra ₹5,189 discount for packages with flights<br>
₹63,227 /Person<br>

Total Price ₹1,26,454
</p>
        </div>
      </div>
    </div>
   <!-- Card 25-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Most Wanted Goa Package</h5>
          <p class="card-text">


4N/5D <br>
4N Goa<br>
Round Trip Flights<br>
3 Star Hotel<br>
Airport Transfers<br>
Selected Meals<br>
Includes extra ₹1,801 discount for packages with flights<br>
₹21,950 /Person<br>

Total Price ₹43,900

</p>
        </div>
      </div>
    </div>
  
   <!-- Card 26-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Dazzling South Honeymoon</h5>
          <p class="card-text">

5N/6D<br>
2N Coorg<br>
2N Ooty<br>
1N Mysore<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
3 Star Hotels<br>
Airport Transfers<br>
7 Activities<br>
Selected Meals<br>
Highlight IconComplimentary Coffee Plantation Tour,
Highlight IconZip lining<br>
Highlight IconVisit to Dubare Elephant Camp, Abbi Falls, Omkareshwara Temple<br>
Includes extra ₹3,819 discount for packages with flights<br>
₹46,529 /Person<br>

Total Price ₹93,058

</p>
        </div>
      </div>
    </div>
     <!-- Card 27-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Magical Udaipur - Book Now Pay Later</h5>
          <p class="card-text">


3N/4D<br>
3N Udaipur<br>
3 Star Hotel<br>
Airport Pickup & Drop<br>
2 Activities<br>
Selected Meals<br>
Highlight IconVisit to Fateh Sagar Lake, Sajjangarh Palace, City Palace Udaipur<br>
Highlight IconVisit to Saheliyon ki Bari, Maharana Pratap Smarak, Museum of Folks Art<br>
Highlight IconVisit to Vintage Car Museum, Crystal Gallery<br>
This price is lower than the average price in May<br>
₹13,065 /Person<br>

Total Price ₹26,130


</p>
        </div>
      </div>
    </div>
     <!-- Card 28-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Andaman Hero Product with Complimentary Activities</h5>
          <p class="card-text">
5N/6D<br>
1N Port Blair<br>
2N Havelock<br>
1N Neil Island<br>
1N Port Blair<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
5 Star, 4 Star, 3 Star Hotels<br>
Airport Transfers<br>
14 Activities<br>
Selected Meals<br>
Highlight IconComplimentary Sunset Cocktail<br>
Highlight IconComplimentary Upgrade to Higher Vehicle<br>
Highlight IconComplimentary Snack<br>
Price is likely to increase for this date
₹59,447 /Person<br>

Total Price ₹1,18,894

</p>
        </div>
      </div>
    </div>
     <!-- Card 29-->
<div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">Luxury of Ayodhya and Varanasi</h5>
          <p class="card-text">
3N/4D<br>
2N Varanasi<br>
1N Ayodhya<br>
Round Trip Flights<br>
Intercity Car Transfers<br>
5 Star, 4 Star Hotels<br>
Airport Transfers<br>
4 Activities<br>
Selected Meals<br>
Highlight IconVIP Darshan at Kashi Vishwanath<br>
Highlight IconSunset Ganga Aarti by Boat<br>
Highlight IconVisit to Annapurna Temple, Vishvanath Temple, Sankat Mochan Temple<br>
Includes extra ₹2,453 discount for packages with flights<br>
₹29,890 /Person<br>

Total Price ₹59,780

</p>
        </div>
      </div>
    </div>
  </div>
</div>                               
<script>
  // Select all cards
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    card.addEventListener('click', function () {
      // Remove 'clicked' class from all cards
      cards.forEach(c => c.classList.remove('clicked'));

      // Add 'clicked' class to the selected card
      this.classList.add('clicked');
    });
  });
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>