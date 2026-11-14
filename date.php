<?php

echo date("y/m/d")."<br>";
echo date("y.d.m")."<br>";
echo date("y-m-d  h-i-s-a")."<br>";
echo date("l")."<br>";
echo date("h:i:s:a")."<br>";

$maketime=mktime(01,33,22,4,12,2022);
echo date("y-m-d h:i:sa",$maketime)."<br>";

$strtime=strtotime("10:20pm April 11 2020");
echo date("y:m:d h:i:sa",$strtime)."<br>  ";

$strtime2=strtotime("next wednesday");
echo date("y:m:d h:i:sa",$strtime2)."<br>";

date_default_timezone_set("Africa/Addis_Ababa");
echo date("h:i:s:a");

?> 
<p> &copy; <?php  echo date("y-m-d"); ?> </p>
