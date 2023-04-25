<?php
session_start();
require_once '../../server/dbcon.php';

$database = new dbcon();

if (isset($_POST['userUpdateBtn'])) {
  $name = $_POST['updateName'];
  $email = $_POST['updateEmail'];
  $phoneNumber = $_POST['updatePhoneNumber'];
  $address = $_POST['updateAddress'];
  $uid = $_SESSION['uid']; 

  $postData = [
    'displayName' => $name,
    'email' => $email,
    'phoneNumber' => "+852" .$phoneNumber,
  ];

  if (strlen($postData['phoneNumber']) == 12) {
    $database->auth->updateUser($uid, $postData);
    header('Location: tables.php');
  }




}
if (isset($_POST['deleteUserBtn'])) {
  $uid = $_SESSION['uid'];
  $database->auth->deleteUser($uid);
}

if(isset($_POST['deleteProductBtn'])){
  $uid = $_POST['deleteProductBtn'];
  $databaseResult = new dbcon('product/'.$uid);
  $databaseResult->deleteData();
  header('Location: insert.php');
}

if (isset($_POST['updateProductBtn'])) {
  $product_id = $_SESSION['product_id'];
  $databaseResultForUpdate = new dbcon('product/'.$product_id);

  $productName = $_POST['productName'];
  $productDescription = $_POST['productDescription'];
  $productPhotos = $_FILES['productImage']['name'];
  $productPrice = $_POST['productPrice'];
  $productDiscount = $_POST['productDiscount'];
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $targetDir = "/Assignment_2/src/assets/images/products/";
  $oldImage = $database->childData($product_id);
  $oldImageResult = $oldImage['product_image'];
  $productQuantity = $_POST["qty"];

  if ($productPhotos != null) {
      $fileName = $targetDir . $productPhotos; 
  }else{
      $fileName = $oldImage;
  }
    $_SESSION['imageStatus'] = "You only will (gif, jpeg, jpg, png)" ;

    $postData = [
      'product_name' => $productName,
      'product_description' => $productDescription,
      'product_image' => $fileName,
      'product_price' => $productPrice,
      'product_discount' => $productDiscount,
      'product_quantity' => $productQuantity
    ];
    $databaseResultForUpdate->updateProduct($postData);

    if ($databaseResultForUpdate) {
      move_uploaded_file($_FILES['productImage']['tmp_name'], '/xampp/htdocs/Assignment_2/src/assets/images/products/'. $_FILES['productImage']['name']);
      header('Location: insert.php');
    }
}

if (isset($_POST['save-product'])) {
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_discount = $_POST['product_discount'];
      $product_description = $_POST['product_description'];
      $product_image = $_POST['product_image'];
      $postData = [
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_image' => $product_image,
        'product_description' => $product_description,
        'product_discount' => $product_discount,
      ];
      $database->insertData($postData);
      header('Location: ../src/www/index.php');
      $_SESSION['status'] = "Data added";
}
