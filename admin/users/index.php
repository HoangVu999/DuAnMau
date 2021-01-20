<?php
require_once '../libs/users.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_user($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=user');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_user){
        delete_user($id_user);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=user');
    die;
}
$user = list_all_user();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success">
            <h5 class="font-weight-bold text-white"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <h1 class="h5 mb-2 text-gray-800">Trang chủ / Quản lý User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Danh sách user
                <a href="<?= ROOT ?>/admin?page=user&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
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
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>
                            </th>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($user as $u) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $u['id'] ?>">
                                </td>
                                <td><?= $u['id']?></td>
                                <td><?= $u['fullname']?></td>
                                <td><?= $u['username']?></td>
                                <td>
                                    <img src="../images/<?= $u['image'] ?>" width="150" alt="">
                                </td>
                                <td><?= $u['email']?></td>
                                <td><?= $u['role'] == 0 ? 'Người dùng' : 'Quản trị viên' ?></td>
                                <td><?= $u['address']?></td>
                                <td><?= $u['phone']?></td>
                                <td><?= $u['gender'] == 0 ? 'Nam' : 'Nữ' ?></td>
                                <td><?= $u['created_at']?></td>
                                <td>
                                    <a href="<?= ROOT ?>admin/?page=user&action=edit&id=<?= $u['id'] ?>"  class="btn btn-success"><i class="far fa-edit"></i></a>
                                    <a href="<?= ROOT ?>admin/?page=user&id=<?= $u['id'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i></a>
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
<?php

?>
<!-- /.container-fluid -->