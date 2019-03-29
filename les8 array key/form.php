<?php

// Создайте форму с тремя полями: имя, фамилия, возраст. По нажатию кнопки создайте массив arr - куда поместите данные с ключами name_1, name_2, age. Выведите на экран полученный массив.

$a1 = $_GET['age'];

if(isset($_GET['name_1']) AND 
    trim($_GET['name_1']) !='' AND 
      isset($_GET['name_2']) AND 
        trim($_GET['name_2']) !=''){

  $n1 = $_GET['name_1'];
  $n2 = $_GET['name_2'];

}else{
  echo 'print correct name';
}
if(is_numeric($a1)){
  $n = array( 'name_1'  => $n1 , 'name_2'  => $n2 , 'age'  => $a1);
  print_r($n);
}else{
  echo 'print correct age';
}
echo '<br><br><br>';


// Создайте форму которая принимает 2 числа и выводит их произведение.

// if(is_numeric($_GET['num_1']) AND is_numeric($_GET['num_2'])){
//   echo $_GET['num_1'] * $_GET['num_2'];
// }else{
//   echo 'print correct number';
// }


// Создайте форму которая принимает 2 числа и выводит максимальное из них. Учтите вариант равенства.

// if(is_numeric($_GET['max_1']) AND is_numeric($_GET['max_2'])){
  // $max1 = $_GET['max_1'];
//   $max2 = $_GET['max_2'];
//   if($max1 == $max2){
//     echo $max1 . ' == ' . $max2;
//   }
//   else if($max1 < $max2){
//     echo $max2;
//   }
//   else if($max1 > $max2){
//     echo $max1;
//   }
//   else{
//     echo 'print correct number';
//   }
// }
// else{
//   echo 'print correct number';
// }


// Создайте форму, которая принимает 2 числа и возвращает случайное число между этими двумя. Используйте функцию rand. Проверьте, чтобы первое число было меньше второго.

// if($_GET['rand_1'] == $_GET['rand_2']){
//   echo $_GET['rand_1'];
// }
// else if($_GET['rand_1'] < $_GET['rand_2']){
//   echo rand($_GET['rand_1'], $_GET['rand_2']);
// }
// else if($_GET['rand_1'] > $_GET['rand_2']){
//   echo rand($_GET['rand_2'], $_GET['rand_1']);
// }

// Создайте ассоциативный массив и заполните его значениями ключ - значение. Ключи любые, значения - только число. Используя цикл foreach выведите максимальное значение в массиве.
echo '<br><br><br>';

$f = array('key' => 2, 'key1' => 9, 'key2' => 3, 'key3' => 5, 'key4' => 7, 'key5' => 3, 'key6' => 7);

foreach($f as $value){
	if($i < $value){
		$i = $value;
	}
}
echo $i;


echo '<br><br><br>';
// Создайте ассоциативный массив и заполните его значениями ключ - значение. Ключи любые, значения - только число. Используя существующие функции PHP для работы с массивами выведите ключ максимального значения в массиве.


$d = array('key' => 2, 'key1' => 6, 'key2' => 3, 'key3' => 5, 'key4' => 7, 'key5' => 3, 'key6' => 7);

$d = max($d);

echo $d;

?>