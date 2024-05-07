<?php 
    $connect = mysqli_connect('localhost', 'root', 'lb20vf04', 'testphp');

    if(!$connect) {
        die("Ошибка подключения БД");
    }

?>