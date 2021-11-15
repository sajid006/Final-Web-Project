<?php
include 'design.html';
?>
<html>
<body>

<h2><font color="yellow">Please complete your registration to proceed</h2>
<form action="insertingData.php" method="post">
<font color="red">Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Firstname: <input type="text" name="fname"><br>
Lastname: <input type="text" name="lname"><br>
E-mail: <input type="text" name="email"><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<input type="submit">
</form>

</body>
</html>