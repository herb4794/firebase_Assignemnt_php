<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Detecting URLs to generate JavaScript -->
<?php

echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- JavaScript of Bootstrap v4.6.2 - Bundle  -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js?v=1" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js?v=1" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<!-- JavaScript of Bootstrap v4.6.2 - Separate -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js?v=1" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js?v=1" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js?v=1" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<!-- JavaScript of Main -->
<script src="../assets/js/main.js?v=1"></script>

<!-- JavaScript of Navigation-Bar -->
<script src="../assets/js/navigation-bar.js?v=1"></script>

';

if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false || strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {

    echo '
    
    <!-- JavaScript of Category Box for Index -->
    <script src="../assets/js/index-category-box.js?v=1"></script>
    
    <!-- JavaScript of Product Card for Index -->
    <script src="../assets/js/product-card.js?v=1"></script>

    ';

} else if (strpos($_SERVER['REQUEST_URI'], "best-sellers.php") !== false || strpos($_SERVER['REQUEST_URI'], "best-sellers-tc.php") !== false) {

    echo '
        
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/promotional-pages.js?v=1"></script>

    <!-- JavaScript of Product Card for Index -->
    <script src="../assets/js/product-card.js?v=1"></script>

    ';

} else if (strpos($_SERVER['REQUEST_URI'], "todays-deals.php") !== false || strpos($_SERVER['REQUEST_URI'], "todays-deals-tc.php") !== false) {

    echo '
        
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/promotional-pages.js?v=1"></script>

    <!-- JavaScript of Product Card for Index -->
    <script src="../assets/js/product-card.js?v=1"></script>

    ';

} else if (strpos($_SERVER['REQUEST_URI'], "new-releases.php") !== false || strpos($_SERVER['REQUEST_URI'], "new-releases-tc.php") !== false) {

    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/promotional-pages.js?v=1"></script>

    <!-- JavaScript of Product Card for Index -->
    <script src="../assets/js/product-card.js?v=1"></script>

    ';
    
} else if (strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons.php") !== false || strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/promotional-pages.js?v=1"></script>
    
    <!-- JavaScript of Product Card for Index -->
    <script src="../assets/js/product-card.js?v=1"></script>
    
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "support.php") !== false || strpos($_SERVER['REQUEST_URI'], "support-tc.php") !== false) {

} else if (strpos($_SERVER['REQUEST_URI'], "login.php") !== false || strpos($_SERVER['REQUEST_URI'], "login-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/login-content.js?v=1"></script>
    
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "register.php") !== false || strpos($_SERVER['REQUEST_URI'], "register-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/register-content.js?v=1"></script>
    
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "forgot.php") !== false || strpos($_SERVER['REQUEST_URI'], "forgot-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/forgot-content.js?v=1"></script>
    
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "forgot-id.php") !== false || strpos($_SERVER['REQUEST_URI'], "forgot-id-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/forgot-id-content.js?v=1"></script>
    
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "shopping-bag.php") !== false || strpos($_SERVER['REQUEST_URI'], "shopping-bag-tc.php") !== false) {
    
    echo '
                
    <!-- JavaScript of Promotional Pages -->
    <script src="../assets/js/shopping-bag-content.js?v=1"></script>
    
    ';

}

?>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->