<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

require_once ( '/var/www/Assignment_1//server/dbcon.php');
if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="recommendation-box-container container-fluid">
        <div class="recommendation-box-row row justify-content-center">
            <div class="recommendation-box col-8">
                <div class="recommendation-box-title">
                    <h5 class="personalized-recommendation">Personalized Recommendation</h5>
                </div>

                <div class="recommend-products-container container-fluid">
                    <div class="recommendation-box-row row justify-content-around">
    ';

    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');

    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');

    echo '
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

} else if (strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="recommendation-box-container container-fluid">
        <div class="recommendation-box-row row justify-content-center">
            <div class="recommendation-box col-8">
                <div class="recommendation-box-title">
                    <h5 class="personalized-recommendation">個性推薦</h5>
                </div>

                <div class="recommend-products-container container-fluid">
                    <div class="recommendation-box-row row justify-content-around">
    ';

    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
require_once
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');
    @include('../assets/includes/product.php');

    echo '
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

}

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
