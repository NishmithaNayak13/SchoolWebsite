<?php
session_start();
if(isset($_SESSION['login'])){
    echo "<script>window.location='./userlog.php'</script>";
}
?>


<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        
        <title>Admission</title>
        <style>
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
        </style>
        
    </head>
    <body style="background-color: grey;">
        <div style="border:2px solid black;border-radius:10px;margin-bottom:10px;color:white;background-color: black;">
        <center>
        <section class="section">
            <div class="paras about">
            <div style="border:2px solid black;border-radius:10px;color:white;background-color:brown;padding: 30px;margin:10px;"><p class="sectionTag text-big">Admission Details</p>
            </div>
                
            </div>
            </section>
            </center>
            <hr>
        </div>
        
        <div style="padding-left: 30%;">
        <p class="sectionTag text-small"><b>Eligibilty:</b></p>
            <p>The age of the child and availability of seats are the only two factors determining the admission process.</p>
            <br>
           
            <div style="padding-left:20;">
            <ul type="1"></ul>
                <li>Children seeking admission to I std should be between 5 years and 6 months and 6 years and 6 months as on 1st june.</li>
                <li>Student seeking admission to class 2 to 7 must possess the valid marks card</li>
                <li>Transfer Certificate(TC)</li>
            </ul><br>
            <p><b>Books, Uniform and Accessories:</b></p>
            <p>Books and School Uniforms will be supplied by our authorized distributor B M Publishing and Allied services Government Text Books will be available at school on re opening.</p>
        </div>
    </div>
        <br><br>
        <center>
        <a class="largebutt textcenter" href="index1.php">
            HOME
        </a>
        </center>
    </body>

    
    
        