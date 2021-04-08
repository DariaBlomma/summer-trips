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

		</header>
	<main>
		
		<section>
<p><h3>Start a challenge</h3></p>
					<form action="challenge 1.php" method="get" autocomplete="off">
					<ol>
<!-- here is the hidden image with sailors -->


</div>				
					<!-- number 1-->
					<li>I (to be born) on Ithaca</li>
					<input type="text" name="one" placeholder="your anwer" maxlength="20" size="20">
					<input type="submit" value="Send">

	<p class="right">
<?php
function countSailors ($gap, $rightAnswer) {
	$gap = $_GET["$gap"];
	
	/*if (empty($gap)) {
		$_SESSION["gap"] = NULL;
	} else {
	if ($gape == "$rightAnswer") {
		$_SESSION["gap"] = "true";
		$_SESSION["true"] = 0;
		$_SESSION["true"] += 1;
		echo "Congratulations! Nobody is killed.</br>";
	} else {
		echo "Oh no! One sailor is killed!</br>";
		echo "Your answer " . $_GET['gap'] . " is wrong. The right answer is " .  $rightAnswer;
}*/
}
};
countSailors($one, "was born");
/*$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "was born") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {*/
?>
	</p>
	<p class="wrong">
<?php/*
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is was born";
}
}*/
?>
	</p>
				<li>I met my wife, Penelope, when I (to take part) in competitions</li>
				<input type="text" name="two" placeholder="your anwer" maxlength="20" size="20">
				<input type="submit" value="Send">
<p  class="right">

	</p>
				
	<p  class="right">

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