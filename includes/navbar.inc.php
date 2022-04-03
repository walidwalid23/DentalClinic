<html>
<head>
<link rel="stylesheet" href="../css/navbar.css">
</head>
  <body>
  
  <!-- Navbar Start -->
  <?php 
  session_start();
  function display_navbar($active_page){
 echo '     
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-2 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Modern Dental Clinic</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">';
            if($active_page=="home"){
             echo' 
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonials.php" class="nav-item nav-link">Testimonials</a>';
            }
            else if($active_page=="aboutus"){
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link active">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonials.php" class="nav-item nav-link">Testimonials</a>';
            }
            else if($active_page=="services"){
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link active"> Our Services</a>
                <a href="team.php" class="nav-item nav-link">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonials.php" class="nav-item nav-link">Testimonials</a>';
            }
            else if($active_page=="team"){
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link  active">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonials.php" class="nav-item nav-link">Testimonials</a>';
            }
            else if($active_page=="contactus"){
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link ">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link  active">Contact Us</a>
                <a href="testimonials.php" class="nav-item nav-link">Testimonials</a>';
            }
            else if($active_page=="testimonials"){
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link ">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonial.php" class="nav-item nav-link  active">Testimonials</a>';
            }
            else{
                echo'   
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a id="about-page" href="aboutus.php" class="nav-item nav-link">About Us</a>
                <a href="services.php" class="nav-item nav-link"> Our Services</a>
                <a href="team.php" class="nav-item nav-link ">Our Dentist</a>
                <a href="contactus.php" class="nav-item nav-link">Contact Us</a>
                <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>';

            }
            
            
                echo' </div>
            <a href="appointment.php" class="btn btn-primary" id="appointments-button">Schedule Appointment</a>';
   
            if(isset($_SESSION["user_name"])){
             $name=$_SESSION["user_name"];
             echo'
        <div class="dropdown" id="dropdown-button">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             '.$name.'
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="../pages/home.php?loggedout=true">Log Out</a>
        
            </div>
          </div>
             ';
            
            }
            else{
              echo'<a id="login-button" href="login.php" class="btn btn-primary">Login</a>';
            }
            

      echo' </div>
    </nav>';
  }
    ?>
      <!-- Navbar End -->
 
 </body>




</html>