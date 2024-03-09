<?php
session_start();
include("../connection.php");
if(isset($_SESSION['alogin'])){
  echo "<script>window.location='./event.php'</script>";
  }
if(isset($_POST['save']))
{
	$sql = "SELECT * FROM login where uname='".$_POST['n']."' and pwd='".$_POST['p']."';";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
		$_SESSION['alogin'] = $_POST['n'];
		setcookie("login",$_POST['n'],time() + (86400 * 30), "/");
		echo "<script>alert('Login Successfull...');</script>";
		echo "<script>window.location='event.php';</script>";
	}
	else
	{
		echo "<script>alert('Invalid Username or password...');</script>";
	}
}
?>

<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> Admin login</title>  
<style>  
input[type=radio] { width:20px; }  
input[type=checkbox]{ width:20px; }  
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
</head>  
<body>  
<h1> ADMIN LOGIN </h1>  
<form method="POST" enctype="multipart/form-data" action ="">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b> User Name:</b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" name = "n"  pattern="[a-z A-Z]*" required /> </td>  
  </tr>  

  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" name="p"/ placeholder=" Enter Password" > </td>  
  </tr>  

        </select>  
    </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Login"/> 
    <td><input type="reset" value="Reset"/> </td>  
</tr>
</table>  
</form>  

<script>
    var x=document.getElementById("login");

    var z=document.getElementById("save");
   
    function login()
    {
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0";
    }
</script>
</body>  
</html>  


