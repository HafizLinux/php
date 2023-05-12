<?php

    include 'top.php';
    include 'menu.php';
?>

<?php

    $url = $_GET['url'];
    if ($url == 'dashboard'){
        include 'dashboard.php';
    }else if ($url == 'about'){
        include 'about.php';
    }else if ($url == 'table'){
        include 'table.php';
    }else{
        include 'dashboard.php';
    }


?>


<?php
    include 'bottom.php';
?>