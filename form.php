<?php
include(" config.php ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section class="contact" id="contact">
    <div class="contact-wrapper">
        <div class="contact-content">
            <div class="contact-us">
                <h4>Contact Us</h4>
                <p>We're open for any suggestion or just to have a chat</p>
            </div>
            <form action="config.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" name="firstname" id="fname" class="no-outline" placeholder="Your Name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" class="no-outline" placeholder="Your Last Name..">
                <label for="email">Email Address</label>
                <input type="text" name="email">
                <label for="message">Message</label>
                <textarea name="message" id="subject" placeholder="Write Your Message" style="height:145px"></textarea>
                <input type="submit" value="submit">


            </form>
        </div>
        <div class="contact-img">
        </div>
    </div>
 </section>
</body>
</html>