<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <head>
    <style>
       .coo{
            font-size: larger;
            margin-top: 15%;
            margin-left: 25%;
            width: 100%;
            height: 100%;
        }
        .w3-container{
            font-size: larger;
        }
    </style>
  </head>
<body>

<div class="coo">
<div class="w3-container">

  <div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-blue">
    <?php
     
     
     session_start();
     require('config.php');
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
           echo"<h1>Hello ".$d['first_name']."...</h1>";
    }?>
     
    </header>

    <div class="w3-container">
      <p>welcome to my acadimy website.</p>
      <p>please press continue to go to the website pages</p>
      <a href="index.php" class="get-started-btn">continue</a>
    </div>

    <footer class="w3-container w3-blue">
    
    </footer>
  </div>
</div>
</div>

</body>
</html>
