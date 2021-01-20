<?php

require_once "database.php";

//Kiểm tra user khi login
function check_user($username)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $user = query($sql);
    if (count($user) > 0){
        return $user[0];
    }
    return false;
}

//Hàm lấy ra toàn bộ danh mục (users)
function list_all_user()
{
    return listAll('users');
}

//Hàm lấy ra 1 bản ghi (dòng)
function list_one_user($id, $value)
{
    return listOne('users', $id, $value);
}

//thêm dữ liệu vào bảng
function insert_user($fullname,$username,$image,$email,$password,$role,$address,$phone,$gender,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'fullname' => $fullname,
        'username' => $username,
        'image' => $image,
        'email' => $email,
        'password' => $password = password_hash($password, PASSWORD_DEFAULT),
        'role' => $role,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender,
        'created_at' => $created_at
    ];
    return insert('users', $data);
}

//Cập nhật dữ liệu vào bảng
function update_user($fullname,$username,$image,$address,$phone,$update_at,$id_value)
{
    $update_at = date('Y-m-d');
    $data = [
        'fullname' => $fullname,
        'username' => $username,
        'image' => $image,
        'email' => $email,
//        'role' => $role,
        'address' => $address,
        'phone' => $phone,
//        'gender' => $gender,
        'update_at' => $update_at
    ];
    return update('users', $data, 'id', $id_value);
}

//thêm dữ liệu vào bảng
function insert_user_login($fullname,$username,$image,$email,$password,$address,$phone,$gender,$created_at)
{
    $created_at = date('Y-m-d');
    $data = [
        'fullname' => $fullname,
        'username' => $username,
        'image' => $image,
        'email' => $email,
        'password' => $password = password_hash($password, PASSWORD_DEFAULT),
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender,
        'created_at' => $created_at
    ];
    return insert('users', $data);
}

//Xóa dữ liệu trong bảng
function delete_user($id)
{
    delete('users', 'id', $id);
}
//
//function login($username, $password)
//{
//    $conn = connection();
//    $sql = " select * from users where username = '$username'";
//    $result = $conn->query($sql);
//    if ($result->rowCount() > 0) {
//        foreach ($result as $row)
//            if (password_verify($password, $row["password"])) {
//                return true;
//                $_SESSION["username"] = $username;
//            } else {
//                return false;
//            }
//    } else {
//        return false;
//    }
//}

