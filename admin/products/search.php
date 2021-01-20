<?php
require_once "../libs/products.php";
extract($_REQUEST);
$result = search_product($keyword);
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h5 mb-2 text-gray-800">Trang chủ / Tìm kiếm sản phẩm</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h3>
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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $r['id_product'] ?>">
                                </td>
                                <td><?= $r['id_product']?></td>
                                <td><?= $r['name_product']?></td>
                                <td>
                                    <img src="../images/<?= $r['image_product'] ?>" width="150" height="150" alt="">
                                </td>
                                <td><?= number_format($r['price'], 0, '', ',');?> VNĐ</td>
                                <td><?= $r['status'] == 0  ? 'Hết hàng' : 'Còn hàng'?></td>
                                <td>
                                    <a href="<?= ROOT ?>admin/?page=product&action=edit&id=<?= $r['id_product'] ?>"  class="btn btn-success"><i class="far fa-edit"></i> Sửa</a>
                                    <a href="<?= ROOT ?>admin/?page=product&id=<?= $r['id_product'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger">
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
