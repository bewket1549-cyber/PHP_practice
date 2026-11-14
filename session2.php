<?php 

session_start();

?>

<?php

echo $_SESSION['username'];

echo "<br>";
echo $_SESSION['password'];
echo "<br>";
print_r($_SESSION);
?>

