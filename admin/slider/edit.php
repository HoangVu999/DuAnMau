<?php
require_once '../libs/slider.php';
$id = $_GET['id'];
$slider = list_one_slider('id', $id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục sản phẩm </h6>
        </div>
        <div class="card-body">
            <div class="col-4 m-auto">
                <form action="slider/edit-save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Ảnh</label>
                        <input type="hidden" name="image" value="<?= $slider['image'] ?>">
                        <input type="file" class="form-control-file border" id="image" name="image">
                        <img src="../images/<?= $slider['image'] ?>" width="250" alt="" class=" m-auto">
                    </div>
                    <input type="hidden" name="id" value="<?= $slider['id'] ?>">
                    <button type="submit" name="btn-edit" class="btn btn-primary">Ghi lại</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->