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
        img{
            height:200px;
            width:400px;
        }
            .largebutt{
    color:blue;
    background-color: #e6e1e1;
    text-decoration: none;
    display:inline-block;
    width:300px;
    line-height:72px;
    font-size: 1.4em;
    font-weight: bold;
    border-left: 2px solid white;
    border-top: 2px solid white;
    border-right: 2px solid black;
    border-bottom: 2px solid black;
}
.largebutt:hover{
    background-color: #d7d7d7;
    text-decoration: underline;
}
.textcenter{
    text-align: center;
}

    </style>
</head>
<body>
    <div style="display:flex;flex-direction:column;padding-left: 17%;">
        <div style="display:flex;flex-direction:row;padding: 10px;">
            <div style="border:2px solid black;padding:30px;border-radius:10px;background-color:rgb(204, 199, 189);width:auto;text-align: center;margin:10px;">
                <div style="border:2px solid black;padding:10px;background-color:rgb(166, 162, 155);">
                    <center><a href="./ncc.php"><img src="./ncc.JPG" style="border:3px solid black;"></a></center>
                </div>
                <div style="border:2px solid black;padding:10px;background-color:rgb(166, 162, 155);">
                    <h3>National Cadet Corp</h3>
                    <p>information....</p>
                </div> 
            </div> 
            <div style="border:2px solid black;padding:30px;border-radius:10px;background-color:rgb(204, 199, 189);width:auto;text-align: center;margin:10px;">
                <div style="border:2px solid black;padding:10px;background-color:rgb(166, 162, 155);">
                    <center><a href="./nss.php"><img src="nss.jpg" style="border:3px solid black;"></a></center>
                </div>
                <div style="border:2px solid black;padding:10px;background-color:rgb(166, 162, 155);">
                    <h3>National Social Service
                    </h3>
                    <p>information...</p>
                </div> 
            </div>  
           
           
        </div>
       
     </div>   
     <center>
        <a class="largebutt textcenter" href="index.php">
            HOME
        </a>
        </center>
</body>
</html>