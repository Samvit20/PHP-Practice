<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
print_r($_SESSION);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>

</body>
</html>