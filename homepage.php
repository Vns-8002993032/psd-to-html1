<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>home page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Home page</h2>
<h3>welcome 
<?php echo $_SESSION['username'] ?>
</h3>
<img src="imgs/vns.jpg"class="vns"/>
</center>
<form class="myform" action="homepage.php" method="post">
<input name="logout" type="submit" id="logout_btn" value="log out"/><br>
</form>
<?php
if(isset($_post['logout']))
{
		
	session_destroy();
	header('location:index.php');
}
 
?>


</div>
</body>
</html>