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
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'users');



// Создайте базу данных содержащую таблицу users, которая содежит столбцы id, name, email, age.

// Напишите скрипт который будет подключаться к базе и выводить содержимое таблицы users на экран.

// Напишите скрипт, который принимает от пользователя возраст и выводит всех пользователей старше указанного возраста.
function mysqlCallAge($age = 0){
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); //открываем соединение с базой
  mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT age FROM user WHERE age>" . $age; // запрос * выбрать все из таблицы user
  $result = mysqli_query($conn, $sql); //выполнение запроса
  
  // var_dump(mysqli_num_rows($result)); //колличество выбраних записей из базы данных
  
  $a = array();
  
  if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
      while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
          $a[] = $row; // 1 строка бд
      }
  } else {
      echo "0 results";
  }
  
  echo '<pre>';
  print_r($a);
  echo '</pre>';
  echo $sql;
  mysqli_close($conn); //закрываем соединение
}


// Напишите скрипт, который принимает от пользователя имя и выводит всех пользователей из users с указанным именем.

function mysqlCallName($name){
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); //открываем соединение с базой
  mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM user WHERE name =" . "'$name'"; // запрос * выбрать все из таблицы user
  $result = mysqli_query($conn, $sql); //выполнение запроса
  
  // var_dump(mysqli_num_rows($result)); //колличество выбраних записей из базы данных
  
  $a = array();
  
  if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
      while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
          $a[] = $row; // 1 строка бд
      }
  } else {
      echo "0 results";
  }
  
  echo '<pre>';
  print_r($a);
  echo '</pre>';
  echo $sql;
  mysqli_close($conn); //закрываем соединение
}

// Напишите форму, которая принимает от пользователя имя и возраст. По нажатию кнопки выводятся все пользователи из users которые совпадают по имени и возрасту.

// var_dump($_GET);

$name_ = $_GET['name_'];
$age_ = $_GET['age_'];


  // $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); //открываем соединение с базой
  // mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
  // // Check connection
  // if (!$conn) {
  //     die("Connection failed: " . mysqli_connect_error());
  // }

  // $sql = "SELECT * FROM user WHERE name =" . "'$name_' AND age =" ."'$age_'"; // запрос * выбрать все из таблицы user
  // $result = mysqli_query($conn, $sql); //выполнение запроса
  
  // // var_dump(mysqli_num_rows($result)); //колличество выбраних записей из базы данных
  
  // $a = array();
  
  // if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
  //     while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
  //         $a[] = $row; // 1 строка бд
  //     }
  // } else {
  //     echo "0 results";
  // }
  
  // echo '<pre>';
  // print_r($a);
  // echo '</pre>';
  // // echo $sql;
  // mysqli_close($conn); //закрываем соединение



// Усложните предыдущий вариант. Если пользователь оставляет поле пустым, то мы не учитываем его при поиске.

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); //открываем соединение с базой
mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($age_ == ''){
  $sql = "SELECT * FROM user WHERE name =" . "'$name_'";
}else if($name_ == ''){
  $sql = "SELECT * FROM user WHERE age =" . "'$age_'";
}else{
  $sql = "SELECT * FROM user WHERE name =" . "'$name_' AND age =" ."'$age_'";
}
$result = mysqli_query($conn, $sql); //выполнение запроса

// var_dump(mysqli_num_rows($result)); //колличество выбраних записей из базы данных

$a = array();

if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
    while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
        $a[] = $row; // 1 строка бд
    }
} else {
    echo "0 results";
}

echo '<pre>';
print_r($a);
echo '</pre>';
// echo $sql;
mysqli_close($conn); //закрываем соединение