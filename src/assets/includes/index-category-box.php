<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Detecting URLs to generate CSS -->
    <div class="index-category-box-container container-fluid">
        <div class="index-category-box-row row justify-content-center">
            <div class="index-category-box col-8">
    
                <!-- Desktop version of the Category List -->
                <div class="desktop-category-list">
                    <h5>Product Category</h5>
                    <ul>
                        <li><a href="#">Home Life</a></li>
                        <li><a href="#">Women\'s Clothing/Shoes/Goods</a></li>
                        <li><a href="#">Men\'s Clothing/Shoes/Goods</a></li>
                        <li><a href="#">Bags/Accessories</a></li>
                        <li><a href="#">Sports Outdoor</a></li>
                        <li><a href="#">3C Digital/Mobile Phone/Smart Device</a></li>
                        <li><a href="#">Notebook/Network Services</a></li>
                        <li><a href="#">Model/Animation/Peripheral Products</a></li>
                        <li><a href="#">Toys/Mother & Child Products</a></li>
                        <li><a href="#">Car/Virtual</a></li>
                        <li><a href="#">Home Appliance/Audio-Visual</a></li>
                        <li><a href="#">Beauty & Toiletries</a></li>
                        <li><a href="#">Snacks & Drinks</a></li>
                        <li><a href="#">Medicine & Health</a></li>
                    </ul>
                </div>
    
                <!-- Mobile version of the Category List -->
                <div class="mobile-category-list">
                    <i class="link-list"></i>
                    <div class="mobile-category-overlay">
                        <h5>Product Category</h5>
                        <ul>
                            <li><a href="#">Home Life</a></li>
                            <li><a href="#">Women\'s Clothing/Shoes/Goods</a></li>
                            <li><a href="#">Men\'s Clothing/Shoes/Goods</a></li>
                            <li><a href="#">Bags/Accessories</a></li>
                            <li><a href="#">Sports Outdoor</a></li>
                            <li><a href="#">3C Digital/Mobile Phone/Smart Device</a></li>
                            <li><a href="#">Notebook/Network Services</a></li>
                            <li><a href="#">Model/Animation/Peripheral Products</a></li>
                            <li><a href="#">Toys/Mother & Child Products</a></li>
                            <li><a href="#">Car/Virtual</a></li>
                            <li><a href="#">Home Appliance/Audio-Visual</a></li>
                            <li><a href="#">Beauty & Toiletries</a></li>
                            <li><a href="#">Snacks & Drinks</a></li>
                            <li><a href="#">Medicine & Health</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- Promotion Carousel in the Category Box -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">4</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4">5</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_1.jpg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_2.jpeg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_3.jpeg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_4.jpg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_5.jpg" class="d-block w-100" alt="#">
                        </div>
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

    <!-- Detecting URLs to generate CSS -->
    <div class="index-category-box-container container-fluid">
        <div class="index-category-box-row row justify-content-center">
            <div class="index-category-box col-8">
    
                <!-- Desktop version of the Category List -->
                <div class="desktop-category-list">
                    <h5>商品分類</h5>
                    <ul>
                        <li><a href="#">居家生活</a></li>
                        <li><a href="#">女裝/女鞋/女士精品</a></li>
                        <li><a href="#">男裝/男鞋/男士精品</a></li>
                        <li><a href="#">箱包/配飾</a></li>
                        <li><a href="#">運動戶外</a></li>
                        <li><a href="#">3C數碼/手機/智能設備</a></li>
                        <li><a href="#">筆記本/網絡服務</a></li>
                        <li><a href="#">模型/動漫/周邊</a></li>
                        <li><a href="#">玩具/母嬰用品</a></li>
                        <li><a href="#">汽車/虛擬</a></li>
                        <li><a href="#">家電/影音</a></li>
                        <li><a href="#">美妝洗護</a></li>
                        <li><a href="#">零食飲料</a></li>
                        <li><a href="#">醫藥健康</a></li>
                    </ul>
                </div>
    
                <!-- Mobile version of the Category List -->
                <div class="mobile-category-list">
                    <i class="link-list"></i>
                    <div class="mobile-category-overlay">
                        <h5>商品分類</h5>
                        <ul>
                            <li><a href="#">居家生活</a></li>
                            <li><a href="#">女裝/女鞋/女士精品</a></li>
                            <li><a href="#">男裝/男鞋/男士精品</a></li>
                            <li><a href="#">箱包/配飾</a></li>
                            <li><a href="#">運動戶外</a></li>
                            <li><a href="#">3C數碼/手機/智能設備</a></li>
                            <li><a href="#">筆記本/網絡服務</a></li>
                            <li><a href="#">模型/動漫/周邊</a></li>
                            <li><a href="#">玩具/母嬰用品</a></li>
                            <li><a href="#">汽車/虛擬</a></li>
                            <li><a href="#">家電/影音</a></li>
                            <li><a href="#">美妝洗護</a></li>
                            <li><a href="#">零食飲料</a></li>
                            <li><a href="#">醫藥健康</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- Promotion Carousel in the Category Box -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">1</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">2</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">3</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">4</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4">5</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_1.jpg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_2.jpeg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_3.jpeg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_4.jpg" class="d-block w-100" alt="#">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/promotion-banner/category-box/bannerzh_5.jpg" class="d-block w-100" alt="#">
                        </div>
                    </div>
                </div>
    
            </div>
    
        </div>
    </div>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

} else {
    
}

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->