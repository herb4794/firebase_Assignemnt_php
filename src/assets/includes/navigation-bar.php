<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
session_start();

if(isset($_SESSION['status'])){
  echo "<h5>". $_SESSION['status']. "</h5>";
}

if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Header of Navigation-Bar -->
<header>

    <div class="nav-container">
        <!-- Start of Navigation Menu Items -->
        <nav>

            <!-- Navigation Menu Items of Mobile -->
            <ul class="mobile-nav">
                <li>
                    <a href="#" class="link-bag">
                        <p>9+</p>
                    </a>
                </li>
                <li>
                    <a href="../www/index-tc.php">
                        <img src="../assets/images/navigation-bar/corporation-logo/HVAR_mall.png">
                    </a>
                </li>
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon">
                            <span class="line-top"></span>
                            <span class="line-bottom"></span>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Navigation Menu Items of Desktop -->
            <ul class="desktop-nav">
                <li>
                    <a href="../www/index-tc.php" class="desktop-logo">
                        <img src="../assets/images/navigation-bar/corporation-logo/HVAR_mall.png">
                    </a>
                </li>

                <!-- The Mobile Version Will Use The Following Items -->
                <li><a href="../www/best-sellers-tc.php" class="">熱賣商品</a></li>
                <li><a href="../www/todays-deals-tc.php" class="">本日熱賣</a></li>
                <li><a href="../www/new-releases-tc.php" class="">最新產品</a></li>
                <li><a href="../www/gifts-and-coupons-tc.php" class="">禮品卡 及 優惠卷</a></li>
                <li><a href="../www/support-tc.php" class="">支援服務</a></li>
                <li><a class="link-search"></a></li>
                <li>
                    <a class="link-bag">
                        <p>9+</p>
                    </a>
                </li>
                <li class="desktop-login">
                    <a href="../www/login-tc.php" class="link-user"></a>
                </li>

                <!-- This Login Option Is Only Available In The Mobile Version -->
                <li class="mobile-login"><a href="../www/login-tc.php" class=""><i class="link-user"></i>登入</a>
                </li>

            </ul>
        </nav>
        <!-- End of Navigation Menu Items -->

        <!-- Start of Search Container -->
        <!-- Desktop Search Container -->
        <div class="search-container hide">
            <div class="link-search"></div>
            <div class="search-bar">
                <form div="search-container-form" action="">
                    <input type="text" placeholder="搜尋" id="desktop-search">
                </form>
                <div class="link-close" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>

                <div class="recent-search">
                    <h2>最近搜尋</h2>
                    <ul>
                        <li>
                            <a href="#">Test 1</a>
                        </li>
                        <li>
                            <a href="#">Test 2</a>
                        </li>
                        <li>
                            <a href="#">Test 3</a>
                        </li>
                        <li>
                            <a href="#">Test 4</a>
                        </li>
                        <li>
                            <a href="#">Test 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mobile Search Container -->
        <div class="mobile-search-container active">
            <div class="link-search"></div>
            <div class="search-bar">
                <form div="search-container-form" action="">
                    <input type="text" placeholder="搜尋" id="mobile-search">
                </form>
                <span class="cancel-btn" onclick="document.getElementById(\'mobile-search\').value = \'\'">取消</span>

                <div class="recent-search">
                    <h2>最近搜尋</h2>
                    <ul>
                        <li>
                            <a href="#">Test 1</a>
                        </li>
                        <li>
                            <a href="#">Test 2</a>
                        </li>
                        <li>
                            <a href="#">Test 3</a>
                        </li>
                        <li>
                            <a href="#">Test 4</a>
                        </li>
                        <li>
                            <a href="#">Test 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="search-container-overlay" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>
    <!-- End of Search Container -->

    <!-- Start of Shopping-Bag Container -->
    <!--using PHP  coding by the Lawrence coding  -->
    <!-- Desktop Shopping-Bag Container -->
    <div class="shopping-bag-view hide">
        <div class="shopping-bag-container">
            <h2>您的購物袋是空的</h2>
            <ul>
                <li>
                    <a href="../www/shopping-bag-tc.php"><i class="bag-icon"></i>購物袋</a>
                </li>
                <li>
                    <a href="#"><i class="book-mark-icon"></i>收藏產品</a>
                </li>
                <li>
                    <a href="#"><i class="packet-icon"></i>訂單</a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Mobile Shopping-Bag Container -->
    <div class="mobile-shopping-bag-view hide">
        <div class="mobile-shopping-bag-container">
            <h2>您的購物袋是空的</h2>
            <ul>
                <li>
                    <a href="../www/shopping-bag-tc.php"><i class="bag-icon"></i>購物袋</a>
                </li>
                <li>
                    <a href="#"><i class="book-mark-icon"></i>收藏產品</a>
                </li>
                <li>
                    <a href="#"><i class="packet-icon"></i>訂單</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="search-container-overlay" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>
    <!-- End of Search Container -->
</header>
<!-- Header of Navigation-Bar -->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

} else {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Header of Navigation-Bar -->
<header>

    <div class="nav-container">
        <!-- Start of Navigation Menu Items -->
        <nav>

            <!-- Navigation Menu Items of Mobile -->
            <ul class="mobile-nav">
                <li>
                    <a href="#" class="link-bag">
                        <p>9+</p>
                    </a>
                </li>
                <li>
                    <a href="../www/index.php">
                        <img src="../assets/images/navigation-bar/corporation-logo/HVAR_mall.png">
                    </a>
                </li>
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon">
                            <span class="line-top"></span>
                            <span class="line-bottom"></span>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Navigation Menu Items of Desktop -->
            <ul class="desktop-nav">
                <li>
                    <a href="../www/index.php" class="desktop-logo">
                        <img src="../assets/images/navigation-bar/corporation-logo/HVAR_mall.png">
                    </a>
                </li>

                <!-- The Mobile Version Will Use The Following Items -->
                <li><a href="../www/best-sellers.php" class="">Best Sellers</a></li>
                <li><a href="../www/todays-deals.php" class="">Today\'s Deals</a></li>
                <li><a href="../www/new-releases.php" class="">New Releases</a></li>
                <li><a href="../www/gifts-and-coupons.php" class="">Gifts & Coupons</a></li>
                <li><a href="../www/support.php" class="">Support</a></li>
                <li><a class="link-search"></a></li>
                <li>
                    <a class="link-bag">
                        <p>9+</p>
                    </a>
                </li>
                <li class="desktop-login">
                    <a href="../www/login.php" class="link-user"></a>
                </li>

                <!-- This Login Option Is Only Available In The Mobile Version -->
                <li class="mobile-login"><a href="../www/login.php" class=""><i class="link-user"></i>Sign in</a>
                </li>

            </ul>
        </nav>
        <!-- End of Navigation Menu Items -->

        <!-- Start of Search Container -->
        <!-- Desktop Search Container -->
        <div class="search-container hide">
            <div class="link-search"></div>
            <div class="search-bar">
                <form div="search-container-form" action="">
                    <input type="text" placeholder="Search" id="desktop-search">
                </form>
                <div class="link-close" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>

                <div class="recent-search">
                    <h2>Recent Search</h2>
                    <ul>
                        <li>
                            <a href="#">Test 1</a>
                        </li>
                        <li>
                            <a href="#">Test 2</a>
                        </li>
                        <li>
                            <a href="#">Test 3</a>
                        </li>
                        <li>
                            <a href="#">Test 4</a>
                        </li>
                        <li>
                            <a href="#">Test 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mobile Search Container -->
        <div class="mobile-search-container active">
            <div class="link-search"></div>
            <div class="search-bar">
                <form div="search-container-form" action="">
                    <input type="text" placeholder="Search" id="mobile-search">
                </form>
                <span class="cancel-btn" onclick="document.getElementById(\'mobile-search\').value = \'\'">Cancel</span>

                <div class="recent-search">
                    <h2>Recent Search</h2>
                    <ul>
                        <li>
                            <a href="#">Test 1</a>
                        </li>
                        <li>
                            <a href="#">Test 2</a>
                        </li>
                        <li>
                            <a href="#">Test 3</a>
                        </li>
                        <li>
                            <a href="#">Test 4</a>
                        </li>
                        <li>
                            <a href="#">Test 5</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="search-container-overlay" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>
    <!-- End of Search Container -->

    <!-- Start of Shopping-Bag Container -->
    <!--using PHP  coding by the Lawrence coding  -->
    <!-- Desktop Shopping-Bag Container -->
    <div class="shopping-bag-view hide">
        <div class="shopping-bag-container">
            <h2>You Bag is Empty</h2>
            <ul>
                <li>
                    <a href="../www/shopping-bag.php"><i class="bag-icon"></i>Bag</a>
                </li>
                <li>
                    <a href="#"><i class="book-mark-icon"></i>Saved Items</a>
                </li>
                <li>
                    <a href="#"><i class="packet-icon"></i>Orders</a>
                </li>
                <li>
                    <a href="insert.php"><i class="packet-icon"></i>insert</a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Mobile Shopping-Bag Container -->
    <div class="mobile-shopping-bag-view hide">
        <div class="mobile-shopping-bag-container">
            <h2>You Bag is Empty</h2>
            <ul>
                <li>
                    <a href="../www/shopping-bag.php"><i class="bag-icon"></i>Bag</a>
                </li>
                <li>
                    <a href="#"><i class="book-mark-icon"></i>Saved Items</a>
                </li>
                <li>
                    <a href="#"><i class="packet-icon"></i>Orders</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="search-container-overlay" onclick="document.getElementById(\'desktop-search\').value = \'\'"></div>
    <!-- End of Search Container -->
</header>
<!-- Header of Navigation-Bar -->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';
}

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
