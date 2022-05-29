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

                $name=$_REQUEST['name'];
                $gender=$_REQUEST['gender'];
                $age=$_REQUEST['age'];
                $address=$_REQUEST['address'];

                $sql="INSERT INTO people VALUES ('$name', '$gender', '$age', '$address')";

                if ($db->query($sql) === TRUE) {
                    echo "\nNew record created successfully";
                    echo nl2br("\n$name\n $gender\n ". "$age\n $address");
                  } else {
                    echo "Error: " . $sql . "<br>" . $db->error;
                  }
            ?>
        </center>
    </body>
</html>