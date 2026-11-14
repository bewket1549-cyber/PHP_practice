<?php
$myfile = fopen("file.txt", "a") or die("Unable to open a file!"); 

$text="this is first file writing practice \r\n";
fwrite($myfile,"$text");

$text="this is third file writing practice \r\n";
fwrite($myfile,$text);


fclose($myfile);


?>