<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About</title>
    <style>
        .section{ 
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    max-width: 80%;
    margin: auto;
    font-family: 'Ubuntu', sans-serif;
    padding: 10px;
    opacity:0.7;
}

.section{
        flex-direction: column-reverse;
    }
    .text-small{
        text-align: center;
    }

.section-left{
   /* flex-direction: row-reverse;*/ display: flex;
    align-items: left;
    justify-content: left;
    max-width: 80%;
    margin: auto;
    font-family: 'Ubuntu', sans-serif;
    padding: 10px;
}
.text-big{
        text-align: center;
    }
    .sectionTag{
    padding: 16px 0;
}
.paras{
    padding: 0px 65px;
}
.sectionSubTag{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.thumbnail img{
    width: 250px;
    border: 2px solid black;
    border-radius: 26px;
    margin-top: 19px;
}
.about{
    border-radius:15px;
    text-shadow:rgb(236, 235, 235);
    background-color: rgb(242, 226, 226);
    padding:15px;
}

         .largebutt{
            color:blue;
            background-color: #D3D3D3;
            text-decoration: none;
            display:inline-block;
            width:300px;
            line-height:72px;
            font-size: 1.0em;
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
<body style="background-color:rgb(194, 204, 204);font-size: 30px;">
    
    <section class="section">
        <div class="paras about" style="box-shadow: 3px 3px black;">
        <p class="sectionTag text-big" style="text-shadow: 2px 2px red;">ABOUT SCHOOL</p>
        <p class="sectionSubTag text-small"></p> </p>
        </div>
       
    </section> 
    

        <section class="section">
        
        <img src="background.jpg" alt="School" class="imgFluid" height="300px" width="450px" style="border:10px solid red;border-radius:10px;">
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-small">Established in year 1992,<b>B M ENGLISH MEDIUM HPS PARKALA</b> is located in urban area of karnataka state/ut of india.School is providing Upper Primary level education and is being managed by Private Unaided organisation.Medium of instruction is Kannada,English language and school is co-educational.
        </p>
        <center>
        <a class="largebutt textcenter" href="readmore.php">
            Read More
        </a><br><br>
        
        <h3><u>Address</u></h3>
       
        <address>Parkala,Ward No.15<br>Brahmavara(575107)<br>Udupi,Karnataka-576107</address><br><br>
        <a class="largebutt textcenter" href="index.php">
            HOME
        </a>
        </center>
        </div>
        </section>
    </body>
    </html>
    