<?php

    $servername = "localhost";                
    $username="root";
    $password="";
    $dbname="iwp";

    $db = new mysqli($servername, $username, $password, $dbname) or die ("\nUnable to connect\n");
    // echo "\nConnected successfully\n";

    // $id=$_REQUEST['EMPNO'];
    // $name=$_REQUEST['ENAME'];
    // $job=$_REQUEST['Job'];
    // $sal=$_REQUEST['Sal'];

    $sql="SELECT EMPNO, ENAME, JOB, Sal FROM Employee";
    $result = $db->query($sql);

    if ($result->num_rows >= 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br><br>"."\nEMPNO: " . $row["EMPNO"] ."<br>". "\nENAME: " . $row["ENAME"] ."<br>". "\nJob: " . $row["JOB"]."<br>". "\nSal: " . $row["Sal"];
        }
    } else {
        echo "0 results";
    }

?>