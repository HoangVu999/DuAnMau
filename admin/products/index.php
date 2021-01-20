<?php
require_once '../libs/products.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_products($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=product');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_product){
        delete_products($id_product);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=product');
    die;
}
$result = list_all_product();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success my-4 rounded-lg">
            <h5 class="font-weight-bold text-white pt-2"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm
                <a href="<?= ROOT ?>/admin?page=product&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="POST" class="col-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="checkall" id="checkall">
                            </th>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>

                            </th>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $r['id_product'] ?>">
                                </td>
                                <td><?= $r['id_product'] ?></td>
                                <td><?= $r['name_category'] ?></td>
                                <td><?= $r['name_product'] ?></td>
                                <td>
                                    <img src="../images/<?= $r['image_product'] ?>" width="90" alt="">
                                </td>
                                <td><?= ($r['status']) ? 'Có hàng' : 'Hết hàng' ?></td>
                                <td><?= number_format($r['price'], 0, '', ',') ?></td>
                                <td>
                                    <?php
                                    $date = date_create($r['date_created']);
                                    echo date_format($date, 'd-m-Y');
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= ROOT ?>admin/?page=product&action=edit&id=<?= $r['id_product'] ?>" class="btn btn-success"><i class="far fa-edit"></i>Sửa</a>
                                    <a href="<?= ROOT ?>admin/?page=product&id=<?= $r['id_product'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger"><i class="far fa-trash-alt"></i>Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" id="btndel-category" name="btn-del">Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->