<?php
require_once '../libs/slider.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_slider($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=slider');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_slider){
        delete_slider($id_slider);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=slider');
    die;
}
$slider = list_all_slider();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success my-4 rounded-lg">
            <h5 class="font-weight-bold text-white pt-2"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <h1 class="h5 mb-2 text-gray-800">Trang chủ / Quản lý slider</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Danh sách slider
                <a href="<?= ROOT ?>/admin?page=slider&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" class="col-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="checkall" id="checkall">
                        </th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>
                        </th>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($slider as $s) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="id[]" id="" value="<?= $s['id'] ?>">
                        </td>
                        <td><?= $s['id']?></td>
                        <td>
                            <img src="../images/<?= $s['image'] ?>" width="350" alt="">
                        </td>
                        <td><?= $s['created_at']?></td>
                        <td>
                            <a href="<?= ROOT ?>admin/?page=slider&action=edit&id=<?= $s['id'] ?>"  class="btn btn-success"><i class="far fa-edit"></i> Sửa</a>
                            <a href="<?= ROOT ?>admin/?page=slider&id=<?= $s['id'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Xóa
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                    <button type="submit" class="btn btn-danger" id="btndel-category" name="btn-del"><i class="fas fa-trash-alt"></i> Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->