<!DOCTYPE html>
<?php 

session_start();
if (isset($_SESSION['admin'])) {
  ?>
<html lang="en">
<?php
                session_start();?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Courses-Midad Academy</title>
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
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
* Template Name: Mentor
* Updated: May 30 2023 with Bootstrap v5.3.0
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
    <style>
        /*the container must be positioned relative:*/
        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element:*/
        }

        .select-selected {
            background-color: DodgerBlue;
        }

        /*style the arrow inside the select element:*/
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /*point the arrow upwards when the select box is open (active):*/
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /*style the items (options), including the selected item:*/
        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        /*style items (options):*/
        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /*hide the items when the select box is closed:*/
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

        table {
            margin-top: 20%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }


        th {
            background-color: lightblue;
        }

        tr:nth-child(even) {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1><a href="index.php"><img src="img/Midad Academy without bg.png" class="midadlogo"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="aboutadmin.php">About</a></li>
                    <li><a href="addcourse.php">Courses</a></li>
                    <li><a href="addteacher.php">Trainers</a></li>
                    <li><a href="addworkshops.php">Workshops</a></li>
                    <li><a class="active" href="contactadmin.php">Contact</a></li>
                    <li><a href="enrolladmin.php">Enroll</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <?php
    if(!isset($_SESSION['admin']))
	{
    ?>
      <a href="login.php" class="get-started-btn">Get Started</a>
<?php }else{ ?>
  <a href="logout.php" class="get-started-btn">LOGOUT</a>
<?php } ?>

        </div>
    </header><!-- End Header -->

    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <br><br><br><br><br>

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
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">


            <table style="width:100%">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                </tr>
                <?php
                
                require('config.php');
                $sql = "SELECT * FROM `contact`";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    die("something went wrong");
                } else {
                    $y = 0;
                    for ($i = 1; $i <= mysqli_num_rows($result); $i++) {

                        $row = mysqli_fetch_assoc($result);
                       
                        echo "

  <tr>
    <td>" . $row['name'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['subject'] . "</td>
    <td>" . $row['message'] . "</td>
  </tr>
  ";
                    }
                } ?>
               
            </table>
        </div>
    </div>
</section>
<?php
}
else{
echo("you have to login first");
header("refresh:3;url=login.php");
die();
}?>