<?php
require_once '../libs/comments.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    delete_comment($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=comment');
    die;
}
if (isset($_POST['btn-del'])) {
    extract($_REQUEST);
    foreach ($id as $id_user) {
        delete_comment($id_user);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=comment');
    die;
}
$comment = list_all_comment();

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success">
            <h5 class="font-weight-bold text-white"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <h1 class="h5 mb-2 text-gray-800">Trang chủ / Quản lý Comment</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Danh sách Comment
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
                            <th>Product_id</th>
                            <th>User_id</th>
                            <th>Content</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>
                            </th>
                            <th>ID</th>
                            <th>Product_id</th>
                            <th>User_id</th>
                            <th>Content</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($comment as $c) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $c['id'] ?>">
                                </td>
                                <td><?= $c['id_comment'] ?></td>
                                <td><?= $c['name_product'] ?></td>
                                <td><?= $c['nameuser'] ?></td>
                                <td><?= $c['content'] ?></td>
                                <td><?= $c['date_created'] ?></td>
                                <td>
                                    <a href="<?= ROOT ?>admin/?page=comment&id=<?= $c['id'] ?>"
                                       onclick="return confirm('Bạn có muốn xóa danh mục này không')"
                                       class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-danger" id="btndel-category" name="btn-del"><i
                                class="fas fa-trash-alt"></i> Xóa mục đánh dấu
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

?>
<!-- /.container-fluid -->