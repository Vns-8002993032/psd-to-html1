 <?php
 session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">

<div id="main-wrapper">
<center>
<h2>Login form</h2>
<img src="imgs/vns.jpg"class="vns"/>
</center>
<form class="myform" action="index.php" method="post">
<label><b>Username</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="your username" require/><br>
<label><b>password</b></label><br>
<input name="password" type="password" class="inputvalues" placeholder="your password" require/><br>
<input name="login" type="submit" id="login_btn" value="login"/><br>
<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
</form>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select *from userinfotable WHERE username='$username' AND password=' $password'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		//valid
		$_SESSION['username']=$username;
		header('location:homepage.php');
	}
    else 
	{
		//invalid
		echo '<script type="text/javascript">alert("invalid credentials")</script>';
	}
}	
		
	?>
</div>   
</body>
</html>