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
<p>Learn <a href="https://miro.com/app/board/o9J_kuOG_u4=/?moveToWidget=3074457348998117515&cot=13">new words</a> on Miro</p>
</section>
<section class="test">
<p>Check your understanding to get extra points. Only one variant is correct</p>
<form action="new words.php" method="get" autocomplete="off">
<p><b>радушно принимать, приветствовать</b></p>
	<p><input name="one" type="radio" value="snatch">Snatch</p>
    <p><input name="one" type="radio" value="welcome"> Welcome</p>
    <p><input name="one" type="radio" value="add"> Add</p>
<div>
<img src="../../images/test.jpg" align="right" height="130%" width="40%">
</div>
<p><b>пощада</b></p>
	<p><input name="two" type="radio" value="mercy">Mercy</p>
    <p><input name="two" type="radio" value="treat"> Treat</p>
    <p><input name="two" type="radio" value="cave"> Cave</p>
<p><b>сильно ударить</b></p>
	<p><input name="three" type="radio" value="snatch">Snatch</p>
    <p><input name="three" type="radio" value="bash"> Bash</p>
    <p><input name="three" type="radio" value="blow"> Blow</p>
<p><b>Blow</b></p>
	<p><input name="four" type="radio" value="snatch">сильно ударить</p>
    <p><input name="four" type="radio" value="add">добавить</p>
    <p><input name="four" type="radio" value="blow">дуть</p>
<p><b>Add</b></p>
	<p><input name="five" type="radio" value="angry">рассердиться</p>
    <p><input name="five" type="radio" value="add">добавить</p>
    <p><input name="five" type="radio" value="reach">достигнуть</p>
<p><b>Reach</b></p>
	<p><input name="six" type="radio" value="welcome">радушно принимать, приветствовать</p>
    <p><input name="six" type="radio" value="refuse">отказаться</p>
    <p><input name="six" type="radio" value="reach">достигнуть</p>
<p><input type="submit" name="send" value="send"></p>
<p class="question">	
<?php
if ($send = $_GET['send'] ?? '') {
	/* echo "You have " . $_SESSION["true"] . " points </br>"; */
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "welcome") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Answer 1 is right.</br>";
} else {
	echo "Your answer 1 " . $_GET['one'] . " is wrong. The right answer is welcome</br>";
}
}
$two = $_GET['two'];
if ($two == "mercy" ?? '') {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 2 is right.</br>";
} else {
	echo "Your answer 2 " . $_GET['two'] . " is wrong. The right answer is mercy</br>";
}
$three = $_GET['three'];
if ($three == "bash" ?? ''){
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 3 is right.</br>";
} else {
	echo "Your answer 3 " . $_GET['three'] . " is wrong. The right answer is bash</br>";
}
$four = $_GET['four'];
if ($four == "blow" ?? '') {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 4 is right.</br>";
} else {
	echo "Your answer 4 " . $_GET['four'] . " is wrong. The right answer is blow</br>";
}
$five = $_GET['five'];
if ($five == "add" ?? '') {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 5 is right.</br>";
} else {
	echo "Your answer 5 " . $_GET['five'] . " is wrong. The right answer is add</br>";
}
$six = $_GET['six'];
if ($six == "reach" ?? '') {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Answer 6 is right.</br>";
} else {
	echo "Your answer 6 " . $_GET['six'] . " is wrong. The right answer is reach</br>";
}
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