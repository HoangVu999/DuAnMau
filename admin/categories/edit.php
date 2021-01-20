<?php
require_once '../libs/categories.php';
$id = $_GET['id'];
$cate = list_one_category('id', $id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục sản phẩm </h6>
        </div>
        <div class="card-body">
            <form action="categories/edit-save.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên danh mục" value="<?= $cate['name'] ?>">
                </div
                <div class="form-group">
                    <label for="image">Ảnh</label>
                    <input type="hidden" name="image" value="<?= $cate['image'] ?>">
                    <input type="file" class="form-control-file border" id="image" name="image">
                    <img src="../images/<?= $cate['image'] ?>" width="150" alt="">
                </div>
                <input type="hidden" name="id" value="<?= $cate['id'] ?>">
                <button type="submit" name="btn-edit" class="btn btn-primary">Ghi lại</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->s