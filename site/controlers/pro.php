<?php

include ROOT_PATH . "/database/db.php";

$table = 'products';




if (isset($_POST['add'])){
    global $conn;


    pri($_FILES);



    /* if (!empty($_POST['image'])){
        unset($_POST['add']);

        $name = $_POST['name'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];
        $condition = $_POST['condition'];
        $brand = $_POST['brand'];
        $category = $_POST['category'];
        $image = time() . '_' . $_FILES['image']['image'];

        $sql = "INSERT INTO $table (`id`, `name`, `price`, 'image', 'availability', 'condition', 'brand', 'category') VALUES
                    (NULL, '$name', '$price', '$image', '$availability', '$condition', '$brand', '$category');";
        if ($conn->query($sql) === TRUE) {
            header('location: ' . BASE_URL . '/index.php');
            exit(); 
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } */

}