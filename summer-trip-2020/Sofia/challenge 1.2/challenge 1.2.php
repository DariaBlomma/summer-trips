<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 1. Part 2</title>
</head>
<body>
<header>
<img src="../../images/fight greece.jpg">
<h1>First challenge.</h1>
<h2>On the island of kikons and lotophags</h2>
<nav class="features">
<p class="feature-ship"><a href="information about the world.html">Information about the world</a></p>
<p class="feature-grammar"><a href="grammar rules.html">Grammar rules</a></p>
<p class="feature-training"><a href="training before the challenge.php">Training before the challenge</a></p>
</nav>
</header>
<main>
<section>
Answer the questions correctly to save your sailors. One wrong answer is one sailor killed. 
<p>You can use hints and your special power - to stop time for some seconds.</p>
<p>Don't write extra space. Use short forms, like Don't, Haven't etc.</p>
<p>These will be marked as incorrect:<p>
<p class="wrong">&nbsp;&nbsp;&nbsp;&nbsp;am &nbsp;&nbsp;sailing&nbsp;&nbsp;&nbsp;</p>
<p class="wrong">do not know</p>
<p>These will be marked as correct:</p>
<p class="right">am sailing</p>
<p class="right">don't know</p>
</section>
<section>
<p><h3>Start a challenge</h3></p>
<aside>
<div class="sailors">
<img src="../../images/sailors.png" align="right" width="450">
<p>These are your sailors</p>
</div>
</aside>
<form action="challenge 1.2.php" method="get" autocomplete="off">
<p>My name (to be) Odysseus</p>
<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p class="php">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "is") {
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
<p>My home is island Ithaca, I love it and (not want) to have another home</p>
<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "don't want") {
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
<p>And who you (to be), people?</p>
<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "are") {
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
<p>I love my wife and she (to love) me too.</p>
<input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$four = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "loves") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['four'];
}
}
?>
</p>
<p>I respect our gods and (not have) anything against praising them</p>
<input type="text" name="five" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "don't have") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['five'];
}
}
?>
</p>
<p>My son also (to like) to do sports with me</p>
<input type="text" name="six" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "likes") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['six'];
}
}
?>
</p>
<p>I and my sailors are brave and (not give up)</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$seven = $_GET['seven'];
if (empty($seven)) {
	$_SESSION["seven"] = NULL;
} else {
if ($seven == "don't give up") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['seven'];
}
}
?>
</p>
<p>Sometimes we (to sing) songs together</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$eight = $_GET['eight'];
if (empty($eight)) {
	$_SESSION["eight"] = NULL;
} else {
if ($eight == "sing") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['eight'];
}
}
?>
</p>
<p>Right now we are fighting with lotophags. It (to be) difficult, but I'm sure that we will win</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$nine = $_GET['nine'];
if (empty($nine)) {
	$_SESSION["nine"] = NULL;
} else {
if ($nine == "is") {
	$_SESSION["nine"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['nine'];
}
}
?>
</p>
<p>Because we always (to do) our best</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$ten = $_GET['ten'];
if (empty($ten)) {
	$_SESSION["ten"] = NULL;
} else {
if ($ten == "do") {
	$_SESSION["ten"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
	echo $_GET['ten'];
}
}
?>
</p>
<input type="submit" name="result" value="Result">
<p  class="php">
<?php
if ($result = $_GET['result'] ?? '') {
	echo $_SESSION["true"] . " sailors are alive. You bound them and made them go with you to the ship";
	$_SESSION = array();
}
?>
</p>
</form>
<p><a class="startpage" href="../start page.html">Go back to Start page</a></p>
</section>
</main>
<footer>
<p><a href="https://youtu.be/Jxz48jvpTMQ">Take the chance, god is your side</a></p>
</footer>
</body>
</html>