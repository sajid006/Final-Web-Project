<?php
include 'connect.inc.php';

if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	if(!empty($username)&&!empty($password))
	{
		$query_run =  mysqli_query($conn,"SELECT id FROM MyGuests where username='$username' AND password='$password_hash'");
		
			$query_num_rows =mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'Invalid username & password combination.';
			}
			else if($query_num_rows==1)
			{
				$row = mysqli_fetch_row($query_run);
				$user_id = $row[0];
				
				$_SESSION['user_id']=$username;
				//$_SESSION['user_id']=$user_id;
				header('Location: index.php');
			}
		
	}
	else
	{
		echo 'You must supply a username and password.';
	}
}
?>
<h1><font color="yellow"><center>Welcome to the website of SGIPC.</center></h1>
<h2><font color="yellow">Please Login with your username & Password to Proceed</h2>
		<form method="post" action="index.php">
			Username:<br/>
			<input type="text" name="username"><br/>
			Password<br/>
			<input type="password" name="password"><br/>
			<input type="submit" value="Login!">
		</form>
<h2>Don't have an account? <a href="register.php"><font color="red">Create one here</a></h2>