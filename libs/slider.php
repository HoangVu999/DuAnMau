<?php

require_once "database.php";

//Hàm lấy ra toàn bộ danh mục (categories)
function list_all_slider()
{
    return listAll('slides');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_slider($id, $value)
{
    return listOne('slides', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_slider($image,$created_at)
{
    $created_at = date("Y-m-d");
    $data = [
        'image' => $image,
        'created_at' => $created_at,
    ];
    return insert('slides',$data);
}

//function update_product
//$id_value giá trị điều kiện sửa sản phẩm theo id
function update_slider($image,$updated_at,$id_value)
{
    $updated_at = date("Y-m-d");
    $data = [
        'image' => $image,
        'updated_at' => $updated_at,
    ];
    return update('slides',$data,'id',$id_value);
}

//Xóa dữ liệu trong bảng
function delete_slider($id)
{
    delete('slides', 'id', $id);
}
