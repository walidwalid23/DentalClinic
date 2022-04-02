<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Testimonials</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
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
     <!-- new Stylesheet -->
     <link href="../css/testimonials.css" rel="stylesheet">
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
   display_navbar("testimonials");
    ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <i id="testimonials-icon" class="fa-solid fa-person-circle-question"></i>
                <h1 class="display-3 text-white animated zoomIn">Testimonials</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Friendly, trustworthy, affordable and flexible. Simply amazing service.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Omar</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Recommended. Hygiene and clinic cleanliness is quite satisfactory. Dr. Ahmed Hilal displayed the experience and a deep awareness of the issues and best remedies;
 his execution was quite efficient and not to mention painless which is a big plus.
 The booking, confirmation, and follow up systems are handled efficiently and accurately.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Karim</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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