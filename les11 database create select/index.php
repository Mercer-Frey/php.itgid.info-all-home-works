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


// Напишите скрипт, который принимает от пользователя возраст и выводит всех пользователей старше указанного возраста.
// mysqlCallAge(21);

// Напишите скрипт, который принимает от пользователя имя и выводит всех пользователей из users с указанным именем.
// mysqlCallName(седой);

?>

<!-- Напишите форму, которая принимает от пользователя имя и возраст. По нажатию кнопки выводятся все пользователи из users которые совпадают по имени и возрасту. -->
<br><br>

<form action="config.php" method="GET">
    <input type="text" name="name_" value="гриша">name <br>  
    <input type="text" name="age_" value="345">age <br>
    <input type="submit" value="go"><br>
</form>