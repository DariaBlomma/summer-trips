<?php
session_start ();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="style 1.css" rel="stylesheet">
<title>Summer trip. Ancient Greece. Challenge 1 </title>
</head>
	<body>
		<header>
<img src="../../images/training before the challenge.jpg" width="100%">
<h1>Training before the first challenge</h1>
	<nav class="features">
<p class="feature-challenge"><a href="challenge 1.php">Go back to Challenge 1</a></p>
<p class="feature-grammar"><a href="grammar rules.html">Grammar rules</a></p>
<p class="feature-ship"><a href="information about the world.html">Information about the world</a></p>
	</nav>
		</header>
	<main>
		<section>
<p>Soon you will start a challenge, but now you can practise and see how the challenge will look like.</p>
<p> You can try to <b>use hints</b> and <b>your special power</b> <h3>for free !</h3> </p>
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
<!-- the image with sailors -->
<div class="sailors">
<img src="../../images/sailors.png" align="right" width="450">
<p>These are your sailors</p>
</div>
		<section>
			<form action="training before the challenge.php" method="get" autocomplete="off">
			<ol>
			<!-- number 1 -->
			<li>I (to get) in another world one month ago</li>			
			<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
			<input type="submit" value="Send">
	<p class="right">
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "got") {
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
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is got";
}
}
?>
</p>
			<!-- number 2 -->
			<li>When I woke up on the ship, we (to sail) back home</li>
			<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
			<input type="submit" value="Send">
	<p  class="right">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "were sailing") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer is were sailing";
}
}
?>
	</p>
			<!-- number 3 -->
			<li>I (to sail) back home for 1 month</li>
			<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
			<input type="submit" value="Send">
			</ol>
	<p  class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "have been sailing") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer is have been sailing";
}
}
?>
	</p>
<input type="submit" name="result" value="Result">
<!-- result -->
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