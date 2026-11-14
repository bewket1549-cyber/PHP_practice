<?php 
$cookie_name="user";
$cookie_value="Cookie trainning";

setcookie($cookie_name,$cookie_value,time() + 200); //current time plus 20 seconds

if(count($_COOKIE) > 0)
    {
        echo count($_COOKIE)."<br>the cookie is $cookie_name <br>";
        echo "the cookie value is ".$_COOKIE[$cookie_name]; 
    }
    else
        echo "There is no cookie";

setcookie($cookie_name,$cookie_value,time() - 201); //DELETING OF COOKIE

if(count($_COOKIE) > 0)
    {
        echo count($_COOKIE)."<br>the cookie is $cookie_name <br>";
        echo "the cookie value is ".$_COOKIE[$cookie_name]; 
    }
    else
        echo "There is no cookie";

?>