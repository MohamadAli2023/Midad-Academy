<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <head>

    <body>
        <?php
        session_start();
        require('config.php');
        if (empty($_POST['Username']) || empty($_POST['password'])) {
            $page = $_SERVER["HTTP_REFERER"];
            header('refresh:5; url=' . $page);
            die("<b>Username and/or password cannot be empty</b>");
        }

        $username = $_POST['Username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `account` WHERE  `username`='$username' and `password`='$password'";
        $result = mysqli_query($con, $sql);
        if (!$result)
            die("something went wrongg");
        if (mysqli_num_rows($result) == 0) {

            header('refresh:3;url=' . $_SERVER['HTTP_REFERER']);
            echo "<p style='color:red'>Invalid username or password</p>";
        } else {
            $d = mysqli_fetch_assoc($result);
            $id = $d['id'];
        if($id == 1){
           
            $_SESSION['admin'] = $id;
            header("refresh:0.5;url=adminlog.php");
        }else{
           
         
            $_SESSION['id'] = $id;
            header("refresh:0.5;url=userlog.php");
    }}

        mysqli_close($con);
        ?>
    </body>

</html>