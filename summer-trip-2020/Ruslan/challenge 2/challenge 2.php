<?php
session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style 2.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 2 </title>
</head>
	<body>
		<header>
<img src="../../images/cave 2.jpg" width="100%">
<h1>Second challenge.</h1>
<h2>On the island of cyclops</h2>
	<nav class="features">
<p class="feature-words"><a href="new words.php">New words</a></p>
<p class="feature-help"><a href="help.html">How to read big texts?</a></p>
<p class="feature-continue"><a href="continuation.html">The continuation of the story</a></p>
	</nav>
		</header>
<main>
<section>
<p><h3>Your story</h3></p>
<div>
<img src="../../images/new words.jpg" align="left" width="70%">
<div class="aside">
<img src="../../images/food.jpg" align="right" width="300px">
<p>Food in the cave</p>
</div>
</div>
<form action="challenge 2.php" method="get" autocomplete="off">
<p class="text">We were  <input type="text" name="one" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send"> far off course, and after a number of perils 
<input type="text" name="two" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send"> a small island. 
Here we found a huge goat pen outside a cave and, inside, all the cheeses and meat they could desire. 
My shipmates told me to take the best food and go back to the ship as soon as possible. </p>
<p class="question">What would you do?<p>
<div class="right">
<p>
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "blown") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	/* echo "<input type='text' name='one' placeholder='your anwer' maxlength='10' size='10' value='blown'>"; */
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
</div>
<div class="wrong">
<p>
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is blown";
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
if ($two == "reached") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer is reached";
}
}
?>
</p>
<div class="aside">
<img src="../../images/cyclope.jpg" align="right" width="300px">
<p>This is cyclope Polyphemus</p>
</div>
<p>But I <input type="text" name="three" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send">, because I wanted to see a cyclope. Finally he came. 
He was huge, , with a single glaring eye in the middle of his forehead. 
He was one of the Cyclopes, giant blacksmiths who had built Olympus for the gods.
 This particular Cyclops was named Polyphemus. 
 He brought his <input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send"> of sheep in and closed the door. 
 Then he saw us in the corner of the cave and asked who we are and where we came from.
 I answered and asked him to be friendly and welcome us as guests. I
 also added that Zeus wants everybody to welcome wanderers.
</p>
<p class="question">Guess what Polyphemus will say</p>
<p class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "refused") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer is refused";
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
if ($four == "herd") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['four'] . " is wrong. The right answer is herd";
}
}
?>
</p>
<p>I understood his plan and answered that we have no more ships after the storm

If the Greeks were shocked, Polyphemus was pleasantly <input type="text" name="five" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send">. 
For here before him was a <input type="text" name="six" placeholder="your anwer" maxlength="10" size="10">
<input type="submit" value="Send"> that would nicely vary his diet. 
He quickly  <input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send"> up the nearest two of my  men,  <input type="text" name="eight" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send"> out their brains on the floor cooked them and ate.. 
Then he curled up in a corner and drifted happily to sleep. 
There was nothing for it, though, but to wait out the night in <input type="text" name="nine" placeholder="your anwer" maxlength="20" size="20">
<input type="submit" value="Send">, for the huge stone blocked the door.</p>
<p class="question"> How to escape?</p>
<p  class="right">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "surprised") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer is surprised";
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
if ($six == "treat") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['six'] . " is wrong. The right answer is treat";
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
if ($seven == "snatched") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['seven'] . " is wrong. The right answer is snatched";
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
if ($eight == "bashed") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['eight'] . " is wrong. The right answer is bashed";
}
}
?>
</p>
<p  class="right">
<?php
$nine = $_GET['nine'];
if (empty($nine)) {
	$_SESSION["nine"] = NULL;
} else {
if ($nine == "terror") {
	$_SESSION["nine"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['nine'] . " is wrong. The right answer is terror";
}
}
?>
</p>
<input type="submit" name="result" value="Result">
<p  class="question">
<?php
if ($result = $_GET['result'] ?? '') {
	echo $_SESSION["true"] . " sailors are alive";
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