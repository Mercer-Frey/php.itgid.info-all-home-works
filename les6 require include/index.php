<?php

// Создайте функцию, которая складывает два числа. Поместите ее в файл function.php

// Подключите файл function.php в файл index.php. Вызовите функцию сложения в файле index.php


// Выполните два подключения файла function.php подряд. Изучите ошибку. Замените require на require_once, или include на include_once. Изучите ошибку.

// Продемонстрируйте отличия require от include.

require_once 'function.php';
require_once 'function.php';

$c = 2534;
$d = 25634;

sum($c, $d);

// include продолжает работу скрипта после ошибки в отличии от require

?>
