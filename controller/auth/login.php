<?php
// untuk menggabungkan file connection.php
include '../../connection/connection.php';

session_start();
// get data from formnya
$username = $_POST['username'];
$password = $_POST['password'];

// action for check data from database
$sql = "SELECT * FROM user WHERE username = '$username' ";

$result = $conn->query($sql);
$_SESSION['is_login'] = false;
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    if (password_verify($password, $data['password'])) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role_id'];

        if ($data['role_id'] == 1) {
            echo "<script>alert('Login Success, Anda Sebagai Admin');</script>";
            echo header('location: ../../pages/admin/index.php');
        } elseif ($data['role_id'] == 2) {
            echo "<script>alert('Login Success, Anda Sebagai Guru');</script>";
            echo header('location: ../../pages/guru/index.php');
        } elseif ($data['role_id'] == 3) {
            echo "<script>alert('Login Success, Anda Sebagai Murid');</script>";
            echo header('location: ../../pages/murid/index.php');
        }
    }
} else {
    session_start();
    $_SESSION['message'] = "Username or Password is wrong";
    return header('location: ../../pages/auth/signin.php');
}
