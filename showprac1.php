<?php

    $servername = "localhost";                
    $username="root";
    $password="";
    $dbname="iwp";

    $db = new mysqli($servername, $username, $password, $dbname) or die ("\nUnable to connect\n");

    $sql="UPDATE Employee SET Sal=Sal+1000";
    $result = $db->query($sql);
    echo("DONE!");

    // if ($result->num_rows >= 0) {
    //     // while($row = $result->fetch_assoc()) {
    //     //     // echo "\nEMPNO: " . $row["EMPNO"] ."<br>". "\nENAME: " . $row["ENAME"] ."<br>". "\nJob: " . $row["JOB"]."<br>". "\nSal: " . $row["Sal"];
    //     //     echo "\nDONE!\n";
    //     // }
    // } else {
    //     echo "0 results";
    // }

?>