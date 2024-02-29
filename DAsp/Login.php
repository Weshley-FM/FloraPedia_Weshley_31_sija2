<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli,"select * from user where username= '$username' and password= '$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if ($data['Level']=="admin") {

        $_SESSION['Username'] =  $username; 
        $_SESSION['Level'] = "admin";

        header("location:admin/index.php");
 
    }else if($data['Level']=="user") {

        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = "user";

        header("location:user/index.php");

    }else{

        header("location:index.php");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>