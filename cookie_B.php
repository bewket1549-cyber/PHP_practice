<?php
$cookie_name="user";

if(!isset($_COOKIE[$cookie_name]))
    {
        echo "there is no cookie.";
    }
    else
        {
        echo "the cookie is $cookie_name <br>";
        echo "the cookie value is ".$_COOKIE[$cookie_name];
        }
?>