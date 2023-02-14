<?php
require_once ('/var/www/Assignment_1/server/dbcon.php');
// Handling visit requests from 'WebsiteLink'/src/www

if (strpos($_SERVER['REQUEST_URI'], "index.php") === false) {
    header('Location: ' . 'index.php');
}

?>


<?php

// Execution of the HTML5 Default Setting part
@include('../assets/includes/html-default.php');

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

    // Execution of the Promotion Carousel part
    @include('../assets/includes/promotion-carousel.php');

    // Execution of the Search Bar part for Index
    @include('../assets/includes/index-search-bar.php');
    
    // Execution of the Categories Box part for Index
    @include('../assets/includes/index-category-box.php');
    
    // Execution of the Recommendation Box part for Index
    @include('../assets/includes/recommendation-box.php');

    // Execution of the Footer part
    @include('../assets/includes/footer.php');

    // Execution of the JavaScript part
    @include('../assets/includes/script.php');

    ?>
</body>
</html>
