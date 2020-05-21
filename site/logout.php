<?php
include ("path.php");



session_start();
//print_r($_SESSION);

session_destroy();

header('location: ' . BASE_URL . '/index.php');
