<?php
include "header.php";
include("../connection.php");
?>

<style>   
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}  
</style>

<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $sql ="SELECT * FROM event";
        $qsql = mysqli_query($db,$sql);
        echo mysqli_error($db);
        $count=1;
        while($rs = mysqli_fetch_array($qsql))
        {
        echo '
        <tr>
            <td>'. $count .'</td>
            <td>'. $rs['event'] .'</td>
            <td>'. $rs['date'] .'</td>
            <td>'. $rs['description'] .'</td>
            <td><a href="./deleteevent.php?id='. $rs['Id'] .'" class="btn" title="View Details" data-toggle="tooltip">
                DELETE</a>
            </td>
        </tr>';
        $count+=1;
        }
    ?>
    </tbody>
    </table>
</div>
<body>
</html>