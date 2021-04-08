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
<img src="../../images/fight greece.jpg">
<h1>First challenge.</h1>
<h2>On the island of kikons and lotophags</h2>
<!-- 3 buttons of navigation menu -->
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
					<form action="challenge 1.php" method="get" autocomplete="off">
					<ol>
<!-- here is the hidden image with sailors -->
<div class="hiddensailors">
<img src="../../images/sailors.png" align="right" width="450">
</div>				
					<!-- number 1-->
					<li>I (to be born) on Ithaca</li>
					<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
					<input type="submit" value="Send">

	<p class="right">
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
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is was born";
}
}
?>
	</p>
				<li>I met my wife, Penelope, when I (to take part) in competitions</li>
				<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">
<?php
$two = $_GET['two'];
if (empty($two)) {
	$_SESSION["two"] = NULL;
} else {
if ($two == "was taking part") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer is was taking apart";
}
}
?>
	</p>
				<li>My wife and I (to have) a son, Telemachus</li>
				<input type="text" name="three" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$three = $_GET['three'];
if (empty($three)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "have") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer is have";
}
}
?>
	</p>
				<li>Soon after Telemachus was born, (to begin) a battle for Troy</li>
				<input type="text" name="four" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<!--image with sailors -->
<div class="sailors">
<img src="../../images/sailors.png" align="right" width="450">
<p>These are your sailors</p>
</div>
	<p  class="right">
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
?>
	</p>
	<p class="wrong">
<?php	
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['four'] . " is wrong. The right answer is began";
}
}
?>
	</p>
				<li>I (not want) to go to war but I was made to.</li>
				<input type="text" name="five" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
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
?>
	</p>
	<p class="wrong">
<?php		
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer is didn't want";
}
}
?>
	</p>
				<li>It was hard. Once, when I (to fight) alone in the crowd of Troyans, I was practically killed, but gods saved me</li>
				<input type="text" name="six" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$six = $_GET['six'];
if (empty($six)) {
	$_SESSION["six"] = NULL;
} else {
if ($six == "was fighting") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php		
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['six'] . " is wrong. The right answer is was fighting";
}
}
?>
	</p>
				<li>When the war was over, practically the half of our soldiers (to be killed).</li>
				<input type="text" name="seven" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$seven = $_GET['seven'];
if (empty($seven)) {
	$_SESSION["seven"] = NULL;
} else {
if ($seven == "had been killed") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php	
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['seven'] . " is wrong. The right answer is had been killed";
}
}
?>
	</p>
				<li>Right now I and my sailors (to fight) with kikons.</li>
				<input type="text" name="eight" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$eight = $_GET['eight'];
if (empty($eight)) {
	$_SESSION["eight"] = NULL;
} else {
if ($eight == "are fighting") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php	
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['eight'] . " is wrong. The right answer is are fighting";
}
}
?>
	</p>
				<li>But the island is inhabited not only by kikons. Lotophags also (to live) here</li>
				<input type="text" name="nine" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p  class="right">
<?php
$nine = $_GET['nine'];
if (empty($nine)) {
	$_SESSION["nine"] = NULL;
} else {
if ($nine == "live") {
	$_SESSION["nine"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php		
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['nine'] . " is wrong. The right answer is live";
}
}
?>
	</p>
				<li>We (not meet) lotophags yet</li>
				</ol>
				<input type="text" name="ten" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
	<p class="right">
<?php
$ten = $_GET['ten'];
if (empty($ten)) {
	$_SESSION["ten"] = NULL;
} else {
if ($ten == "haven't met") {
	$_SESSION["ten"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
	</p>
	<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['ten'] . " is wrong. The right answer is haven't met";
}
}
?>
	</p>
<input type="submit" name="result" value="Result">
	<!-- think about the style -->
	<p class="php">
	<!-- why no number in result? -->
<?php
if ($result = $_GET['result'] ?? '') {
	echo $_SESSION["true"] . " sailors are alive";
	$_SESSION = array();
}
?>
	</p>
				</form>
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