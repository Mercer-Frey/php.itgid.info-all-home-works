<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require_once 'config.php';
require_once 'function.php';


?>



<!-- Создайте базу данных содержащую таблицу users, которая содежит столбцы id, name, email, age. -->
<!-- Напишите форму, которая добавляет запись в данную базу данных. -->
<!-- Добавьте проверку на заполненность всех полей формы. -->

<!-- <form action="function.php" method="get"> <br>
    <input type="text" name="id_">id_ <br> 
    <input type="text" name="name_">name_ <br>
    <input type="text" name="email_">email_ <br>
    <input type="text" name="age_">age_ <br>
    <input type="submit" name="" value="go">
</form> -->


<!-- Создайте базу данных, которая содержит столбцы id, title, body. Где title - varchar(100), body - text. -->
<!-- Создайте форму, которая записывает сообщения в данную базу данных, где body - тело сообщения, title - заголовок. -->
<!-- Допишите функцию, которая будет дублировать сообщения в файл, с названием title.dat -->

<form action="function.php" method="get"> <br>
    <input type="text" name="id_1">id_1 <br> 
    <input type="text" name="title_">title_ <br>
    <input type="text" name="body_">body_ <br>
    <input type="submit" name="" value="go">
</form>
