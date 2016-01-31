<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Triangle</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
if (!empty($_POST['submit'])) {
	$_SESSION['username'] = $_POST['username'];
	echo "Hello, ".$_SESSION['username'];
	echo "<a href='login2.php'>next</a>";
} else {
?>
	<form action="login.php" method="post">
		username
		<input type="text" name="username">
		password
		<input type="text" name="password">
		<input type="submit" name="submit" value="login">
	</form>
	<?php
}
?>



</body>
</html>