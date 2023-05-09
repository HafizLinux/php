<?php
    include 'connection.php';
    include 'top.php';
    include 'menu.php';
?>

<?php

    $url = $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    } else if (!empty($url)){
        include_once "$url.php";
    } else { 
        include_once 'dashboard.php';
    }


?>


<?php
    include 'bottom.php';
?>