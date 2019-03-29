<?php

// Создайте папку, добавьте в нее файлы. Выведите содержимое папки на экран.
function createFolder($folder){
  if(!file_exists($folder)){
    mkdir($folder, 0777, true);
  }
}
function createFile($file){
  if (!file_exists($file)) {
    $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
    fwrite($fp, "Значение, то что будет в файле");
    fclose($fp);
  }
}
function showFolder($folder){
  echo $folder . ': ';
  $a = scandir($folder);
  foreach ($a as $value) {
    if ($value == '.' || $value == '..') continue;
    echo $value . ' || ';
  }
  echo '<br>';
}

createFolder('./test1/test1');
createFolder('./test1/test2');
createFolder('./test1/test3');
createFile("./test1/test2/text.txt");
createFile("./test1/test2/text1.txt");
createFile("./test1/test2/text2.txt");
createFile("./test1/text2.txt");
showFolder('./part 1/');
showFolder('./app/');
showFolder('./test1/test2/');

// Создайте папку, добавьте в нее файлы. Выведите суммарный размер файлов в папке.
echo '<br>';
function dirSize($directory) {
  echo $directory. ': ';
  $size = 0;
  foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
      $size+=$file->getSize();
  }
  echo $size / 1024 / 1024 . ' Mb <br>';
} 

dirSize('./part 1/');
dirSize('./app/');
dirSize('./test1/test2/');

// Создайте папку, добавьте в нее файлы. Выведите на страницу ссылки на эти файлы, чтобы при клике на них загружались сами файлы.
echo '<br>';
function hrefFolder($href){
  echo '<a href="' . $href . '">' . $href . '</a><br>';
}

hrefFolder('./part 1/');
hrefFolder('./app/');
hrefFolder('./test1/test2/');
echo '<br>';

// Сделайте сайт с обоями для рабочего стола, причем сами обои на странице сайта должны выводиться самостоятельно, на основе тех файлов, что заброшены в папку.

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <h1 class="text-center">Hello, world!</h1>
    <div class="container">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

          <?php
                $dir = 'img';
                if (is_dir($dir)){
                    $openDir = opendir($dir);
                    $active = true;
                    while (($file = readdir($openDir)) !== false){
                        if($file != "." && $file != ".."){
                            if ($active){
                                echo '<div class="carousel-item active">';
                                $active = false;
                            }
                            else {
                                echo '<div class="carousel-item">';
                            }
                            echo '<img class="d-block w-100" src="'.$dir.'/'.$file.'" alt="First slide"></div>';
                        }
                    }
                    closedir($openDir);
                }
            ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>