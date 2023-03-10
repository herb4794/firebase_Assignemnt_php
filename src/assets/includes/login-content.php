<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

if (strpos($_SERVER['REQUEST_URI'], "login.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="login-container container-fluid">
    <div class="login-row row justify-content-center">
        <form class="login-form col-8">
            <h2>Sign in to HVAR.mall</h2>

            <div class="input-field username">
                <i class="login-link-user"></i>
                <input id="login-username" type="email" class="input-login-username">
                <label for="login-username" class="label-login-username">HVAR.mall ID</label>
            </div>
             
            <div class="input-field password">
                <i class="login-link-password-lock"></i>
                <input id="login-password" type="password" class="input-login-password">
                <label for="login-password" class="label-login-password">Password</label>
            </div>
            
            <div class="remeber-me">
              <input type="checkbox" id="remeber-me" name="remeber-me">
              <label for="remeber-me">Remeber me</label>
            </div>
            
            <a href="../www/forgot.php" class="forgot-password">Forgot HVAR.mall ID or Password ? </a>

            <p class="register-id">Do not have an HVAR.mall ID ?<a href="../www/register.php"> Create yours now.</a></p>

            <input type="submit" name="login" value="Sign In" class="login-btn" />

            <p class="social-text">Or Sign In with Social Platforms</p>
            
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
} else if (strpos($_SERVER['REQUEST_URI'], "login-tc.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    
<div class="login-container container-fluid">
    <div class="login-row row justify-content-center">
        <form class="login-form col-8">
            <h2>????????? HVAR.mall</h2>
    
            <div class="input-field username">
                <i class="login-link-user"></i>
                <input id="login-username" type="email" class="input-login-username">
                <label for="login-username" class="label-login-username">HVAR.mall ID</label>
            </div>
                 
            <div class="input-field password">
                <i class="login-link-password-lock"></i>
                <input id="login-password" type="password" class="input-login-password">
                <label for="login-password" class="label-login-password">??????</label>
            </div>
                
            <div class="remeber-me">
                <input type="checkbox" id="remeber-me" name="remeber-me">
                <label for="remeber-me">???????????? HVAR.mall ID</label>
            </div>
                
            <a href="../www/forgot-tc.php" class="forgot-password">?????? HVAR.mall ID ????????? ?</a>
    
            <p class="register-id">?????? HVAR.mall ID ?<a href="../www/register-tc.php"> ?????????????????? HVAR.mall ID???<i class="link-box-arrow-up-right"></i></a></p>
    
            <input type="submit" name="login" value="??????" class="login-btn" />
    
            <p class="social-text">?????????????????????????????????</p>
                
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