<?php
$fd = fopen("hello.txt", 'w') or die("не удалось создать файл");
$str = "Привет мир";
fwrite($fd, $str);
fclose($fd);
?>