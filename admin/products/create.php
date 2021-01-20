<?php
require_once '../libs/categories.php';
$pro = list_all_category();
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Thêm sản phẩm
            </h3>
        </div>
        <div class="card-body">
            <form action="products/create-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Nhập mô tả sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label><br>
                        <input type="file" name="image" class="form-input-file border" id="image">
                    </div>
                    <div class="form-group">
                        <label for="detail">Detail</label>
                        <textarea class="form-control" id="detail" name="detail" rows="10"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Nhập giá sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label for="sale">Sale</label>
                        <input type="number" name="sale" id="sale" class="form-control" placeholder="Nhập giá Sale" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Còn Hàng</option>
                            <option value="0">Hết Hàng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cate_id">Category Name</label>
                        <select name="cate_id" id="cate_id" class="form-control">
                            <?php foreach ($pro as $p) : ?>
                                <option value="<?= $p['id'] ?>"><?= $p['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
             </div>
                <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i> Lưu</button>
            </form>
        </div>
    </div>
</div>
<script>
    //Thêm trình soạn thảo văn bản tinymce vào phần nội dung của sản phẩm
    tinymce.init({
        selector: '#detail'
    });
</script>