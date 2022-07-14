<?php
include "database.php";
if(isset($_POST['submit']) && $_POST ['submit'] =="Cancel"){
  header("Location:courses.php");
}
if(isset($_POST["submit"]) && $_POST["submit"]=="Submit"){
  $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
  $regid=$_POST["regno"];
  $regname=$_POST["name"];
  $course=$_POST["course"];
  $email=$_POST["email"];
  $ContactNumber=$_POST["contactnum"];
  $registerdate=$_POST["regdate"];
  $sql ="INSERT INTO tbluser VALUE (NULL,'$regname','$course','$email','$ContactNumber',current_timestamp())";
  $result=mysqli_query($cnn,$sql);
  if(!$result){
    die("Error retrieving data".mysqli_error($cnn));

  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Ninestars Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Innovate Training.png" rel="icon">
  <link href="assets/img/Innovate Training.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Innovate Training</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="courses.php">Courses</a></li>
		  <li><a class="nav-link scrollto active" href="register.php">Register</a></li>
          <li><a class="getstarted scrollto" href="admin.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Register</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Register</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
   
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="hidden" name="regid">

              <div class="row">
                <div class="col-md-6 mb-4">

                  
                  <div class="form-outline">
                    <label for='regname'>Name</label>
                    <input type="text" class="form-control form-control-lg" name="name" >
                    
                    <label class="form-label" for="courseappliedfor">Course</label>
                    <input type="text" name="course"id="course" class="form-control form-control-lg" />
                    
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control form-control-lg" />

                    <label class="form-label" for="ContactNum">Contact</label>
                    <input type="text" name="contactnum" id="contactnum" class="form-control form-control-lg">

                    <label class="form-label" for="date">Date</label>
                    <input type="text" name="regdate" id="regdate" class="form-control form-control-lg" placeholder="yyyy-mm-dd">
                  </div>
               
                  <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit"  name="submit" value="Submit" />
                    <input class="btn btn-primary btn-lg" type="submit"  name="submit" value="Cancel" />
                  </div>

                  

                </div>
              </div>

              

              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
        

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>