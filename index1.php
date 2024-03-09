
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
    <title>School</title>
    <style>
        ul > li {
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            background: #cce5ff;
            color: darkblue;
        }
        ul > li > a {
            text-decoration: none;
            font-size: 17px;
            padding: 10px;
        }
        ul > li > a:hover {
            text-decoration: none;
            padding: 15px;
            color: red;
        }
        ul {
            background: #3399ff;
            padding: 20px;
            display: flex;
            flex-direction: row;
            list-style: none;
        }
        .box-main {
            display: flex;
            justify-content: space-between;
        }
        .firstHalf {
            text-shadow: 2px 2px rgb(128, 128, 248);
        }
        .thumbnail {
            border-radius: 500px;
            padding-left: 2%;
            height: 80%;
            width: 80%;
        }
    </style>
</head>

<body>
    <section>
        <div>
            <ul type="1">
                <li><a href="About.php">About</a></li>
                <li><a href="Admission.php">Admission</a></li>
                <li><a href="framess.php">Academics</a></li>
                <li><a href="fees.php">Fees</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <?php if(isset($_SESSION['login'])): ?>
                    <li><a href="eventt.php">Events</a></li>
                <?php endif; ?>
                <li><a href="contact.php">Contact us</a></li>
                <?php if(isset($_SESSION['login'])): ?>
                    <li><a href="logout.php">LOGOUT</a></li>
                <?php endif; ?>
                <?php if(!isset($_SESSION['login'])): ?>
                    <li><a href="userlog.php">LOGIN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <section class="firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">B M SCHOOL, PARKALA</p>
                <p class="text-small">Co-Educational, Upper Primary</p>
            </div>
            <div class="thumbnail">
                <img src="Logo.jpg" alt="college logo" class="imgFluid">
            </div>
        </div>
    </section>

    <footer class="background">
        <p class="text-footer">Copyright &copy; 2027 - www.iEducate.com - All rights reserved </p>
    </footer>
</body>
</html>
