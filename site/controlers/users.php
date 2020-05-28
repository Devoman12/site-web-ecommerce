<?php

include ROOT_PATH . "/database/db.php";


$table = 'users';
$users = selectAll($table);





if (isset($_POST['add-user'])){
    global $conn;

    if ($_POST['password'] == $_POST['password1']) {
        unset($_POST['add-user']);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $admin = $_POST['admin'];
    
        $sql = "INSERT INTO $table (`id`, `name`, `email`, `admin`, `password`) VALUES
                            (NULL, '$name', '$email', '$admin', '$password');";
        if ($conn->query($sql) === TRUE) {
            header('location: ' . BASE_URL . '/index.php');
            exit(); 
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

}


