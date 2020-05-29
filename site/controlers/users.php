<?php

include ROOT_PATH . "/database/db.php";


$table = 'users';
$users = selectAll($table);


if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user ['id'];
    $name = $user ['name'];
    $email = $user ['email'];
    $admin = $user ['admin'];
}



 if (isset($_GET['delate_id'])) {
    delate($table, $_GET['delate_id']);
    header('location: ' . BASE_URL . '/addusers.php');
    exit(); 
}


if (isset($_GET['admin']) && isset($_GET['U_id'])){
    $admin = $_GET['admin'];
    $U_id = $_GET['U_id'];
    $count = update($table, $U_id, ['admin' => $admin]);
    $_SESSION['message'] = 'The Post admin was changed Succrssfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/addusers.php');
    exit();


} 



if (isset($_POST['add-user'])){
    global $conn;

    if ($_POST['password'] == $_POST['password1']) {
        unset($_POST['add-user']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $admin = $_POST['admin'];
    
        $sql = "INSERT INTO $table (`id`, `name`, `email`, `admin`, `password`) VALUES
                            (NULL, '$name', '$email', '$admin', '$password');";
        if ($conn->query($sql) === TRUE) {
            header('location: ' . BASE_URL . '/addusers.php');
            exit(); 
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

}




if (isset($_POST['update-user'])){
    global $conn;
    if ($_POST['password'] == $_POST['password1']) {
        unset($_POST['update-user']);
        unset($_POST['password1']);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $admin = $_POST['admin'];

        $sql = "UPDATE $table SET `name` = '$name', `email` = '$email', `admin` = '$admin', `password` = '$password' WHERE `id` = '$id';";


        if ($conn->query($sql) === TRUE) {
            header('location: ' . BASE_URL . '/addusers.php');
            exit(); 
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

}