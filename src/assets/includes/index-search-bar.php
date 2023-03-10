<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
//Get Recent Search(Database) //TODO: Link to a database which stored banner data and get data from it

//* The code below is just for sample data and should be REMOVE when linked to a database
$recentSearch = array(
    array(
        'item' => 'Test 1',
        'href' => '#'
    ),
    array(
        'src' => 'Test 2',
        'href' => '#'
    ),
    array(
        'item' => 'Test 3',
        'href' => '#'
    ),
    array(
        'src' => 'Test 4',
        'href' => '#'
    ),
    array(
        'item' => 'Test 5',
        'href' => '#'
    ),

);

//====================

//New code
function DisplayRecentSearch($recentSearch)
{
    foreach ($recentSearch as $item) {
        echo '
                <li>
                    <a href="$' . $item['href'] . '">' . $item['item'] . '</a>
                </li>
        ';
    }
}

if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<div class="index-search-bar-container container-fluid">
    <div class="index-search-bar-row row justify-content-center">
        <div class="input-field col-8">
            <i></i>
            <input type="text" placeholder="Search through for products">
            <a class="link-camera"></a>
            <i class="link-search"></i>
        </div>

        <div class="recent-search container hide">
            <h2 class="">Recent Search</h2>
            <ul>
    ';
    DisplayRecentSearch($recentSearch);
    echo '
                <li>
                    <a href="#"><i class=""></i>Clear all recent search</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="hot-keywords-row row justify-content-center">
        <p class="hot-keywords col-8">Hot Keywords: <a href="#">Test 1</a><a href="#">Test 2</a><a href="#">Test 3</a><a href="#">Test 4</a><a href="#">Test 5</a></p>
    </div>
</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

} else if (strpos($_SERVER['REQUEST_URI'], "index-tc.php") !== false) {

    echo '
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <div class="index-search-bar-container container-fluid">
        <div class="index-search-bar-row row justify-content-center">
            <div class="input-field col-8">
                <i></i>
                <input type="text" placeholder="????????????????????????????????????????????????...">
                <a class="link-camera"></a>
                <i class="link-search"></i>
            </div>
    
            <div class="recent-search container hide">
                <h2 class="">???????????????</h2>
                <ul>
    ';
    DisplayRecentSearch($recentSearch);
    echo '
                    <li>
                        <a href="#"><i class=""></i>???????????????????????????</a>
                    </li>
                </ul>
            </div>
    
        </div>
    
        <div class="hot-keywords-row row justify-content-center">
            <p class="hot-keywords col-8">????????????: <a href="#">Test 1</a><a href="#">Test 2</a><a href="#">Test 3</a><a href="#">Test 4</a><a href="#">Test 5</a></p>
        </div>
    </div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
';

}

?>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->