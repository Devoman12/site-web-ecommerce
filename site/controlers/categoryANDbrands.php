<?php

include ROOT_PATH . "/database/db.php";



if (isset($_GET['delate_C_id'])) {
    delate($table1, $_GET['delate_C_id']);
    header('location: ' . BASE_URL . '/addCATEGORY&BRANDS.php');
    exit();
}

if (isset($_GET['delate_B_id'])) {
    delate($table2, $_GET['delate_B_id']);
    header('location: ' . BASE_URL . '/addCATEGORY&BRANDS.php');
    exit();
}



if (isset($_POST['add-Cat-Bra'])){
    if (empty($_POST['bra_name']) AND empty($_POST['cat_name'])){
        header("Refresh:0");
    }

    if (!empty($_POST['bra_name'])) {
        $v = $_POST['bra_name'];
        $sql = "INSERT INTO $table2 (`id`, `brand_name`) VALUES (NULL, '$v');";
        if ($conn->query($sql) === TRUE) {
            header("Refresh:0");
        }
    }

    if (!empty($_POST['cat_name'])) {
        $v = $_POST['cat_name'];
        $sql = "INSERT INTO $table1 (`id`, `category_name`) VALUES (NULL, '$v');";
        if ($conn->query($sql) === TRUE) {
            header("Refresh:0");
        }
    }
    exit();

}



