<?php
echo 'FILE<hr>';

$file = fopen('../public/demo.txt', 'r+');

$get1 = fgets($file);
$read = fread($file, 5);
$get2 = fgets($file);

fclose($file);

$end = 1;