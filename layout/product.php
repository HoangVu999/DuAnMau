<?php
$product_new = list_limit_product(3);
if (isset($btnComment)) {
    insert_comment($id, $_SESSION['user']['id'], $content);
    header("Location:" . $_SERVER['REQUEST_URI']);
    die();
}
update_view_product($id);
?>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="index.php">Home</a>
                        <a href=""><?= $product['name'] ?></a>
                        <a href=""><?= $product['name'] ?></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="<?= ROOT ?>images/<?= $product['image'] ?>" alt="">
                                </div>

                                <div class="product-gallery">
                                    <img src="<?= ROOT ?>images/<?= $product['image'] ?>" alt="">
                                    <img src="<?= ROOT ?>images/<?= $product['image'] ?>" alt="">
                                    <img src="<?= ROOT ?>images/<?= $product['image'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?= $product['name'] ?></h2>
                                <div class="product-inner-price">
                                    <ins><?= $product['sale'] ?>VND</ins>
                                    <del><?= $product['price'] ?>VND</del>
                                </div>
                                <form action="javascript:;" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                                <div class="product-inner-category">
                                    <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                                  role="tab" data-toggle="tab">Mô tả
                                                sản phẩm</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                                   data-toggle="tab">Nhận xét</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <p><?= $product['detail'] ?></p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Nhận xét</h2>
                                            <?php if (check_account()) : ?>
                                                <div class="submit-review">
                                                    <form action="" method="post">
                                                        <p>
                                                            <textarea name="content" id="" cols="30"
                                                                      rows="10"></textarea>
                                                        </p>
                                                        <p><input type="submit" name="btnComment" value="Gửi"></p>
                                                    </form>
                                                </div>
                                            <?php else : ?>
                                                <p>
                                                <h5 class="text-danger">Bạn cần đăng nhập mới có thể bình luận</h5>
                                                </p>
                                            <?php endif; ?>
                                            <?php $comments = list_comment_product($id); ?>
                                            <?php foreach ($comments as $c) : ?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p class="text-secondary text-center"> <?= $c['created_comment'] ?></p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p>
                                                                <a class="float-left" href="javascript:;"><strong><?= $c['username'] ?></strong></a>
                                                            </p>
                                                            <div class="clearfix"></div>
                                                            <p><?= $c['content'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Related Products</h2>
                        <div class="related-products-carousel">
                            <?php foreach ($product_new as $pro_new) : ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="images/<?= $pro_new['image'] ?>" alt="" style="height:440px; padding-top: 15px">
                                        <div class="product-hover">
                                            <a href="javascript:;" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="<?= ROOT ?>?page=product&id=<?= $pro_new['id'] ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    <h2><a href=""><?= $pro_new['name'] ?></a></h2>
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
</div>


