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

// Создайте базу данных содержащую таблицу users, которая содежит столбцы id, name, email, age.
// Напишите и выполните скрипт, который обновляет возраст пользователя с id = 1;

newAge(461);

// Напишите и выполните скрипт, который обновляет имя пользователя с id = 1;

newname('Инокентий');
?>


<!-- Напишите форму, которая принимает 2 параметра - id записи и возраст, и обновляет эти данные в базе по id. -->


 <!-- надо закоментить строки require_once
<form action="function.php" method="get">
    <input type="text" name="id_">id <br>
    <input type="text" name="age_">age <br>
    <input type="submit" value="go">
</form> -->

<!-- Напишите форму, которая принимает 2 параметра - id записи, имя и возраст, и обновляет эти данные в базе по id. -->

 <!-- надо закоментить строки require_once
 <form action="function.php" method="get">
    <input type="text" name="id_">id <br>
    <input type="text" name="name_">name <br>
    <input type="text" name="age_">age <br>
    <input type="submit" value="go">
</form> -->



