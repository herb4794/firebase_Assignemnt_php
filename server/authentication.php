<?php
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

session_start();
require_once 'dbcon.php';

$database = new dbcon();

if(isset($_POST['googleInput'])){
  try {
    $token = $_POST['token'];
    $signInWithGoogle = $database->auth->signInWithIdpAccessToken('google.com',$token);
    $userData = $signInWithGoogle->data();
    $_SESSION['login_status'] = true;
    $_SESSION['user_name'] = $userData['email'];
    $claims = $database->auth->getUser($userData['localId'])->customClaims;
    $_SESSION['googleLoginUid'] = $database->auth->getUser($userData['localId'])->uid;
    $_SESSION['user_type'] = $claims['admin'];
    if ($claims['statusCode'] == true) {
      $database->auth->setCustomUserClaims($userData['localId'], ['admin' => true]);
    }else{
      $database->auth->setCustomUserClaims($userData['localId'], ['admin' => false, 'address' => "", 'statusCode' => false]);
    }
    header('Location: index.php');
  } catch (FailedToVerifyToken $e) {
    $_SESSION['status'] = "The Token is invalid" . $e->getMessage();
  }
}

?>
