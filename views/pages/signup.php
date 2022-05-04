<html>
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../../lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!--Axios Library-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- login Stylesheet -->
    <link href="../../css/signup.css" rel="stylesheet">
</head>

<body>
    
<!-- Topbar Start -->
<?php
   include '../../includes/topbar.inc.php';
    ?>
 <!-- Topbar End -->

 <!-- Navbar Start -->
<?php
include '../../includes/navbar.inc.php';
#empty string because this page isn't displayed in the navbar
display_navbar("");
    ?>
 <!-- Navbar End -->
 <!-- Signup Form Start -->
 <form  action=""  method="post" id="signup-form" class="container">
      <p id="joinus-word"> Join Us Now! </p>
      <div class="form-group">
        <label for="name-signup"> <b> Enter Your Name: </b> </label>
        <br>
        <input type="text" class="form-control input-fields" id="name-signup"  name="name" placeholder="Name" required>

        <p id="name-error-p" class="signup-error-message"></p>
      </div>
      <div class="form-group">
        <p> <b> Select Your Gender: </b> </p>
        <label for="male-radio">Male </label>
        <input type="radio" class="form-check-input" value="male"  name="gender" id="male-radio" required>

        <label for="female-radio"  class="form-check-label">Female </label>
        <input type="radio" class="form-check-input" value="female"  name="gender" id="female-radio">
        
        <p id="gender-error-p" class="signup-error-message"></p>
      </div>
      
      <div class="form-group">
        <label for="-login"> <b> Enter Your BirthDate: </b> </label>
        <br>
        <input type="date" id="datefield" name="date" max="2007-01-01" required>
        <p id="dateErrorP" class="error-message"></p>
      </div>

      <div class="form-group">
          <label for="phonenumber-signup"> <b> Enter Your Phone Number: </b> </label>
          <input type="tel" class="form-control input-fields" id="phonenumber-signup"  name="phonenumber" placeholder="Type Your Number" required>

          <p id="phonenumber-error-p" class="signup-error-message"></p>
        </div>

      <div class="form-group">
        <label for="email-signup"> <b> Enter Your Email: </b> </label>
        <br>
        <input type="email" class="form-control input-fields" id="email-signup"  name="email" placeholder="Email" required>

        <p id="email-error-p" class="signup-error-message"></p>
      </div>

        <div class="form-group">
          <label for="password-signup"> <b> Enter Your Password: </b> </label>
          <input type="password" class="form-control input-fields" id="password-signup"  name="password" placeholder="Password" required>
          <p id="password-error-p" class="signup-error-message"></p>
        </div>

        <input type="submit" class="btn btn-primary" value="Sign Up">

        <p id="general-error-p" class="signup-error-message"></p>

    </form>

 <!-- Signup Form End -->

 <!-- Footer Start -->
 <?php include '../../includes/footer.inc.php' ?>
 <!-- Footer End -->

<!-- Sign Up Javascript -->
<script src="../../js/signupajax.js"></script>
<script src="../../js/signupvalidation.js"></script>
<script src="../../js/sendsmsajax.js"></script>
<body>




</html>