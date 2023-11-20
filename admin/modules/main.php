<div class="main">
<?php
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    switch ($action) {
        case "sanpham":
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
            break;
        // case "baiviet":
        //     include("main/giohang.php");
        //     break;
        // case "don":
        //     include("main/login.php");
        //     break;
        // case "nguoidung":
        //     include("");
        //     break;
    }
} else {
    include("main/index.php");
    
}
?>
</div>