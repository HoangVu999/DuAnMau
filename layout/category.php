<?php
$id = $_GET['id'];
$sql = "SELECT pro.id AS pro_id, cate_id, pro.name as pro_name, description, pro.image as pro_image, price, sale
        FROM products as pro
        INNER JOIN categories as cate on pro.cate_id=cate.id
        WHERE pro.cate_id=:cate_id
        ORDER BY cate_id DESC";
$conn = connection();
$stmt = $conn->prepare($sql);
$stmt->bindParam('cate_id', $id);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $pro) : ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="images/<?= $pro['pro_image'] ?>" alt="" style="height:240px; padding-top: 15px">
                        </div>
                        <h2><a href="<?= ROOT ?>?page=product&id=<?= $pro['pro_id'] ?>"><?= $pro['pro_name'] ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?= $pro['sale'] ?></ins>
                            <del><?= $pro['price'] ?></del>
                        </div>

                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                               rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
