<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

require_once "../../server/dbcon.php";
require_once "../assets/includes/product.php";
$database = new dbcon();

$result = $database->getData();

if (strpos($_SERVER['REQUEST_URI'], "best-sellers") !== false) {

  if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Best-Sellers -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">熱賣產品</h2>
      <p class="promotional-pages-hints">根據銷售情況，我們熱賣的產品。每小時更新一次。</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">所有類別</h1>

          <div class="categories-sidelist">            
            <a href="#">應用程式及遊戲</a><br />
            <a href="#">書藉</a><br />
            <a href="#">汽車用品</a><br />
            <a href="#">嬰兒用品</a><br />
            <a href="#">美容用品</a><br />
            <a href="#">服裝配件</a><br />
            <a href="#">服裝、鞋及珠寶</a><br />
            <a href="#">電腦產品</a><br />
            <a href="#">數碼音樂</a><br />
            <a href="#">家裝及園藝</a><br />
            <a href="#">DVD</a><br />
            <a href="#">電子產品</a><br />
            <a href="#">食品、飲品及酒類</a><br />
            <a href="#">外語書藉</a><br />
            <a href="#">禮品卡</a><br />
            <a href="#">個人護理產品</a><br />
            <a href="#">興趣愛好</a><br />
            <a href="#">家庭及廚房用品</a><br />
            <a href="#">工業與科學產品</a><br />
            <a href="#">日語書藉</a><br />
            <a href="#">珠寶首飾</a><br />
            <a href="#">時尚產品</a><br />
            <a href="#">大型電器</a><br />
            <a href="#">音樂產品</a><br />
            <a href="#">樂器用品</a><br />
            <a href="#">辦工室用品</a><br />
            <a href="#">寵物用品</a><br />
            <a href="#">熱門影視</a><br />
            <a href="#">鞋及手袋產品</a><br />
            <a href="#">電腦軟件</a><br />
            <a href="#">運動戶外休閒</a><br />
            <a href="#">玩具與遊戲</a><br />
            <a href="#">視頻遊戲</a><br />
            <a href="#">手錶</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">All Categories</h1>
            <div class="categories-sidelist">
              <a href="#">應用程式及遊戲</a><br />
              <a href="#">書藉</a><br />
              <a href="#">汽車用品</a><br />
              <a href="#">嬰兒用品</a><br />
              <a href="#">美容用品</a><br />
              <a href="#">服裝配件</a><br />
              <a href="#">服裝、鞋及珠寶</a><br />
              <a href="#">電腦產品</a><br />
              <a href="#">數碼音樂</a><br />
              <a href="#">家裝及園藝</a><br />
              <a href="#">DVD</a><br />
              <a href="#">電子產品</a><br />
              <a href="#">食品、飲品及酒類</a><br />
              <a href="#">外語書藉</a><br />
              <a href="#">禮品卡</a><br />
              <a href="#">個人護理產品</a><br />
              <a href="#">興趣愛好</a><br />
              <a href="#">家庭及廚房用品</a><br />
              <a href="#">工業與科學產品</a><br />
              <a href="#">日語書藉</a><br />
              <a href="#">珠寶首飾</a><br />
              <a href="#">時尚產品</a><br />
              <a href="#">大型電器</a><br />
              <a href="#">音樂產品</a><br />
              <a href="#">樂器用品</a><br />
              <a href="#">辦工室用品</a><br />
              <a href="#">寵物用品</a><br />
              <a href="#">熱門影視</a><br />
              <a href="#">鞋及手袋產品</a><br />
              <a href="#">電腦軟件</a><br />
              <a href="#">運動戶外休閒</a><br />
              <a href="#">玩具與遊戲</a><br />
              <a href="#">視頻遊戲</a><br />
              <a href="#">手錶</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

   foreach ($result as $key => $item) {
     products_composer(
      $key, 
      $item['product_discount'], 
      $item['product_en_brand'], 
      $item['product_en_description'], 
      $item['product_en_name'], 
      $item['product_image'], 
      $item['product_price'], 
      $item['product_tc_brand'], 
      $item['product_tc_description'], 
      $item['product_tc_name'], 
      $item['product_type'] 
    );
   
 }
    
   


    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Best-Sellers -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  } else {

    
    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Best-Sellers -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">Best Sellers</h2>
      <p class="promotional-pages-hints">Our most popular products based on sales. Updated hourly.</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">All Categories</h1>

          <div class="categories-sidelist">
            <a href="#">Apps & Games</a><br />
            <a href="#">Audible Books & Originals</a><br />
            <a href="#">Automotive</a><br />
            <a href="#">Baby</a><br />
            <a href="#">Beauty</a><br />
            <a href="#">Clothing & Accessories</a><br />
            <a href="#">Clothing, Shoes & Jewelry</a><br />
            <a href="#">Computers</a><br />
            <a href="#">Digital Music</a><br />
            <a href="#">DIY, Tools & Garden</a><br />
            <a href="#">DVD</a><br />
            <a href="#">Electronics</a><br />
            <a href="#">Food, Beverages & Alcohol</a><br />
            <a href="#">Foreign Language Books</a><br />
            <a href="#">Gift Cards</a><br />
            <a href="#">Health & Personal Care</a><br />
            <a href="#">Hobbies</a><br />
            <a href="#">Home & Kitchen</a><br />
            <a href="#">Industrial & Scientific</a><br />
            <a href="#">Japanese Books</a><br />
            <a href="#">Jewelry</a><br />
            <a href="#">Kindle Store</a><br />
            <a href="#">Large Appliances</a><br />
            <a href="#">Music</a><br />
            <a href="#">Musical Instruments</a><br />
            <a href="#">Office Products</a><br />
            <a href="#">Pet Supplies</a><br />
            <a href="#">Prime Video</a><br />
            <a href="#">Shoes & Bags</a><br />
            <a href="#">Software</a><br />
            <a href="#">Sports & Outdoors</a><br />
            <a href="#">Toys & Games</a><br />
            <a href="#">Video Games</a><br />
            <a href="#">Wrist Watches</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">All Categories</h1>
            <div class="categories-sidelist">
              <a href="#">Apps & Games</a><br />
              <a href="#">Audible Books & Originals</a><br />
              <a href="#">Automotive</a><br />
              <a href="#">Baby</a><br />
              <a href="#">Beauty</a><br />
              <a href="#">Clothing & Accessories</a><br />
              <a href="#">Clothing, Shoes & Jewelry</a><br />
              <a href="#">Computers</a><br />
              <a href="#">Digital Music</a><br />
              <a href="#">DIY, Tools & Garden</a><br />
              <a href="#">DVD</a><br />
              <a href="#">Electronics</a><br />
              <a href="#">Food, Beverages & Alcohol</a><br />
              <a href="#">Foreign Language Books</a><br />
              <a href="#">Gift Cards</a><br />
              <a href="#">Health & Personal Care</a><br />
              <a href="#">Hobbies</a><br />
              <a href="#">Home & Kitchen</a><br />
              <a href="#">Industrial & Scientific</a><br />
              <a href="#">Japanese Books</a><br />
              <a href="#">Jewelry</a><br />
              <a href="#">Kindle Store</a><br />
              <a href="#">Large Appliances</a><br />
              <a href="#">Music</a><br />
              <a href="#">Musical Instruments</a><br />
              <a href="#">Office Products</a><br />
              <a href="#">Pet Supplies</a><br />
              <a href="#">Prime Video</a><br />
              <a href="#">Shoes & Bags</a><br />
              <a href="#">Software</a><br />
              <a href="#">Sports & Outdoors</a><br />
              <a href="#">Toys & Games</a><br />
              <a href="#">Video Games</a><br />
              <a href="#">Wrist Watches</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

   foreach ($result as $key => $item) {
    products_composer(
      $key, 
      $item['product_discount'], 
      $item['product_en_brand'], 
      $item['product_en_description'], 
      $item['product_en_name'], 
      $item['product_image'], 
      $item['product_price'], 
      $item['product_tc_brand'], 
      $item['product_tc_description'], 
      $item['product_tc_name'], 
      $item['product_type'] 
    );
   
 }

    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Best-Sellers -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  }

} else if (strpos($_SERVER['REQUEST_URI'], "todays-deals") !== false) {

  if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Today\'s Deals -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">本日熱賣商品</h2>
      <p class="promotional-pages-hints">查看我們的交易條款和條件<a href="#">這裡</a>。 查看我們的<a href="#">幫助頁面</a>，以及每個商品頁面的價格條款細節。</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">所有類別</h1>

          <div class="categories-sidelist">
            <a href="#">應用程式及遊戲</a><br />
            <a href="#">書藉</a><br />
            <a href="#">汽車用品</a><br />
            <a href="#">嬰兒用品</a><br />
            <a href="#">美容用品</a><br />
            <a href="#">服裝配件</a><br />
            <a href="#">服裝、鞋及珠寶</a><br />
            <a href="#">電腦產品</a><br />
            <a href="#">數碼音樂</a><br />
            <a href="#">家裝及園藝</a><br />
            <a href="#">DVD</a><br />
            <a href="#">電子產品</a><br />
            <a href="#">食品、飲品及酒類</a><br />
            <a href="#">外語書藉</a><br />
            <a href="#">禮品卡</a><br />
            <a href="#">個人護理產品</a><br />
            <a href="#">興趣愛好</a><br />
            <a href="#">家庭及廚房用品</a><br />
            <a href="#">工業與科學產品</a><br />
            <a href="#">日語書藉</a><br />
            <a href="#">珠寶首飾</a><br />
            <a href="#">時尚產品</a><br />
            <a href="#">大型電器</a><br />
            <a href="#">音樂產品</a><br />
            <a href="#">樂器用品</a><br />
            <a href="#">辦工室用品</a><br />
            <a href="#">寵物用品</a><br />
            <a href="#">熱門影視</a><br />
            <a href="#">鞋及手袋產品</a><br />
            <a href="#">電腦軟件</a><br />
            <a href="#">運動戶外休閒</a><br />
            <a href="#">玩具與遊戲</a><br />
            <a href="#">視頻遊戲</a><br />
            <a href="#">手錶</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">所有類別</h1>
            <div class="categories-sidelist">
              <a href="#">應用程式及遊戲</a><br />
              <a href="#">書藉</a><br />
              <a href="#">汽車用品</a><br />
              <a href="#">嬰兒用品</a><br />
              <a href="#">美容用品</a><br />
              <a href="#">服裝配件</a><br />
              <a href="#">服裝、鞋及珠寶</a><br />
              <a href="#">電腦產品</a><br />
              <a href="#">數碼音樂</a><br />
              <a href="#">家裝及園藝</a><br />
              <a href="#">DVD</a><br />
              <a href="#">電子產品</a><br />
              <a href="#">食品、飲品及酒類</a><br />
              <a href="#">外語書藉</a><br />
              <a href="#">禮品卡</a><br />
              <a href="#">個人護理產品</a><br />
              <a href="#">興趣愛好</a><br />
              <a href="#">家庭及廚房用品</a><br />
              <a href="#">工業與科學產品</a><br />
              <a href="#">日語書藉</a><br />
              <a href="#">珠寶首飾</a><br />
              <a href="#">時尚產品</a><br />
              <a href="#">大型電器</a><br />
              <a href="#">音樂產品</a><br />
              <a href="#">樂器用品</a><br />
              <a href="#">辦工室用品</a><br />
              <a href="#">寵物用品</a><br />
              <a href="#">熱門影視</a><br />
              <a href="#">鞋及手袋產品</a><br />
              <a href="#">電腦軟件</a><br />
              <a href="#">運動戶外休閒</a><br />
              <a href="#">玩具與遊戲</a><br />
              <a href="#">視頻遊戲</a><br />
              <a href="#">手錶</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

   foreach ($result as $key => $item) {
    products_composer(
      $key, 
      $item['product_discount'], 
      $item['product_en_brand'], 
      $item['product_en_description'], 
      $item['product_en_name'], 
      $item['product_image'], 
      $item['product_price'], 
      $item['product_tc_brand'], 
      $item['product_tc_description'], 
      $item['product_tc_name'], 
      $item['product_type'] 
    );
   
 }

    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Today\'s Deals -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  } else {

    
    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Today\'s Deals -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">Today\'s Deals on Popular Products</h2>
      <p class="promotional-pages-hints">View our terms and conditions for deals <a href="#">here</a>. View
      our <a href="#">help page</a>, and each product page for details of price conditions.</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">All Categories</h1>

          <div class="categories-sidelist">
            <a href="#">Apps & Games</a><br />
            <a href="#">Audible Books & Originals</a><br />
            <a href="#">Automotive</a><br />
            <a href="#">Baby</a><br />
            <a href="#">Beauty</a><br />
            <a href="#">Clothing & Accessories</a><br />
            <a href="#">Clothing, Shoes & Jewelry</a><br />
            <a href="#">Computers</a><br />
            <a href="#">Digital Music</a><br />
            <a href="#">DIY, Tools & Garden</a><br />
            <a href="#">DVD</a><br />
            <a href="#">Electronics</a><br />
            <a href="#">Food, Beverages & Alcohol</a><br />
            <a href="#">Foreign Language Books</a><br />
            <a href="#">Gift Cards</a><br />
            <a href="#">Health & Personal Care</a><br />
            <a href="#">Hobbies</a><br />
            <a href="#">Home & Kitchen</a><br />
            <a href="#">Industrial & Scientific</a><br />
            <a href="#">Japanese Books</a><br />
            <a href="#">Jewelry</a><br />
            <a href="#">Kindle Store</a><br />
            <a href="#">Large Appliances</a><br />
            <a href="#">Music</a><br />
            <a href="#">Musical Instruments</a><br />
            <a href="#">Office Products</a><br />
            <a href="#">Pet Supplies</a><br />
            <a href="#">Prime Video</a><br />
            <a href="#">Shoes & Bags</a><br />
            <a href="#">Software</a><br />
            <a href="#">Sports & Outdoors</a><br />
            <a href="#">Toys & Games</a><br />
            <a href="#">Video Games</a><br />
            <a href="#">Wrist Watches</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">All Categories</h1>
            <div class="categories-sidelist">
              <a href="#">Apps & Games</a><br />
              <a href="#">Audible Books & Originals</a><br />
              <a href="#">Automotive</a><br />
              <a href="#">Baby</a><br />
              <a href="#">Beauty</a><br />
              <a href="#">Clothing & Accessories</a><br />
              <a href="#">Clothing, Shoes & Jewelry</a><br />
              <a href="#">Computers</a><br />
              <a href="#">Digital Music</a><br />
              <a href="#">DIY, Tools & Garden</a><br />
              <a href="#">DVD</a><br />
              <a href="#">Electronics</a><br />
              <a href="#">Food, Beverages & Alcohol</a><br />
              <a href="#">Foreign Language Books</a><br />
              <a href="#">Gift Cards</a><br />
              <a href="#">Health & Personal Care</a><br />
              <a href="#">Hobbies</a><br />
              <a href="#">Home & Kitchen</a><br />
              <a href="#">Industrial & Scientific</a><br />
              <a href="#">Japanese Books</a><br />
              <a href="#">Jewelry</a><br />
              <a href="#">Kindle Store</a><br />
              <a href="#">Large Appliances</a><br />
              <a href="#">Music</a><br />
              <a href="#">Musical Instruments</a><br />
              <a href="#">Office Products</a><br />
              <a href="#">Pet Supplies</a><br />
              <a href="#">Prime Video</a><br />
              <a href="#">Shoes & Bags</a><br />
              <a href="#">Software</a><br />
              <a href="#">Sports & Outdoors</a><br />
              <a href="#">Toys & Games</a><br />
              <a href="#">Video Games</a><br />
              <a href="#">Wrist Watches</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

 
   foreach ($result as $key => $item) {
    products_composer(
      $key, 
      $item['product_discount'], 
      $item['product_en_brand'], 
      $item['product_en_description'], 
      $item['product_en_name'], 
      $item['product_image'], 
      $item['product_price'], 
      $item['product_tc_brand'], 
      $item['product_tc_description'], 
      $item['product_tc_name'], 
      $item['product_type'] 
    );
   
 }

    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Today\'s Deals -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  }

} else if (strpos($_SERVER['REQUEST_URI'], "new-releases") !== false) {

  if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of New Releases -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">最新產品</h2>
      <p class="promotional-pages-hints">根據銷售情況，我們最新的產品。每小時更新一次。</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">所有類別</h1>

          <div class="categories-sidelist">
            <a href="#">應用程式及遊戲</a><br />
            <a href="#">書藉</a><br />
            <a href="#">汽車用品</a><br />
            <a href="#">嬰兒用品</a><br />
            <a href="#">美容用品</a><br />
            <a href="#">服裝配件</a><br />
            <a href="#">服裝、鞋及珠寶</a><br />
            <a href="#">電腦產品</a><br />
            <a href="#">數碼音樂</a><br />
            <a href="#">家裝及園藝</a><br />
            <a href="#">DVD</a><br />
            <a href="#">電子產品</a><br />
            <a href="#">食品、飲品及酒類</a><br />
            <a href="#">外語書藉</a><br />
            <a href="#">禮品卡</a><br />
            <a href="#">個人護理產品</a><br />
            <a href="#">興趣愛好</a><br />
            <a href="#">家庭及廚房用品</a><br />
            <a href="#">工業與科學產品</a><br />
            <a href="#">日語書藉</a><br />
            <a href="#">珠寶首飾</a><br />
            <a href="#">時尚產品</a><br />
            <a href="#">大型電器</a><br />
            <a href="#">音樂產品</a><br />
            <a href="#">樂器用品</a><br />
            <a href="#">辦工室用品</a><br />
            <a href="#">寵物用品</a><br />
            <a href="#">熱門影視</a><br />
            <a href="#">鞋及手袋產品</a><br />
            <a href="#">電腦軟件</a><br />
            <a href="#">運動戶外休閒</a><br />
            <a href="#">玩具與遊戲</a><br />
            <a href="#">視頻遊戲</a><br />
            <a href="#">手錶</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">所有類別</h1>
            <div class="categories-sidelist">
              <a href="#">應用程式及遊戲</a><br />
              <a href="#">書藉</a><br />
              <a href="#">汽車用品</a><br />
              <a href="#">嬰兒用品</a><br />
              <a href="#">美容用品</a><br />
              <a href="#">服裝配件</a><br />
              <a href="#">服裝、鞋及珠寶</a><br />
              <a href="#">電腦產品</a><br />
              <a href="#">數碼音樂</a><br />
              <a href="#">家裝及園藝</a><br />
              <a href="#">DVD</a><br />
              <a href="#">電子產品</a><br />
              <a href="#">食品、飲品及酒類</a><br />
              <a href="#">外語書藉</a><br />
              <a href="#">禮品卡</a><br />
              <a href="#">個人護理產品</a><br />
              <a href="#">興趣愛好</a><br />
              <a href="#">家庭及廚房用品</a><br />
              <a href="#">工業與科學產品</a><br />
              <a href="#">日語書藉</a><br />
              <a href="#">珠寶首飾</a><br />
              <a href="#">時尚產品</a><br />
              <a href="#">大型電器</a><br />
              <a href="#">音樂產品</a><br />
              <a href="#">樂器用品</a><br />
              <a href="#">辦工室用品</a><br />
              <a href="#">寵物用品</a><br />
              <a href="#">熱門影視</a><br />
              <a href="#">鞋及手袋產品</a><br />
              <a href="#">電腦軟件</a><br />
              <a href="#">運動戶外休閒</a><br />
              <a href="#">玩具與遊戲</a><br />
              <a href="#">視頻遊戲</a><br />
              <a href="#">手錶</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

   foreach ($result as $key => $item) {
    products_composer(
      $key, 
      $item['product_discount'], 
      $item['product_en_brand'], 
      $item['product_en_description'], 
      $item['product_en_name'], 
      $item['product_image'], 
      $item['product_price'], 
      $item['product_tc_brand'], 
      $item['product_tc_description'], 
      $item['product_tc_name'], 
      $item['product_type'] 
    );
   
 }    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of New Releases -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  } else {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of New Releases -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">New Releases</h2>
      <p class="promotional-pages-hints">Our most popular products based on sales. Updated hourly.</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header">All Categories</h1>

          <div class="categories-sidelist">
            <a href="#">Apps & Games</a><br />
            <a href="#">Audible Books & Originals</a><br />
            <a href="#">Automotive</a><br />
            <a href="#">Baby</a><br />
            <a href="#">Beauty</a><br />
            <a href="#">Clothing & Accessories</a><br />
            <a href="#">Clothing, Shoes & Jewelry</a><br />
            <a href="#">Computers</a><br />
            <a href="#">Digital Music</a><br />
            <a href="#">DIY, Tools & Garden</a><br />
            <a href="#">DVD</a><br />
            <a href="#">Electronics</a><br />
            <a href="#">Food, Beverages & Alcohol</a><br />
            <a href="#">Foreign Language Books</a><br />
            <a href="#">Gift Cards</a><br />
            <a href="#">Health & Personal Care</a><br />
            <a href="#">Hobbies</a><br />
            <a href="#">Home & Kitchen</a><br />
            <a href="#">Industrial & Scientific</a><br />
            <a href="#">Japanese Books</a><br />
            <a href="#">Jewelry</a><br />
            <a href="#">Kindle Store</a><br />
            <a href="#">Large Appliances</a><br />
            <a href="#">Music</a><br />
            <a href="#">Musical Instruments</a><br />
            <a href="#">Office Products</a><br />
            <a href="#">Pet Supplies</a><br />
            <a href="#">Prime Video</a><br />
            <a href="#">Shoes & Bags</a><br />
            <a href="#">Software</a><br />
            <a href="#">Sports & Outdoors</a><br />
            <a href="#">Toys & Games</a><br />
            <a href="#">Video Games</a><br />
            <a href="#">Wrist Watches</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-header">All Categories</h1>
            <div class="categories-sidelist">
              <a href="#">Apps & Games</a><br />
              <a href="#">Audible Books & Originals</a><br />
              <a href="#">Automotive</a><br />
              <a href="#">Baby</a><br />
              <a href="#">Beauty</a><br />
              <a href="#">Clothing & Accessories</a><br />
              <a href="#">Clothing, Shoes & Jewelry</a><br />
              <a href="#">Computers</a><br />
              <a href="#">Digital Music</a><br />
              <a href="#">DIY, Tools & Garden</a><br />
              <a href="#">DVD</a><br />
              <a href="#">Electronics</a><br />
              <a href="#">Food, Beverages & Alcohol</a><br />
              <a href="#">Foreign Language Books</a><br />
              <a href="#">Gift Cards</a><br />
              <a href="#">Health & Personal Care</a><br />
              <a href="#">Hobbies</a><br />
              <a href="#">Home & Kitchen</a><br />
              <a href="#">Industrial & Scientific</a><br />
              <a href="#">Japanese Books</a><br />
              <a href="#">Jewelry</a><br />
              <a href="#">Kindle Store</a><br />
              <a href="#">Large Appliances</a><br />
              <a href="#">Music</a><br />
              <a href="#">Musical Instruments</a><br />
              <a href="#">Office Products</a><br />
              <a href="#">Pet Supplies</a><br />
              <a href="#">Prime Video</a><br />
              <a href="#">Shoes & Bags</a><br />
              <a href="#">Software</a><br />
              <a href="#">Sports & Outdoors</a><br />
              <a href="#">Toys & Games</a><br />
              <a href="#">Video Games</a><br />
              <a href="#">Wrist Watches</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-products-container container-fluid col">
          <div class="promotional-products-row row justify-content-around">
      ';

    foreach ($result as $key => $item) {
      products_composer(
        $key, 
        $item['product_discount'], 
        $item['product_en_brand'], 
        $item['product_en_description'], 
        $item['product_en_name'], 
        $item['product_image'], 
        $item['product_price'], 
        $item['product_tc_brand'], 
        $item['product_tc_description'], 
        $item['product_tc_name'], 
        $item['product_type'] 
      );
   
 } 

    echo '
          </div>
        </div>

      </div>
    </div>
    <!-- Content of New Releases -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  }

} else if (strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons") !== false) {

  if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
    
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Promotional Pages -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">禮品卡 及 優惠卷</h2>
      <p class="promotional-pages-hints">為您所愛的人購買禮品卡或優惠卷。</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header-gac">你有 HVAR.mall 禮品卡嗎?</h1>

          <div class="categories-sidelist-gac">
            <a href="../www/register-en.php">註冊帳戶</a><br />
            <a href="#">餘額及使用記錄</a><br />
            <a href="#">充值</a><br />
            <a href="#">Get up to 2.5 points for CVS reloads</a><br />
          </div>

          <h1 class="sidelist-header-gac">選擇一個類型</h1>

          <div class="categories-sidelist-gac">
            <a href="#">充值類型</a><br />
            <a href="#">電子郵件類型</a><br />
            <a href="#">打印類型</a><br />
            <a href="#">賀卡類型</a><br />
            <a href="#">盒子類型</a><br />
            <a href="#">信封類型</a><br />
            <a href="#">商品卷類型</a><br />
            <a href="#">量販優惠裝（每套10張）</a><br />
            <a href="#">使用最喜歡的照片</a><br />
            <a href="#">動畫片</a><br />
            <a href="#">在店舖購買</a><br />
          </div>

          <h1 class="sidelist-header-gac">用途選擇</h1>

          <div class="categories-sidelist-gac">
            <a href="#">生日</a><br />
            <a href="#">新生兒慶祝</a><br />
            <a href="#">婚禮慶賀</a><br />
            <a href="#">家庭聚會慶祝</a><br />
            <a href="#">禮物</a><br />
            <a href="#">Kindle</a><br />
            <a href="#">新年賀禮</a><br />
            <a href="#">白色情人節</a><br />
            <a href="#">新工慶賀</a><br />
            <a href="#">母親節禮物</a><br />
            <a href="#">父親節禮物</a><br />
            <a href="#">敬老節禮物</a><br />
            <a href="#">聖誕禮物</a><br />
            <a href="#">年終賀禮</a><br />
          </div>

          <h1 class="sidelist-header-gac">常見問題</h1>

          <div class="categories-sidelist-gac">
            <a href="#">HVAR.mall 禮品卡細則</a><br />
            <a href="#">有效日期</a><br />
            <a href="#">關於下單與配送</a><br />
            <a href="#">關於使用</a><br />
            <a href="#">重新發送電子郵件類型</a><br />
            <a href="#">預約發送電子郵件類型管理</a><br />
            <a href="#">使用限制</a><br />
            <a href="#">無法使用的情況</a><br />
            <a href="#">用於其他訂單</a><br />
            <a href="#">HAVR.mall 禮品卡幫助</a><br />
            <a href="#">關於購買的注意事項</a><br />
            <a href="#">關於欺詐的注意事項</a><br />
            <a href="#">根據資金結算法的表述</a><br />
            <a href="#">組織變更通知</a><br />
            <a href="#">產品名稱和徽標變更公告</a><br />
          </div>

          <h1 class="sidelist-header-gac">企業禮品卡</h1>

          <div class="categories-sidelist-gac">
            <a href="#">企業禮品卡</a><br />
            <a href="#">常見問題</a><br />
          </div>

          <h1 class="sidelist-header-gac">禮品訂單</h1>

          <div class="categories-sidelist-gac">
            <a href="#">什麼是禮品訂單</a><br />
            <a href="#">提交禮品訂單的方法</a><br />
            <a href="#">禮品包裝</a><br />
            <a href="#">願望清單</a><br />
            <a href="#">禮品商店</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-title">禮品卡 及 優惠卷 相關分類</h1>
            <h1 class="sidelist-header-gac">你有 HVAR.mall 禮品卡嗎?</h1>

            <div class="categories-sidelist-gac">
              <a href="../www/register-en.php">註冊帳戶</a><br />
              <a href="#">餘額及使用記錄</a><br />
              <a href="#">充值</a><br />
              <a href="#">Get up to 2.5 points for CVS reloads</a><br />
            </div>
  
            <h1 class="sidelist-header-gac">選擇一個類型</h1>
  
            <div class="categories-sidelist-gac">
              <a href="#">充值類型</a><br />
              <a href="#">電子郵件類型</a><br />
              <a href="#">打印類型</a><br />
              <a href="#">賀卡類型</a><br />
              <a href="#">盒子類型</a><br />
              <a href="#">信封類型</a><br />
              <a href="#">商品卷類型</a><br />
              <a href="#">量販優惠裝（每套10張）</a><br />
              <a href="#">使用最喜歡的照片</a><br />
              <a href="#">動畫片</a><br />
              <a href="#">在店舖購買</a><br />
            </div>
  
            <h1 class="sidelist-header-gac">用途選擇</h1>
  
            <div class="categories-sidelist-gac">
              <a href="#">生日</a><br />
              <a href="#">新生兒慶祝</a><br />
              <a href="#">婚禮慶賀</a><br />
              <a href="#">家庭聚會慶祝</a><br />
              <a href="#">禮物</a><br />
              <a href="#">Kindle</a><br />
              <a href="#">新年賀禮</a><br />
              <a href="#">白色情人節</a><br />
              <a href="#">新工慶賀</a><br />
              <a href="#">母親節禮物</a><br />
              <a href="#">父親節禮物</a><br />
              <a href="#">敬老節禮物</a><br />
              <a href="#">聖誕禮物</a><br />
              <a href="#">年終賀禮</a><br />
            </div>
  
            <h1 class="sidelist-header-gac">常見問題</h1>
  
            <div class="categories-sidelist-gac">
              <a href="#">HVAR.mall 禮品卡細則</a><br />
              <a href="#">有效日期</a><br />
              <a href="#">關於下單與配送</a><br />
              <a href="#">關於使用</a><br />
              <a href="#">重新發送電子郵件類型</a><br />
              <a href="#">預約發送電子郵件類型管理</a><br />
              <a href="#">使用限制</a><br />
              <a href="#">無法使用的情況</a><br />
              <a href="#">用於其他訂單</a><br />
              <a href="#">HAVR.mall 禮品卡幫助</a><br />
              <a href="#">關於購買的注意事項</a><br />
              <a href="#">關於欺詐的注意事項</a><br />
              <a href="#">根據資金結算法的表述</a><br />
              <a href="#">組織變更通知</a><br />
              <a href="#">產品名稱和徽標變更公告</a><br />
            </div>
  
            <h1 class="sidelist-header-gac">企業禮品卡</h1>
  
            <div class="categories-sidelist-gac">
              <a href="#">企業禮品卡</a><br />
              <a href="#">常見問題</a><br />
            </div>
  
            <h1 class="sidelist-header-gac">禮品訂單</h1>
  
            <div class="categories-sidelist-gac">
              <a href="#">什麼是禮品訂單</a><br />
              <a href="#">提交禮品訂單的方法</a><br />
              <a href="#">禮品包裝</a><br />
              <a href="#">願望清單</a><br />
              <a href="#">禮品商店</a><br />
            </div>            
          </div>

        </div>

        <div class="promotional-gac-container container-fluid col">

          <div class="immediate-delivery-row row justify-content-around">
            <div class="immediate-delivery-container col-8">
              <h5>下單後立即配送</h5>
              <div class="immediate-delivery">
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-1_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-2_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-3_tc.jpg"></a>
              </div>
            </div>
          </div>

          <div class="expedited-shipping-row row justify-content-around">
            <div class="expedited-shipping-container col-8">
              <h5>加急配送當日或次日送達</h5>
              <div class="expedited-shipping">
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-1_tc.png"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-2_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-3_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-4_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-5_tc.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-6_tc.jpg"></a>
              </div>

              <div class="promotion-carousel">
                <div id="carouselExampleSlidesOnly" class="carousel slide justify-content-center" data-ride="carousel">
                  <div class="carousel-inner">
                    <a class="carousel-item active" href="#">
                      <img src="../assets/images/promotional-pages/gifts-and-coupons/banner/banner-1_tc.jpg" class="d-block w-100" alt="#">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="giftcard-row row justify-content-around">
            <div class="giftcard-container col-8">
              <h5>您有禮品卡嗎?</h5>
              <div class="giftcard">
                <a href="#">兌換禮品卡</a>
                <a href="#">餘額 及 使用記錄</a>
                <a href="#">充值</a>
                <a href="#">自動充值</a>
              </div>
            </div>
          </div>

          <div class="promotional-products-container container-fluid col">
            <div class="promotional-products-row row justify-content-around">
              <h5 class="title">更多禮品卡或優惠卷商品</h5>
    ';

    foreach ($result as $key => $item) {
      gifts_products_composer(
        $key, 
        $item['product_discount'], 
        $item['product_en_brand'], 
        $item['product_en_description'], 
        $item['product_en_name'], 
        $item['product_image'], 
        $item['product_price'], 
        $item['product_tc_brand'], 
        $item['product_tc_description'], 
        $item['product_tc_name'], 
        $item['product_type'] 
      );
   
 } 

    echo '
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Gifts and coupons -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';
    
  } else {    

    echo '
    
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <!-- Content of Promotional Pages -->

    <!-- Promotional Pages Title -->
    <div class="promotional-pages-header">
      <h2 class="promotional-pages-title">Gift Cards & Coupons</h2>
      <p class="promotional-pages-hints">Buy gift cards or coupons for your loved ones.</p>
    </div>

    <!-- Promotional Pages\'s Content -->
    <div class="promotional-content-container container-fluid">
      <div class="promotional-content-row row justify-content-around">

        <!-- Desktop version of Sidelist -->
        <div class="sidelist-desktop-container col-2">

          <h1 class="sidelist-header-gac">Do you have a HVAR.mall Gift Card?</h1>

          <div class="categories-sidelist-gac">
            <a href="../www/register-en.php">Register to your account</a><br />
            <a href="#">Remaining balance / usage history</a><br />
            <a href="#">Reload</a><br />
            <a href="#">Get up to 2.5 points for CVS reloads</a><br />
          </div>

          <h1 class="sidelist-header-gac">Pick a type</h1>

          <div class="categories-sidelist-gac">
            <a href="#">Reload</a><br />
            <a href="#">Email</a><br />
            <a href="#">Print</a><br />
            <a href="#">Greeting Card</a><br />
            <a href="#">Box</a><br />
            <a href="#">Envelope</a><br />
            <a href="#">Paper Certificate</a><br />
            <a href="#">Multipack (10 pcs)</a><br />
            <a href="#">Add your photo</a><br />
            <a href="#">Animation</a><br />
            <a href="#">Buy in-store</a><br />
          </div>

          <h1 class="sidelist-header-gac">Pick an occasion</h1>

          <div class="categories-sidelist-gac">
            <a href="#">Birthday</a><br />
            <a href="#">New baby</a><br />
            <a href="#">Wedding</a><br />
            <a href="#">Congratulations</a><br />
            <a href="#">Celebration / Present</a><br />
            <a href="#">Kindle</a><br />
            <a href="#">New Year\'s</a><br />
            <a href="#">Valentine\'s Day / White Day</a><br />
            <a href="#">New job</a><br />
            <a href="#">Mother\'s Day</a><br />
            <a href="#">Father\'s Day</a><br />
            <a href="#">Respect for the Aged Day</a><br />
            <a href="#">Christmas</a><br />
            <a href="#">End-of-year / Obon Festival</a><br />
          </div>

          <h1 class="sidelist-header-gac">FAQ</h1>

          <div class="categories-sidelist-gac">
            <a href="#">HVAR.mall Gift Card Terms & Conditions</a><br />
            <a href="#">Validity period</a><br />
            <a href="#">Purchasing & shipping</a><br />
            <a href="#">Usage</a><br />
            <a href="#">Resending E-mail GCs</a><br />
            <a href="#">Managing E-mail GC delivery dates</a><br />
            <a href="#">Usage restrictions</a><br />
            <a href="#">When gift cards cannot be used</a><br />
            <a href="#">Using for a different order</a><br />
            <a href="#">HAVR.mall Gift Card help pages</a><br />
            <a href="#">Notes about purchasing</a><br />
            <a href="#">Notes about scams</a><br />
            <a href="#">Notification – Payment Services Act</a><br />
            <a href="#">Notification - Entity Conversion</a><br />
            <a href="#">Notification - Renew name and logo</a><br />
          </div>

          <h1 class="sidelist-header-gac">Corporate HVAR.mall Gift Card</h1>

          <div class="categories-sidelist-gac">
            <a href="#">Corporate HVAR.mall Gift Card</a><br />
            <a href="#">FAQ</a><br />
          </div>

          <h1 class="sidelist-header-gac">Gift orders</h1>

          <div class="categories-sidelist-gac">
            <a href="#">Purchasing gift orders</a><br />
            <a href="#">How to send gift orders</a><br />
            <a href="#">Gift wrapping</a><br />
            <a href="#">Wishlist</a><br />
            <a href="#">Gift store</a><br />
          </div>

        </div>

        <!-- Mobile & Tablet version of Sidelist -->
        <div class="sidelist-mobile-container">

          <div class="menu-icon-container">
            <div class="menu-icon">
              <span class="line-top"></span>
              <span class="line-bottom"></span>
            </div>
          </div>

          <div class="sidelist-mobile-overlay">
            <h1 class="sidelist-title">Gift cards and coupons related categories</h1>
            <h1 class="sidelist-header-gac">Do you have a HVAR.mall Gift Card?</h1>
            <div class="categories-sidelist-gac">
              <a href="../www/register-en.php">Register to your account</a><br />
              <a href="#">Remaining balance / usage history</a><br />
              <a href="#">Reload</a><br />
              <a href="#">Get up to 2.5 points for CVS reloads</a><br />
            </div>

            <h1 class="sidelist-header-gac">Pick a type</h1>
            <div class="categories-sidelist-gac">
              <a href="#">Reload</a><br />
              <a href="#">Email</a><br />
              <a href="#">Print</a><br />
              <a href="#">Greeting Card</a><br />
              <a href="#">Box</a><br />
              <a href="#">Envelope</a><br />
              <a href="#">Paper Certificate</a><br />
              <a href="#">Multipack (10 pcs)</a><br />
              <a href="#">Add your photo</a><br />
              <a href="#">Animation</a><br />
              <a href="#">Buy in-store</a><br />
            </div>

            <h1 class="sidelist-header-gac">Pick an occasion</h1>
            <div class="categories-sidelist-gac">
              <a href="#">Birthday</a><br />
              <a href="#">New baby</a><br />
              <a href="#">Wedding</a><br />
              <a href="#">Congratulations</a><br />
              <a href="#">Celebration / Present</a><br />
              <a href="#">Kindle</a><br />
              <a href="#">New Year\'s</a><br />
              <a href="#">Valentine\'s Day / White Day</a><br />
              <a href="#">New job</a><br />
              <a href="#">Mother\'s Day</a><br />
              <a href="#">Father\'s Day</a><br />
              <a href="#">Respect for the Aged Day</a><br />
              <a href="#">Christmas</a><br />
              <a href="#">End-of-year / Obon Festival</a><br />
            </div>

            <h1 class="sidelist-header-gac">FAQ</h1>
            <div class="categories-sidelist-gac">
              <a href="#">HVAR.mall Gift Card Terms & Conditions</a><br />
              <a href="#">Validity period</a><br />
              <a href="#">Purchasing & shipping</a><br />
              <a href="#">Usage</a><br />
              <a href="#">Resending E-mail GCs</a><br />
              <a href="#">Managing E-mail GC delivery dates</a><br />
              <a href="#">Usage restrictions</a><br />
              <a href="#">When gift cards cannot be used</a><br />
              <a href="#">Using for a different order</a><br />
              <a href="#">HAVR.mall Gift Card help pages</a><br />
              <a href="#">Notes about purchasing</a><br />
              <a href="#">Notes about scams</a><br />
              <a href="#">Notification – Payment Services Act</a><br />
              <a href="#">Notification - Entity Conversion</a><br />
              <a href="#">Notification - Renew name and logo</a><br />
            </div>

            <h1 class="sidelist-header-gac">Corporate HVAR.mall Gift Card</h1>
            <div class="categories-sidelist-gac">
              <a href="#">Corporate HVAR.mall Gift Card</a><br />
              <a href="#">FAQ</a><br />
            </div>

            <h1 class="sidelist-header-gac">Gift orders</h1>
            <div class="categories-sidelist-gac">
              <a href="#">Purchasing gift orders</a><br />
              <a href="#">How to send gift orders</a><br />
              <a href="#">Gift wrapping</a><br />
              <a href="#">Wishlist</a><br />
              <a href="#">Gift store</a><br />
            </div>
          </div>

        </div>

        <div class="promotional-gac-container container-fluid col">

          <div class="immediate-delivery-row row justify-content-around">
            <div class="immediate-delivery-container col-8">
              <h5>Immediate delivery after order is completed</h5>
              <div class="immediate-delivery">
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-1_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-2_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/immediate-delivery/giftcard-type-3_en.jpg"></a>
              </div>
            </div>
          </div>

          <div class="expedited-shipping-row row justify-content-around">
            <div class="expedited-shipping-container col-8">
              <h5>With expedited shipping, same day or next-day delivery</h5>
              <div class="expedited-shipping">
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-1_en.png"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-2_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-3_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-4_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-5_en.jpg"></a>
                <a href="#"><img src="../assets/images/promotional-pages/gifts-and-coupons/expedited-shipping/giftcard-6_en.jpg"></a>
              </div>

              <div class="promotion-carousel">
                <div id="carouselExampleSlidesOnly" class="carousel slide justify-content-center" data-ride="carousel">
                  <div class="carousel-inner">
                    <a class="carousel-item active" href="#">
                      <img src="../assets/images/promotional-pages/gifts-and-coupons/banner/banner-1_en.jpg" class="d-block w-100" alt="#">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="giftcard-row row justify-content-around">
            <div class="giftcard-container col-8">
              <h5>Have a gift card?</h5>
              <div class="giftcard">
                <a href="#">redeem gift card</a>
                <a href="#">view your balance</a>
                <a href="#">reload</a>
                <a href="#">auto-reload</a>
              </div>
            </div>
          </div>

          <div class="promotional-products-container container-fluid col">
            <div class="promotional-products-row row justify-content-around">
              <h5 class="title">More Gift Card or Coupon items</h5>
    ';

    foreach ($result as $key => $item) {
      gifts_products_composer(
        $key, 
        $item['product_discount'], 
        $item['product_en_brand'], 
        $item['product_en_description'], 
        $item['product_en_name'], 
        $item['product_image'], 
        $item['product_price'], 
        $item['product_tc_brand'], 
        $item['product_tc_description'], 
        $item['product_tc_name'], 
        $item['product_type'] 
      );
   
 }     echo '
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Content of Gifts and coupons -->

    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  }
} else {

  if (strpos($_SERVER['REQUEST_URI'], "-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <h5>請前往"../assets/includes/promotional-pages-content.php"更新本頁的條件及內容。</h5>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  } else {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <h5>Please go to "... /assets/includes/promotional-pages-content.php" to update the conditions and contents of this page.</h5>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

  }
  
}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
