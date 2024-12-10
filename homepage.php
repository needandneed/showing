<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size: 50px; font-weight:bold;">
            Hello <?php
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT signinup.* FROM `signinup` WHERE signinup.email = '$email'");
                while($row = mysqli_fetch_array($query)){
                    echo $row['firstName'].''.$row['lastName'];
                }
            }
            ?>
            :)
        </p>
        <a href="logout.php">Logout</a>
    </div>    
</body>
</html>






