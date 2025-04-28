<?php
// Read JSON input
$data = json_decode(file_get_contents("php://input"));

// Set values
$name = $data->name;
$email = $data->email;
$phone = $data->phone;
$vehicle = $data->vehicle;
$date = $data->date;

// Admin email
$to = "tripheavenindia@hotmail.com"; // Replace with your admin email
$subject = "New Trip Booking Request";
$message = "
New Booking Details:

Name: $name
Email: $email
Phone: $phone
Vehicle: $vehicle
Date: $date
";

$headers = "From: noreply@yourdomain.com"; // Optional: change sender

// Send email
if (mail($to, $subject, $message, $headers)) {
  echo "Email sent";
} else {
  echo "Failed to send email";
}
?>
