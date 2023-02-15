<?php
session_start();
require_once '/Applications/MAMP/htdocs/firebase_Assignemnt_php/server/dbcon.php';
require_once '/Applications/MAMP/htdocs/firebase_Assignemnt_php/config.php';
$database = new dbcon();

if (isset($_POST['save-product'])) {
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_discount = $_POST['product_discount'];
      $product_description = $_POST['product_description'];
      $postData = [
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_description' => $product_description,
        'product_discount' => $product_discount,
      ];
      $database->insertData($postData);
      header('Location: ../src/www/index.php');
      $_SESSION['status'] = "Data added";
}else{
  header('Location: ../src/www/insert.php');
  $_SESSION['status'] = "Error can not push data to db";
}
?>
