<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location: ../");
}
$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style="color:red">Not voted</b>';
} else {
    $status = '<b style="color:green">Voted</b>';
}
?>


<html>

<head>
    <title>
        Online Voting System Dashboard
    </title>
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
    <style>
        #back {
            float: left;
        }

        #logout {
            float: right;
        }

        #profile {
            background: white;
            width: 30%;
            padding: 20px;
            float: left;
        }

        #group {
            background: white;
            width: 30%;
            padding: 20px;
            float: right;
        }

        #main-panel {
            padding: 10px;
        }
    </style>

    <div id="mainSection">
        <center>
            <div id="headerSection">
                <button id="back"><a href="../">Back</a></button>
                <button id="logout"><a href="logout.php">Logout</a> </button>
                <h1>Online Voting System</h1>
            </div>
        </center>
        <hr>

        <div id="main-panel">
            <div id="profile">
                <center>
                    <img src="../uploads/<?php echo $userdata['photo'] ?>" height="100px" width="100px" alt=""><br><br>
                </center>
                <b>Name:</b>
                <?php echo $userdata['name'] ?><br><br>
                <b>Mobile:</b>
                <?php echo $userdata['mobile'] ?>
                <br><br>
                <b>Address:</b>
                <?php echo $userdata['address'] ?>
                <br><br>
                <b>Status:</b>
                <?php echo $status ?>
                <br><br>
            </div>
            <div id="group">
                <?php
                if ($_SESSION['groupsdata']) {
                    for ($i = 0; $i < count($groupsdata); $i++) {
                        ?>
                        <img style="float:right" src="../uploads/<?php echo $groupsdata[$i]["photo"]; ?>" alt="" height=100px
                            width=100px>
                        <b>Group Name:</b>
                        <?php echo $groupsdata[$i]['name'] ?><br><br>
                        <b>Votes:</b>
                        <?php echo $groupsdata[$i]['votes'] ?><br><br>
                        <form action="../api/vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>">
                            <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">

                            <?php
                            if ($_SESSION['userdata']['status'] == 0) {
                                ?>
                                <input type="submit" value="Vote" id="button">
                            <?php
                            } else {
                                ?>
                                <button disabled>Vote</button>
                            <?php }
                            ?>
                        </form>
                        <hr>


                        <?php
                    }
                } else {
                    echo "
                    Hii
                    ";
                }


                ?>
            </div>
        </div>

    </div>


</body>


</html>