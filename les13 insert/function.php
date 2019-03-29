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


// Создайте базу данных содержащую таблицу users, которая содежит столбцы id, name, email, age.
// Напишите форму, которая добавляет запись в данную базу данных.
// Добавьте проверку на заполненность всех полей формы. 

$id_ = $_GET['id_'];
$name_ = $_GET['name_'];
$email_ = $_GET['email_'];
$age_ = $_GET['age_'];

function addTr($id_, $name_, $email_, $age_){
  if ($id_ =='' || $name_=='' || $email_=='' || $age_ =='') {
      echo 'заполни поля';
    }else{
      $conn = connect();
      $sql = "INSERT INTO user (id, name, email, age)
      VALUES ('$id_', '$name_', '$email_', '$age_')";


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $a = select($conn);

    echo '<pre>';
    print_r ($a);
    echo '</pre>';

    close($conn);
  }
}
addTr($id_, $name_, $email_, $age_);




// Создайте базу данных, которая содержит столбцы id, title, body. Где title - varchar(100), body - text.
// Создайте форму, которая записывает сообщения в данную базу данных, где body - тело сообщения, title - заголовок.
// Допишите функцию, которая будет дублировать сообщения в файл, с названием title.dat


//подключаемся к другой бд
function connect1(){
  $conn = mysqli_connect(SERVERNAME1, USERNAME1, PASSWORD1, DBNAME1); //открываем соединение с базой
  mysqli_set_charset($conn, "utf8"); // установка кодировки соединения с бд
  // Check connection
  if (!$conn) {

      die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
};

function select1($conn){
  $sql = "SELECT * FROM text"; // запрос * выбрать все из таблицы user
  $result = mysqli_query($conn, $sql); //выполнение запроса
    
  $a = array();
  if (mysqli_num_rows($result) > 0) { //првоерка выбраны ли данные действительно
      while($row = mysqli_fetch_assoc($result)) { // если да преобразовуем каждую строку в массив
          $a[] = $row; // 1 строка бд
      }
  } 
  return $a;
};



$id_1 = $_GET['id_1'];
$title_ = $_GET['title_'];
$body_ = $_GET['body_'];

// создаем новый текст

function addText($id_1, $title_, $body_){
  if ($id_1 =='' || $title_=='' || $body_=='') {
      echo 'заполни поля';
    }else{
      $conn = connect1();
      $sql = "INSERT INTO text (id, title, body)
      VALUES ('$id_1', '$title_', '$body_')";


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $a = select1($conn);

    echo '<pre>';
    print_r ($a);
    echo '</pre>';

    close($conn);
  }
}
// addText($id_1, $title_, $body_);



// Допишите функцию, которая будет дублировать сообщения в файл, с названием title.dat

//записываем в файл

$conn = connect1();
$sql = "SELECT body FROM text WHERE id =".$id_1;
$result = mysqli_query($conn, $sql);

$a = array();
  
if (mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) { 
        $a[] = $row; 
    }
} else {
    echo "0 results";
}

echo '<pre>';
print_r ($a);
echo '</pre>';

foreach ($a[0] as $key => $value) {
  $d = $value;
  if (!file_exists('title.dat')) {
    $fp = fopen('title.dat', "w"); 
    fwrite($fp, $d);
    fclose($fp);
  }
}


close($conn);




?>