<?php
$servername = "127.0.0.1";
$username = "mysql";
$password = "mysql";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}
echo "Успешное подключение";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style ruslan.css" rel="stylesheet">
<title>Summer trip 2020. Ruslan.</title>
</head>
	<body>
		<header>here you can follow your progress</header>
		<main>
<nav>
<p><a href="challenge 1/challenge 1.php">Challenge 1. Part 1. Kikons</a></p>
<p><a href="../Masha/challenge 1.2/challenge 1.2.php">Challenge 1. Part 2. Lotophags</a></p>
<p><a href="challenge 2/challenge 2.php">Challenge 2. Cyclops</a></p>
<p><a href="challenge 3/challenge 3.php">Challenge 3. Hades</a></p>
</nav>
		</main>
		<footer>
<p><a href="../index.html">Go back to the first page</a></p>
		</footer>
	</body>
</html>