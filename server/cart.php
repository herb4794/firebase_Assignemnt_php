<?php
require_once '/Applications/MAMP/htdocs/firebase_Assignemnt_php/server/dbcon.php';

$database = new dbcon();

if (isset($_POST['add'])) {
   function addToCart() {
     if (isset($_SESSION['cart'])){
       $item_array_id = array_column($_SESSION['cart'], "product_id");

       if(in_array($_POST['product_id'], $item_array_id)){
          echo "<script>alert('Product is already added in the cart..!')</>";
          echo "<script>window.location = 'index.php'</script>";
       }else{

         $count = count($_SESSION['cart']);
         $item_array = [
           'product_id' => $_POST['product_id']
         ];

         $_SESSION['cart'][$count] = $item_array;
       }
     }else{
       $item_array = [
         'product_id' => $_POST['product_id']
       ];
       $_SESSION['cart'][0] = $item_array;
     }
  }
}
?>
