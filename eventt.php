<?php
  session_start();
  if(!isset($_SESSION['login'])){
    echo "<script>window.location='./userlog.php'</script>";
    }

  include("connection.php");
    // if error occurs 
    if ($db -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $db -> connect_error;
       exit();
    }
  
    $sql = "select * from event";
    $result = ($db->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0)
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>
  
<html>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body style="background-color:rgb(194, 204, 204);font-size: 20px;"><center>
    <table>
        <thead>
            <tr>
            <th>Event Id</th>
                <th>Date </th>
                <th> Event name</th>
                <th> Event Description</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
               foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['Id']; ?></td>
                <td><?php echo $rows['date']; ?></td>
                <td><?php echo $rows['event']; ?></td>
                <td><?php echo $rows['description']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
              </center>
              <br><br><br><br>
    <center>
    <a href="index1.php"><button> BACK</button></a>
              </center>
</body>
</html>
  