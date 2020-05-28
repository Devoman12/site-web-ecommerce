<?php 

include ROOT_PATH . "/database/db.php";


$table = 'users';



function validateLogin($user){

    $errors = array();

    if (empty($user['name'])){
        array_push($errors, 'Username is Required');
    }
    if (empty($user['password'])){
        array_push($errors, 'password is Required');
    }
    
    return $errors;
}


function Login($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Welcome You are now logged in';
    $_SESSION['type'] = 'success';
    
    if ($_SESSION['admin']){
        header('location: ' . BASE_URL . '/dashboard.php');
        //header('location: ' . BASE_URL . '/admin/posts/indx.php');
    }
    else{
        header('location: ' . BASE_URL . '/index.php');
    }
    exite();
}



if (isset($_POST['register-btn'])){
    
    unset($_POST['register-btn']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['admin'] = 0;
    $user_id = create($table, $_POST);
    //$_SESSION['message'] = 'The user created Succrssfully';
    //$_SESSION['type'] = 'success';
    $user = selectOne($table, ['id' => $user_id]);
    Login($user); 
    
}



if (isset($_POST['login'])){
    $errors = validateLogin($_POST);
    if (count($errors) == 0){
        $user = selectOne($table, ['name' => $_POST['name']]);
        if ($user && password_verify($_POST['password'], $user['password'])){
            Login($user);
        }
        else{
            array_push($errors, 'wrong credentials');
        }
    }
        //$name = $_POST['name'];
        //$password = $_POST['password'];
}



?>