<html>
<head>
    <meta charset="utf-8">
    <title>Verify Number</title>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- verify number Stylesheet -->
    <link href="../css/verifynumber.css" rel="stylesheet">
</head>

<body>
    
<!-- Topbar Start -->
<?php
   include '../includes/topbar.inc.php';
    ?>
 <!-- Topbar End -->

 <!-- Navbar Start -->
<?php
include '../includes/navbar.inc.php';
 #empty string because it's a button not a link to get highlighted when visited
display_navbar("");
    ?>
 <!-- Navbar End -->
 <!-- Verify Form Start -->
 <form action=""  method="post" id="verifynumber-form" class="container" >
      <div class="form-group">
        <b> Enter The 4-Digits Code That Has Been Sent To Your Phone: </b> </label>
        <br>
        <input type="text" class="code-fields" id="field1"  name="digit1" maxlength="1" required>
        <input type="text" class="code-fields" id="field2"  name="digit2" maxlength="1" required>
        <input type="text" class="code-fields" id="field3"  name="digit3" maxlength="1" required>
        <input type="text" class="code-fields" id="field4"  name="digit4" maxlength="1" required>
      </div>
        <br>
        <p id="verify-error-p" ></p>

        <input type="submit" id="submit-button" class="btn btn-primary">
        <br><br>
        <div id="no-receive-div">
          <p id="resend-p"> </p>
           <span id="nomessage-text"> Didn't Receive A Code? </span>
           <button type="button" id="resend-button" class="btn btn-primary">Resend Code</button>
        </div>
        <!--Hidden Inputs-->
        <?php
        echo '<input type="hidden" id="name" value='.$_GET["name"].'>';
        echo '<input type="hidden" id="email" value='.$_GET["email"].'>';
        echo '<input type="hidden" id="phone-number" value='.$_GET["number"].'>';
        ?>
</form>

 <!-- Verify Form End -->

 <!-- Footer Start -->
 <?php include '../includes/footer.inc.php' ?>
 <!-- Footer End -->

<!-- Change Fields Javascript -->
<script src="../js/verifyfieldschange.js"></script>
 <!-- Verify Number Javascript -->
<script src="../js/sendsmsajax.js"></script>
<!-- Verify Code Javascript -->
<script src="../js/verifycode.js"></script>
<!-- Resend SMS Javascript -->
<script src="../js/resendSMS.js"></script>

<body>

</html>