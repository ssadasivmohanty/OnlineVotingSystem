<html lang="en">

<head>
    <title>Online Voting System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <center>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>

        <div id="bodySection">
            <div id="form">
                <form action="api/login.php" method="POST">
                    <h3>LogIn</h3>
                    <input type="number" name="mobile" placeholder="Enter Mobile">
                    <br>
                    <br>
                    <input type="password" name="password" placeholder="Enter Password">
                    <br>
                    <br>
                    Select Role: <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                    <br>
                    <br>
                    <button type="submit">LogIn</button>
                    <br>
                    <br>
                    New User?<a href="./routes/register.php">Register User</a>
                </form>
            </div>
        </div>
    </center>
</body>

</html>