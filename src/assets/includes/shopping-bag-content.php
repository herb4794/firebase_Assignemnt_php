<?php
require_once '../../server/dbcon.php';
require_once '../../server/cart.php';
$database = new dbcon();

function cartComponent(
  $product_id,
  $product_discount,
  $product_en_brand,
  $product_en_description,
  $product_en_name,
  $product_image,
  $product_price,
  $product_tc_brand,
  $product_tc_description,
  $product_tc_name,
  $product_type,
  $product_totalPrice = null,
  $product_qty = 0
) {
  if (strpos($_SERVER['REQUEST_URI'], "shopping-bag.php") !== false) {

    $removeCartElement = "<form id=\"productCartForm\" action=\"../www/shopping-bag.php?ids=$product_id&action=remove\" method=\"post\">";
    $cartComponentElement =
      '
      ' . "$removeCartElement" . '
        <div class="products">

            <img class="product-image" src=' . "$product_image" . ' alt="#">

            <span class="product-name">' . "$product_en_name" . '</span>

            <span class="product-description">' . "$product_en_description" . '</span>

            <span class="unit-price">
                <h6 class="product-original-price">$' . number_format($product_price) . '</h6>
                <h5 class="product-new-price">$' . number_format($product_discount) . '</h5>
            </span>

            <span class="input-group number-spuinner">
                <input name="productSum" id="product-number" type="number" min="0" class="form-control text-center" value=' . "$product_qty" . '>
                <button id="product-plus" value=' . "$product_id" . ' name="productPlus" class="btn btn-default plus">+</i></button>
            </span>

            <span id"product-total-price" class="product-total-price">$' . number_format($product_totalPrice) . '</span>

            <span class="product-action-desktop">
                <button> Move to Favorites</button>
                <button type="submit" name="remove">Remove</button>
            </span>

            <span class="product-action-mobile">
                <i class="save-icon"></i>
                <button type="submit" name="remove"><i class="remove-icon"></i></button>
            </span>

        </div>

    </form>
  ';
    echo $cartComponentElement;
  } else if (strpos($_SERVER['REQUEST_URI'], "shopping-bag-tc.php") !== false) {

    $removeCartElement = "<form action=\"../www/shopping-bag.php?ids=$product_id&action=remove\" method=\"post\">";
    $cartComponentElement =
      '
      ' . "$removeCartElement" . '
        <div class="products">

            <img class="product-image" src=' . "$product_image" . ' alt="#">

            <span class="product-name">' . "$product_tc_name" . '</span>

            <span class="product-description">' . "$product_tc_description" . '</span>

            <span class="unit-price">
                <h6 class="product-original-price">$' . number_format($product_price) . '</h6>
                <h5 class="product-new-price">$' . number_format($product_discount) . '</h5>
            </span>

            <span class="input-group number-spuinner">
                <button id="product-minus" class="btn btn-default minus">-</button>
                <input id="product-number" type="number" min="0" class="form-control text-center" value="1">
                <input name="product_id" type="hidden" value=' . "$product_id" . '</input>
                <button id="product-plus" value=' . "$product_id" . ' class="btn btn-default plus">+</i></button>
            </span>

            <span id="product-total-price" class="product-total-price">$' . number_format($product_totalPrice) . '</span>

            <span class="product-action-desktop">
                <button>移入收藏夹</button>
                <button type="submit" name="remove">移除</button>
            </span>

            <span class="product-action-mobile">
                <i class="save-icon"></i>
                <button type="submit" name="remove"><i class="remove-icon"></i></button>
            </span>

        </div>

    </form>
  ';
    echo $cartComponentElement;
  }
}

?> <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php


// foreach ($database->getData() as $key => $value) {
//   CartComponent($key, $value['product_description'], $value['product_price'], $value['product_image'], $value['product_name']);
//   $total = $total + (double) $value['product_price'];

// }
?>



<?php

if (strpos($_SERVER['REQUEST_URI'], "shopping-bag.php") !== false) {

  echo '
 <div class="shopping-bag-page-container container-fluid">
  <div class="shopping-bag-page-row row justify-content-center">

  <div  class="shopping-bag-page-form col-8">
            <div class="shopping-bag-content">
                <div class="shopping-bag-header">
                    <span class="product-img-space"></span>
                    <span class="product-name">Product Name</span>
                    <span class="product-description">Product Information</span>
                    <span class="product-unit-price">Price</span>
                    <span class="product-quantity">Quantity</span>
                    <span class="product-total-price">Amount</span>
                    <span class="product-action">Action</span>
                </div>
    ';
  $total = 0;
  if (isset($_SESSION['cart'])) {
    $product_id = array_column($_SESSION['cart'], 'product_id');
    $result = $database->getData();
    $number = 0;

    foreach ($product_id as $id) {
      foreach ($result as $key => $value) {
        if ($key == $id) {
          CartComponent(
            $key,
            $value['product_discount'],
            $value['product_en_brand'],
            $value['product_en_description'],
            $value['product_en_name'],
            $value['product_image'],
            $value['product_price'],
            $value['product_tc_brand'],
            $value['product_tc_description'],
            $value['product_tc_name'],
            $value['product_type'],
            $value['product_discount'],
            $value['product_quantity']
          );
          $total =  $total + (float) $value['product_discount'] * $value['product_quantity'];
          $number = $number + $value['product_quantity'];
          break;
        }
      }
    }
  } else {
    echo "<h5>Cart is Empty<h5>";
  }

  echo '
    </div>
    </div> 

    <div class="calculation-bar">
        <div class="calculation-bar-content col-8">
            <div class="calculation-content">
                <div class="total-products">
                    <span class="txt total">Total：</span>
                    <em class="item-count">';

  $count = $number;

  echo '' . $count . '</em>
                    <span class="txt pieces">Pieces</span>
                </div>

                <div class="total-payment">
                    <span class="txt altogether">Total：</span>
                    <em class="total-price">$' . number_format($total) . '</em>
                    <span class="txt currency">HKD</span>
                </div>
            </div>

            <input type="submit" name="login" value="Calculation" class="calculation-btn" />
        </div>
    </div>
</div>
</div>
    ';
} else if (strpos($_SERVER['REQUEST_URI'], "shopping-bag-tc.php") !== false) {
  echo '
  <div class="shopping-bag-page-container container-fluid">
   <div class="shopping-bag-page-row row justify-content-center">
 
   <div  class="shopping-bag-page-form col-8">
             <div class="shopping-bag-content">
                 <div class="shopping-bag-header">
                     <span class="product-img-space"></span>
                     <span class="product-name">商品名稱</span>
                     <span class="product-description">商品資料</span>
                     <span class="product-unit-price">單價</span>
                     <span class="product-quantity">數量</span>
                     <span class="product-total-price">金額</span>
                     <span class="product-action">操作</span>
                 </div>
     ';

  $total = 0;
  if (isset($_SESSION['cart'])) {
    $product_id = array_column($_SESSION['cart'], 'product_id');
    $result = $database->getData();

    foreach ($product_id as $id) {
      foreach ($result as $key => $value) {
        if ($key == $id) {
          CartComponent(
            $key,
            $value['product_discount'],
            $value['product_en_brand'],
            $value['product_en_description'],
            $value['product_en_name'],
            $value['product_image'],
            $value['product_price'],
            $value['product_tc_brand'],
            $value['product_tc_description'],
            $value['product_tc_name'],
            $value['product_type'],
            $_SESSION['totalPrice']
          );
          $total = $total + (float) $_SESSION['totalPrice'];
          break;
        }
      }
    }
  } else {
    echo "<h5>Cart is Empty<h5>";
  }

  echo '
     </div>
     </div> 
 
     <div class="calculation-bar">
         <div class="calculation-bar-content col-8">
             <div class="calculation-content">
                 <div class="total-products">
                     <span class="txt total">總共：</span>
                     <em class="item-count">';


  $count = count($_SESSION['cart']);

  echo '' . $count . '</em>
                     <span class="txt pieces">件</span>
                 </div>
 
                 <div class="total-payment">
                     <span class="txt altogether">合計：</span>
                     <em class="total-price">$' . number_format($total) . '</em>
                     <span class="txt currency">HKD</span>
                 </div>
             </div>
 
             <input type="submit" name="login" value="結算" class="calculation-btn" />
         </div>
     </div>
 </div>
 </div>
     ';
}



?>