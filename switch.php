<?php
$t=$_POST["in1"];
switch($t)
{
  case $t < 11: {
   echo "Good Morning " . "<br>";
   break; }
  case $t < 16: {
   echo "Good Afternoon " . "<br>";
   break; }

  default:
   {echo "Good Day ". "<br>";
   break;}
}
?>
