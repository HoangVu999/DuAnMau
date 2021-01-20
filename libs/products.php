<?php
require_once "database.php";

//Hiển thị toàn bộ danh sách sản phẩm bao gồm cả tên danh mục (Category name)
function list_all_product()
{
    $sql = "SELECT 
    p.id as id_product, 
    p.name as name_product,
    c.name as name_category,  
    p.image as image_product, 
    status, 
    price,
    p.created_at as date_created  
    FROM products p INNER JOIN categories c ON p.cate_id=c.id 
    Order by id_product DESC";
    return query($sql);
}
//Hàm lấy ra 1 bản ghi (dòng)
function list_one_product($id)
{
    return listOne('products', 'id', $id);
}
//thêm dữ liệu vào bảng
function insert_products($name,$description,$image,$detail,$price,$sale,$status,$cate_id,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'name' => $name,
        'description' => $description,
        'image' => $image,
        'detail' => $detail,
        'price' => $price,
        'sale' => $sale,
        'status' => $status,
        'cate_id' => $cate_id,
        'created_at' => $created_at,
    ];
    return insert('products', $data);
}


//$cate_id, $name, ... dữ liệu để sửa
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_product($cate_id, $name, $description, $image, $detail, $price, $sale, $status, $updated_at, $id_value)
{
    $updated_at = date('Y-m-d');
    $data = [
        'cate_id' => $cate_id,
        'name' => $name,
        'description' => $description,
        'image' => $image,
        'detail' => $detail,
        'price' => $price,
        'sale' => $sale,
        'status' => $status,
        'updated_at' => $updated_at
    ];
    return update('products', $data, 'id', $id_value);
}

//Xóa dữ liệu trong bảng
function delete_products($id)
{
    delete('products','id',$id);
}

//hàm tìm kiếm sản phẩm
function search_product($name){
    $sql = "SELECT p.id as id_product, 
                p.name as  name_product,
                p.image as image_product,
                status , price
                FROM products p join categories c
                ON p.cate_id = c.id
                WHERE p.name LIKE '%$name%'";
    return query($sql);
}

//Hiển thị danh sách sản phẩm có hạn chế
function list_limit_product($count){
    $sql =  "SELECT * FROM products ORDER BY id ASC LIMIT 0,10";
    return query($sql);
}
//Hiển thị danh sách sản phẩm có hạn chế
function product_top($count){
    $sql =  "SELECT * FROM products ORDER BY id DESC LIMIT 0,5";
    return query($sql);
}
//Hiển thị danh sách sản phẩm có hạn chế
function product_top_view($count){
    $sql =  "SELECT * FROM products ORDER BY view DESC LIMIT 0,5";
    return query($sql);
}
//Sản phảm giảm giá
function list_sale_product(){
    $arry = ['sale' , '>' , 0];
    return query_where('products',$arry);
}
//Hàm cập nhật lượng view
function update_view_product($id){
    $sql = "UPDATE products SET view=view+1 WHERE id=$id";
    $conn =  connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
//Lấy sản phẩm theo cate_id
//function showProduct_withCate_id(){
//    $sql = "SELECT pro.id AS i, cate_id, name, description, image, price, sale
//        FROM products as pro
//        INNER JOIN categories as cate on pro.cate_id = cate.id
//        WHERE pro.cate_id=:cate_id
//        ORDER BY cate_id DESC";
//    $conn =  connection();
//    $stmt = $conn->prepare($sql);
//    $stmt->bindParam('cate_id',$id);
//}
