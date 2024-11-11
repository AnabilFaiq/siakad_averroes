<?php

session_start();

if (!isset($_SESSION['id'])){
    echo header('location:/siakad_averroes/pages/auth/signin.php');
}

?>