<?php
session_start();
if (isset($_GET['submit'])) {
	if (($_GET['username'] == 'user') && ($_GET['password'] == 'password')) {
		setcookie(
			'chocolate_chip',
			'valid',
			time() + 120,
			"",
			null,
			false,
			true
		);

		$_SESSION['user'] = 'user';
		header('Location: motd.php');
	}
}
?>



	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>title</title>
		</head>
		<body>
<form action="index.php" method="get">
	Username:<input type="text" name="username"><br />
	Password:<input type="password" name="password">
	<input type="submit" name="submit">
		</body>
	</html>
