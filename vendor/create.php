<?php 
    require_once '../config/connect.php';

    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    mysqli_query($connect, "INSERT INTO products (id, title, price, description) VAlUES (NULL, '$title', '$price', '$description')");
    
    header('Location: ../index.php');
?>