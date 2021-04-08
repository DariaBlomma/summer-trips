<?php
session_start ();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 1 </title>
</head>
<body>
<header>
<img src="../../images/training before the challenge.jpg" height="70%">
<h1>Training before the first challenge</h1>
<nav class="features">
<p class="feature-challenge"><a href="challenge 1.2.php">Go back to Challenge 1</a></p>
<p class="feature-grammar"><a href="grammar rules.html">Grammar rules</a></p>
<p class="feature-ship"><a href="information about the world.html">Information about the world</a></p>
</nav>
</header>
<main>
<section>
Soon you will start a challenge, but now you can practise and see how the challenge will look like. You can try to use hints and your special power for free!
<p>Don't write extra space. Use short forms, like Don't, Haven't etc.</p>
<p>These will be marked as incorrect:<p>
<p class="wrong">&nbsp;&nbsp;&nbsp;&nbsp;am &nbsp;&nbsp;sailing&nbsp;&nbsp;&nbsp;</p>
<p class="wrong">do not know</p>
<p>These will be marked as correct:</p>
<p class="right">am sailing</p>
<p class="right">don't know</p>
</section>
<aside>
</aside>
<section class="conditions">
<form action="training before the challenge.php" method="get" autocomplete="off">
<p>I usually (to go) to bed at 10</p>
<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p class="php">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "go") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['one'];
}
}
?>
</p>
<p>My mother also (to go) to bed early</p>
<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "goes") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['two'];
}
}
?>
</p>
<p>My father (not like) to spend holidays on a beach</p>
<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "doesn't like") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['three'];
}
}
?>
</p>
<p>And you? you (to like) such holidays?</p>
<input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$three = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "do you like") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['four'];
}
}
?>
<input type="submit" name="result" value="Result">
<p  class="php">
<?php
if ($result = $_GET['result'] ?? '') {
	echo $_SESSION["true"] . " sailors are alive";
	$_SESSION = array();
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