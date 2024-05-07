<?php 
    require_once 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <style>
        th, td {
            padding: 10px;
        }
        th {
            background: #606060;
            color: #fff;
        }
        td {
            background: #b5b5b5;
        }
    </style>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php 
                $products = mysqli_query($connect, "SELECT * FROM testphp.products");
                $products = mysqli_fetch_all($products);
                foreach($products as $product) {
                    ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><a href="update.php?id=<?= $product[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
    </table>
    <p>Добавление продукта</p>
    <form action="vendor/create.php" method="post">
        <p>Заголовок</p>
        <input type="text" name="title">
        <p>Цена</p>
        <input type="number" name="price">
        <p>Описание</p>
        <textarea name="description"></textarea>
        <br>
        <br>
        <button type="submit">Добавить</button>
    </form>
</body>
</html>