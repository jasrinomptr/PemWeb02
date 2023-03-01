<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){
    echo "Login Berhasil";
} else{
    echo "Login Gagal";
}