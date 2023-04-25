<?php

function tableList(){
if (isset($_SESSION['user_type']) == true && $_SESSION['user_type'] != false) {
  $tableList =
    '<a href="./tables.php">
    <i class="now-ui-icons design_bullet-list-67"></i>
    <p>Table List</p>
    </a>';
}else {
  $tableList = null;
}

return $tableList;
}

$tableList = tableList();
?> 


    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="../../src/www/index.php" class="simple-text logo-mini">
          HK
        </a>
        <a href="https://firebase.google.com" class="simple-text logo-normal">
          HAVE
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./insert.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <?php echo $tableList?>
          </li>
          <!-- <li>
            <a href="./userProfile.php">
            <i class="now-ui-icons users_circle-08"></i>
            <p>Profile</p>
          </li> -->
         </ul>
      </div>
    </div>
