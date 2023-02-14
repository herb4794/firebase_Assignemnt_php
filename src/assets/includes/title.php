<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- Detecting URLs to generate titles -->
<?php
//New code
$template = 'HVAR.mall (Hong Kong)';
$template_tc = 'HVAR.mall (香港)';
$title = match (substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],'/')+1)) {
  'index.php' => $template,
  'best-sellers.php' => 'Best Sellers — ' . $template,
  'todays-deals.php' => 'Today\'s Deals — ' . $template,
  'new-releases.php' => 'New Releases — ' . $template,
  'gifts-and-coupons.php' => 'Gifts & Coupons — ' . $template,
  'support.php' => 'Support — ' . $template,
  'register.php' => 'Sign Up — ' . $template,
  'forgot.php' => 'Forgot Password — ' . $template,
  'forgot-id.php' => 'Find HVAR.mall ID — ' . $template,
  'login.php' => 'Sign In — ' . $template,
  'index-tc.php' => $template_tc,
  'best-sellers-tc.php' => '熱賣產品 — ' . $template_tc,
  'todays-deals-tc.php' => '本日熱賣 — ' . $template_tc,
  'new-releases-tc.php' => '最新產品 — ' . $template_tc,
  'gifts-and-coupons-tc.php' => '禮品卡 及 優惠卷 — ' . $template_tc,
  'support-tc.php' => '支援服務 — ' . $template_tc,
  'register-tc.php' => '註冊 — ' . $template_tc,
  'login-tc.php' => '登入 — ' . $template_tc,
  'forgot-tc.php' => '忘記密碼 — ' . $template,
  'forgot-id-tc.php' => '尋找 HVAR.mall ID — ' . $template,
  default => 'Title error - Check title.php',
};

echo '<title>' . $title . '</title>';
//New Code End
?>

<?php
// //Old code
// if (strpos($_SERVER['REQUEST_URI'], "-tc") !== false) {

//     if (strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {
//         echo '<title>HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "best-sellers-tc.php") !== false) {
//         echo '<title>熱賣產品 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "todays-deals-tc.php") !== false) {
//         echo '<title>本日熱賣 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "new-releases-tc.php") !== false) {
//         echo '<title>最新產品 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons-tc.php") !== false) {
//         echo '<title>禮品卡 及 優惠卷 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "support-tc.php") !== false) {
//         echo '<title>支援服務 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "register-tc.php") !== false) {
//         echo '<title>註冊 — HVAR.mall (香港)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "login-tc.php") !== false) {
//         echo '<title>登入 — HVAR.mall (香港)</title>';
//     }

// } else {

//     if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {
//         echo '<title>HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "best-sellers.php") !== false) {
//         echo '<title>Best Sellers — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "todays-deals.php") !== false) {
//         echo '<title>Today\'s Deals — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "new-releases.php") !== false) {
//         echo '<title>New Releases — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "gifts-and-coupons.php") !== false) {
//         echo '<title>Gifts & Coupons — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "support.php") !== false) {
//         echo '<title>Support — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "register.php") !== false) {
//         echo '<title>Sign Up — HVAR.mall (Hong Kong)</title>';
//     } else if (strpos($_SERVER['REQUEST_URI'], "login.php") !== false) {
//         echo '<title>Sign In — HVAR.mall (Hong Kong)</title>';
//     }

// }

?>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->