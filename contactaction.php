<html>
<meta charset="UTF-8">

<body>
    <?php
    require('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    if (isset($_POST['submit'])) {
       
            
                $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`)
                 VALUES ('$name','$email','$subject','$message')";

                $results = mysqli_query($con, $query);
                if (!$results) {
                    echo "<p>something went wronggg2</p>";
                } else {

                    header("refresh:0.5;url=login.php");
                }
            }
    
    
    mysqli_close($con);
    ?>