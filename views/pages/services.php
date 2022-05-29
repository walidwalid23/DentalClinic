<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Services</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- Page Stylesheet -->
    <link href="../../css/services.css" rel="stylesheet">
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
   display_navbar("services");
    ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <i id="services-icon" class="fa-solid fa-user-doctor"></i>
                <h1 class="display-3 text-white animated zoomIn">Our Services</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                    </div>
                </div> -->
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services:</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://23smiles.com/wp-content/uploads/2015/05/restoration-300x223.jpg" alt=""> 
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Restorative Dentistry</h5>
                            </div>
                        </div>
                        <div class="col-md-3  service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://www.infodentis.com/images-eng/dental_bridge_proper_design.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Fixed Prothesis</h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://www.dentalteamitaly.com/en/computedimage/preview-definitive-movable-prothesis.i821-k23ujcS-w280-h200-l2-c1-x1.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Removable Prosthesis </h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://almejharalhadet.ly/wp-content/uploads/2020/09/orthodontic-treatment-917x509-1.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Orthodontic Treatment </h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://esmmidental.com/wp-content/uploads/2019/11/implantologia-dental2.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Implantology </h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://dentdream.com/wp-content/uploads/2019/02/periodontoloji-1.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Periodontology</h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://www.montgomerydentalcare.com/wp-content/uploads/2015/06/esthetic-dentistry-before-and-after-images-c.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4 ">
                                <h5 class="m-0">Esthetic Dentistry </h5>
                            </div>
                        </div>
                        <div class="col-md-3 service-item wow zoomIn services" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="https://lortonoralsurgery.com/wp-content/uploads/2018/10/difference-between-dentist-oral-surgeon-featured.jpg" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Oral Surgery </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <img id="appointment-img" src="../../images/appointment.png" alt="image">
                        <p class="text-white mb-3">“Our word is our worth. We promise to do it right, timely, and for a fair price.”</p>
                        <a href="appointment.php" class="btn btn-info py-3 px-5">Schedule Appointment</a>
                    </div>
                </div>
            </div>
           
                
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Newsletter Start -->
    <?php include '../../includes/newsletter.inc.php' ?>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <?php include '../../includes/footer.inc.php' ?>
    <!-- Footer End -->

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