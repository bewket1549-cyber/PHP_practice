<?php

$servername='localhost';
$username='root';
$password='';
$dbname="student";
//Object oriented way
$conn = new mysqli($servername,$username,$password,$dbname); 
if($conn->connect_error)
    {
        die("connection failed!".$conn->connect_error);
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="'UTF-8">
        <title>Database connectivity</title>
    </head>
    <body>
        <form action="db_connectivity.php" method="post">
            Enter ID to delete it: <input type="number" name="id"><br><br>
            Last Name: <input type="text" name="lname"><br><br>
            <input type="submit" name="submit" value="register"><br>
        </form>
    </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
    {
      if(empty($_POST['id'])||empty($_POST['lname']))
        {
            echo "ID and Last name are required";
        }
        else
            {

 //$sql="create table stud(id int(2) unsigned auto_increment primary key,firstName varchar(10) not null,lastName varchar(10),reg_date timestamp)";
 //$sql="insert into stud(firstName,lastName) values('Lemlem','Abera'); ";
  //$sql.="insert into stud(firstName,lastName) values('Belay','Zeleke');";
  /*$stat=$conn->prepare("insert into stud(firstName,lastName) values(?,?)");
  $stat->bind_param("ss",$fname,$lname);
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  if($stat->execute())
    {
        echo "inserted successfully";
    }

            }
    } */
    $sql="update stud set lastName='".$_POST['lname']."' where id=".$_POST['id'];//selection statement
    if($conn->query($sql))
        {
            echo "Update successfull";
        }
        else
            echo "not updated";
            }
    }
    /*$result=$conn->query($sql);
 
    if($result->num_rows>0)
        {
            $table="<table border='1' style='border-collapse: collapse;'><thead><tr><th>ID</th><th>First name</th><th>Last name</th><th>Registerd_date</th></tr></thead><tbody>";
            while($rows=$result->fetch_assoc())
                {
            
            $table.="<tr><td>". $rows['id'] ."</td><td>". $rows['firstName'] ."</td><td>". $rows['lastName'] ."</td><td>".$rows['reg_date']."</td></tr>";

            }
            $table.="</tbody></table>";
            echo $table;
        }

    else
        echo "Can not select";
    $conn->close();*/

 /*if($conn->multi_query($sql)===true)
    {
        $last_id=$conn->insert_id;//catch last inserted elements ID
        echo "inserted successfully!".$last_id;
    }
    else
        echo "not inserted".$conn->error;

$conn->close();*/









//Procedural way

/*$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
    {
         die("connection failed!".mysqli_connect_error());
    }

    echo "Conncted successfull!";*/

?>