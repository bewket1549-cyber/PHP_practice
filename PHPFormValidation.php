<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Form Validation</title>
    </head>
    <body>
        <?php
         $name=$email=$age=$website=$gender=$comment=$phone=$notvalid='';
         if($_SERVER['REQUEST_METHOD']=='POST')
            {

                $name=input_set($_POST['name']);
                $age=input_set($_POST['age']);
                $email=input_set($_POST['email']);
                $comment=input_set($_POST['comment']);
                $gender=input_set($_POST['gender']);
                $website=input_set($_POST['website']);
                $phone=$_POST['phone'];

                if(!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/",$phone))
                    {
                       $notvalid="Please enter the valid phone";
                       $phone="";
                    }
                    

            }

                function input_set($data)
                {
                    $data=trim($data);
                    $data=stripslashes($data);
                    $data=htmlspecialchars($data);
                    return $data;
                }
            
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
           <h3>PHP Form Validation Example</h3>
           Name <input type="text" name="name"><br><br>
           Age <input type="text" name="age"><br><br>
           E-mail <input type="email" name="email"><br><br>
           Phone <input type="tel" name="phone"><span><?php echo $notvalid; ?></span><br><br>
           Website <input type="text" name="website"><br><br>
           Comment <textarea name="comment" id="" cols="50" rows="5"></textarea><br><br>
           Gender <input type="radio" name="gender" value="Male">Male <input type="radio" value="Female" name="gender">Female<br><br>
           <input type="submit" name="submit" value="Send">
        </form>

        
        <?php
        echo "<h3>Your Input:</h3>";
        echo $name."<br>";
        echo $email."<br>";
        echo $age."<br>";
        echo $gender."<br>";
        echo $website."<br>";
        echo $comment."<br>";
        echo $phone."<br>";
        
        ?>
    </body>
</html>