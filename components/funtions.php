<?php

include './conn.php';

function login()
{
    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($email) || empty($password)) {
            echo "<h2 class='font-bold pt-3 text-2xl text-red-500 leading-10'>Bạn phải nhập đầy đủ tài khoản và mật khẩu</h2>";
            echo " <a href='./login.php' class='text-red-600 !! font-bold text-3xl'> Trở lại <i class='fa-solid fa-retweet'></i>  </a>";

            return false;
        }

        echo "<h2 class='font-bold pt-3 text-2xl text-red-500 leading-10'>Chào mừng tài khoản $email <br> đã đến với shop cho mèo uy tín nhất thế giới</h2>";

    }

}

function read()
{
    global $connect;
    $sql = "SELECT * FROM pets";
    $statement = $connect->prepare($sql);
    $statement->execute();
    global $data;
    $data = $statement->fetchAll();

}
function checkForm($value, $default = " <h1 class='text-red-600'>Bạn phải nhập trường này</h1>")
{
    if (!empty($value)) {
        return $value;
    } else {
        return $default;
    }

}
function create()
{
    global $connect;
    $name = $_POST['name'];
    $age = $_POST['age'];
    $type = $_POST['option'];
    $weight = $_POST['weight'];
    $img = basename($_FILES['img']['name']);
    $target_dir = '../uploads/';
    $target_file = $target_dir . $img;
    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    $sql = " INSERT INTO pets (name, age, type_animal, weight,img)";
    $sql .= " VALUES ('$name', '$age','$type','$weight','$img' )  ";
    $statement = $connect->prepare($sql);
    $statement->execute();
}
function readForUd()
{
    global $connect;
    $id = $_GET['id'];
    // echo $id;
    $sql = "SELECT * FROM pets where id  = $id";
    $statement = $connect->prepare($sql);
    $statement->execute();
    global $data;
    $data = $statement->fetchAll();
    // foreach ($data as $row => $key) {
    //     print_r($key);
    // }
}
function update()
{
    global $connect;
    $id = $_GET['id'];
    $name = $_POST['name'];
    $type_animal = $_POST['option'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $sql = "UPDATE pets SET age = $age, type_animal = $type_animal , weight = $weight where id = $id";
    $statement = $connect->prepare($sql);
    $statement->execute();
}
//     $sql = "INSERT INTO pets(name,type_animal,age,weight,img)
// VALUES ('$name','$age','$weight','$img) ";
//     $statement = $connect->prepare($sql);
//     $statement->execute();