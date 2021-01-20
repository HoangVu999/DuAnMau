<?php
session_start();
//Thêm kết nối database
require_once "../../libs/users.php";
require_once "../../config/config.php";
if(isset($_POST['btn-edit'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['image']['size'] > 0){
        $okUpload = true;
        $image = uniqid().$_FILES['image']['name'];
    }else{
        $image = isset($_POST['image']) ? $_POST['image'] : '';
    }
    $date = date('d-m-Y');
    update_user($fullname,$username,$image,$address,$phone,$date,$id);
    if($okUpload){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $image);
    }
    $_SESSION['message'] = "Cập nhật dữ liệu thành công";
    header("location:" . ROOT . "admin/?page=user");
    die();
}
?>
