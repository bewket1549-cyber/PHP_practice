<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php form example</title>
    </head>
    <body>
        <form action="filter_input2.php" method="post">
            Enter your name: <input type="text" name="fname" >
            <input type="submit" name="send" >
        </form>
        </body>
        <?php
        if(isset($_POST['send']))
            {
               $name=$_POST['fname'];
              // $check=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
               $check=filter_var($name,FILTER_VALIDATE_URL);
               if($check==true)
                {
                    echo "Theis is a valid IP address";
                }
                else
                    echo "it is not ";
            }
            ?>
    </body>
</html>