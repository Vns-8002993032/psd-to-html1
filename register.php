<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Registration form</h2>
<img src="imgs/vns.jpg" class="vns"/>
</center>
<form class="myform" action="register.php" method="post">
<label><b>fullname</b></label><br>
<input name="fullname" type="text" class="inputvalues" placeholder="your fullname"/><br>
<label><b>gender:</b></label>
<input type="radio" class="radiobtns" name="gender" value="male" checked require>male
<input type="radio" class="radiobtns" name="gender" value="female" checked require>female<br>
<label><b>qualification: </b></label>
<select value="qualification" name="qualification">
<option value="Bsc.">Bsc.</option>
<option value="BBA.">BBA.</option>
<option value="CS">CS</option>
<option value="MCA">MCA</option>
</select><br>
<label><b>username</b></label><br>
<input name="username" type="text" class="inputvalues" placeholder="your username"/><br>
<label><b>password</b><label><br>
<input name="password" type="password" class="inputvalues" placeholder="your password"/><br>
<label><b>confirm password</b></label><br>
<input name="cpassword" type="password" class="inputvalues" placeholder="confirm password"/><br>
<input  name="submit_btn" type="submit" id="signup_btn" value="sign up"/><br>
<a href="index.php"><input type="button" id="back_btn" value="back"/></a>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript">alert("sign up button clicked") </script>'
   $fullname=$_POST['fullname'];
   $gender=$_POST['gender'];
   $qualification=$_POST['qualification'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $cpassword=$_POST['password'];
   
   if($password==$cpassword)
	   
	   {
		   $query="select *from userinfotable WHERE username='$username'";
		   $query_run=mysqli_query($con,$query);
		   
		   if(mysqli_num_rows($query_run)>0)
		   {
			   //there is already a user with the same username
			   echo '<script type="text/javascript">alert("user already exists....try another username") </script>';
	        }
			else
			{
				$query="insert into userinfotable values('','$username','$fullname','$gender','$qualification','$password')";
				$query_run=mysqli_query($con,$query);
				
			if($query_run)
			{				
			
				echo '<script type="text/javascript">alert("user Registered....go to loginpage to login") </script>';
				
				
			}
			else
			{
				echo '<script type="text/javascript">alert("Error!") </script>';
			}
		}	
	 }
	 else{
		 echo '<script type="text/javascript">alert("password and confirm password does not match!") </script>';
	 }
   
   
  
   
   
   
    }   
   
?>
</div> 
</body>
</html>