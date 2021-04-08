<?php
session_start ();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 2 </title>
</head>
<body>
<header>
<img src="../../images/words2.jpg" width="100%">
<h1>New words</h1>
<nav class="features">
<p class="feature-challenge"><a href="challenge 2.php">Go back to Challenge 2</a></p>
<p class="feature-help"><a href="help.html">How to read bid texts?</a></p>
<p class="feature-continue"><a href="continuation.html">The continuation of the story</a></p>
</nav>
</header>
<main>
<section>
<p>Learn <a href="https://miro.com/app/board/o9J_kuOG_u4=/?moveToWidget=3074457349056197621&cot=13">new words</a> on Miro</p>
<p><img src="../../images/Present Simple.jpg" width="100%"></p>
<p><img src="../../images/past simple.png" width="50%" align="left">
<img src="../../images/pastsimple.png" width="50%" align="right"></p>
</section>
<section class="test">
<p>Check your understanding to get extra points. Only one variant is correct</p>
<form action="new words.php" method="get" autocomplete="off">
<p><b>1. Which verb is regular?</b></p>
	<p><input name="one" type="radio" value="snatch">Snatch</p>
    <p><input name="one" type="radio" value="say"> Say</p>
    <p><input name="one" type="radio" value="come"> Come</p>
<div>
<img src="../../images/test.jpg" align="right" height="130%" width="40%">
</div>
<p><b>2. Which verb is irregular?</b></p>
	<p><input name="two" type="radio" value="listen">Listen</p>
    <p><input name="two" type="radio" value="tell"> Tell</p>
    <p><input name="two" type="radio" value="answer"> Answer</p>
<p><b>3. Which verb has identical 2nd and 3d forms? </b></p>
	<p><input name="three" type="radio" value="come">Come</p>
    <p><input name="three" type="radio" value="see"> See</p>
    <p><input name="three" type="radio" value="find"> Find</p>
<p><b>4. Which verb has -en in the 3d form?</b></p>
	<p><input name="four" type="radio" value="loose">Loose</p>
    <p><input name="four" type="radio" value="see">See</p>
    <p><input name="four" type="radio" value="bring">Bring</p>
<p><b>5. Translate "see"</b></p>
	<p><input name="five" type="radio" value="ask">спрашивать, просить</p>
    <p><input name="five" type="radio" value="answer">отвечать</p>
    <p><input name="five" type="radio" value="see">видеть</p>
<p><b>6. Translate "приходить, приезжать"</b></p>
	<p><input name="six" type="radio" value="come">Come</p>
    <p><input name="six" type="radio" value="see">See</p>
    <p><input name="six" type="radio" value="find">Find</p>
<p><input type="submit" name="send" value="send"></p>
<p class="right">	
<?php
if ($send = $_GET['send'] ?? '') {
	/* echo "You have " . $_SESSION["true"] . " points </br>"; */
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "snatch") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Answer 1 is right.</br>";
} else {
	?>
</p>
<p class="wrong">
<?php	
	echo "Your answer 1 " . $_GET['one'] . " is wrong. The right answer is snatch</br>";
}
}
?>
</p>
<p class="right">
<?php
$two = $_GET['two'];
if ($two == "tell" ?? '') {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 2 is right.</br>";
} else {
?>
</p>
<p class="wrong>
<?php
	echo "Your answer 2 " . $_GET['two'] . " is wrong. The right answer is tell</br>";
}
?>
</p>
<p class="right">
<?php
$three = $_GET['three'];
if ($three == "find" ?? ''){
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 3 is right.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Your answer 3 " . $_GET['three'] . " is wrong. The right answer is find</br>";
}
?>
</p>
<p class="right">
<?php
$four = $_GET['four'];
if ($four == "see" ?? '') {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 4 is right.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Your answer 4 " . $_GET['four'] . " is wrong. The right answer is see</br>";
}
?>
</p>
<p class="right">
<?php
$five = $_GET['five'];
if ($five == "see" ?? '') {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 5 is right.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Your answer 5 " . $_GET['five'] . " is wrong. The right answer is see</br>";
}
?>
</p>
<p class="right">
<?php
$six = $_GET['six'];
if ($six == "come" ?? '') {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 6 is right.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Your answer 6 " . $_GET['six'] . " is wrong. The right answer is come</br>";
}
?>
</p>
<p class="question">
<?php
	echo "You have " . $_SESSION["true"] . " points </br>";
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