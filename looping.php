<?php
$colors=array("red","blue","green","yellow","indigo");
// $colors=array(1,2,3,4,5);
$t=sizeof($colors);
echo "<H1> For loop example </H1>";
for($i=0;$i<$t;$i++)
{
   if($colors[$i]!="")
   echo " colors " . $colors[$i] . "<br>";
   else
   break;
}
echo "<h1> For each example </h1>";
foreach ($colors as $value)
echo "Colors : " . $value . "<br>";
?>

