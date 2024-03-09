<?php
include "../connection.php";
$sqlprod= "DELETE from event WHERE Id='".$_GET['id']."'";
// echo $sqlprod;
$qsqlprod = mysqli_query($db,$sqlprod);
echo "<script>window.location='event.php';</script>";
?>