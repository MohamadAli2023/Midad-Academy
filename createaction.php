<html>
<meta charset="UTF-8">
<body>
<?php
session_start();
require('config.php');
$f=$_POST['Firstname'];
$l=$_POST['lastname'];
$d=$_POST['birthday'];
$g=$_POST['gender'];
$u=$_POST['Username'];
$e=$_POST['Email'];
$p=$_POST['psw'];
$po=$_POST['psw1'];
$ph=$_POST['Phone'];
	if(isset($_POST['submit']))
    {
        $sql = "SELECT * FROM `account` WHERE username='$u'";
        $result = mysqli_query($con,$sql);
        if(!$result)
            die("something went wrong");
        if(mysqli_num_rows($result)!=0){
            
            header('refresh:3;url='.$_SERVER['HTTP_REFERER']);
            echo "<p style='color:red'>choose another user name</p>";
        }
        else
        {
            if($p!=$po)
            {
                header('refresh:3;url='.$_SERVER['HTTP_REFERER']);
                echo "<p style='color:red'>password does not match</p>";
            }
            else
            {
                
                $query = "INSERT INTO `account`(`first_name`, `last_name`, `date_of_birth`, `gender`, `username`, `email`, `password`, `phone`)
                VALUES ('$f','$l','$d','$g','$u','$e','$p','$ph')";
                            
                $results = mysqli_query($con, $query);
                if(!$results)
                {
                    echo "<p>something went wrong</p>" ;
                }  
                else
                {
                   
                    echo "<p> wellcome</p>";
                    header("Location: login.php"); 
                } 
            }
        }
    }
    mysqli_close($con);
?>