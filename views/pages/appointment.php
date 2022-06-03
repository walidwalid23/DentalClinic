<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Appointment</title>
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
    <!-- Page Stylesheet -->
    <link href="../../css/appointment.css" rel="stylesheet">
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
   #empty string because it's a button not a link to get highlighted when visited
   display_navbar("");
    ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <i id="appointment-icon" class="fa-solid fa-calendar-days"></i>
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <h3 class="text-white">Opening Hours: sat - wed : 8.00 am - 10.00 pm, thursday Closed</h3>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-6 text-white mb-4">Schedule An Appointment Now And Say Goodbye To Tooth Pain.</h1>
                        <img id="tooth-pain-img" src="../../images/toothpain.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Schedule Appointment</h1>
                    <?php
                    if(isset($_SESSION["user_email"]) || isset($_COOKIE["user_email"])){
                       //form for registered users
                        echo' <form id="scheduling-form">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                       <label for="date-field" style="color:black;font-size:medium;font-weight:bold">Appointment Date</label>
                                        <input type="date" id="date-field" class="form-control bg-light border-0 "
                                            placeholder="Appointment Date" data-target="#date1"
                                             style="height: 55px;" name="date" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <label for="time-field" style="color:black;font-size:medium;font-weight:bold">Appointment Time</label>
                                        <input type="time" id="time-field" class="form-control bg-light border-0"
                                            placeholder="Appointment Time" data-target="#time1"
                                             style="height: 55px;" name="time" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Schedule Appointment</button>
                                </div>
                            </div>
                            <input type="hidden" id="registered">
                        </form>
                        
                        ';
                    }
                    else{
                        //form for non registered users
                        echo' <form id="scheduling-form">
                            <div class="row g-3">
                              
                                <div class="col-12 col-sm-6">
                                <label for="name-field" style="color:black;font-size:medium;font-weight:bold">First Name</label>
                                    <input type="text" id="name-field" class="form-control bg-light border-0" 
                                        style="height: 55px;" minlength="3" maxlength="20" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                <label for="number-field" style="color:black;font-size:medium;font-weight:bold">Phone Number</label>
                                    <input type="tel" id="number-field" class="form-control bg-light border-0" placeholder="Your Number"
                                        style="height: 55px;"  minlength="11" maxlength="12" name="phonenumber" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                <label for="birth-date" style="color:black;font-size:medium;font-weight:bold">BirthDate</label>
                                    <input type="date" id="birth-date" class="form-control bg-light border-0" 
                                        style="height: 55px;" name="age" required>
                                </div>
                                <h1> </h1>
                                <div class="col-12 col-sm-6"">
                                    <div id="date1">
                                       <label for="date-field" style="color:black;font-size:medium;font-weight:bold">Appointment Date</label>
                                        <input type="date" id="date-field" class="form-control bg-light border-0"
                                            placeholder="Appointment Date" data-target="#date1"
                                            style="height: 55px;" name="date" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                    <label for="time-field" style="color:black;font-size:medium;font-weight:bold">Appointment Time</label>
                                        <input type="time" id="time-field" class="form-control bg-light border-0"
                                            placeholder="Appointment Time" data-target="#time1"
                                           style="height: 55px;" name="time" required>
                                    </div>
                                </div>
                                <div class="form-group bg-info">
                                     <p> <b> Select Your Gender: </b> </p>
                                    <label for="male-radio">Male </label>
                                    <input type="radio" class="form-check-input" value="male"  name="gender" id="male-radio" required>

                                    <label for="female-radio"  class="form-check-label">Female </label>
                                    <input type="radio" class="form-check-input" value="female"  name="gender" id="female-radio" required>
        
                                    <p id="gender-error-p" class="signup-error-message"></p>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Schedule Appointment</button>
                                </div>
                            </div>
                        </form>
                        ';

                    }
                    echo '<p id="general-error-p" style="color:red;font-weight:bold"></p>';
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

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
     <!-- Schedule Appointment Javascript -->
     <script src="../../js/scheduleappointment.js"></script>
     <script src="../../js/sendsmsajax.js"></script>
</body>

</html>