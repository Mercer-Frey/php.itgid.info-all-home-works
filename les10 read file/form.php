<?php


/*************************************************************************/
// Напишите скрипт, который выводит содержимое указанного в форме файла на экран.

// $file_1 = $_GET['file_1'];

// function readF($file){
// 	if (file_exists($file)) {
// 		$handle = fopen($file, "r");
// 		$contents = fread($handle, filesize($file));
// 		echo $contents;
// 		fclose($handle);
// 	}
// 	else{
// 		echo 'file not found';
// 	}
// }

// readF($file_1);

// Напишите скрипт, который проверяет существование файла указанного в форме.

// $file_2 = $_GET['file_2'];

// function readF($file){
// 	if (file_exists($file)) {
// 		echo 'yes, file exists';
// 	}
// 	else{
// 		echo 'file not found';
// 	}
// }

// readF($file_2);

// Создайте форму, куда пользователь может ввести имя файла и содержимое. Если файл существует, то необходимо дописать в него информацию. Если нет - создать файл и записать в него информацию.


// $name_1 = $_GET['name_1'];
// $con_1 = $_GET['con_1'];

// function putText($file, $con){
// 	echo $file . ' ' . $con;

// 	if (file_exists($file)) {
// 		file_put_contents($file, $con);
// 	}
// 	else if (!file_exists($file)) {
//     $fp = fopen($file, "w"); 
//     fwrite($fp, $con);
//     fclose($fp);
//   }
// }

// putText($name_1, $con_1);


// Создайте форму, в которой есть textarea - все внесенное в textarea по нажатию кнопки записывается в файл, предыдущее содержимое - удаляется.

$textarea = $_GET['textarea'];

function putText($file, $con){
	echo $file . ' ' . $con;

	if (file_exists($file)) {
		file_put_contents($file, $con);
	}
	else if (!file_exists($file)) {
    $fp = fopen($file, "w"); 
    fwrite($fp, $con);
    fclose($fp);
  }
}

putText('textarea.txt', $textarea);


?>