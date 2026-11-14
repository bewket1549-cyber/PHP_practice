<?php

function custom($errNum,$errMsg)
{
    echo "[$errNum]  [$errMsg]";
    error_log("Error: [$errNum] $errMsg",1,"bewket1549@gmail.com","From: bewketafework@gmail.com");
}

set_error_handler('custom');

echo $name."<br>";

$test=15;
if($test >10 )
    {
        trigger_error("I do not like this number");
    }

?>