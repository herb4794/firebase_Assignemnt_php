<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- HTML5 Default Settings -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Website Icon -->
<link rel="icon" type="image/png" href="#" sizes="128x128" />

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<!-- CSS File -->
<!-- CSS of Bootstrap v4.6.2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css?v=1" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!-- CSS of Style -->
<link rel="stylesheet" href="../assets/css/style.css?v=1" />

<!-- CSS of Navigation Bar -->
<link rel="stylesheet" href="../assets/css/navigation-bar.css?v=1" />

';

// Detecting URLs to generate CSS


//New code
$cssTemplate = array(
    'add-to-bag-alert' => array(
        'name' => 'Product Add to Bag show Alert',
        'href' => 'add-to-bag-alert.css?v=1'
    ),
    'forgot-content' => array(
        'name' => 'Forgot Password Content',
        'href' => 'forgot-content.css?v=1'
    ),
    'forgot-id-content' => array(
        'name' => 'Forgot ID Content',
        'href' => 'forgot-id-content.css?v=1'
    ),
    'index-category-box' => array(
        'name' => 'Categories Box for Index',
        'href' => 'index-category-box.css?v=1'
    ),
    'index-search-bar' => array(
        'name' => 'Search Bar for Index',
        'href' => 'index-search-bar.css?v=1'
    ),
    'login-content' => array(
        'name' => 'Login Content',
        'href' => 'login-content.css?v=1'
    ),
    'product' => array(
        'name' => 'Product Card',
        'href' => 'product.css?v=1'
    ),
    'promotion-carousel' => array(
        'name' => 'Promotion Carousel',
        'href' => 'promotion-carousel.css?v=1'
    ),
    'promotional-pages' => array(
        'name' => 'Best Sellers Content',
        'href' => 'promotional-pages.css?v=1'
    ),
    'recommendation-box' => array(
        'name' => 'Recommendation Box for Index',
        'href' => 'recommendation-box.css?v=1'
    ),
    'register-content' => array(
        'name' => 'Register Content',
        'href' => 'register-content.css?v=1'
    ),
    'shopping-bag-content' => array(
        'name' => 'Shopping Bag Content',
        'href' => 'shopping-bag-content.css?v=1'
    ),
    'support' => array(
        'name' => 'Support Content',
        'href' => 'support.css?v=1'
    ),
);
$cssNeeded = match (substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1)) {
    'index.php', 'index-tc.php' =>array('promotion-carousel','index-search-bar','index-category-box','recommendation-box','product','add-to-bag-alert'),
    'best-sellers.php','best-sellers-tc.php' => array('promotional-pages','product','add-to-bag-alert'),
    'todays-deals.php','todays-deals-tc.php' => array('promotional-pages','product','add-to-bag-alert'),
    'new-releases.php','new-releases-tc.php' => array('promotional-pages','product','add-to-bag-alert'),
    'gifts-and-coupons.php','gifts-and-coupons-tc.php' => array('promotional-pages','product','add-to-bag-alert'),
    'support.php','support-tc.php' => array('support'),
    'login.php','login-tc.php' => array('login-content'),
    'register.php','register-tc.php' => array('register-content'),
    'forgot.php','forgot-tc.php' => array('forgot-content'),
    'forgot-id.php','forgot-id-tc.php' => array('forgot-id-content'),
    'shopping-bag.php','shopping-bag-tc.php' => array('shopping-bag-content'),
};
foreach ($cssNeeded as $key) {
    echo '<!-- CSS of '. $cssTemplate[$key]['name'] . ' -->';
    echo '<link rel="stylesheet" href="../assets/css/' . $cssTemplate[$key]['href'] . '" />
    
    ';
}
//New Code End

// //Old code
// if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false || strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {

//     echo '
    
//     <!-- CSS of Promotion Carousel -->
//     <link rel="stylesheet" href="../assets/css/promotion-carousel.css?v=1" />

//     <!-- CSS of Search Bar for Index -->
//     <link rel="stylesheet" href="../assets/css/index-search-bar.css?v=1" />

//     <!-- CSS of Categories Box for Index -->
//     <link rel="stylesheet" href="../assets/css/index-category-box.css?v=1" />

//     <!-- CSS of Recommendation Box for Index -->
//     <link rel="stylesheet" href="../assets/css/recommendation-box.css?v=1" />

//     <!-- CSS of Product Card -->
//     <link rel="stylesheet" href="../assets/css/product.css?v=1" />
    
//     <!-- CSS of Product Add to Bag show Alert -->
//     <link rel="stylesheet" href="../assets/css/add-to-bag-alert.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "best-sellers.php") !== false || strpos($_SERVER['REQUEST_URI'], "best-sellers-tc.php") !== false) {

//     echo '
    
//     <!-- CSS of Best Sellers Content -->
//     <link rel="stylesheet" href="../assets/css/promotional-pages.css?v=1" />

//     <!-- CSS of Product Card -->
//     <link rel="stylesheet" href="../assets/css/product.css?v=1" />
    
//     <!-- CSS of Product Add to Bag show Alert -->
//     <link rel="stylesheet" href="../assets/css/add-to-bag-alert.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "todays-deals.php") !== false || strpos($_SERVER['REQUEST_URI'], "todays-deals-tc.php") !== false) {

//     echo '
    
//     <!-- CSS of Best Sellers Content -->
//     <link rel="stylesheet" href="../assets/css/promotional-pages.css?v=1" />

//     <!-- CSS of Product Card -->
//     <link rel="stylesheet" href="../assets/css/product.css?v=1" />
    
//     <!-- CSS of Product Add to Bag show Alert -->
//     <link rel="stylesheet" href="../assets/css/add-to-bag-alert.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "new-releases.php") !== false || strpos($_SERVER['REQUEST_URI'], "new-releases-tc.php") !== false) {

//     echo '
    
//     <!-- CSS of Best Sellers Content -->
//     <link rel="stylesheet" href="../assets/css/promotional-pages.css?v=1" />

//     <!-- CSS of Product Card -->
//     <link rel="stylesheet" href="../assets/css/product.css?v=1" />
    
//     <!-- CSS of Product Add to Bag show Alert -->
//     <link rel="stylesheet" href="../assets/css/add-to-bag-alert.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons.php") !== false || strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons-tc.php") !== false) {

//     echo '
    
//     <!-- CSS of Best Sellers Content -->
//     <link rel="stylesheet" href="../assets/css/promotional-pages.css?v=1" />

//     <!-- CSS of Product Card -->
//     <link rel="stylesheet" href="../assets/css/product.css?v=1" />
    
//     <!-- CSS of Product Add to Bag show Alert -->
//     <link rel="stylesheet" href="../assets/css/add-to-bag-alert.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "support.php") !== false || strpos($_SERVER['REQUEST_URI'], "support-tc.php") !== false) {

//     echo '
        
//     <!-- CSS of Support Content -->
//     <link rel="stylesheet" href="../assets/css/support.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "login.php") !== false || strpos($_SERVER['REQUEST_URI'], "login-tc.php") !== false) {

//     echo '
        
//     <!-- CSS of Login Content -->
//     <link rel="stylesheet" href="../assets/css/login-content.css?v=1" />
    
//     ';

// } else if (strpos($_SERVER['REQUEST_URI'], "register.php") !== false || strpos($_SERVER['REQUEST_URI'], "register-tc.php") !== false) {

//     echo '
        
//     <!-- CSS of Register Content -->
//     <link rel="stylesheet" href="../assets/css/register-content.css?v=1" />
    
//     ';
// } else if (strpos($_SERVER['REQUEST_URI'], "forgot.php") !== false || strpos($_SERVER['REQUEST_URI'], "forgot-tc.php") !== false) {

//     echo '
        
//     <!-- CSS of Forgot Password Content -->
//     <link rel="stylesheet" href="../assets/css/forgot-content.css?v=1" />
    
//     ';
// } else if (strpos($_SERVER['REQUEST_URI'], "forgot-id.php") !== false || strpos($_SERVER['REQUEST_URI'], "forgot-id-tc.php") !== false) {

//     echo '
        
//     <!-- CSS of Forgot ID Content -->
//     <link rel="stylesheet" href="../assets/css/forgot-id-content.css?v=1" />
    
//     ';
// } else if (strpos($_SERVER['REQUEST_URI'], "shopping-bag.php") !== false || strpos($_SERVER['REQUEST_URI'], "shopping-bag-tc.php") !== false) {

//     echo '
   
//     <!-- CSS of Shopping Bag Content -->
//     <link rel="stylesheet" href="../assets/css/shopping-bag-content.css?v=1" />
    
//     ';
// }


echo '

<!-- CSS of Footer -->
<link rel="stylesheet" href="../assets/css/footer.css?v=1" />

';

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->