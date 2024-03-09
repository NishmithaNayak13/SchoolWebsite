<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div>ul>li{
          margin:10px;
        
        }

        a{
            text-decoration: none;
            color:whitesmoke;
        }

        a:hover{
            text-decoration: none;
            color:rgb(239, 159, 159);
        }
        ul>li{
            padding: 10px;
        }
        
    </style>
</head>
<body style="background-color: grey;">
    <div style="border:2px solid black;border-radius:10px;margin-bottom:10px;color:white;background-color: black;">
        <center><h3>Academic Stages</h3></center>
    </div>
    <div style="border:2px solid black;border-radius:10px; padding-top: 20px;padding-bottom: 20px;color:white;background-color: black;height:400px;padding: 25px;" >
            <ul>
                <li style="list-style:none;"><a href="foundationn.php" target="f3">Foundation Stage</a></li>
                <li style="list-style:none;"><a href="juniorr.php" target="f3">Junior Stage</a></li>
                <li style="list-style:none;"><a href="middle.php" target="f3">Middle Stage</a></li>
                <li style="list-style:none;"><a href="senior.php" target="f3">Senior Stage</a></li>
            </ul>
    </div>
</body>
</html>