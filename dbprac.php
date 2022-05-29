<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Data Insertion
        </title>
    </head>

    <body>
        <center>
            <?php

                $servername = "localhost";                
                $username="root";
                $password="";
                $dbname="iwp";

                $db = new mysqli($servername, $username, $password, $dbname) or die ("\nUnable to connect\n");
                echo "\nConnected successfully\n";

                $id=$_REQUEST['EMPNO'];
                $name=$_REQUEST['ENAME'];
                $job=$_REQUEST['Job'];
                $sal=$_REQUEST['Sal'];

                $sql="INSERT INTO Employee VALUES ('$id', '$name', '$job', '$sal')";

                if ($db->query($sql) === TRUE) {
                    echo "\nNew record created successfully";
                    echo nl2br("\n$id\n $name\n ". "$job\n $sal\n");
                  } else {
                    echo "Error: " . $sql . "<br>" . $db->error;
                  }
            ?>
        </center>
    </body>
</html>