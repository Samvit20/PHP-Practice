<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="iwp";

$con=new mysqli($servername,$username,$password,$db) or die("Unable to connect to Database!");
echo "\nConnection is successfully established!";

$table="CREATE TABLE Employee (
    EMPNO int,
    ENAME text,
    JOB text,
    Sal int
);";

// if ($con->query($table) === TRUE) {
//     echo "\nNew table created successfully";
//   } else {
//     echo "Error: " . $table . "<br>" . $con->error;
//   }

$in="INSERT INTO Employee (EMPNO, ENAME, JOB, Sal) VALUES ('1' , 'Samvit' , 'Manager' , '3000')";
$in1="INSERT INTO Employee (EMPNO, ENAME, JOB, Sal) VALUES ('2' , 'Apoorv' , 'Analyst' , '800')";
$in2="INSERT INTO Employee (EMPNO, ENAME, JOB, Sal) VALUES ('3' , 'Anuraj' , 'Clerk' , '2450')";

// if ($con->query($in) === TRUE) {
//     echo "\nFirst row created successfully";
//   } else {
//     echo "Error: " . $in . "<br>" . $con->error;
//   }

//   if ($con->query($in1) === TRUE) {
//     echo "\nSecond row created successfully";
//   } else {
//     echo "Error: " . $in1 . "<br>" . $con->error;
//   }

//   if ($con->query($in2) === TRUE) {
//     echo "\nThird row created successfully";
//   } else {
//     echo "Error: " . $in2 . "<br>" . $con->error;
//   }

$sql="SELECT EMPNO, ENAME FROM Employee WHERE Sal>2800";
$result = $con->query($sql);

if ($result->num_rows >= 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "EMPNO: " . $row["EMPNO"]. " - ENAME: " . $row["ENAME"] . "<br>";
  }
} else {
  echo "0 results";
}

?>