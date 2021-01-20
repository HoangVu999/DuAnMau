<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Thêm danh mục
            </h3>
        </div>
        <div class="card-body">
            <form action="categories/create-save.php" method="post" enctype="multipart/form-data" class="col-md-8 m-auto">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-input-file border" id="">
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i> Lưu</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
