<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style 1.2.css" rel="stylesheet">
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
<b>Answer the questions correctly to save your sailors. One wrong answer is one sailor killed.</b> 
<p><em>You can use hints and your <b>special power</b> - to stop time for some seconds.</em></p>
	<div class="instruction">
<p>Don't write <b>extra space</b>. Use <b>short forms</b>, like <i>Don't, Haven't </i> etc.</p>
<p>These will be marked as <b><em>incorrect</em></b>:<p>
<p class="wrong">&nbsp;&nbsp;&nbsp;&nbsp;am &nbsp;&nbsp;sailing&nbsp;&nbsp;&nbsp;</p>
<p class="wrong">do not know</p>
<p>These will be marked as <b><em>correct</em></b>:</p>
<p class="right">am sailing</p>
<p class="right">don't know</p>
	</div>
			</section>
			<section>
<p><h3>Start a challenge</h3></p>
<!-- here is the  image with sailors -->
<div class="sailors">
<img src="../../images/sailors.png" align="right" width="450">
<p>These are your sailors</p>
</div>
				<form action="challenge 1.2.php" method="get" autocomplete="off">
				<ol>
				<!-- number 1-->
				<li>When the storm began, I (to remember) how I met my wife. People say that you start remembering all your life when you can die soon</li>
				<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p class="right">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "remembered") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is remembered";
}
}
?>
	</p>
				<!-- number 2-->
				<li>When I saw her, she (to smile)</li>
				<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "was smiling") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer was smiling";
}
}
?>
	</p>
				<!-- number 3-->
				<li>I (to go) back and forth, when my wife was giving birth to our child</li>
				<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "was going") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer was going";
}
}
?>
	</p>
				<!-- number 4-->
				<li>When my child was born, I (to drink) already several glasses of wine</li>
				<input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">
<?php
$four = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "had drunk") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['four'] . " is wrong. The right answer had drunk";
}
}
?>
	</p>
				<!-- number 5-->
				<li>My next memory was from the war time. I was fighting in a crowd of Troyans when Achilles (to save) me</li>
				<input type="text" name="five" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "saved") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer saved";
}
}
?>
	</p>
				<!-- number 6-->
				<li>We (to fight) for several years near Troy and wanted to give up, when the gods gave us a sign that we should stay</li>
				</ol>
				<input type="text" name="six" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "had been fighting") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['six'] . " is wrong. The right answer had been fighting";
}
}
?>
	</p>
<input type="submit" name="result" value="Result">
<!-- the result-->
<p  class="php">
<?php
if ($result = $_GET['result'] ?? '') {
	echo $_SESSION["true"] . " sailors are alive. You bound them and made them go with you to the ship";
	$_SESSION = array();
}
?>
</p>
				</form>
<!-- the link to the very first page-->
<div class="goback">
<p><a class="startpage" href="../../index.html">Go back to Start page</a></p>
	</div>
			</section>
		</main>
		<footer>
<p><a href="https://youtu.be/Jxz48jvpTMQ">Take the chance, god is your side</a></p>
		</footer>
	</body>
</html>