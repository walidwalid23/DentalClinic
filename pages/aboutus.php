<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icons and Fonts Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="../lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- New Stylesheet -->
    <link href="../css/aboutus.css" rel="stylesheet">



</head>

<body>
      <!-- Spinner Start -->
      <?php
   include '../includes/spinner.inc.php';
    ?>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
   include '../includes/topbar.inc.php';
    ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php
   include '../includes/navbar.inc.php';
   display_navbar("aboutus");
    ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <i id="aboutus-icon" class="fa-solid fa-circle-info "></i>
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <i class="fas fa-question"></i>
    

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">
                        We Are A Dental Clinic That You Can Trust.</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>17+ Years Of Experience.</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>DR Ahmed Hilal Provided The Latest In Dental Technology And A Staff Of 
                             The Highest Qualifications To Produce The Utopia Of Dental Surgeries.</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Patients Satisfaction Is Our First Priority.</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>We Have Earned Many Certificates over the past few years </h5>
                        </div>
                    </div>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                        data-wow-delay="0.6s">Schedule Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="../images/aboutusimage.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


      <!-- Newsletter Start -->
      <?php include '../includes/newsletter.inc.php' ?>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <?php include '../includes/footer.inc.php' ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../lib/twentytwenty/jquery.event.move.js"></script>
    <script src="../lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>











