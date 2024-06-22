<?php

include "koneksi.php";

$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password =$_POST["password"];


$sql = "INSERT INTO tbl_user (user_name, email, password) 
            VALUES('$user_name','$email','$password')";

$simpan = mysqli_query($koneksi, $sql);
if ($simpan) {
    $status = 1 ; 
} else {
    $status = 0 ;
}
header('location:index.html?status='. $status );