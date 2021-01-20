<?php
require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (categories)
function list_all_category()
{
    return listAll('categories');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_category($id, $value)
{
    return listOne('categories', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_category($name, $image,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'name' => $name,
        'image' => $image,
        'created_at' => $created_at,
    ];
    return insert('categories', $data);
}
//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_category($name,$image,$updated_at,$id_value)
{
    $updated_at = date('Y-m-d');
    $data = [
        'name' => $name,
        'image' => $image,
        'updated_at' => $updated_at,
    ];
    return update('categories', $data,'id',$id_value);
}
//Xóa dữ liệu trong bảng
function delete_category($id)
{
    delete('categories','id',$id);
}

//Hiển thị sản phẩm theo danh mục
function list_product(){

}