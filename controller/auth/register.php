<?php 
// untuk menggabungkan file connection.php
include '../../connection/connection.php';

// get data from formnya
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$password = password_hash($password,PASSWORD_DEFAULT);

// action for insert data to database
$sql = "INSERT INTO user VALUES (null,'$name', '$username', '$password', 3)";

if($conn->query($sql) == true){
    echo "<script>alert('Register Success');</script>";
    echo "<script>location.href = '../../pages/auth/signin.php';</script>";
}else{
    echo "<script>alert('Register Failed');</script>";
    echo "<script>location.href = '../../pages/auth/signup.php';</script>";
}

?>          