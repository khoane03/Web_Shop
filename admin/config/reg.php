<?php
include("./config.php");
if (isset($_POST['btn'])) {
 
    $username1 = $_POST['username'];
    $password1 = md5($_POST['password']);
   
    $sql_them = "INSERT INTO test(user,pass) VALUE('".$username1."','".$password1."')";
    mysqli_query($mysql, $sql_them);
    // header("Location: index.php");
      
}
?>
