<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

//Get promotion banner(Database) //TODO: Link to a database which stored banner data and get data from it

//* The code below is just for sample data and should be REMOVE when linked to a database
$bannerIData = array(
    'en' => array(
        array(
            'src' => '../assets/images/promotion-banner/promotion-carousel/banneren_1.jpg',
            'href' => '#'
        ),
        array(
            'src' => '../assets/images/promotion-banner/promotion-carousel/banneren_2.jpg',
            'href' => '#'
        )
    ),
    'zh' => array(
        array(
            'src' => '../assets/images/promotion-banner/promotion-carousel/bannerzh_1.jpg',
            'href' => '#'
        ),
        array(
            'src' => '../assets/images/promotion-banner/promotion-carousel/bannerzh_2.jpg',
            'href' => '#'
        )
    ),
);

//====================

$lang;
if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {

    // echo '
    // <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    // <!-- Promotion Carousel Part of Index Body -->
    // <div class="promotion-carousel container-fluid">
    //     <div id="carouselExampleSlidesOnly" class="carousel slide row justify-content-center" data-ride="carousel">
    //         <div class="carousel-inner col-8">
    //             <a class="carousel-item active" href="#">
    //                 <img src="../assets/images/promotion-banner/promotion-carousel/banneren_1.jpg" class="d-block w-100" alt="#">
    //             </a>
    //             <a class="carousel-item" href="#">
    //                 <img src="../assets/images/promotion-banner/promotion-carousel/banneren_2.jpg" class="d-block w-100" alt="#">
    //             </a>
    //         </div>
    //     </div>
    // </div>
    // <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    // ';
    $lang = 'en';

} else if (strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {

    // echo '
    // <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    // <!-- Promotion Carousel Part of Index Body -->
    // <div class="promotion-carousel container-fluid">
    //     <div id="carouselExampleSlidesOnly" class="carousel slide row justify-content-center" data-ride="carousel">
    //         <div class="carousel-inner col-8">
    //             <a class="carousel-item active" href="#">
    //                 <img src="../assets/images/promotion-banner/promotion-carousel/bannerzh_1.jpg" class="d-block w-100" alt="#">
    //             </a>
    //             <a class="carousel-item" href="#">
    //                 <img src="../assets/images/promotion-banner/promotion-carousel/bannerzh_2.jpg" class="d-block w-100" alt="#">
    //             </a>
    //         </div>
    //     </div>
    // </div>
    // <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    // ';
    $lang = 'zh';

}


echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Promotion Carousel Part of Index Body -->
<div class="promotion-carousel container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide row justify-content-center" data-ride="carousel">
        <div class="carousel-inner col-8">
';
//New code
echo '
            <a class="carousel-item active" href="' . $bannerIData[$lang][0]['href'] . '">
                <img src="' . $bannerIData[$lang][0]['src'] . '" class="d-block w-100" alt="#">
            </a>
';

for ($banner = 1; $banner < count($bannerIData[$lang]); $banner++) {
    echo '
            <a class="carousel-item" href="' . $bannerIData[$lang][$banner]['href'] . '">
                <img src="' . $bannerIData[$lang][$banner]['src'] . '" class="d-block w-100" alt="#">
            </a>
    ';
}
//New code End
echo '
        </div>
    </div>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';



?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->