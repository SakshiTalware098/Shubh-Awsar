<?php
require('db.php');
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ShubhAwsar-CustomFood</title>
    <link rel="stylesheet" href="customfood.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="footerstyle.css">
    </footer>
  </head>
  <body>

    <header class="header">
        <div class="container">
            <!--<img src="images/designNdecor.jpg" alt="Snow" style="height: 600px; width: 1340px;">-->
            <div class="top-left"><a href="home.php">Shubh Awsar</a></div>
            <div class="top-right">Making you love to eat!</div>
        </div>
    </header>


    <div class="image-grid">
        <img class="image-grid-col-2 image-grid-row-2" src="images/food/soup.jpg" alt="red">
        <img src="images/food/samosa.jpg" alt="purple">
        <img class="image-grid-col-2 image-grid-row-2" src="images/food/pastry.jpg" alt="bw">
		    <img src="images/food/pavbhaji.jpg" alt="purple">
        <img src="images/food/gulabamun.jpg" alt="purple">
		    <img class="image-grid-col-2 image-grid-row-2" src="images/food/Seviyan Kheer (Vermicelli Kheer).jpg" alt="purple">
        <img src="images/food/Biryani.jpg" alt="purple">
		    <img src="images/food/Instant Pot Potato Curry (Aloo Rasedar).jpg" alt="purple">
        <img class="image-grid-col-2 image-grid-row-2" src="images/food/20 Indian Thali Ideas.jpg" alt="red">
        <img src="images/food/Kadhi Pakora With Zeera Rice Recipe By SooperChef.jpg" alt="purple">
		<img src="images/food/Spiceindiaonline — A recipe for passion is always simmering !.jpg" alt="purple">
    </div>

    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Shubh<span> Awsar</span></h3>

            <p class="footer-links">
                <a href="home.php">Home</a>
                |
                <a href="home.php">About</a>
                |
                <a href="contact.html">Contact</a>
                |
                <a href="#service">OurService</a>
               <!-- |
                <a href="#">Blog</a>-->
            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>ShubhAwsar</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>India</span>
                    Maharashtra</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 820xxxxx50</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:mayurisangale27@gmail.com">mayurisangale27@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Shubh Awsar</strong> is an event management company is a professional service that specializes in planning, organizing, and executing various events on behalf of its clients.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <!--<a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>-->
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

  </body>
</html>