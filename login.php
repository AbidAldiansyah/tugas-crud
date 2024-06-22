<?php

include "koneksi.php";

$email = $_POST["email"];
$password =$_POST["password"];


$sql = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'"; 

$simpan = mysqli_query($koneksi, $sql);
if ($simpan) {
    $status = 1 ; 
} else {
    $status = 0 ;
}
header('location:index.html?status='. $status );