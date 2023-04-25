<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

// Alert's added Product to Bag  
require_once "../../server/dbcon.php";
require_once '../../server/cart.php';
$database = new dbcon();
@include('../assets/includes/add-to-bag-alert.php');
$products = $database->getData();

if (isset($_POST['add'])) {
  addToCart();
}

function products_composer (
    $product_id,
    $product_discount = null, 
    $product_en_brand = null, 
    $product_en_description = null, 
    $product_en_name = null, 
    $product_image = null,  
    $product_price = null, 
    $product_tc_brand = null, 
    $product_tc_description = null, 
    $product_tc_name = null,
    $product_type = null
    ) {

if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {
 $product_composer = "
   
    <form  method=\"post\" class=\"product-card-container col\">
    <a>

        <div class=\"product-image-container\">
            <img class=\"product-image\" src=\"$product_image\" alt=\"#\">
        </div>

        <div class=\"product-info-container\">

            <div class=\"like-share-save\">
                <i class=\"like-icon\"></i>
                <i class=\"share-icon\"></i>
                <i></i>
                <i class=\"save-icon\"></i>
            </div>

            <h5 class=\"product-brand\">$product_tc_brand</h5>
            <p class=\"product-introduction\">$product_tc_name</p>

            <div class=\"product-price-container\">
                <div class=\"product-price-row\">
                    <h5 class=\"product-new-price\">$".number_format($product_discount)."</h5>
                    <h6 class=\"product-original-price\">$".number_format($product_price)."</h6>
                </div>
                <button  type=\"submit\" name=\"add\" value=\"$product_id\">
                    <i class=\"bag-btn\"></i>
                    <i class=\"plus-icon\"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
   
    ";

    echo $product_composer;

} else if (strpos($_SERVER['REQUEST_URI'], ".php") !== false) {
    
     $product_composer = "
   
    <form  method=\"post\" class=\"product-card-container col\">
    <a>

        <div class=\"product-image-container\">
            <img class=\"product-image\" src=\"$product_image\" alt=\"#\">
        </div>

        <div class=\"product-info-container\">

            <div class=\"like-share-save\">
                <i class=\"like-icon\"></i>
                <i class=\"share-icon\"></i>
                <i></i>
                <i class=\"save-icon\"></i>
            </div>

            <h5 class=\"product-brand\">$product_en_brand</h5>
            <p class=\"product-introduction\">$product_en_name</p>

            <div class=\"product-price-container\">
                <div class=\"product-price-row\">
                <h5 class=\"product-new-price\">$".number_format($product_discount)."</h5>
                <h6 class=\"product-original-price\">$".number_format($product_price)."</h6>
                </div>
                <button  type=\"submit\" name=\"add\" value=\"$product_id\">
                    <i class=\"bag-btn\"></i>
                    <i class=\"plus-icon\"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
   
    ";

    echo $product_composer;
}

}


function gifts_products_composer (
    $product_id,
    $product_discount = null, 
    $product_en_brand = null, 
    $product_en_description = null, 
    $product_en_name = null, 
    $product_image = null,  
    $product_price = null, 
    $product_tc_brand = null, 
    $product_tc_description = null, 
    $product_tc_name = null,
    $product_type = null
    ) {

if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false && $product_type == "gifts") {
 $product_composer = "
   
    <form  method=\"post\" class=\"product-card-container col\">
    <a>

        <div class=\"product-image-container\">
            <img class=\"product-image\" src=\"$product_image\" alt=\"#\">
        </div>

        <div class=\"product-info-container\">

            <div class=\"like-share-save\">
                <i class=\"like-icon\"></i>
                <i class=\"share-icon\"></i>
                <i></i>
                <i class=\"save-icon\"></i>
            </div>

            <h5 class=\"product-brand\">$product_tc_brand</h5>
            <p class=\"product-introduction\">$product_tc_name</p>

            <div class=\"product-price-container\">
                <div class=\"product-price-row\">
                    <h5 class=\"product-new-price\">$".number_format($product_discount)."</h5>
                    <h6 class=\"product-original-price\">$".number_format($product_price)."</h6>
                </div>
                <button  type=\"submit\" name=\"add\" value=\"$product_id\">
                    <i class=\"bag-btn\"></i>
                    <i class=\"plus-icon\"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
   
    ";

    echo $product_composer;

} else if (strpos($_SERVER['REQUEST_URI'], ".php") !== false && $product_type == "gifts") {
    
     $product_composer = "
   
    <form  method=\"post\" class=\"product-card-container col\">
    <a>

        <div class=\"product-image-container\">
            <img class=\"product-image\" src=\"$product_image\" alt=\"#\">
        </div>

        <div class=\"product-info-container\">

            <div class=\"like-share-save\">
                <i class=\"like-icon\"></i>
                <i class=\"share-icon\"></i>
                <i></i>
                <i class=\"save-icon\"></i>
            </div>

            <h5 class=\"product-brand\">$product_en_brand</h5>
            <p class=\"product-introduction\">$product_en_name</p>

            <div class=\"product-price-container\">
                <div class=\"product-price-row\">
                <h5 class=\"product-new-price\">$".number_format($product_discount)."</h5>
                <h6 class=\"product-original-price\">$".number_format($product_price)."</h6>
                </div>
                <button  type=\"submit\" name=\"add\" value=\"$product_id\">
                    <i class=\"bag-btn\"></i>
                    <i class=\"plus-icon\"></i>
                </button>
            </div>

        </div>

    </a>
    </form>
   
    ";

    echo $product_composer;
}

}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
