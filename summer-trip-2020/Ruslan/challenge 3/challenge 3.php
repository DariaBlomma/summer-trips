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
<img src="../../images/hades.jpg" width="100%">
<h1>Third challenge.</h1>
<h2>Underworld. Hades</h2>
<nav class="features">
<p class="feature-clothes"><a href="clothes.php">Clothes</a></p>
<p class="feature-grammar"><a href="grammar.html">Grammar rules</a></p>
<p class="feature-information"><a href="information.html">Information about the challenge</a></p>
</nav>
</header>
<main>
<section>
<p><h3>Remembering</h3></p>
<p>Answer the questions correctly to remember what Magician Kirka told you
<div>
<div class="aside">
<img src="../../images/kirka.jpg" align="right" width="300px">
<p>Food in the cave</p>
</div>
</div>
<form action="challenge 3.php" method="get" autocomplete="off">
<p>If I (to be) you, Telemachus, I would hold the bow that way</p>
<input type="text" name="one" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send"> 
<p>If only I (can) be an adult! - Don't be in a hurry, my son!</p>
<input type="text" name="two" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send">
<p>If I were as strong as you, father, I (to kill) all enemies!</p>
<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p>If I (to know) how dangerous it is, I would not let Odysseus go</p>
<input type="text" name="four" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send">
<p>I wish I (can) stay at home and not participate in the war</p>
<input type="text" name="five" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send">
<p>We would lose, if we (not see) the sign of the gods</p>
<input type="text" name="six" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p>If I (to listen) to my sailors and went back to the ship, nobody would be eaten</p>
<input type="text" name="seven" placeholder="your anwer" maxlength="10" size="20">
<input type="submit" value="Send">
<p>If only I (to have) paper with me when Magician Kirka was explaining all that to me!</p>
<input type="text" name="eight" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">
<p  class="right">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "were") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	/* echo "<input type='text' name='one' placeholder='your anwer' maxlength='10' size='10' value='blown'>"; */
	echo "Take a ship with you when you go to Hades.</br>";
} else {
?>
</p>
<div class="wrong">
<p>
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is were";
}
}
?>
</p>
</div>
<p  class="right">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "could") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Don't forget to take a black ram.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer is could";
}
}
?>
</p>
<p class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "would kill") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "When you arrive in Hades, dig a deep hole with your sword.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer is would kill";
}
}
?>
</p>
<p  class="right">
<?php
$four = $_GET['four'];
if (empty($four)) {
	$_SESSION["four"] = NULL;
} else {
if ($four == "knew") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Make three libations with honey, wine and water over the hole</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['four'] . " is wrong. The right answer is knew";
}
}
?>
</p>
<p  class="right">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "could") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Sprinkle the hole with flour</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer is could";
}
}
?>
</p>
<p  class="right">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "didn't see") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Stab the pray.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['six'] . " is wrong. The right answer is didn't see";
}
}
?>
</p>
<p  class="right">
<?php
$seven = $_GET['seven'];
if (empty($seven)) {
	$_SESSION["seven"] = NULL;
} else {
if ($seven == "listened") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Burn the prey and call to Hades and his wife, Percefone.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['seven'] . " is wrong. The right answer is listened";
}
}
?>
</p>
<p  class="right">
<?php
$eight = $_GET['eight'];
if (empty($eight)) {
	$_SESSION["eight"] = NULL;
} else {
if ($eight == "had") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "The soul of sorcerer Tiresias should be the first to drink the blood from the hole</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! You didn't remember her words!</br>";
	echo "Your answer " . $_GET['eight'] . " is wrong. The right answer is had";
}
}
?>
</p>
<?php
if ($result = $_GET['result'] ?? '') {
	echo "You have " . $_SESSION["true"] . " hints from the Magician Kirka";
	$_SESSION = array();
}
?>
</p>
</form>
<p><a class="startpage" href="../../index.html">Go back to the main page</a></p>
</section>
</main>
<footer>
<p><a href="https://youtu.be/Jxz48jvpTMQ">Take the chance, god is your side</a></p>
</footer>
</body>
</html>