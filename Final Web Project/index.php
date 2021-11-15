<?php
require 'core.inc.php';
require 'connect.inc.php';
include 'design.html';
if(loggedin())
{
	//echo $_SESSION['user_id'] . '<br>';
	include 'home.php';
	echo '<a href="logout.php"><font color="red">Log Out</a>';
	
}
else
{
	include 'loginform.inc.php';
}

?>