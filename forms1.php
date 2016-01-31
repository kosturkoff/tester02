<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		Forms1
	</title>
</head>
<body>
	<form action="forms1.php" method+"get">
		username<input type="username" name="username">
		password<input type="password" name="password">
		submit<input type="submit" name="submit">	
	</form>

	<?php
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	if (!empty($_POST['submit'])) {
		echo $_POST['username'];
	}

	?>
</body>
</html>




