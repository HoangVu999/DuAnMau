<?php
    require_once '../libs/users.php';
    $id = $_GET['id'];
    $user = list_one_user('id', $id);
?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sửa User</h6>
        </div>
        <div class="card-body">
            <form action="users/edit-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 mx-auto d-block">
                        <div class="form-group">
                            <label for="fullname">Full name <span class="text-danger">*</span></label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nhập đầy đủ tên" required value="<?= $user['fullname'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên đăng nhập" required value="<?= $user['username']?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Ảnh</label>
                            <input type="hidden" name="image" value="<?= $user['image'] ?>">
                            <input type="file" class="form-control-file border" id="image" name="image">
                            <img src="../images/<?= $user['image'] ?>" width="150" alt="">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="email">Email <span class="text-danger">*</span></label>-->
<!--                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required value="--><?//= $user['email'] ?><!--">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="role">Role <span class="text-danger">*</span></label>-->
<!--                            <select name="role" id="role" class="form-control" required>-->
<!--                                <option value="1">Quản trị viên</option>-->
<!--                                <option value="0">Người dùng</option>-->
<!--                            </select>-->
<!--                        </div>-->
                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Nhập địa chỉ" required value="<?= $user['address']?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Nhập số điện thoại" required value="<?= $user['phone']?>">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="gender">Gender <span class="text-danger">*</span></label>-->
<!--                            <select name="gender" id="gender" class="form-control">-->
<!--                                <option value="0">Nữ</option>-->
<!--                                <option value="1">Nam</option>-->
<!--                            </select>-->
<!--                        </div>-->
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                        <button type="submit" name="btn-edit" class="btn btn-primary mx-auto d-block">Câp nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>