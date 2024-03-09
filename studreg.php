<?php
session_start();
include("connection.php");
if(isset($_POST['register']))
{
		$sql = "INSERT INTO userreg VALUES ('".$_POST['uid']."',
			'".$_POST['name']."','".$_POST['pwd']."','".$_POST['email']."');";
		if(mysqli_query($db, $sql))
        {
            echo "<script>alert('Registration Successfull...');</script>";
		} else
        {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($db);
		}		
}
?>

<!Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> Registration </title>  
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
</style>  

</head>
<body>  
<h1> User Registration</h1>  
<form method="POST" enctype="multipart/form-data" action ="">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
 <tr>  
    <td width="159"> <b> Enter user Id </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter ID" name = "uid"  required /> </td>  
  </tr>  
  <tr>  
    <td width="159"> <b> User Name</b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" name = "name"  pattern="[a-z A-Z]*" required /> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" name="pwd" placeholder=" Enter Password" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter Email </b> </td>  
    <td> <input type="email" name="email" placeholder=" Enter Email" > </td>  
  </tr>  

        </select>  
    </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="login" value="Login"/> 
    <td><input type="reset" value="Reset"/> </td>  
</tr>
</table>  
</form>  
<a href="login.html"><button> BACK</button></a>
</body>  
</html>