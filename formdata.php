<!DOCTYPE html>
<html lang="en">

<head>
    <title>Storage of Data</title>
</head>

<body>
    <center>
        <h1>Store data in Database</h1>
        <form action="db.php" method="post">
            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="Name">
            </p>
            <p>
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
            <p>
                <label for="age">Age:</label>
                <input type="number" name="age" id="Age">
            </p>
            <p>
                <label for="address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>