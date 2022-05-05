<html>
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
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
    <link href="../../css/editprofile.css" rel="stylesheet">
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
 <form  action=""  method="post" id="edit-form" class="container">
      <p id="edit-word"> Edit Your Profile </p>
      <div class="form-group">
        <label for="name-edit"> <b> Edit Your Name: </b> </label>
        <br>
        <?php $name=(isset($_SESSION["user_name"]))?$_SESSION["user_name"]:$_COOKIE["user_name"]; 
       echo' <input type="text" class="form-control input-fields" id="name-edit"  name="name" value='.$name.' required>';
        ?>
        <p id="name-error-p" class="edit-error-message"></p>
      </div>
      
      <div class="form-group">
          <label for="phonenumber-edit"> <b> Edit Your Phone Number: </b> </label>

          <?php 
          include '../../models/editusermodel.class.php';
          $email=(isset($_SESSION["user_email"]))?$_SESSION["user_email"]:$_COOKIE["user_email"]; 
          $editModel=new EditUserModel();
          $number=$editModel->getUserNumber($email);
         echo' <input type="tel" class="form-control input-fields" id="phonenumber-edit"  name="phonenumber" value='.$number.'  required>';
          ?>

          <p id="phonenumber-error-p" class="edit-error-message"></p>
        </div>

      <div class="form-group">
        <label for="email-edit"> <b> Edit Your Email: </b> </label>
        <br>
        <input type="email" class="form-control input-fields" id="email-edit"  name="email" value=<?php echo $email ?> required>

        <p id="email-error-p" class="edit-error-message"></p>
      </div>
        <input type="submit" class="btn btn-primary" value="Edit Profile">

        <p id="general-error-p" class="edit-error-message"></p>

    </form>

 <!-- Signup Form End -->

 <!-- Footer Start -->
 <?php include '../../includes/footer.inc.php' ?>
 <!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/wow/wow.min.js"></script>
<script src="../../lib/easing/easing.min.js"></script>
<script src="../../lib/waypoints/waypoints.min.js"></script>
<script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../lib/tempusdominus/js/moment.min.js"></script>
<script src="../../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../lib/twentytwenty/jquery.event.move.js"></script>
<script src="../../lib/twentytwenty/jquery.twentytwenty.js"></script>

<!-- Template Javascript -->
<script src="../../js/main.js"></script>

<!-- Edit Profile Javascript -->

<body>




</html>