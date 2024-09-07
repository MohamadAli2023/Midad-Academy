<?php
require('config.php');

// Fetch trainers from the database
$sql = "SELECT * FROM `courses`";
$result = mysqli_query($con, $sql);

if (!$result) {
    die("Something went wrong");
} else {
    for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['teacher_id'];

        // Fetch teacher information
        $sql1 = "SELECT * FROM `teacher` WHERE `id`=$id";
        $result1 = mysqli_query($con, $sql1);

        if (!$result1) {
            die("Something went wrong");
        } else {
            $row1 = mysqli_fetch_assoc($result1);

            echo '<div class="row" data-aos="zoom-in" data-aos-delay="100">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                      <img src="' . $row1['image'] . '" class="img-fluid" alt="">
                      <div class="member-content">
                        <h4>' . $row1['first_name'] . ' ' . $row1['last_name'] . '</h4>
                        <span>' . $row1['subject'] . '</span>
                        <p>' . $row1['description'] . '</p>
                      </div>
                    </div>
                  </div>
            </div>';
        }
    }
}
?>
