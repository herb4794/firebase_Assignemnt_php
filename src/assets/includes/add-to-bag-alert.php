<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php

if (strpos($_SERVER['REQUEST_URI'], "-tc") !== false) {

    echo '
    <div class="alert alert-success" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <p>該商品已被成功</p>
        <p><i>添加</i>至您的購物袋中!</p>

    </div>

    <div class="alert-overlay"></div>
    ';

} else {

    echo '
    <div class="alert alert-success" role="alert">

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <p>The product has been</p>
        <p>Successfully <i>Added</i> to your Shopping Bag!</p>

    </div>

    <div class="alert-overlay"></div>
    ';

}

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->