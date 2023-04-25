<?php
session_start();
require_once '/Applications/MAMP/htdocs/Assignment_2/server/dbcon.php';

use Kreait\Firebase\Auth\UserQuery;
$database = new dbcon();

if (isset($_POST['register_btn'])) {
  $register_name = $_POST['register_name'];
  $register_pass = $_POST['register_pass'];
  $register_phone = $_POST['register_phone'];
  $user_type = $_POST['user_type'];
  $register_comfrimPass = $_POST['register_comfrimPass'];
  $register_data = [
    'email' => $register_name,
    'emailVerified' => false,
    'password' => $register_pass,
    'phoneNumber' => "+852" . $register_phone,
    'displayName' => $register_name
  ];



    if (strlen($register_data['phoneNumber']) == 12) {
      try {
          if($register_comfrimPass == $register_pass && $register_comfrimPass && $register_pass != ""){
           $result = $database->authentication($register_data);
           $_SESSION['register_status'] = "register is successful";
           $getUser = $database->auth->getUserByEmail($register_name);
           $userdata = get_object_vars($getUser);
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


  if($user_type = "user"){ 
    $database->auth->setCustomUserClaims($userdata['uid'],['admin' => false, 'address' => ""]);
  }
  
  if($user_type = "admin"){
    $database->auth->setCustomUserClaims($userdata['uid'], ['admin' => true, 'address' => ""]);
  }
}

if(isset($_POST['google_btn'])){
}
?>
