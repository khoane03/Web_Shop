<div class="container">
<?php
if (isset($_GET["quanly"])) {
    $quanLy = $_GET["quanly"];
    switch ($quanLy) {
        case "hoidap":
            include("main/hoidap.php");
            break;
        case "giohang":
            include("main/giohang.php");
            break;
        case "login":
            include("main/login.php");
            break;
    }
} else {
    include("main/index.php");
    
}


?>
</div>