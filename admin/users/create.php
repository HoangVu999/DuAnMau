<?php
require_once '../libs/users.php';
$user = list_all_user();
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm User</h6>
        </div>
        <div class="card-body">
            <form action="users/create-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullname">Full name <span class="text-danger">*</span></label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập đầy đủ tên" required>
                        </div>
                        <div class="form-group">
                            <label for="username">User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image <span class="text-danger">*</span></label><br>
                            <input type="file" name="image" class="form-input-file border" id="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập password" required minlength="6" maxlength="15">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role">Role <span class="text-danger">*</span></label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="1">Quản trị viên</option>
                                <option value="0">Người dùng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender <span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                     </div>
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i> Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>