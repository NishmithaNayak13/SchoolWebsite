<?php
// session_start();
include("../connection.php");

if(isset($_POST['save']))
{
    $date=date('y-m-d',strtotime($_POST['da']));
		$sql = "INSERT INTO event VALUES ('".$_POST['e']."',
			'$date','".$_POST['d']."','".$_POST['id']."');";
      // echo $sql;
		if(mysqli_query($db, $sql))
        {
            echo "<script>alert('Event added Successfull...');</script>";
		} else
        {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($db);
		}		
}

include "header.php";
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
input[type=reset] {  
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=reset]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=reset]]:hover {    
  color: #1A33FF;    
}    
input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    background: #8bb2eafa;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
    text-transform: uppercase;  
}  
    input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    
.largebutt{
    color:blue;
    background-color: #D3D3D3;
    text-decoration: none;
    display:inline-block;
    width:660px;
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

<h1> Events </h1>  
<form method="POST" enctype="multipart/form-data" action ="">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b>Event Id</b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter event ID" name = "id" required> </td>  
  </tr>  

  <tr>  
    <td> <b> Enter Event </b> </td>  
    <td> <input type="text" name="e" placeholder=" Event name" required> </td>  
  </tr>  

  <tr>  
    <td> <b> Date </b> </td>  
    <td> <input type="date" name="da" required> </td>  
  </tr>  

  <tr>  
    <td> <b> Enter Description</b> </td>  
    <td> <input type="text" name="d" placeholder=" Event description" required> </td>  
  </tr>  

        </select>  
    </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="ADD"/> 
    <td><input type="reset" value="Reset"/> </td>  
</tr>
</table>  
</form>  


</body>  
</html>  