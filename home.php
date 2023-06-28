<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneHat</title>



    <!-- font awesome -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >

    <!-- custom CSS file -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
   
<section class="header">
    <a href="home.php" class="logo">OneHat</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>
        <a href="register.php">Register</a>
        <a href="about.php">About</a>
    </nav> <!-- Add closing </nav> tag here -->
</section>




<!-- Home Section Starts -->
<section class="home">
    <div class="swiper-container slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide" style="background:url(Images/home_1.jpeg) no-repeat">
                <div class="content">
                    <span>accessibility, empowerment, Globalization</span>
                    <h3>all in one hat</h3>
                    <a href="services.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section Ends -->






<!-- solutions Start -->

<section class="solutions">

    <h1 class="heading-title">Solutions</h1>

    <div class="box-container">
        <div class="box">
            <img src="Images/icon1.jpg" alt="">
            <h3>Registration</h3>
        </div>

        <div class="box">
            <img src="Images/icon2.jpeg" alt="">
            <h3>Connection</h3>
        </div>

        <div class="box">
            <img src="Images/icon3.webp" alt="">
            <h3>Symptom checking</h3>
        </div>

        <div class="box">
            <img src="Images/icon4.png" alt="">
            <h3>Health coaching</h3>
        </div>

        <div class="box">
            <img src="Images/icon5.webp" alt="">
            <h3>Clinical trials</h3>
        </div>

        <div class="box">
            <img src="Images/icon6.jpg" alt="">
            <h3>Reports</h3>
        </div>
    </div>
</section>


<!-- solutions End -->

<!-- home about section starts -->

<section class="home-about">

   <div class="image">
    <img src="Images/logo.jpg" alt="" class="src">
   </div> 

   <div class="content">
    <h3>about us</h3>
    <p>At OneHat, we connect individuals worldwide through an integrated platform, leveraging new IT technologies. 
        Our mission is to improve healthcare access and empower users from diverse backgrounds. 
        By offering a comprehensive range of services, we bring together 
        the general public, medical professionals and experts on a single platform, making healthcare more accessible and convenient.
        Our innovative approach combines telemedicine, advanced information systems and cutting-edge technologies. 
        Through our all-in-one solution, users can access teleconsultations, health information, medical reports and even participate in clinical trials. 
        Join us as we revolutionize healthcare and create a positive impact globally.</p><a href="about.php" class="btn">read more</a>
   </div>

</section>
<!-- home about section ends -->


<!-- home services section starts -->

<section class="home-services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="Images/telemedicine.jpg" alt="" class="src">
            </div>
            <div class="content">
                <h3>telemedicine</h3>
                <p>Telemedicine enables remote access to healthcare professionals, 
                    providing consultations, diagnoses, and treatment, 
                    overcoming barriers to traditional healthcare access.</p>
                <a href="register.php" class="btn">Register Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="Images/healthCoaching.jpg" alt="" class="src">
            </div>
            <div class="content">
                <h3>health coaching</h3>
                <p>Providing access to health coaches or wellness professionals 
                can help users set and achieve health-related goals. 
                They can receive personalized guidance on 
                exercise, nutrition, stress management and other areas of wellness.</p>
                <a href="register.php" class="btn">Register Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="Images/medicalrec.jpeg" alt="" class="src">
            </div>
            <div class="content">
                <h3>medical records</h3>
                <p>Secure medical record access empowers users to take 
                    control of their healthcare by reviewing records, tracking progress
                     and communicating with providers.</p>
                <a href="register.php" class="btn">Register Now</a>
            </div>
        </div>

    </div>
    <div class="load-more">
        <a href="services.php" class="btn">load more</a>
    </div>
</section>

<!-- home services section ends -->

<!-- footer start -->

<section class = "footer">
  <div class="box-container">
    <div class="box">
        <h3>Quick Link</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="services.php"><i class="fas fa-angle-right"></i>Services</a>
        <a href="register.php"><i class="fas fa-angle-right"></i>Register</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
    </div>
  

    <div class="box">
        <h3>Others</h3>
        <a href="#"><i class="fas fa-angle-right"></i>FAQ</a>
        <a href="#"><i class="fas fa-angle-right"></i>Support</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms and conditions</a>
    </div>

    <div class="box">
        <h3>Contact Info</h3>
        <a href="#"><i class="fas fa-phone"></i> +9476 9213 153</a>
        <a href="#"><i class="fas fa-fax"></i> +94 (777) 123-4567</a>
        <a href="#"><i class="fas fa-envelope"></i> onehat@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> Kalutara, Sri Lanka</a>
    </div>

    <div class="box">
        <h3>Follow Us</h3>
        <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
    </div>

</div>
    <div class="credit">© <span>OneHat</span>|All rights reserved</div>   
</section>



<!-- footer ends -->


<!--swiper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file -->
<script src="Script/script.js"></script>


</body>
</html>