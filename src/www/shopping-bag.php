<?php session_start();
require_once '../../server/dbcon.php';
$database = new dbcon();
// Execution of the HTML5 Defaul Setting part
@include('../assets/includes/html-default.php');

if (isset($_POST["productPlus"])) {
  $productId = $_POST["productPlus"];
  $productSum = $_POST["productSum"];
  $productResult = new dbcon('product/'.$productId);
  $result = $productResult->getData();
  
  $postData = [
    'product_quantity' => $productSum
  ];

  $productResult->update($postData);
}


if (isset($_POST['add'])) {
  addToCart();
}
if (isset($_GET['ids'])) {
  $productId = $_GET['ids'];
}
if (isset($_POST['remove'])) {
  if ($_GET['action'] = 'remove') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['product_id'] == $productId) {
        unset($_SESSION['cart'][$key]);
        echo "<script>window.location='shopping-bag.php'</script>";
      }
    }
  }
}
?>

<head>
  <?php

  // Execution of the Title part
  @include('../assets/includes/title.php');

  // Execution of the Header part
  @include('../assets/includes/header.php');

  ?>
</head>

<body>
  <?php

  // Execution of the Navigation-Bar part
  @include('../assets/includes/navigation-bar.php');

  // Execution of the Shopping Bag part
  @include('../assets/includes/shopping-bag-content.php');

  // Execution of the Footer part
  @include('../assets/includes/footer.php');

  // Execution of the JavaScript part
  @include('../assets/includes/script.php');

  ?>
</body>

</html>