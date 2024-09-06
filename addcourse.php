<!DOCTYPE html>
<?php

session_start();
if (isset($_SESSION['admin'])) {
?>
    <html lang="en">

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

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
        <style>
            html{
                height: auto;
            }
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
                        <li><a class="active" href="addcourse.php">Courses</a></li>
                        <li><a href="addteacher.php">Trainers</a></li>
                        <li><a href="addworkshops.php">Workshops</a></li>
                        <li><a href="contactadmin.php">Contact</a></li>
                    <li><a href="enrolladmin.php">Enroll</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <?php
                if (!isset($_SESSION['admin']) ) {
                ?>
                    <a href="login.php" class="get-started-btn">Get Started</a>
                <?php } else { ?>
                    <a href="logout.php" class="get-started-btn">LOGOUT</a>
                <?php } ?>
            </div>
        </header><!-- End Header -->

        <main id="main" data-aos="fade-in">

            <!-- ======= Breadcrumbs ======= -->
            <br><br><br><br>
            <section id="popular-courses" class="courses">
                <div class="container" data-aos="fade-up">

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <div class="form-conatiner">
                                    <form action="courseaction.php" method="post" enctype="multipart/form-data">
<h1> Add Course</h1>
                                        <div class="col-md-6 form-group">
                                            <label for="fileToUpload">Image:</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="section"> Section :</label>
                                            <input type="text" class="form-control" name="section" required>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                        <label for="discreption">Discreption:</label>
                                        <input type="text" class="form-control" name="discreption" width="48000" height="4008" required>
                                </div>
                                <div class="custom-select" style="width:200px;">
                                    <label for="teacher">teacher :</label>
                                    <select name="teacher" required>

                                        <option value="0">Select teacher:</option>
                                        <?php
                                        session_start();
                                        require('config.php');
                                        $sql = "SELECT * FROM `teacher`";
                                        $result = mysqli_query($con, $sql);
                                        if (!$result) {
                                            die("something went wrong");
                                        } else {
                                            $y = 0;
                                            for ($i = 1; $i <= mysqli_num_rows($result); $i++) {

                                                $row = mysqli_fetch_assoc($result);
                                                echo '<option value="' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</option>
                                 ';
                                            }
                                        } ?>

                                    </select>
                                    <br>


                                    <div class="control" hidden>
                                        <input type='submit' value='submit' name='submit'>
                                    </div>


                                    </form>

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
                        




                        <section id="popular-courses" class="courses">
                            <div class="container" data-aos="fade-up">

                                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                        <div class="course-item">
                                            <div class="form-conatiner">
                                                <form enctype="multipart/form-data" method="post" action="addvideo.php">

<h1> Add Video</h1>
                                                    <div class="col-md-6 form-group">
                                                        <label for="fileToUpload">video:</label>
                                                        <input type="file" name="uploadvideo"  required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="title"> title :</label>
                                                        <input type="text" class="form-control" name="title" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label for="number"> video number :</label>
                                                        <input type="text" class="form-control" name="number" required>
                                                    </div>


                                                    <div class="custom-select" style="width:200px;">
                                                        <label for="course">courses :</label>
                                                        <select name="course" required>

                                                            <option value="0">Select course:</option>
                                                            <?php
                                                            session_start();
                                                            require('config.php');
                                                            $sql = "SELECT * FROM `courses`";
                                                            $result = mysqli_query($con, $sql);
                                                            if (!$result) {
                                                                die("something went wrong");
                                                            } else {
                                                                $y = 0;
                                                                for ($i = 1; $i <= mysqli_num_rows($result); $i++) {

                                                                    $row = mysqli_fetch_assoc($result);
                                                                    echo '<option value="' . $row['id'] . '">' . $row['title'] . ' </option>
                                 ';
                                                                }
                                                            } ?>

                                                        </select>
                                                        <br>


                                                        <div class="control" hidden>
                                                            <input type='submit' value='submit' name='submit'>
                                                        </div>


                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <script>
                            var x, i, j, l, ll, selElmnt, a, b, c;
                            /*look for any elements with the class "custom-select":*/
                            x = document.getElementsByClassName("custom-select");
                            l = x.length;
                            for (i = 0; i < l; i++) {
                                selElmnt = x[i].getElementsByTagName("select")[0];
                                ll = selElmnt.length;
                                /*for each element, create a new DIV that will act as the selected item:*/
                                a = document.createElement("DIV");
                                a.setAttribute("class", "select-selected");
                                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                                x[i].appendChild(a);
                                /*for each element, create a new DIV that will contain the option list:*/
                                b = document.createElement("DIV");
                                b.setAttribute("class", "select-items select-hide");
                                for (j = 1; j < ll; j++) {
                                    /*for each option in the original select element,
                                    create a new DIV that will act as an option item:*/
                                    c = document.createElement("DIV");
                                    c.innerHTML = selElmnt.options[j].innerHTML;
                                    c.addEventListener("click", function(e) {
                                        /*when an item is clicked, update the original select box,
                                        and the selected item:*/
                                        var y, i, k, s, h, sl, yl;
                                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                                        sl = s.length;
                                        h = this.parentNode.previousSibling;
                                        for (i = 0; i < sl; i++) {
                                            if (s.options[i].innerHTML == this.innerHTML) {
                                                s.selectedIndex = i;
                                                h.innerHTML = this.innerHTML;
                                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                                yl = y.length;
                                                for (k = 0; k < yl; k++) {
                                                    y[k].removeAttribute("class");
                                                }
                                                this.setAttribute("class", "same-as-selected");
                                                break;
                                            }
                                        }
                                        h.click();
                                    });
                                    b.appendChild(c);
                                }
                                x[i].appendChild(b);
                                a.addEventListener("click", function(e) {
                                    /*when the select box is clicked, close any other select boxes,
                                    and open/close the current select box:*/
                                    e.stopPropagation();
                                    closeAllSelect(this);
                                    this.nextSibling.classList.toggle("select-hide");
                                    this.classList.toggle("select-arrow-active");
                                });
                            }

                            function closeAllSelect(elmnt) {
                                /*a function that will close all select boxes in the document,
                                except the current select box:*/
                                var x, y, i, xl, yl, arrNo = [];
                                x = document.getElementsByClassName("select-items");
                                y = document.getElementsByClassName("select-selected");
                                xl = x.length;
                                yl = y.length;
                                for (i = 0; i < yl; i++) {
                                    if (elmnt == y[i]) {
                                        arrNo.push(i)
                                    } else {
                                        y[i].classList.remove("select-arrow-active");
                                    }
                                }
                                for (i = 0; i < xl; i++) {
                                    if (arrNo.indexOf(i)) {
                                        x[i].classList.add("select-hide");
                                    }
                                }
                            }
                            /*if the user clicks anywhere outside the select box,
                            then close all select boxes:*/
                            document.addEventListener("click", closeAllSelect);
                        </script>

    </body>
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php

                require('config.php');
                $sql = "SELECT * FROM `courses`";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    die("something went wrong");
                } else {
                    $y = 0;
                    for ($i = 1; $i <= mysqli_num_rows($result); $i++) {

                        $row = mysqli_fetch_assoc($result);
                        $id = $row['teacher_id'];
                        $sql1 = "SELECT * FROM `teacher` WHERE `id`=$id";
                        $result1 = mysqli_query($con, $sql1);
                        if (!$result1) {
                            die("something went wrong");
                        } else {
                            $y = 0;
                            for ($i1 = 1; $i1 <= mysqli_num_rows($result1); $i1++) {

                                $row1 = mysqli_fetch_assoc($result1);

                                echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
            <img src="' . $row['image'] . '" class="img-fluid" alt="...">
            <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>' . $row['section'] . '</h4>
                </div>
    
                <h3><a href="webcourse.php?cid=' . $row['id'] . '">' . $row['title'] . '</a></h3>
                <p>' . $row['subject'] . '</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="' . $row1['image'] . '" alt="">
                        <span>' . $row1['first_name'] . ' ' . $row1['last_name'] . '</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                </div>
            </div>
        </div>
    </div>';
                            }
                        }
                    }
                } ?> <!-- End Course Item-->


            </div>

        </div>
    </section>
<?php
} else {
    echo ("you have to login first");
    header("refresh:3;url=login.php");
    die();
} ?>

    </html>