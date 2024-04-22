<?php
session_start(); // Start the session

// Redirect if not logged in
if (!isset($_SESSION['user_email'])) {
    header('Location: login.php'); // Adjust if necessary to point to your login page
    exit();
}

include('database.php'); // Database connection file

// Retrieve user's email from session
$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnityServe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@700&family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
    
    <nav>
        <div class="container nav_container">
            <a href="index2.php"><h4>UNITYSERVE</h4></a>
            <ul class="nav_menu">
                <li><a href="index2.php">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                
                <li><a href="contact.html">FEEDBACK</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

    

    <section class="contact">
        <div class="container contact_container"> 
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="./images/contact.svg">
                </div>
                <h2>Feedback</h2>
                <p>Asperiores veniam vel doloribus assumenda soluta blanditiis dolores qui voluptates, consequatur vitae.
                </p>
                <ul class="contact_details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+91 9876543210</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>suppor@unityServe.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>KJSCE</h5>
                    </li>
                </ul>
                <ul class="contact_socials">
                    <li> 
                        <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a> 
                    </li>
                    <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a> 
                    </li>
                    <li> 
                        <a href="https://twitter.com"><i class="uil uil-twitter"></i></a> </li>
                    <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a> </li>
                </ul>
            </aside>


            <form class="contact_form" method="post" action="feedback.php">
                <div class="form_name">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Your Email Address" required>
                
                <textarea name="message" rows="7" placeholder="Comments if any" required></textarea> 
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>







    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>UNITYSERVE</h4></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ipsum nobis ratione.
                </p>
            </div>
            <div class="footer_2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                   
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer_3">
                <h4>Primacy</h4>
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <p>+01 234 567 8910</p>
                    <p>unityServe@gmail.com</p>
                </div>
                <ul class="footer_socials">
                    <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </div>
               
        </div>
        <div class="footer_copyright">
            <small>&copy; 2023 All rights reserved by Jiya Trivedi</small>
        </div>
    </footer>



    
    <script src="./main.js"></script>
    
</body>
</html>
