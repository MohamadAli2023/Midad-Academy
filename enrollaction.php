<html>
<meta charset="UTF-8">

<body>
    <?php
    session_start();
    require('config.php');
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $educationl = $_POST['educationl'];
    $education = $_POST['education'];
    $university = $_POST['University'];
    $web = $_POST['web'];
    $support = $_POST['support'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $pt = $_POST['pt'];
    if (isset($_POST['submit'])) {


        $query = "INSERT INTO `enroll`( `fname`, `email`, `phone`, `dob`, `educationl`,`education`, `university`, `web`, `support`, `nationality`, `address`, `pt`)
                       VALUES ('$fname','$email','$phone','$dob','$educationl','$education','$university','$web','$support','$nationality','$address','$pt')";

        $results = mysqli_query($con, $query);
        if (!$results) {
            echo "<p>something went wrong</p>";
        } else {

            echo "<p> wellcome</p>";
            header("Location: courses.php");
        }
    }

    mysqli_close($con);
    ?>