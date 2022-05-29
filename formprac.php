<!DOCTYPE html>
<html lang="en">

<head>
    <title>Storage of Data</title>
</head>

<body>
    <center>
        <h1>Store data in Database</h1>
        <form action="dbprac.php" method="post">
            <p>
                <label for="EMPNO">EMPNO:</label>
                <input type="number" name="EMPNO" id="EMPNO">
            </p>
            <p>
                <label for="ENAME">ENAME:</label>
                <input type="text" name="ENAME" id="ENAME">
            </p>
            <p>
                <label for="Job">Job:</label>
                <input type="text" name="Job" id="Job">
            </p>
            <p>
                <label for="Sal">Sal:</label>
                <input type="number" name="Sal" id="Sal">
            </p>
            <input type="submit" value="Submit">
        </form>
        <br/>
        <a class="button" href="showprac.php" target="_blank"><button>Show Details</button></a>
        <a class="button" href="showprac1.php" target="_blank"><button>Update Salary</button></a>
    </center>
</body>

</html>