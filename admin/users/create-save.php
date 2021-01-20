<?php
session_start();
require_once '../../config/config.php';
include_once '../../libs/database.php';
include_once '../../libs/users.php';

if (isset($_POST['btnsave'])) {
    extract($_REQUEST);
    $okUpload = false;
    if ($_FILES['image']['size'] > 0) {
        $okUpload = true;
        $image = uniqid() . $_FILES['image']['name'];
    } else {
        $image = '';
    }
    insert_user($fullname,$username,$image,$email,$password,$role,$address,$phone,$gender,$created_at);
    if ($okUpload) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../../images/' . $image);
    }
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=user');
    die();
}

if(isset($_POST['btn-save'])){
    extract($_REQUEST);
    $okUpload = false;
    if ($_FILES['image']['size'] > 0) {
        $okUpload = true;
        $image = uniqid() . $_FILES['image']['name'];
    } else {
        $image = '';
    }
    insert_user_login($fullname, $username, $image, $email, $password, $address, $phone, $gender,$created_at);
    if ($okUpload) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../../images/' . $image);
    }
    $_SESSION['message-login'] = "Đăng ký thành công";
    header('Location:' .ROOT .'admin/login.php');
    die();
}

