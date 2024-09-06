<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Midad Academy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/Midad Academy without bg.png" rel="icon">
  <link href="img/Midad Academy without bg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 ><a href="index.php"><img src="img/Midad Academy without bg.png" class="midadlogo"></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Homess</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="workshops.php">Workshop</a></li>
          <li><a href="contact.php">Contact us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      session_start();
      require('config.php');
      if(isset($_SESSION['id'])  )
      {
        ?>
          <a href="logout.php" class="get-started-btn">LOGOUT</a>
      <?php }else{ ?>
        <a href="login.php" class="get-started-btn">Get Started</a>
      <?php } ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <br><h1>Creativityss,<br>In touch with tomorrow</h1>
      <h2>A leading online educational platform</h2>
      <?php
      if(isset($_SESSION['id']) )
      {
       $id= $_SESSION['id'];
        
          $sql = "SELECT * FROM `account` WHERE  `id`='$id' ";
        $result = mysqli_query($con, $sql);
        if (!$result)
            die("something went wrongg");
        if (mysqli_num_rows($result) == 0) {

            header('refresh:3;url=' . $_SERVER['HTTP_REFERER']);
            echo "<p style='color:red'>Invalid username or password</p>";
        } else {
            $d = mysqli_fetch_assoc($result); 
            echo" <h2> welcome ".$d['first_name']."</h2>";
     }}else{ ?>
      <a href="login.php" class="get-started-btn">Get Started</a>
      
    <?php } ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h1>Why this platform?</h1>
            <br><br>
            <ul>
              <li><i class="bi bi-check-circle"></i> Flexible Learning.</li>
              <li><i class="bi bi-check-circle"></i> Expert Instructors.</li>
              <li><i class="bi bi-check-circle"></i> Lifelong Learning.</li>
              <li><i class="bi bi-check-circle"></i> Interactive Learning.</li>
              <li><i class="bi bi-check-circle"></i> Support and Assistance.</li>
            </ul>
            <p>
              By choosing Midad Academy, you unlock a world of possibilities and opportunities for personal and professional development.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="168" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workshops</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="36" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Midad Academy?</h3>
              <p>
                Comprehensive courses, expert instructors, and a dedication to empowering learners.
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Comprehensive courses</h4>
                    <p>Offer a wide range of in-depth and well-structured learning materials.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Expert instructors</h4>
                    <p>We pride ourselves on having a team of expert instructors who are seasoned professionals in their respective domains.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Flexible learning</h4>
                    <p>Our courses are available online, allowing learners to access them at their own pace and convenience.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="Web Development Course Image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.php">Website Development Bootcamp</a></h3>
                <p>A comprehensive course on web development that takes you through HTML, CSS, and JavaScript to building dynamic web applications.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="Python for Data Science Course Image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Data Science</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.php">Python for Data Science</a></h3>
                <p>Learn how to use Python to analyze data, make predictions, and build machine learning models in this comprehensive data science course.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="Graphic Design Fundamentals Course Image">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Graphic Design</h4>
                  <p class="price">$199</p>
                </div>

                <h3><a href="course-details.php">Graphic Design Fundamentals</a></h3>
                <p>Master the fundamentals of graphic design, including typography, color theory, and branding, with this engaging course.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainers</h2>
          <p>Meet Our Trainers</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="trainer">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="trainer-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>With 10 years of experience in web development, Walter has worked with numerous clients to deliver successful projects.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="trainer">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="trainer-content">
                <h4>Sarah Jhonson</h4>
                <span>Data Science</span>
                <p>Sarah is a data science expert with a background in statistical analysis, data mining, and predictive modeling.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="trainer">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="trainer-content">
                <h4>William Anderson</h4>
                <span>Graphic Design</span>
                <p>William is a skilled graphic designer who has a deep understanding of branding, visual identity, and user experience design.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Midad Academy</h3>
            <p>
              123 Academy St.<br>
              City, ST 54321<br>
              United States <br><br>
              <strong>Phone:</strong> +1 234 5678 910<br>
              <strong>Email:</strong> info@midadacademy.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.php">Trainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="course-details.php">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="course-details.php">Data Science</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="course-details.php">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to get the latest updates on our courses and special offers.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Midad Academy</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
