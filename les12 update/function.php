<?php


require_once 'config.php';

function connect(){
  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME); //открываем соединение с базой
  mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
  // Check connection
  if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
};

function select($conn){
  $sql = "SELECT * FROM user"; // запрос * выбрать все из таблицы user
  $result = mysqli_query($conn, $sql); //выполнение запроса
    
  $a = array();
  if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
      while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
          $a[] = $row; // 1 строка бд
      }
  } 
  return $a;
};

function close($conn){
  mysqli_close($conn);
};


// данных содержащую таблицу users, которая содежит столбцы id, name, email, age.

// Напишите и выполните скрипт, который обновляет возраст пользователя с id = 1;

function newAge($newAge){
  $conn = connect();
  $sql = "UPDATE user SET age= '".$newAge."'WHERE id=1";

  if(mysqli_query($conn, $sql)){
      echo 'record update successfull';
  }else{
      echo 'error record updating' . mysqli_query($conn);
  }


  $a = select($conn);

  echo '<pre>';
  print_r($a);
  echo '</pre>';

  close($conn);
}

// Напишите и выполните скрипт, который обновляет имя пользователя с id = 1;

function newName($newName){
  $conn = connect();
  $sql = "UPDATE user SET name= '".$newName."'WHERE id=1";

  if(mysqli_query($conn, $sql)){
      echo 'record update successfull';
  }else{
      echo 'error record updating' . mysqli_query($conn);
  }


  $a = select($conn);

  echo '<pre>';
  print_r($a);
  echo '</pre>';

  close($conn);
}
// Напишите форму, которая принимает 2 параметра - id записи и возраст, и обновляет эти данные в базе по id.

$id_ = $_GET['id_'];
$age_ = $_GET['age_'];
$name_ = $_GET['name_'];

  // $conn = connect();
  // $sql = "UPDATE user SET age= '".$age_."'WHERE id=".$id_;

  // if(mysqli_query($conn, $sql)){
  //     echo 'record update successfull';
  // }else{
  //     echo 'error record updating' . mysqli_query($conn);
  // }


  // $a = select($conn);

  // echo '<pre>';
  // print_r($a);
  // echo '</pre>';

  // close($conn);


// Напишите форму, которая принимает 2 параметра - id записи, имя и возраст, и обновляет эти данные в базе по id.

// $conn = connect();
// $sql = "UPDATE user SET name= '".$name_."', age='".$age_."' WHERE id=".$id_;

// if(mysqli_query($conn, $sql)){
//     echo 'record update successfull';
// }else{
//     echo 'error record updating' . mysqli_query($conn);
// }


// $a = select($conn);

// echo '<pre>';
// print_r($a);
// echo '</pre>';

// close($conn);


?>