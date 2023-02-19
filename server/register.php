<?php
session_start();
require_once '/Applications/MAMP/htdocs/firebase_Assignemnt_php/server/dbcon.php';
use Kreait\Firebase\Auth\UserQuery;

$database = new dbcon();

$result = $database->auth->listUsers();
foreach ($result as $row) {
  $_SESSION['testing'] = $row->email;
}

if (isset($_POST['register_btn'])) {
  $register_name = $_POST['register_name'];
  $register_pass = $_POST['register_pass'];
  $register_phone = $_POST['register_phone'];
  $user_type = $_POST['user_type'];
  $register_comfrimPass = $_POST['register_comfrimPass'];
  $register_data = [
    'email' => $register_name,
    'emailVerified' => false,
    'register_pass' => $register_pass,
    'phoneNumber' => "+852" . $register_phone,
    'user_type' => $user_type,
    'displayName' => $register_name
  ];


    if (strlen($register_data['phoneNumber']) == 12) {
      try {
          if($register_comfrimPass == $register_pass && $register_comfrimPass && $register_pass != ""){
           $result = $database->authentication($register_data);
           $_SESSION['register_status'] = "register is successful";
           header("Location: ../src/www/register.php");
          }else{
            $_SESSION['register_status'] = "password is not correspond";
            header("Location: ../src/www/register.php");
          }
      }catch (Exception $e) {
        $_SESSION['register_status'] =  "Email is existence";
        header("Location: ../src/www/register.php");
        }
    }else{
      $_SESSION['register_status'] = "Please enter an 8-digit phone number";
      header("Location: ../src/www/register.php");
    }
}

?>
