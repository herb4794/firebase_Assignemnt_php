<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

// Alert's added Product to Bag  
require_once  ('/var/www/Assignment_1/server/dbcon.php');

// $database = new dbcon();
@include('../assets/includes/add-to-bag-alert.php');
// $products = $database->getData();

// function products_composer ($product_image,$produst_name, $product_description, $product_price){

if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

 '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <form action="#" method="post" class="product-card-container col">
    <a herf="#">

        <div class="product-image-container">
            <img class="product-image" src="../assets/images/products/product_1.jpg" alt="#">
        </div>

        <div class="product-info-container">

            <div class="like-share-save">
                <i class="like-icon"></i>
                <i class="share-icon"></i>
                <i></i>
                <i class="save-icon"></i>
            </div>

            <h5 class="product-brand">Apple</h5>
            <p class="product-introduction">$product_name</p>

            <div class="product-price-container">
                <div class="product-price-row">
                    <h5 class="product-new-price">$10000</h5>
                    <h6 class="product-original-price">$20000</h6>
                </div>
                <button>
                    <input type="hidden" name="product_id" value="$productID"></input>
                    <i class="bag-btn"></i>
                    <i class="plus-icon"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

    // echo $product_composer;

} else {
    
    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <form action="#" method="post" class="product-card-container col">
    <a herf="#">

        <div class="product-image-container">
            <img class="product-image" src="../assets/images/products/product_1.jpg" alt="#">
        </div>

        <div class="product-info-container">

            <div class="like-share-save">
                <i class="like-icon"></i>
                <i class="share-icon"></i>
                <i></i>
                <i class="save-icon"></i>
            </div>

            <h5 class="product-brand">Apple</h5>
            <p class="product-introduction">Premium Water Filter</p>

            <div class="product-price-container">
                <div class="product-price-row">
                    <h5 class="product-new-price">$10000</h5>
                    <h6 class="product-original-price">$20000</h6>
                </div>
                <button>
                    <input type="hidden" name="product_id" value="$productID"></input>
                    <i class="bag-btn"></i>
                    <i class="plus-icon"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

}

// }
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
