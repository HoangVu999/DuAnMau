<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam
                        laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure
                        eaque ipsam iste, pariatur omnis sint!
                        Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" id="login">
                    <?php if (!check_account()) : ?>
<!--                        <div class="panel">-->
<!--                            <div class="form">-->
<!--                                <form action="" method="POST" style="padding: 10px">-->
<!--                                    <div class="heading font-weight-bold text-center text-info"><h3>TÀI KHOẢN</h3></div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="username">Username</label>-->
<!--                                        <input type="text" name="username" id="username" placeholder="username" style="width: 100%">-->
<!--                                        <span>--><?//= isset($error['username']) ? $error['username'] : '' ?><!--</span>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="password">Password</label>-->
<!--                                        <input type="password" name="password" id="password" placeholder="password" style="width: 100%">-->
<!--                                        <span>--><?//= isset($error['password']) ? $error['password'] : '' ?><!--</span>-->
<!--                                    </div>-->
<!--                                    <button class="btn btn-primary" name="btndangnhap">Login</button>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
                    <?php else : ?>
                        <div class="panel">
                            <div class="heading">TÀI KHOẢN</div>
                            <label for=""><?= $_SESSION['user']['username'] ?></label>
                            <a href="<?= ROOT ?>?page=logout">Đăng xuất</a>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy;Web-204 Dự án mẫu <a href="http://www.freshdesignweb.com" target="_blank"></a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="layout/js/owl.carousel.min.js"></script>
<script src="layout/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="layout/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="layout/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="layout/js/bxslider.min.js"></script>
<script type="text/javascript" src="layout/js/script.slider.js"></script>
</body>

</html>
<?php
ob_end_flush();
?>
