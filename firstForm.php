<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php form example</title>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            Student name: <input type="text" name="sname" ><br><br>
            Quizz <input type="text" name="quizz" ><br><br>
            Assignment <input type="text" name="ass" ><br><br>
            Mid <input type="text" name="mid" ><br><br>
            Final <input type="text" name="final" ><br><br>
                            <input type="submit" >
        </form>
        
        <?php
        include 'globals.php';
        include "server.php";
        if($_SERVER['REQUEST_METHOD']=='POST'){
        $Quizz=$_POST['quizz'];
        $Assignment=$_POST['ass'];
        $Mid=$_POST['mid'];
        $Final=$_POST['final'];

       

        if(empty($Quizz)||empty($Assignment)||empty($Mid)||empty($Final)){
            
         echo "All datas are required. Please fill all field!";
        }
                   
        else
            {
        $total=$Quizz + $Assignment + $Mid + $Final;

        $grade='';
include "server.php";
        switch($total)
        {
            case $total>=90;
            $grade='A+';
            break;
            case $total>=85;
            $grade='A';
            break;
            case $total>=80;
            $grade='A-';
            break;
            case $total>=75;
            $grade='B+';
            break;
            case $total>=70;
            $grade='B';
            break;
            case $total>=65;
            $grade='B-';
            break;
            case $total>=60;
            $grade='C+';
            break;
            case $total>=50;
            $grade='C';
            break;
            case $total>=45;
            $grade='c-';
            break;case $total>=40;
            $grade='D';
            break;
            
            default;
            $grade='F';
        }
            
            echo " $x<br>Total: <input type='label' value=$total>";
            echo "$y <br>Grade: <input type='label' value=$grade>";
        }
        }

        
        ?>
    </body>
</html>