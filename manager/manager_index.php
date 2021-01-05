<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess Management System</title>
    <link rel="stylesheet" href="css/manager_index.css">
    <link rel="icon" href="../images/mess_logo.png" type="image/icon">
</head>
<body>
    <?php session_start(); 
        $user_name = $_SESSION['uname'];
    ?>

    <div class="nav_top">
        Manager: <?php echo $_SESSION['fname'] ?>
        <a href="manager_index.php">deshboard</a>
        <a href="#">notification</a>
        <a href="#">meal</a>
        <a href="#">bazar</a>
        <a href="member_info.php">member</a>
        <a href="#">mess</a>
        <a href="logout.php">logout</a>
    </div>
    <div class="manager_info">
        <img src="../images/mess_logo.png" alt="img">
        <?php
            $con = mysqli_connect("localhost","root","","demo");
            $sql = "select * from manager where user_name = '$user_name' limit 1";
            $query = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($query);
        ?>
            <table>
                <tr>
                    <caption>MANAGER Information</caption>
                    <th>Name: </th>
                    <td> <?php echo $row['full_name']?></td>
                </tr>
                <tr>
                    <th>User Name: </th>
                    <td> <?php echo $row['user_name']?></td>
                </tr>
                <tr>
                    <th>Mess id: </th>
                    <td> <?php echo $_SESSION['mid']?></td>
                </tr>
                <!--<tr>
                    <th>Mess name: </th>
                    <td> <?php //echo $_SESSION['mid']?></td>
                </tr>-->
                <tr>
                    <th>Email: </th>
                    <td> <?php echo $row['email']?></td>
                </tr>
                <tr>
                    <th>User Name: </th>
                    <td> <?php echo $row['phone']?></td>
                </tr>
            </table>

            <button><a href="#">edit info</a></button>
    </div>

    <?php
        echo "Welcome Mr. ".$_SESSION['fname'].". Your mess id ".$_SESSION['mid']." and as a manager your user name is ".$_SESSION['uname']."<br>";
    ?>
    
</body>
</html>