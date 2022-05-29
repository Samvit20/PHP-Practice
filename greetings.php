<?php
echo "Time" . $_POST["in1"]."<BR>";
$t = $_POST["in1"];
if ($t < 11) {
echo "Good Morning";
}
elseif ($t <16){
echo "Good Afternoon";
}
elseif ($t < 20){
echo "Good Evening";
}
else {
echo "Good night";
}
?>
