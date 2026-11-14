<?php

$a=0;

if(isset($_POST['submit']))
    {
     $a++;
        $name=$_FILES['file1']['name'];
        $file_size=$_FILES['file1']['size'];
        $temp_name=$_FILES['file1']['tmp_name'];
        $location="/xampb/htdocs/Move/";
        $target=$location.basename($name);
        $image_file_type=strtolower(pathinfo($target,PATHINFO_EXTENSION));// used to get the files extension name
       
        echo $image_file_type;

        if(!empty($_FILES['file1']['name']))
           {
            //to check the file exists or not
            if(!file_exists($target)){
          //  $check=getimagesize($temp_name); //Check if image or not 
           // if($check != false){
           if($image_file_type == 'jpg'){

            if($file_size <= 2097152){
            
            if(move_uploaded_file($temp_name,$target))
            {
                echo  "File $name successfully moved!";
                
            }
            else
                echo "File not moved!";

        }
        else
            ECHO "Sorry the maximum file size is 2MB";
           }
           else
            echo "Only jpg files are allowed !";
           }
           else
             echo "The file already existes!";
           }
        else echo "Please select a file!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <title>file</title>
    </head>
    <body>
        <h2>File upload</h2>
        <form action="fileUpload1.php" method="post" enctype="multipart/form-data">
            <input type="file" value="upload" name="file1">
            <input type="submit" value="Upload" name="submit">
        </form>
    </body>
    
</html>
<?php
       /* echo $_FILES['file1']['name']."<br>";
        echo $_FILES['file1']['size']."<br>";
        echo $_FILES['file1']['tmp_name']."<br>";
        echo $_FILES['file1']['type']."<br>";
        echo $_FILES['file1']['error']."<br>";

        <?php
        $myfile = fopen("file.txt", "a") or die("Unable to open a file!"); 

        $text="this is first file writing practice \r\n";
        fwrite($myfile,"$text");

        $text="this is third file writing practice \r\n";
        fwrite($myfile,$text);


        fclose($myfile);


        ?>

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


<?php

echo $_SERVER["PHP_SELF"];
ECHO "<BR>";
echo $_SERVER["SERVER_NAME"];
ECHO "<BR>";
echo $_SERVER["HTTP_HOST"];
ECHO "<BR>";
echo $_SERVER["GATEWAY_INTERFACE"];
ECHO "<BR>";
echo $_SERVER["HTTP_USER_AGENT"];
ECHO "<BR>";
echo $_SERVER["SCRIPT_NAME"];
ECHO "<BR>";
echo $_SERVER["SERVER_ADDR"];
ECHO "<BR>";
echo $_SERVER["SERVER_PORT"];
ECHO "<BR>";
echo $_SERVER["REQUEST_METHOD"];
?>

        */?>
