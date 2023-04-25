<?php
session_start();
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Value\Uid;

require_once 'dbcon.php';

$database = new dbcon();
 if (isset($_POST['login'])) { 
  $login_email = $_POST['login_email'];
  $login_pass = $_POST['login_pass'];

  try {
    $user = $database->auth->getUserByEmail($login_email);
    try {
      $signInResult = $database->verify($login_email, $login_pass);
      $idTokenString = $signInResult->idToken();
      $userInfo = $database->auth->signInWithEmailAndPassword($login_email, $login_pass);
      try {
        $verifiedIdToken = $database->auth->verifyIdToken($idTokenString);
        $uid = $verifiedIdToken->claims()->get('sub');


        $name = get_object_vars($user);
        $claims = $database->auth->getUser($name['uid'])->customClaims;

       
        header('Location: ../src/www/index.php');
        $_SESSION['verifiedIdToken'] = $verifiedIdToken;
        $_SESSION['uid'] = $uid;
        $_SESSION['status'] = "Logged in Successfully" ;

        $_SESSION['user_type'] = $claims['admin'];
        $_SESSION['login_status'] = true;
        $_SESSION['user_name'] = $name['email'];
        exit();
        
      } catch (FailedToVerifyToken $e) {
        echo 'Login Failed ' . $e->getMessage();
        $_SESSION['status'] = "Wrong email and password" . $e->getMessage();
      } 
      catch(FailedToVerifyToken $e){
        echo 'The token is invalid: '.$e->getMessage();     
        $_SESSION['status'] = "Token is invalid" . $e->getMessage();
      }
    } catch (FailedToVerifyToken $e) {
      echo 'wrong password: ' . $e->getMessage();
      $_SESSION['status'] = "Wrong password" . $e->getMessage();
      header('Location: ../src/www/login.php');
      exit();
    }
  } catch (FailedToVerifyToken $e) {
    $_SESSION['status'] = "Worng Email" . $e->getMessage();
    header('Location: ../src/www/login.php');
    exit();
  }
}
else{
  $_SESSION['status'] = "Not allowed";
  header('Location: ../src/www/login.php');
  exit();
}

if(isset($_POST['googleInput'])){
  try {
    $token = $_POST['token'];
    $signInWithGoogle = $database->auth->signInWithIdpAccessToken('google.com',$token);
    $userData = $signInWithGoogle->data();
    $_SESSION['login_status'] = true;
    $_SESSION['user_name'] = $userData['email'];
    header('Location: ../src/www/index.php');
  } catch (FailedToVerifyToken $e) {
    $_SESSION['status'] = "The Token is invalid" . $e->getMessage();
  }
}
?>
