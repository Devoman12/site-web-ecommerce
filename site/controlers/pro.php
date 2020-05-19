<?php

include ROOT_PATH . "/database/db.php";


$table = 'products';
$products = selectAll($table);




if (isset($_GET['id'])) {
    $product = selectOne($table, ['id' => $_GET['id']]);
    $id = $product ['id'];
    $name = $product ['name'];
    $price = $product ['price'];
    $availability = $product ['availability'];
    $condition = $product ['condition'];
    $brand = $product ['brand'];
    $category = $product ['category'];
}



if (isset($_GET['delate_id'])) {
    delate($table, $_GET['delate_id']);
    header('location: ' . BASE_URL . '/addprod.php');
    exit();
}


if (isset($_GET['availability']) && isset($_GET['p_id'])){
    $published = $_GET['availability'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['availability' => $published]);
    $_SESSION['message'] = 'The Post published was changed Succrssfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/addprod.php');
    exit();
}


if (isset($_POST['add'])){
    global $conn;
    if (!empty($_FILES['pro_image']['name']) AND is_numeric($_POST['price'])){
        $image_name = time() . '_' . $_FILES['pro_image']['name'];
        $destination = ROOT_PATH . "/images/Allproducts/" . $image_name;
        $result = move_uploaded_file($_FILES['pro_image']['tmp_name'], $destination);
        
        if ($result) {
            $_POST['image'] = $image_name;
            unset($_POST['add']);
            $name = $_POST['name'];
            $price = $_POST['price'];
            $availability = $_POST['availability'];
            $condition = $_POST['condition'];
            $brand = $_POST['brand'];
            $category = $_POST['category'];
            $image = time() . '_' . $_FILES['pro_image']['name'];

            $sql = "INSERT INTO $table (`id`, `name`, `price`, `image`, `availability`, `condition`, `brand`, `category`) VALUES
                        (NULL, '$name', '$price', '$image', '$availability', '$condition', '$brand', '$category');";
            if ($conn->query($sql) === TRUE) {
                header('location: ' . BASE_URL . '/index.php');
                exit(); 
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();

        }else {
            array_push($errors, "Failed to upload image");
        }
    }else {
        array_push($errors, "Psot image required");
    }
}



if (isset($_POST['update-pro'])){
    global $conn;


    if (!empty($_FILES['pro_image']['name']) AND is_numeric($_POST['price'])){
        $image_name = time() . '_' . $_FILES['pro_image']['name'];
        $destination = ROOT_PATH . "/images/Allproducts/" . $image_name;
        $result = move_uploaded_file($_FILES['pro_image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
            unset($_POST['update-pro']);
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $availability = $_POST['availability'];
            $condition = $_POST['condition'];
            $brand = $_POST['brand'];
            $category = $_POST['category'];
            $image = time() . '_' . $_FILES['pro_image']['name'];


            $sql = "UPDATE $table SET `name` = '$name', `price` = '$price', `availability` = '$availability', `condition` = '$condition',
            `brand` = '$brand' ,`category` = '$category', `image` = '$image' WHERE `products`.`id` = '$id';";


            if ($conn->query($sql) === TRUE) {
                header('location: ' . BASE_URL . '/addprod.php');
                exit(); 
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();

        }else {
            array_push($errors, "Failed to upload image");
        }
    }else {
        array_push($errors, "Psot image required");
    }

}


