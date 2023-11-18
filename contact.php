<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <script>
        function handleSubmit(event) {
            event.preventDefault(); // Prevents the form from submitting normally
            
            // Here, you can perform actions like sending the data to the server
            
            // For demonstration purposes, show an alert that the details are submitted
            alert("Your details have been submitted!");
            
            // Clear form inputs after submission
            document.getElementById("contactForm").reset();
        }
    </script>
</head>
<body>
    <h1>Contact Us</h1>
    <form id="contactForm" action="/submit_contact_form" method="POST" onsubmit="handleSubmit(event)">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
       
        
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        
        <label for="message">Message/Enquiry:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
