<?php
session_start ();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 3 </title>
</head>
<body>
<header>
<img src="../../images/clothesbackground.jpg" width="100%">
<h1>Clothes</h1>
<nav class="features">
<p class="feature-challenge"><a href="challenge 3.php">Go back to Challenge 2</a></p>
<p class="feature-grammar"><a href="grammar.html">Grammar rules</a></p>
<p class="feature-information"><a href="information.html">Information about the challenge</a></p>
</nav>
</header>
<main>
<section>
<img src="../../images/clothes.jpg" width="100%">
<p>You are going to Hades and will need some clothes. Make the right choice to get more energy</p>
</section>
<section class="test">
<p>Check your understanding to get extra points. Only one variant is correct</p>
<form action="clothes.php" method="get" autocomplete="off">
<p>I will wear:</p>
<input type="text" name="one" placeholder="one" maxlength="10" size="10">
<input type="submit" value="Send"> 
<p  class="right">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "sweater") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	/* echo "<input type='text' name='one' placeholder='your anwer' maxlength='10' size='10' value='blown'>"; */
	echo "Congratulations! You get 10 energy!</br>";
} else {
?>
</p>
</div>
<div class="wrong">
<p>
<?php
	echo "Check your spelling and try again</br>";
}
}
?>
</p>
<input type="text" name="two" placeholder="two" maxlength="10" size="10">
<input type="submit" value="Send">
<p  class="right">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "scarf") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! You get 5 energy!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong.";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Check your spelling and try again</br>";
	echo "Your answer " . $_GET['two'] . " is wrong.";
}
}
?>
</p>
<input type="text" name="three" placeholder="three" maxlength="20" size="20">
<input type="submit" value="Send">
<p class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "jacket") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! You get 20 energy!</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Check your spelling and try again</br>";
	echo "Your answer " . $_GET['three'] . " is wrong.";
}
}
?>
</p>
<input type="text" name="four" placeholder="four" maxlength="10" size="10">
<input type="submit" value="Send">
<p  class="right">
<?php
$four = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "trousers") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! You get 10 energy!</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Check your spelling and try again</br>";
	echo "Your answer " . $_GET['four'] . " is wrong.";
}
}
?>
</p>
<input type="text" name="five" placeholder="five" maxlength="10" size="10">
<input type="submit" value="Send">
<p  class="right">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "sneakers") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! You get 3 energy!</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Check your spelling and try again</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer is could";
}
}
?>
</p>
<input type="text" name="six" placeholder="six" maxlength="10" size="10">
<input type="submit" value="Send">
<p  class="right">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "gloves") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! You get 3 energy.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Check your spelling and try again</br>";
	echo "Your answer " . $_GET['six'] . " is wrong.";
}
}
?>
</p>
</form>
</section>
</main>
<footer>
<p><a href="https://youtu.be/Jxz48jvpTMQ">Take the chance, god is your side</a></p>
</footer>
</body>
</html>