<?php
$product_new = list_limit_product(3);
$product_sale = list_sale_product();
$product_top = product_top(3);
$product_view = product_top_view(3);
?>
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản phẩm mới</h2>
                        <div class="product-carousel">
                        <?php foreach ($product_new as $pro_new) : ?>
                                <div class="single-product">
                                    <div class="product-f-image" style="height:280px">
                                        <img src="images/<?= $pro_new['image'] ?>" alt="" style="height:240px; padding-top: 15px">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="<?= ROOT ?>?page=product&id=<?= $pro_new['id'] ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    <h2><a href="<?= ROOT ?>?page=product&id=<?= $pro_new['id'] ?>"><?= $pro_new['name'] ?></a></h2>
                                    <div class="product-carousel-price">
                                        <ins><?= $pro_new['price'] ?> <u>VND</u></ins> <del><?= $pro_new['sale'] ?> <u>VND</u></del>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="layout/img/brand1.png" alt="">
                        <img src="layout/img/brand2.png" alt="">
                        <img src="layout/img/brand3.png" alt="">
                        <img src="layout/img/brand4.png" alt="">
                        <img src="layout/img/brand5.png" alt="">
                        <img src="layout/img/brand6.png" alt="">
                        <img src="layout/img/brand1.png" alt="">
                        <img src="layout/img/brand2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area" id="topview">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top sản phẩm bán chạy</h2>
                        <?php foreach ($product_sale as $pro_sale) : ?>
                        <div class="single-wid-product">
                            <a href="<?= ROOT ?>?page=product&id=<?= $pro_sale['id'] ?>"><img src="images/<?= $pro_sale['image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?= ROOT ?>?page=product&id=<?= $pro_sale['id'] ?>"><?= $pro_sale['name'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                            <ins><?= $pro_sale['price'] ?> <u>VND</u></ins> <del><?= $pro_sale['sale'] ?> <u>VND</u></del>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top sản phẩm yêu thích</h2>
                        <?php foreach ($product_view as $pro_view) :?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/<?= $pro_view['image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href=""><?= $pro_view['name'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?= $pro_view['price'] ?> <u>VND</u></ins> <del><?= $pro_view['sale'] ?> <u>VND</u></del>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top sản phẩm mới</h2>
                        <?php foreach ($product_top as $pro_top) : ?>
                        <div class="single-wid-product">
                            <a href="<?= ROOT ?>?page=product&id=<?= $pro_top['id'] ?>"><img src="images/<?= $pro_top['image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?= ROOT ?>?page=product&id=<?= $pro_top['id'] ?>"><?= $pro_top['name'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                            <ins><?= $pro_top['price'] ?> <u>VND</u></ins> <del><?= $pro_top['sale'] ?> <u>VND</u></del>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>