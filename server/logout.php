<?php
session_start();
$_SESSION['login_status'] = false;
$_SESSION['status'] = "Logged Out Successfully";
header('Location: ../src/www/index.php');
exit();

?>
