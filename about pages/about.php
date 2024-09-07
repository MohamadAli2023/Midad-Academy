<?php
session_start();
if(isset($_SESSION['id'])) {
    echo '<a href="logout.php" class="get-started-btn">LOGOUT</a>';
} else {
    echo '<a href="login.php" class="get-started-btn">Get Started</a>';
}
?>
