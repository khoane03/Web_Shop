<?php
$mysql = new mysqli('localhost','root','','datashop');


if(mysqli_connect_errno()){
    echo "Error" . $mysql->connect_error;
    exit();
}
?>