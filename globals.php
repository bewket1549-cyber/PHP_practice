<?php
$x=7;
$y=8;

function add()
{
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

add();

echo "<br>".$y. $GLOBALS['x'];
?>