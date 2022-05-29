 <!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Dashboard</title>
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
    <!-- Page Stylesheet -->
    <link href="../../css/dashboard.css" rel="stylesheet">
</head>

<body>
      <!-- Spinner Start -->
      <?php
   include '../../includes/spinner.inc.php';
    ?>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <?php
   include '../../includes/topbar.inc.php';
    ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php
   include '../../includes/navbar.inc.php';
   display_navbar("");
    ?>
    <!-- Navbar End -->

 <!-- DASHBOARD START -->
 <!-- A vertical navbar start -->
 <div class="bg-light" id="dashboard-column">
   <h2>Actions:</h2>
  <ul id="dashboard-list">
  <li><a href="#" class="btn btn-primary dashboard-button">Add Appointment</a></li>
    <li><a href="#" class="btn btn-primary dashboard-button">Add Secretary</a></li>
    <li><a href="#news" class="btn btn-primary dashboard-button">Delete Secretary</a></li>

  </ul>
</div>

 <!-- A vertical navbar end -->
  <h1 id="appointments-p">Scheduled Appointments</h1>

  <!-- Scheduled Appointments Table Start -->
 <table class="table" id="appointments-table">
  <thead>
    <tr class="table-primary">
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Phonenumber</th>
      <th scope="col">Patient Age</th>
      <th scope="col">Patient Gender</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>name</td>
      <td>number</td>
      <td>age</td>
      <td>gender</td>
      <td>YYYY-MM-DD hh:mm:ss</td>
      <td>YYYY-MM-DD hh:mm:ss</td>
      <td>
      <button id="delete-button"><i class="fa-solid fa-trash"></i></button>
      </td>
    </tr>
    
  </tbody>
</table>
<!-- Scheduled Appointments Table End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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
</body>
</html>



<?php



?>