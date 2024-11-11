<?php

// Include the connection file
include '../../../connection/connection.php';

function get_all_user()
{
    global $conn;

    $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username from user JOIN role ON user.role_id = role.id";
    $result = $conn->query($sql);

    return $result;
}

function edit_user($id)
{
    global $conn;
    $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username from user JOIN role ON user.role_id = role.id WHERE user.id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function delete_user($id){
    global $conn;
    $sql = "DELETE FROM user WHERE id = $id";
    $conn->query($sql);
}

if (isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action == 'edit') {
        $data = edit_user($id);
        header('location: ../../pages/admin/user/edit.php?id=' . $data['id'] . '&nama=' . $data['nama_user'] . '&role=' . $data['role'] . '&username=' . $data['username']);
    } elseif ($action == 'delete') {
        delete_user($id);
        header('location: ../../pages/admin/user.php');
    }
}