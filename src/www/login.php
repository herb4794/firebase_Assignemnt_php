<?php

session_start();
// Execution of the HTML5 Default Setting part
@include('../assets/includes/html-default.php');

if (isset($_SESSION['login_status']) == true && $_SESSION['login_status'] != false) {
 header('Location: index.php') ;
}


?>

<head>
    <?php

    // Execution of the Title part 
    @include('../assets/includes/title.php');

    // Execution of the Header part
    @include('../assets/includes/header.php');

    ?>
</head>

<body>
    <?php

    // Execution of the Navigation-Bar part
    @include('../assets/includes/navigation-bar.php');

    // Execution of the Support part
    @include('../assets/includes/login-content.php');
    
    // Execution of the Footer part
    @include('../assets/includes/footer.php');

    // Execution of the JavaScript part
    @include('../assets/includes/script.php');

    ?>
    <script type="module">     


    </script>
</body>


</html>
