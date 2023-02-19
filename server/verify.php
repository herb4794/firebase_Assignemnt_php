<?php
require_once '/Applications/MAMP/htdocs/firebase_Assignemnt_php/server/dbcon.php';

$database = new dbcon();

if (isset($_SESSION['login_btn'])) {
  $login_email = $_POST['login_email'];
  $login_pass = $_POST['login_pass'];

 try {
   $verify = $database->verify($login_email, $login_pass);
   
 } catch (\Throwable $th) {
  //throw $th;
 }
  
}
?>
