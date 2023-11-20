<?php
include("./config.php");
if (isset($_POST["btn1"])) {
    $test = "SELECT * FROM test ";
    $data = mysqli_query($mysql, $test);
    $i = 0;
    while ($row = mysqli_fetch_array($data)) {
        $i++;
        echo "Ten : " . $row["user"] . "<br>";
        echo "Pass : " . $row["pass"] . "<br>";
    }
    $lietke = "SELECT * FROM tbl_sanpham ";
    $data = mysqli_query($mysql, $lietke);
    $i = 0;
    while ($row == mysqli_fetch_array($data)) {
        $i++;
        echo "ID :" . $i . "<br>";
        echo "Ten sp : " . $row["tensp"] . "<br>";
        echo "Gia : " . $row["gia"] . "<br>";
    }
}
