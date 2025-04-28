<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script>
        function sendEmail() {
            emailjs.init("LtPREcch-0U02LtGN");

            emailjs.send("service_igbc3b8", "template_gsify4d", {
                from_name: document.getElementById("name").value,
                from_email: document.getElementById("email").value,
                message: document.getElementById("message").value
            }).then(
                function(response) {
                    alert("Email sent successfully!");
                },
                function(error) {
                    alert("Failed to send email. Error: " + JSON.stringify(error));
                }
            );
        }
    </script>
</head>
<body>
    <h1>Contact Us</h1>
    <form onsubmit="event.preventDefault(); sendEmail();">
        <input type="text" id="name" placeholder="Your Name" required><br><br>
        <input type="email" id="email" placeholder="Your Email" required><br><br>
        <textarea id="message" placeholder="Your Message" required></textarea><br><br>
        <button type="submit">Send</button>
    </form>
</body>
</html>