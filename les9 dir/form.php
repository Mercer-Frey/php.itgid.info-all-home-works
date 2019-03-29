<?php

// Создайте форму, которая принимает один параметр - имя папки, и по нажатию кнопки создает эту папку.

// $a1 = $_GET['file_1'];
//   mkdir($a1); 

// echo '<br><br><br>';


// Создайте форму, которая принимает один параметр - имя папки, и по нажатию кнопки удаляет эту папку. Папки для удаления - пустые.

// $a2 = $_GET['file_2'];
//   rmdir($a2); 

// echo '<br><br><br>';


// Создайте форму, которая принимает один параметр - имя файла, и после нажатия кнопки проверяет есть ли такой файл в папке.

// $a3 = $_GET['file_3'];

// if (is_dir($a3)){

//   echo 'yes';
// }
// else{
//   echo 'no';
// }
// print_r(scandir($a3));



// Создайте скрипт, который читает содежримое папки, и в зависимости от типа файла выводит имя файла, иконку, размер. Скрипт должен воспринимать файлы doc, docx, txt, jpg, jpeg, png. Иконки для сайта возьмите на iconfinder.com

$dir = $_GET['folder'];

function dirSize($directory) {
  $size = 0;
  foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
      $size+=$file->getSize();
  }
  return $size / 1000 / 1000;
} 

if (is_dir($dir)){
    $openDir = opendir($dir);

    while (($file = readdir($openDir)) !== false){

      $info = new SplFileInfo($dir."/".$file);
      
      if($file != "." && $file != ".."){
        if($info->getExtension() == 'txt'){
          echo '<img src="part 1/txt.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'doc'){
          echo '<img src="part 1/doc.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'docx'){
          echo '<img src="part 1/docx.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'jpeg'){
          echo '<img src="part 1/jpeg.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'jpg'){
          echo '<img src="part 1/jpg.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'png'){
          echo '<img src="part 1/png.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'php'){
          echo '<img src="part 1/php.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'js'){
          echo '<img src="part 1/js.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'css'){
          echo '<img src="part 1/css.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == 'html'){
          echo '<img src="part 1/html.png" style="width: 25px; height: auto;"> ';
        }
        else if($info->getExtension() == ''){
          echo '<img src="part 1/folder.png" style="width: 25px; height: auto;"> ';
        }
      }
      if($file != "." && $file != ".." && is_dir($dir."/".$file)){
          echo $file.': '.  dirSize($dir."/".$file) . ' Mb' .'<br>';
      }
      else if(!is_dir($dir."/".$file)){
        echo $file.': '.  filesize($dir."/".$file) /1024/1024 .' Mb' .'<br>';
      }
    }

    closedir($openDir);
}

?>
