<html lang="en">

<head>
    <title>Online Voting System</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <center>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>

        <hr>
        <div id="bodySection">
            <div id="form">
                <form action="../api/register.php" method="post" enctype="multipart/form-data">
                    <h3>Registration</h3>
                    <input type="text" name="user_name" placeholder="Name">
                    <input type="number" name="mobile" placeholder="Enter Mobile" value="">
                    <br>
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                    <br>
                    <br>
                    <input type="text" name="address" placeholder="Address">
                    <br>
                    <br>
                    Upload Image: <input type="file" name="photo">
                    <br>
                    <br>
                    Select Role: <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                    <br>
                    <br>

                    <button>Register</button>
                    <br>
                    <br>
                    Already User?<a href="../index.php">Login here</a>
                </form>
            </div>

        </div>
    </center>
</body>

</html>