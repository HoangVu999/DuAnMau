<?php
session_start();
require_once '../libs/users.php';
$user = list_all_user();
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="../admin/resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/resource/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <form class="user" action="../admin/users/create-save.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="fullname" class="form-control form-control-user"
                                           id="exampleFirstName" placeholder="Full Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="username" class="form-control form-control-user"
                                           id="exampleLastName" placeholder="User Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" class="form-input-file border" id="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user"
                                       id="exampleInputEmail" placeholder="Email Address" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control form-control-user"
                                           id="password" placeholder="Password" required minlength="6">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           name="confirm_password" id="confirm_password" placeholder="Repeat Password"
                                           required minlength="6">
                                    <span id='message'></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="address" class="form-control form-control-user"
                                           id="address" placeholder="Address" required >
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"
                                           name="phone" id="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block" name="btn-save">Register
                                Account
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <!--                        <div class="text-center">-->
                        <!--                            <a class="small" href="forgot-password.php">Forgot Password?</a>-->
                        <!--                        </div>-->
                        <div class="text-center">
                            <a class="small" href="<?= ROOT ?>/admin/login.php">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../admin/resource/vendor/jquery/jquery.min.js"></script>
<script src="../admin/resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../admin/resource/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../admin/resource/js/sb-admin-2.min.js"></script>
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Mật khẩu trùng khớp').css('color', 'green');
        } else
            $('#message').html('Mật khẩu không trùng khớp').css('color', 'red');
    });
</script>
</body>

</html>
