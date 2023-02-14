<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

if (strpos($_SERVER['REQUEST_URI'], "forgot.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="forgot-container container-fluid">
    <div class="forgot-row row justify-content-center">
        <form class="forgot-form col-8">

            <div class="forgot-header">
                <div class="forgot-title">
                    <h1>HAVR.mall ID</h1>
                </div>

                <div class="forgot-support">
                    <a href="../www/login.php">Sign In</a>
                    <a href="#">FAQ</a>
                </div>

            </div>

            <div class="forgot-content">
                <div class="forgot-content-main">

                    <h2>Are you having trouble signing in ?</h2>
                    <p>Please enter your HVAR.mall ID to get started.</p>

                    <div class="input-field username">
                        <input id="forgot-username" type="email" class="input-forgot-username">
                        <label for="forgot-username" class="label-forgot-username">HVAR.mall ID.</label>
                    </div>

                    <div class="forgot-hints">
                        <p>If you have forgotten your HVAR.mall ID, you can <a href="../www/forgot-id.php">look it up.</a></p>
                    </div>

                    <input type="button" name="forgot" value="Countinue" class="forgot-btn false" />
                </div>

                <div class="forgot-content-reminder">

                    <i class="forgot-info"></i>
                    <p>You have come to the right place to reset a forgotten password. For your security, we will ask you a
                        few questions to verify that you are the owner of this account.</p>

                </div>

            </div>

        </form>
    </div>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "forgot-tc.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="forgot-container container-fluid">
    <div class="forgot-row row justify-content-center">
        <form class="forgot-form col-8">

            <div class="forgot-header">
                <div class="forgot-title">
                    <h1>HAVR.mall ID</h1>
                </div>

                <div class="forgot-support">
                    <a href="../www/login.php">登入</a>
                    <a href="#">常見問題</a>
                </div>

            </div>

            <div class="forgot-content">
                <div class="forgot-content-main">

                    <h2>無法登入?</h2>
                    <p>請輸入您的 HVAR.mall ID 以開始找回你的密碼。</p>

                    <div class="input-field username">
                        <input id="forgot-username" type="email" class="input-forgot-username">
                        <label for="forgot-username" class="label-forgot-username">HVAR.mall ID.</label>
                    </div>

                    <div class="forgot-hints">
                        <p>如果忘記了 HVAR.mall ID，可<a href="../www/forgot-id-tc.php">按此查詢</a></p>
                    </div>

                    <input type="button" name="forgot" value="繼續" class="forgot-btn false" />
                </div>

                <div class="forgot-content-reminder">

                    <i class="forgot-info"></i>
                    <p>這裡正是能讓你重設忘記了的密碼之地方。基於保安考慮，我們會提出幾條問題，以確保你是此帳户的擁有人。</p>

                </div>

            </div>

        </form>
    </div>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->