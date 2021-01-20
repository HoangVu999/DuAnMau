<?php
require_once 'database.php';

//Hàm lấy ra toàn bộ danh mục (comments)
function list_all_comment()
{
    $sql = "SELECT 
    c.id as id_comment, 
    p.name as name_product,
    u.fullname as nameuser,
    content,
    c.created_at as date_created  
    FROM comments c INNER JOIN products p ON c.product_id=p.id 
                    INNER JOIN users u ON c.user_id=u.id
    Order by id_comment DESC";
    return query($sql);
}
//Hàm lấy ra 1 bản ghi (dòng)
function list_one_comment($id, $value)
{
    return listOne('comments', $id, $value);
}

//Hiển thị danh sách comment theo product_id
function list_comment_product($product_id)
{
    $sql = "SELECT c.id comment_id, product_id, content, username, c.created_at created_comment 
            FROM comments c INNER JOIN users u ON c.user_id=u.id
            WHERE product_id='$product_id'";
    return query($sql);
}

//Thêm 1 comment vào bảng
function insert_comment($product_id, $user_id, $content)
{
    $date = date('Y-m-d');
    $data = [
        'product_id' => $product_id,
        'user_id'   => $user_id,
        'content'   => $content,
        'created_at' => $date
    ];
    insert('comments', $data);
}
//Xóa dữ liệu trong bảng
function delete_comment($id)
{
    delete('comments', 'id', $id);
}
//Hiển thị toàn bộ danh sách sản phẩm bao gồm cả tên danh mục (Category name)
function list_all_comments()
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
