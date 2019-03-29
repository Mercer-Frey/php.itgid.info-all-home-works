<?php

// Напишите скрипт, который выводит содержимое файла на экран.

function readF($file){
	if (file_exists($file)) {
		$handle = fopen($file, "r");
		$contents = fread($handle, filesize($file));
		echo $contents;
		fclose($handle);
	}
	else{
		echo 'file not found';
	}
}

readF('./read_file.txt');
echo '<br><br>';


// Напишите скрипт, который при загрузке обновляет содержимое файла file_count.txt, увеличия его на единицу. Изначально внутри файла лежит 0. Выводите содержимое файла на экран.

function counts($file){
	$file_counter = $file;

	// Читаем текущее значение счетчика
	if (file_exists($file_counter)) {
	    $handle = fopen($file_counter, "r");
	    $counter = fread($handle, filesize($file_counter));
	    fclose($handle);
	} else {
	    $counter = 0;
	}

	// Увеличиваем счетчик на единицу
	$counter++;

	// Сохраняем обновленное значение счетчика
	$handle = fopen($file_counter, "w");
	fwrite($handle, $counter);
	readF($file);
	fclose($handle); 
}

counts('file_count.txt');




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!-- 
	<form action="form.php">
		<input type="text" name="file_1">
		<input type="submit"> go 1
	</form> -->


<!-- 	<form action="form.php">
		<input type="text" name="file_2">
		<input type="submit"> go 2
	</form>
 -->


<!-- 	<form action="form.php">
		<input type="text" name="name_1">name <br>
		<input type="text" name="con_1">consist <br>
		<input type="submit"> go 3
	</form> -->


<!-- 	<form action="form.php">
		<textarea name="textarea" id="" cols="30" rows="10"></textarea>
		<input type="submit"> go 4
	</form> -->
	
</body>
</html>