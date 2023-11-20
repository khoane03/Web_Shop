<h1>XỬ LÝ FILE</h1>
<?php
include("../../config/config.php");
$ten_sp = $_POST["product_name"];
$ma_sp = $_POST["product_code"];
$gia_goc = $_POST["price"];
$gia_giam = $_POST["price_sale"];
$so_luong = $_POST["quantity"];
$noi_dung = $_POST["content"];
$tom_tat = $_POST["sort_content"];
//Xử lý hình ảnh
$hinh_anh = $_FILES['image']['name'];
$hinh_anh_tmp = $_FILES['image']['tmp_name'];
$hinh_anh = time() . '_' . $hinh_anh;
// //end
$tinh_trang = $_POST["active"];

//id_sanpham	ten_sp	ma_sp	gia_goc	gia_giam	so_luong	noi_dung	tom_tat	tinh_trang	
if (isset($_POST["btn"])) {
    $add = "INSERT INTO tbl_sanpham(ten_sp,ma_sp,gia_goc,gia_giam,so_luong,noi_dung,tom_tat,hinh_anh,tinh_trang) VALUES ('" . $ten_sp . "','" . $ma_sp . "','" . $gia_goc . "','" . $gia_giam . "','" . $so_luong . "','" . $noi_dung . "','" . $tom_tat . "','" . $hinh_anh . "','" . $tinh_trang . "')";
    mysqli_query($mysql, $add);
    move_uploaded_file($hinh_anh_tmp, 'uploads/' . $hinh_anh);
    header("Location: ../../index.php?action=sanpham");
}


?>
<h2>tạch</h2>