<?php
ob_start();
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : '';
require_once '../config/config.php';
require_once '../libs/categories.php';
require_once '../libs/products.php';
include_once 'template/header.php';
check_role();
switch ($page) {
    case '':
    case 'home':
        include_once 'home/home.php';
        break;
    case 'category':
        //Lấy hành động trong categories
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện categories
                include_once 'categories/index.php';
                break;
            case 'add':
                include_once 'categories/create.php';
                break;
            case 'edit':
                include_once 'categories/edit.php';
                break;
        }
        break;
    case 'product':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action){
            case '':
                //Thêm vào giao diện product
                include_once 'products/index.php';
                break;
            case 'add':
                include_once 'products/create.php';
                break;
            case 'edit':
                include_once 'products/edit.php';
                break;
            case 'search':
                include_once 'products/search.php';
                break;
        }
        break;
    case 'user':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'users/index.php';
                break;
            case 'add':
                include_once 'users/create.php';
                break;
            case 'edit':
                include_once 'users/edit.php';
                break;
        }
        break;
    case 'comment':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'comments/index.php';
                break;;
        }
        break;
    case 'slider':
        //Lấy hành động trong product
        $action = isset($_GET['action']) ? $_GET['action'] : '';
        switch ($action) {
            case '':
                //Thêm vào giao diện product
                include_once 'slider/index.php';
                break;
            case 'add':
                include_once 'slider/create.php';
                break;
            case 'edit':
                include_once 'slider/edit.php';
                break;
        }
        break;
    case 'logout':
        unset($_SESSION['user']);
        header('Location:' . ROOT . 'admin/login.php');
        die;
        break;
    default:
        echo '404 not found';
        break;
}
include_once 'template/footer.php';
if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
}
?>
    <script>
        $(document).ready(function () {
            $('#checkall').change(function () {
                $('input:checkbox').prop('checked', $(this).prop('checked'));
            })
            $('#btndel-category').click(function () {
                if ($('input:checked').length === 0) {
                    alert("Bạn cần chọn ít nhất 1 danh mục")
                    return false;
                }
            })
        })
        $('.status').change(function () {
            if ($(this).prop('checked')) {
                $('#span').html('Còn hàng')
            } else {
                $('#span').html('Hết hàng')
            }
        })
    </script>
<?php
ob_end_flush();
