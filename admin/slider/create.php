<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm ảnh
            </h6>
        </div>
        <div class="card-body">
            <div class="col-4 m-auto">
                <form action="slider/create-save.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="image" class="form-input-file border" id="">
                    </div>
                    <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i>
                        Lưu
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
