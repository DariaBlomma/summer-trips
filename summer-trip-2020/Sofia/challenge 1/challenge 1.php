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
<img src="fight greece.jpg">
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
<img src="sailors.png" align="right" width="450">
<p>These are your sailors</p>
</div>
</aside>
<form action="index.php" method="get" autocomplete="off">
<p>I (to be born) on Ithaca</p>
<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p class="php">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "was born") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>I (to meet) my wife, Penelope, when I was taking part in competitions</p>
<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "met") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>My wife and I (to marry) after the competitions</p>
<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "married") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>Soon after Telemachus was born, (to begin) a battle for Troy</p>
<input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$four = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "began") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>I (not want) to go to war but I was made to.</p>
<input type="text" name="five" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "didn't want") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>It was hard. I often (to fight) alone in the crowd of Troyans</p>
<input type="text" name="six" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "fought") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>When the war (to be) over, practically the half of our soldiers had been killed.</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$seven = $_GET['seven'];
if (empty($seven)) {
	$_SESSION["seven"] = NULL;
} else {
if ($seven == "was") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>Yesterday I and my sailors (to see) an island</p>
<input type="text" name="eight" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$eight = $_GET['eight'];
if (empty($eight)) {
	$_SESSION["eight"] = NULL;
} else {
if ($eight == "saw") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>We (to have to) fight with natives - kikons</p>
<input type="text" name="nine" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$nine = $_GET['nine'];
if (empty($nine)) {
	$_SESSION["nine"] = NULL;
} else {
if ($nine == "had to") {
	$_SESSION["nine"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
<p>Because they (not understand) English</p>
<input type="text" name="ten" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="php">
<?php
$ten = $_GET['ten'];
if (empty($ten)) {
	$_SESSION["ten"] = NULL;
} else {
if ($ten == "didn't understand") {
	$_SESSION["ten"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
	echo "Oh no! One sailor is killed!</br>";
}
}
?>
</p>
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