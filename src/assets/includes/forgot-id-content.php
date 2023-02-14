<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <?php

if (strpos($_SERVER['REQUEST_URI'], "forgot-id.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="forgot-id-container container-fluid">
        <div class="forgot-id-row row justify-content-center">
            <form class="forgot-id-form col-8">
    
                <div class="forgot-id-header">
                    <div class="forgot-id-title">
                        <h1>HAVR.mall ID</h1>
                    </div>
    
                    <div class="forgot-id-support">
                        <a href="../www/login.php">Sign In</a>
                        <a href="#">FAQ</a>
                    </div>
    
                </div>
    
                <h2>Enter the information below to find your</h2>
                <h3>HVAR.mall ID</h3>
    
                <div class="input-field phone">
                    <input id="forgot-id-phone" type="text" class="input-forgot-id-phone">
                    <label for="forgot-id-phone" class="label-forgot-id-phone">Phone Number</label>
                </div>
    
                <input type="button" name="forgot-id" value="Continue" class="forgot-id-btn false" />
    
            </form>
        </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "forgot-id-tc.php") !== false) {

    echo '
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="forgot-id-container container-fluid">
        <div class="forgot-id-row row justify-content-center">
            <form class="forgot-id-form col-8">
    
                <div class="forgot-id-header">
                    <div class="forgot-id-title">
                        <h1>HAVR.mall ID</h1>
                    </div>
    
                    <div class="forgot-id-support">
                        <a href="../www/login-tc.php">登入</a>
                        <a href="#">常見問題</a>
                    </div>
    
                </div>
    
                <h2>請輸入以下資料來尋找您的 HVAR.mall ID</h2>
    
                <div class="input-field phone">
                    <input id="forgot-id-phone" type="text" class="input-forgot-id-phone">
                    <label for="forgot-id-phone" class="label-forgot-id-phone">電話號碼</label>
                </div>
    
                <input type="button" name="forgot-id" value="繼續" class="forgot-id-btn false" />
    
            </form>
        </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->