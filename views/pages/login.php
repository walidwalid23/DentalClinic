<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- login Stylesheet -->
    <link href="../../css/login.css" rel="stylesheet">
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
 #empty string because it's a button not a link to get highlighted when visited
display_navbar("");
    ?>
 <!-- Navbar End -->
 <!-- Login Form Start -->
 <form action=""  method="post" id="login-form" class="container" >
      <div class="form-group">
        <label for="email-login"> <b> Enter Your Email: </b> </label>
        <br>
        <input type="email" class="form-control input-fields" id="email-login"  name="email" placeholder="Email" required>
        <p id="email-error-p" class="login-error-message"></p>
      </div>


        <div class="form-group">
          <label for="passwordlogin"> <b> Enter Your Password: </b> </label>
          <br>
          <input type="password" class="form-control input-fields" id="password-login"  name="password" placeholder="Password" required>
          <p id="password-error-p" class="login-error-message"></p>
        </div>

        <div class="form-check">
           <input type="checkbox" class="form-check-input" id="remember-box" name="rememberbox">
           <label for="remember-box"  class="form-check-label"><b>Remember me</b></label>
        </div>
        <p id="general-error-p" class="login-error-message"></p>

        <input type="submit" class="btn btn-primary" value="Login">
        <br>
        <span id="noaccount-text"> Don't Have An Account? </span>
        <a href="signup.php" id="signup-button" class="btn btn-primary">Sign Up!</a>

    </form>

 <!-- Login Form End -->

 <!-- Footer Start -->
 <?php include '../../includes/footer.inc.php' ?>
 <!-- Footer End -->

 <!-- Login Validation Javascript -->
<script src="../../js/loginajax.js"></script>
<script src="../../js/loginvalidation.js"></script>
<body>




</html>