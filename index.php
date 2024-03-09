<?php
session_start();
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>School</title>
    <style>
        ul>li{
            border-radius: 10px;
            padding: 10px;
            margin: 10;
        }
        ul>li>a{
            text-decoration: none;
            padding: 10px;
        }
        ul>li>a:hover{
            text-decoration: none;
            padding: 15px;
            color: red;
        }
       
    </style>
</head>
    
    <body>
        <section>
            <div style="">
               <ul type="1" style="display:flex;flex-direction: row;list-style: none;">
                <li><a href="About.php" style="font-size:17px;">About</a></li>
                <li><a href="Admission.php" style="font-size:17px;">Admission </a></li>
                <li><a href="framess.php" style="font-size:17px;">Academics</a></li>
                <li><a href="fees.php" style="font-size:17px;">Fees</a></li>
                <li><a href="gallery.php" style="font-size:17px;">Gallery</a></li>
                <?php if(isset($_SESSION['login'])){
                echo '
                <li><a href="eventt.php" style="font-size:17px;">Events</a></li>';
                }
                ?>
                <li><a href="contact.php" style="font-size:17px;">Contact us</a></li>
                <?php if(isset($_SESSION['login'])){
                echo '
                <li><a href="logout.php" style="font-size:17px;">LOGOUT</a></li>';
                }
                ?>
                <?php 
                if(!isset($_SESSION['login'])){
                echo '
                <li><a href="userlog.php" style="font-size:17px;">LOGIN</a></li>';
                }
                ?>
              </ul>
            </div>
            
        </section>

   
        <section class="firstSection">
            
            <div class="box-main">
                <div class="firstHalf">
                    <p class="text-big" style="text-shadow: 2px 2px rgb(128, 128, 248);">B M SCHOOL,PARKALA</p>
                    <p class="text-small">Co-Educational,Upper Primary</p>
                </div>
                    <div class="thumbnail" style="border-radius: 500px;padding-left: 2%;height:80%;width:80%;">
                    <img src="Logo.jpg" alt="college logo" class="imgFluid">
                    </div>
                </div>
            </section>
                     <footer class="background"><p class="text-footer">Copyright &copy; 2027 - www.iEducate.com - All rights reserved </p></footer>
                    <!-- </body> -->
                    <!-- </html> -->
                    
                  
               <style>
                ul{
                    background: #3399ff;
                    padding: 20px;
                }
                ul li{
                    background: #cce5ff;
                    color: darkblue;
                    margin: 5px;
                }
               </style>     
</body>
                    </html>