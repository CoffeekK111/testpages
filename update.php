<?php
    require_once 'config/connect.php';

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM testphp.products WHERE id = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
<p>Обновление продукта</p>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Заголовок</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>">
        <p>Описание</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <br>
        <br>
        <button type="submit">Изменить продукт</button>
    </form>
</body>
</html>