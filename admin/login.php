<?php
session_start();
require_once '../config/config.php';
require_once '../libs/users.php';
//Nếu đã đăng nhập rồi
check_session();
extract($_REQUEST);
if (isset($btnlogin)) {
    if (check_user($username)) {
        //Trong trường hợp username tồn tại lấy ra dữu liệu
        $user = check_user($username);
        //var_dump($user);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            if ($_SESSION['user']['role'] == 1) {
                header('Location:' . ROOT . 'admin');
                die;
            }
            if ($_SESSION['user']['role'] == 0) {
                header('Location:' . ROOT);
                die;
            }
        } else {
            $error['password'] = "* Password không đúng !";
        }
    } else {
        $error['username'] = "* User name không đúng !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<div class="container">
    <?php if (isset($_SESSION['message_login'])): ?>
        <div class="toast" style="position: absolute; top: 20px; right: 20px;" data-delay="1500">
            <div class="toast-header">
                <strong class="mr-auto">Thông báo</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['message_login'] ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user"
                                               placeholder="User name...">
                                        <span class="text-danger">
                                            <?= isset($error['username']) ? $error['username'] : '' ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="Password">
                                        <span class="text-danger">
                                            <?= isset($error['password']) ? $error['password'] : '' ?>
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block"
                                            name="btnlogin">Login
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= ROOT ?>public/register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="resource/vendor/jquery/jquery.min.js"></script>
<script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="resource/js/sb-admin-2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.toast').toast('show');
    });
</script>

</body>

</html>

