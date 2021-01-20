<?php
session_start();
require_once '../../libs/categories.php';
require_once '../../config/config.php';

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
    update_category($name,$image,$date,$id);
    if($okUpload){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $image);
    }
    $_SESSION['message'] = "Thêm dữ liệu thành công";
    header('Location:' .ROOT .'admin/?page=category');
    die();
}
?>

