<!DOCTYPE html>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details - Midad Academy</title>
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

      <h1><a href="index.php"><img src="img/Midad Academy without bg.png" class="midadlogo"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="courses.php">Courses</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="Workshops.php">Workshops</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      session_start();
      if(isset($_SESSION['id'])  )
      {
        ?>
          <a href="logout.php" class="get-started-btn">LOGOUT</a>
    <?php }else{ ?>
      <a href="login.php" class="get-started-btn">Get Started</a>
      
    <?php } ?>

    </div>
  </header><!-- End Header -->
  <br> <br> <br> <br>

  <main id="main">
    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="img/web-developer-3.jpg" class="img-fluid" alt="">
            <h3>Web development essentials</h3>
            <p>
              In this course, students will delve into the essential components of web development, exploring the key languages, technologies, and frameworks used to craft interactive web experiences. From the basic building blocks of HTML and CSS to dynamic functionality with JavaScript and popular libraries like jQuery, participants will gain a well-rounded understanding of front-end web development.
            </p>
            <?php
           if(isset($_SESSION['admin']) || isset($_SESSION['id']) )
           {
          require('config.php');
          $cid=$_GET['cid'];
              $sql1 = "SELECT * FROM `video` WHERE `course_id`=$cid";
              $result1 = mysqli_query($con, $sql1);
              if (!$result1) {
                die("something went wrong");
              } else {
                $y = 0;
                for ($i = 1; $i <= mysqli_num_rows($result1); $i++) {

                  $row = mysqli_fetch_assoc($result1);

                  echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
        <video width="200" controls>
            <source src="' . $row['video'] . '" class="img-fluid" alt="..." type="video/mp4">
            </video>
            <div class="course-content">
                
    
                <h3>' . $row['title'] . ' number ' . $row['number'] . '</a></h3>
                
                <div class="trainer d-flex justify-content-between align-items-center">
                   
                    
                </div>
            </div>
        </div>
    </div>';
                }
              }}
            ?> 
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Trainer</h5>
              <p><a href="trainers.php">Yasser Ahmad</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Available Seats</h5>
              <p>30</p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course duration</h5>
              <p>12 hours</p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Prerequisites</h5>
              <p>Basic Computer Skills</p>
            </div>
            <br><br>
            <div>
              <a href="enroll.php" class="get-started-btn">Enroll now</a>
            </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">HTML and CSS Fundamentals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">JavaScript Essentials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Front-End Development</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Back-End Development</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Database Integration</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p>students will learn how to structure web content using HTML and apply visual styles with CSS, including responsive design techniques for optimal display across devices</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/HtmlCss.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p> JavaScript Essentials dives into the versatile world of programming, focusing on variables, data types, control flow, and interactive functionalities</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/javascript-removebg-preview.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p> Front-End Development explores the Document Object Model (DOM) and how JavaScript can dynamically interact with HTML and CSS, enhanced by the use of jQuery for seamless animations</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/front-removebg-preview.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p> In Back-End Development, students venture into server-side programming using Node.js and the Express.js framework to build robust server applications</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/back-end-developer-working-on-a-laptop-6765194-5607779-removebg-preview.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Description</h3>
                    <p>Database Integration delves into SQL for managing relational databases and NoSQL databases like MongoDB, empowering learners to handle data storage and retrieval for data-driven web applications</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="img/developers-using-laptop-smartphone-working-with-cloud-data-multimedia-big-data-architecture-database-cloud-computing-cloud-platform-concept-vector-isolated-illustration_335657-2202-removebg-preview.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

  </main><!-- End #main -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Midad Academy</h3>
            <p>
             Haret Hreik <br>
              Beirut<br>
              Lebanon <br><br>
              <strong>Phone:</strong> +961 81761365 <br>
              <strong>Email:</strong> <a href="mailto:info.midadacademy@gmail.com">info.midadacademy@gmail.com </a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Midad Academy</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/profile.php?id=100087566350952" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/midad_academy22?igshid=MjEwN2IyYWYwYw==" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/midad-academy/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>