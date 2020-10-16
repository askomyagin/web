<?php
$name = $_POST['name'];
$name_song = $_POST['name_song'];
$file = fopen("txt.txt","a+");
fwrite($file,"\n $name:$name_song \n");
fclose($file);
?>