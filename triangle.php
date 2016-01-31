<!DOCTYPE html>
<html>
<head>
	<title>Triangle</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="index.php" method="get">
		angle A
		<input type="text" name="angleA">
		angle B
		<input type="text" name="angleB">
		angle C
		<input type="text" name="angleA">
		<input type="submit" name="submit" value="check">
	</form>

	<?php
	if (empty($_GET['submit'])) {
		$angleA = $_GET['angleA'];
		$angleB = $_GET['angleB'];
		$angleC = $_GET['angleC'];

		$sum = $angleA + $angleB + $angleC;
		if ($sum == 180) {
			echo 'Valid triangle';
		} else {
			echo 'Not a valid triangle';
		}
	}
?>

</body>
</html>