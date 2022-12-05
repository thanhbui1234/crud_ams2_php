<?php

include './conn.php';

function save()
{
    session_start();
}

function login()
{
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        global $connect;
        global $errin;
        $errin = [];
        if (empty($email)) {
            $errin['email'] = 'Bạn thiếu email';
        }
        if (empty($password)) {
            $errin['password'] = 'Bạn thiếu password';
        }
        if (empty($errin)) {
            $sql = "select * from users where email='$email' and password='$password'";
            $statement = $connect->query($sql);
            $statement->execute();
            $data = [];
            $data = $statement->fetchAll();

            if ($data) {
                global $lap;
                foreach ($data as $value) {
                    $lap = "hello my friend " . $value['name'];
                }

                $_SESSION['user'] = $data;
                header('location: /index.php?hello=' . $lap);

            } else {
                echo " khong dung mat khau";
            }

        }

    }

}
function logup()
{
    global $connect;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pssword2 = $_POST['pwd2'];
        global $err;
        $err = [];
        if (empty($name)) {
            $err['name'] = 'Bạn thiếu name';
        }
        if (empty($email)) {
            $err['email'] = 'Bạn thiếu email';
        }if (empty($password)) {
            $err['password'] = 'Bạn thiếu  mật khẩu';
        }
        if ($password != $pssword2) {
            $err['password2'] = 'Bạn cần nhập đúng mật khẩu  ';

        }
        if (empty($err)) {
            $sql = "insert into users (name,email, password) values ('$name', '$email','$password')";
            $statement = $connect->prepare($sql);
            $statement->execute();
            // header('location: /index.php ');

        }

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
function readPetCate()
{
    global $connect;
    $sql = " SELECT cate.id, cate.name, p.type_animal , p.img FROM pets as p right join  nameCate as cate on ";
    $sql .= " p.id = cate.id";
    $statement = $connect->prepare($sql);
    $statement->execute();
    global $datapetCate;
    $datapetCate = $statement->fetchAll();
    // print_r($datapetCate);
}

// function insertDbCate($name, $type, $img)
// {
//     global $connect;
//     $sql = "INSERT INTO pets_categories (name , type_animal ,img) ";
//     $sql .= " VALUES ('$name','$type','$img')";
//     $statement = $connect->prepare($sql);
//     $statement->execute();

// }
function create_nameCate()
{global $connect;
    $name = $_POST['name'];
    $sql = "INSERT INTO nameCate (name) values ('$name')";
    $statement = $connect->prepare($sql);
    $statement->execute();

}

// function readDBcategories()
// {
//     global $connect;
//     $sql = "SELECT * FROM pets_categories";
//     $statement = $connect->prepare($sql);
//     $statement->execute();
//     global $datadb;
//     $datadb = $statement->fetchAll();

// }

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
function readFudCategory()
{
    global $connect;
    $id = $_GET['id'];
    $sql = " SELECT cate.id, cate.name, p.type_animal ,p.img  FROM pets as p right join  namecate as cate on ";
    $sql .= " p.id = cate.id WHERE cate.id = $id";
    $statement = $connect->prepare($sql);
    $statement->execute();
    global $dataCate;
    $dataCate = $statement->fetchAll();

}
function delete()
{
    global $connect;
    echo $id = $_GET['id'];

    $sql = "DELETE FROM pets where id =$id";
    $statement = $connect->prepare($sql);

    $msg = '';
    if ($statement->execute()) {
        $msg = 'delete successfully';
    } else {
        $msg = ' delete error';
    }
    header('location: ./list_pet.php?msg=' . $msg);

}
function deleteCategory()
{
    global $connect;
    echo $id = $_GET['id'];

    $sql = "DELETE FROM namecate where id =$id";
    $statement = $connect->prepare($sql);

    $msg = '';
    if ($statement->execute()) {
        $msg = 'delete successfully';
    } else {
        $msg = ' delete error';
    }
    header('location: ./list_category.php?msg=' . $msg);

}
function aletdelete()
{
    if (!empty($_GET['msg'])) {

        echo "<script>
Swal.fire({
    title: 'Are you sure?',
    text: 'You wont be able to revert this!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
}).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
    }
})
</script>";}

}

function update()
{
    if (isset($_POST['submit'])) {
        // $connect;
        global $connect;
        $id = $_GET['id'];
        $name = $_POST['name'];
        $type_animal = $_POST['option'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $img = basename($_FILES['img']['name']);
        $target_dir = '../uploads/';
        $target_file = $target_dir . $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
        $sql = "UPDATE pets SET name ='$name', age = $age, type_animal = '$type_animal' , weight = '$weight', img = '$img' where id = $id";
        $statement = $connect->prepare($sql);
        $aletUpdate = '';
        if ($statement->execute()) {
            $aletUpdate = 'UPDATE THANH CONG';

        } else {
            $aletUpdate = 'UPDATE khong THANH CONG';

        }
        header("Location: ./list_pet.php?alet=" . $aletUpdate);

    }

}
function update2()
{
    $name = $_POST['name'];
    $type_animal = $_POST['option'];
    $img = basename($_FILES['img2']['name']);
    $id = $_GET['id'];
    global $connect;
    $alet = '';

    $sql = " UPDATE namecate SET name = '$name' WHERE id = '$id'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $sql1 = " UPDATE pets SET type_animal = '$type_animal', img ='$img' WHERE id = '$id'";
    $statement1 = $connect->prepare($sql1);
    if ($statement1->execute()) {
        $alet = 'update thanh` cong';

    } else {
        $alet = 'update khong thanh cong';

    }
    header("location: ./list_category.php?alet=" . $alet);

}
function aletUpdate()
{
    if (!empty($_GET['alet'])) {
        echo "<script>
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Bạn đã update thành công ',
    showConfirmButton: false,
    timer: 2500
})
</script>";

    }

}