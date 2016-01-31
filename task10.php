<!DOCTYPE html>
<html>
<head>
	<title>Triangle</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="index.php" method="post">
		Username
		<input type="text" name="Username">
		Password
		<input type="text" name="Password">
		<input type="submit" name="submit" value="check">
	</form>

	<?php
	
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

		echo $Username;
		echo $Password;
	?>

</body>
</html>