<?php
session_start();
if(!isset($_SESSION['alogin'])){
    echo '<script>window.location="index.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADMIN</title>
</head>
<body>
<center>
    <a href="event.php" class="btn btn-primary btn-lg">EVENTS</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="addevent.php" class="btn btn-primary btn-lg">ADD EVENTS</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="logout.php" class="btn btn-primary btn-lg">LOGOUT</a>
</center>

<br><br>
