<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font awesome -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >

    <!-- custom CSS file -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
   
<!-- header start -->   
<section class = "header">
    <a href="home.php" class ="logo">OneHat</a>

    <nav class ="navbar">
        <a href="home.php">Home</a>
        <a href="services.php">services</a>
        <a href="register.php">Register</a>
        <a href="about.php">About</a>
</section>

<div id="menu-btn" class="fas fa-bars"></div>

<!-- header end -->

<div class="heading" style="background:url(Images/register.jpg)no-repeat">
    <h1>Register Here</h1>
</div>

<!-- Registering section starts -->

<section class="registering">

    <h1 class="heading-title">Register here as member!</h1>
   
    
    <form action="register_form.php" method="post" class="register-form">
        <div class="flex">

            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>job role :</span>
                <input type="text" placeholder="enter your jobrole" name="jobrole">
            </div>

            <div class="inputBox">
                 <span>Sex:</span>
                 <select name="sex" required>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                 </select>
            </div>

            <div class="inputBox">
                <span>birthday :</span>
                <input type="date" name="birthday">
            </div>

            <div class="inputBox">
                 <span>Services:</span>
                 <select name="services" required>
                      <option value="Telemedicine">Telemedicine</option>
                      <option value="Health information">Health information</option>
                      <option value="Symptom checker">Symptom checker</option>
                      <option value="Medical records">Medical records</option>
                      <option value="Clinical trials">Clinical trials</option>
                      <option value="Medical device integrationn">Medical device integration</option>
                      <option value="Health coaching">Health coaching</option>
                      <option value="Reports">Reports</option>
                      <option value="Other">Other</option>
                 </select>
            </div>


        <input type="submit" value="submit" class="btn" name="send">

    </form>

</section>


<!-- Registering section ends -->





<!-- footer start -->

<section class = "footer">
  <div class="box-container">
    <div class="box">
        <h3>Quick Link</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
        <a href="services.php"><i class="fas fa-angle-right"></i>services</a>
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
        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
    </div>

</div>
     <div class="credit">© <span>OneHat</span>|All rights reserved</div>   
</section>

<!-- swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file -->
<script src="Script/script.js"></script>


</body>
</html>