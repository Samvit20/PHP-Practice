<!DOCTYPE html>
<html>
<head>
<title> Php conditionals </title>
</head>
<body>
<H1> If else statement </H1>
<script>
function validateForm()
{
    const x=document.forms["form1"]["in1"].value;
    if(x>24)
    {
    alert("Alert time value exceeds range : ");
    return false;
    }
}
</script>
<form name="form1" action="greetings.php" method="post" target="_blank" onsubmit="return validateForm()">
<label for="in1"> Greetings </label>
<input type="text" id="in1"  name="in1" required>
<input type="submit" name="button1" value="Submit">
</form>
</body>
</html>
