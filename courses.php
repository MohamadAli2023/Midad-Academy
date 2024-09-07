<?php
session_start();

// Handle login/logout button
if (!isset($_GET['load_courses'])) {
    if (isset($_SESSION['id'])) {
        echo '<a href="logout.php" class="get-started-btn">LOGOUT</a>';
    } else {
        echo '<a href="login.php" class="get-started-btn">Get Started</a>';
    }
} else {
    // Fetch courses and display them dynamically
    require('config.php');
    $sql = "SELECT * FROM `courses`";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Something went wrong");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $teacher_id = $row['teacher_id'];
        $sql_teacher = "SELECT * FROM `teacher` WHERE `id` = $teacher_id";
        $result_teacher = mysqli_query($con, $sql_teacher);
        $teacher = mysqli_fetch_assoc($result_teacher);

        echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch">';
        echo '  <div class="course-item">';
        echo '    <img src="' . $row['image'] . '" class="img-fluid" alt="...">';
        echo '    <div class="course-content">';
        echo '      <div class="d-flex justify-content-between align-items-center mb-3">';
        echo '        <h4>' . $row['section'] . '</h4>';
        echo '      </div>';
        echo '      <h3><a href="webcourse.php?cid=' . $row['id'] . '">' . $row['title'] . '</a></h3>';
        echo '      <p>' . $row['subject'] . '</p>';
        echo '      <div class="trainer d-flex justify-content-between align-items-center">';
        echo '        <div class="trainer-profile d-flex align-items-center">';
        echo '          <img src="assets/img/trainers/trainer-1.jpg" class="' . $teacher['image'] . '" alt="">';
        echo '          <span>' . $teacher['first_name'] . ' ' . $teacher['last_name'] . '</span>';
        echo '        </div>';
        echo '        <div class="trainer-rank d-flex align-items-center">';
        echo '          <i class="bx bx-user"></i>&nbsp;50';
        echo '          &nbsp;&nbsp;<i class="bx bx-heart"></i>&nbsp;65';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
}
?>
