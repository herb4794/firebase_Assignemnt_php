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
                    <a href="../www/login.php">??????</a>
                    <a href="#">????????????</a>
                </div>

            </div>

            <div class="forgot-content">
                <div class="forgot-content-main">

                    <h2>?????????????</h2>
                    <p>??????????????? HVAR.mall ID ??????????????????????????????</p>

                    <div class="input-field username">
                        <input id="forgot-username" type="email" class="input-forgot-username">
                        <label for="forgot-username" class="label-forgot-username">HVAR.mall ID.</label>
                    </div>

                    <div class="forgot-hints">
                        <p>??????????????? HVAR.mall ID??????<a href="../www/forgot-id-tc.php">????????????</a></p>
                    </div>

                    <input type="button" name="forgot" value="??????" class="forgot-btn false" />
                </div>

                <div class="forgot-content-reminder">

                    <i class="forgot-info"></i>
                    <p>???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>

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