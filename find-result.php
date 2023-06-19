<?php
session_start();
//error_reporting(0);
include('includes/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Result</title>

    <link rel="stylesheet" href="css/chkRslt.css" />
</head>

<body>
    <header>Results Amplified...</header>

    <div id="container">
        <p>Check your Result!</p>
        <form action="result.php" method="post" id="resultform">
            <input size="40" class="inp" type="text" placeholder="Enter your Roll No/ USN" id="rollid" name="rollid" />
            <button id="submit" class="button">CHECK</button>
        </form>
    </div>

    <footer>
        &#169; <span id="team">Team A12</span> - Amber Suman - Anand Kumar Chaubey
        - Abhishek Kumar
    </footer>
</body>

</html>