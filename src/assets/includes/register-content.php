<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
session_start();
$element = " <div class=\"alert alert-success\" role=\"alert\">" . $_SESSION['register_status'] ."</div> ";
if (strpos($_SERVER['REQUEST_URI'], "register.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="register-container container-fluid">
    <div class="register-row row justify-content-center">
        <form action="../../server/register.php" class="register-form col-8" method="POST">

            <div class="register-header">
                <div class="register-title">
                    <h1>HAVR.mall ID</h1>
                </div>

                <div class="register-support">
                    <a href="../www/login.php">Sign In</a>
                    <a href="#">FAQ</a>
                </div>
                
            </div>
             

            <h2>Create Your HAVR.mall ID</h2>
            <p>One HAVR.mall ID is all you need to access all HAVR.mall services.</p>
            <p>You already have an HAVR.mall ID ? <a href="../www/forgot.php">Find it here ></a></p>

            <div class="input-field username">
                <input id="register-username" name="register_name" type="email" class="input-register-username">
                <label for="register-username" class="label-register-username">name@example.com</label>
            </div>
            
            <div class="register-hints">
                <p>This will be your new HVAR.mall ID.</p>
            </div>

            <div class="input-field password">
                <input id="register-password" name="register_pass" type="password" class="input-register-password">
                <label for="register-password" class="label-register-password">Password</label>
            </div>

            <div class="input-field confirm-password">
                <input id="register-confirm-password" name="register_comfrimPass" type="password" class="input-register-confirm-password">
                <label for="register-confirm-password" class="label-register-confirm-password">Confirm Password</label>
            </div>

            <div class="input-field phone">
                <input id="register-phone" name="register_phone" type="text" class="input-register-phone">
                <label for="register-phone" class="label-register-phone">Phone Number</label>
            </div>
      
            <input name="user_type" type="hidden" value="admin">

            <div class="register-hints">
                <p>Make sure you enter a phone number you can always access. It will be used to verify your identity any time you sign in on a new device or web browser. Messaging or data rates may apply.</p>
            </div>

            <p class="registered-service-rules">People who use our service may have uploaded your contact information to
                HAVR.mall. <a href="#">Learn more.</a></p>
            <p class="registered-contracts">By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy</a>. You may receive SMS notifications from
                us and can opt out at any time.</p>

            <input type="submit" name="register_btn" value="Sign Up" class="register-btn" />

            <p class="social-text">Or Sign Up with Social Platforms</p>

            <div class="social-media">
                <a href="#" class="social-icon-facebook"><i class="link-facebook"></i></a>
                <a href="#" class="social-icon-twitter"><i class="link-twitter"></i></a>
                <a href="#" class="social-icon-google"><i class="link-google"></i></a>
                <a href="#" class="social-icon-linkedin"><i class="link-linkedin"></i></a>
            </div>

        </form>
    </div>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

} else if (strpos($_SERVER['REQUEST_URI'], "register-tc.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="register-container container-fluid">
    <div class="register-row row justify-content-center">
        <form class="register-form col-8">

            <div class="register-header">
                <div class="register-title">
                    <h1>HAVR.mall ID</h1>
                </div>

                <div class="register-support">
                    <a href="../www/login-tc.php">登入</a>
                    <a href="#">常見問題</a>
                </div>

            </div>

            <h2>建立您的 HAVR.mall ID</h2>
            <p>只要一個 HAVR.mall ID ，就能使用 HVAR.mall 的所有服務。</p>
            <p>已經有 HAVR.mall ID ? <a href="../www/forgot-tc.php">按此尋找 ></a></p>

            <div class="input-field username">
                <input id="register-username" type="email" class="input-register-username">
                <label for="register-username" class="label-register-username">name@example.com</label>
            </div>
            
            <div class="register-hints">
                <p>這將是您的新 HVAR.mall ID。</p>
            </div>

            <div class="input-field password">
                <input id="register-password" type="password" class="input-register-password">
                <label for="register-password" class="label-register-password">密碼</label>
            </div>

            <div class="input-field confirm-password">
                <input id="register-confirm-password" type="password" class="input-register-confirm-password">
                <label for="register-confirm-password" class="label-register-confirm-password">確認</label>
            </div>

            <div class="input-field phone">
                <input id="register-phone" type="text" class="input-register-phone">
                <label for="register-phone" class="label-register-phone">電話號碼</label>
            </div>
            
            <div class="register-hints">
                <p>請確定輸入的電話號碼隨時可用。每次您經由新裝置或網頁瀏覽器登入，該號碼都會用來驗證您的身份。您或需支付訊息或數據費用。</p>
            </div>

            <p class="registered-service-rules">使用我們服務的人可能已經將您的聯繫信息上傳到 HAVR.mall。 <a href="#">了解更多。</a></p>
            <p class="registered-contracts">按下「註冊」即表示您同意我們的<a href="#">服務條款</a>、<a
                href="#">隱私政策</a> 和 <a href="#">Cookie 政策</a>。您可能會收到我們的短信通知，並可以隨時選擇退出。</p>

            <input type="submit" name="register" value="註冊" class="register-btn" />

            <input name="user_type" type="hidden" value="admin">

            <p class="social-text">或透過社交平台帳號註冊</p>

            <div class="social-media">
                <a href="#" class="social-icon-facebook"><i class="link-facebook"></i></a>
                <a href="#" class="social-icon-twitter"><i class="link-twitter"></i></a>
                <a href="#" class="social-icon-google"><i class="link-google"></i></a>
                <a href="#" class="social-icon-linkedin"><i class="link-linkedin"></i></a>
            </div>

        </form>
    </div>
</div>   
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    ';

}
?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
