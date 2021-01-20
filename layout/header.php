<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : '' ?> - X shop</title>

    <!-- Google Fonts -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="layout/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="layout/css/owl.carousel.css">
    <link rel="stylesheet" href="layout/style.css">
    <link rel="stylesheet" href="layout/css/responsive.css">

</head>

<body>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#topview"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                        <li><a href="<?= ROOT ?>admin/login.php"><i class="fa fa-user"></i> Login</a></li>
                        <?php //else : ?>
                        <!--    <label for="">--><? //= $_SESSION['user']['username'] ?><!--</label>-->
                        <!--    <li><a href="-->
                        <? //= ROOT ?><!--?page=logout"><i class="fa fa-user"></i> Login-out</a></li>-->
                        <?php //endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1>
                        <a href="index.php"><img src="layout/img/logo.png"></a>
                    </h1>
                </div>
            </div>

            <div class="col-sm-6">
<!--                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"-->
<!--                      method="post" action="--><?//= ROOT ?><!--admin/?page=product&action=search">-->
<!--                    <div class="input-group">-->
<!--                        <input name="keyword" type="text" class="form-control bg-light border-0 small"-->
<!--                               placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">-->
<!--                        <div class="input-group-append">-->
<!--                            <button class="btn btn-primary" type="submit">-->
<!--                                <i class="fa fa-search fa-sm"></i>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End site branding area -->
