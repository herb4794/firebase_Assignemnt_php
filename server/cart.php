<?php
require_once 'dbcon.php';

$database = new dbcon();



if (isset($_POST['add'])) { 
  addToCart();
}

function addToCart() {
  // if (isset($_SESSION['cart'])){
  //   $item_array_id = array_column($_SESSION['cart'], "product_id");

  //   if(in_array($_POST['product_id'], $item_array_id)){
  //     echo "<script>alert('Product is already added in the cart..!')</>";
  //     echo "<script>window.location = '../src/www/index.php'</script>";
  //   }else{

  //     $count = count($_SESSION['cart']);
  //     $item_array = [
  //       'product_id' => $_POST['product_id']
  //     ];

  //     $_SESSION['cart'][$count] = $item_array;

  //     $page = $_SERVER['PHP_SELF'];
  //     $sec = "0";
  //     header("Refresh: $sec; url=$page");
  //   }
  // }else{
  //   $item_array = [
  //     'product_id' => $_POST['product_id']
  //   ];
  //   $_SESSION['cart'][0] = $item_array;
  // }
  
  if(isset($_POST['add']) && !empty($_POST['add'])) {
    $product_id = $_POST['add'];

    // 如果$_SESSION['cart']陣列不存在，創建一個空陣列
    if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

    // 檢查產品是否已經在購物車中
    $found = false;
    foreach($_SESSION['cart'] as $item) {
      if($item['product_id'] == $product_id) {
        $found = true;
        break;
      }
    }

    if(!$found) {
      // 如果產品不在購物車中，創建一個新的購物車項目
      $item = array(
        'product_id' => $product_id,
        'qty' => 1
        // 其他產品屬性可以在此處添加
      );
      $_SESSION['cart'][] = $item;
    }
  }
}
?>
