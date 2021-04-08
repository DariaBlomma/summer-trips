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
<img src="../../images/irregular verbs.jpg" align="left">
<div class="aside">
<img src="../../images/food.jpg" align="right" width="300px">
<p>Food in the cave</p>
</div>
</div>
<form action="challenge 2.php" method="get" autocomplete="off">
<p class="text">We <input type="text" name="one" placeholder="to loose" maxlength="10" size="10"><input type="submit" value="Send"> the  course because of the storm , 
but then <input type="text" name="two" placeholder="to find" maxlength="10" size="10"><input type="submit" value="Send">  a small island.
 Here we <input type="text" name="three" placeholder="to see" maxlength="10" size="10"><input type="submit" value="Send"> a huge goat  herd outside the  cave and, inside, a lot of cheeses and meat.
 My shipmates <input type="text" name="four" placeholder="to tell" maxlength="10" size="10"><input type="submit" value="Send"> me to take the best food and go back to the ship as soon as possible.</p> 
<p class="question">What would you do?<p>
<div class="right">
<p>
<?php
$one = $_GET['one'];
if (empty($one)) {
	$_SESSION["one"] = NULL;
} else {
if ($one == "lost") {
	$_SESSION["one"] = "true";
	$_SESSION["true"] = 0;
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
</div>
<div class="wrong">
<p>
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['one'] . " is wrong. The right answer is lost";
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
if ($two == "found") {
	$_SESSION["two"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['two'] . " is wrong. The right answer is found";
}
}
?>
</p>
<p  class="right">
<?php
$three = $_GET['three'];
if (empty($two)) {
	$_SESSION["three"] = NULL;
} else {
if ($three == "saw") {
	$_SESSION["three"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['three'] . " is wrong. The right answer is saw";
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
if ($four == "told") {
	$_SESSION["four"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['four'] . " is wrong. The right answer is told";
}
}
?>
</p>

<p>
But I <input type="text" name="five" placeholder="to listen" maxlength="10" size="10"><input type="submit" value="Send"> to them , 
because I <input type="text" name="six" placeholder="to want" maxlength="10" size="10"><input type="submit" value="Send"> to see a cyclope. 
Finally he <input type="text" name="seven" placeholder="to come" maxlength="10" size="10"><input type="submit" value="Send">. 
He was huge, with a single eye. 
His name <input type="text" name="eight" placeholder="to be" maxlength="10" size="10"><input type="submit" value="Send">  Polyphemus. 
He <input type="text" name="nine" placeholder="to bring" maxlength="10" size="10"><input type="submit" value="Send"> his herd of sheep in 
and <input type="text" name="ten" placeholder="to close" maxlength="10" size="10"><input type="submit" value="Send"> the door. 
Then he <input type="text" name="eleven" placeholder="to see" maxlength="10" size="10"><input type="submit" value="Send"> us in the corner of the cave 
and <input type="text" name="twelve" placeholder="to ask" maxlength="10" size="10"><input type="submit" value="Send">:
“ who  <input type="text" name="thirteen" placeholder="to be" maxlength="10" size="10"><input type="submit" value="Send">you? 
and where you  <input type="text" name="fourteen" placeholder="to come" maxlength="10" size="10"><input type="submit" value="Send"> from?”
 I <input type="text" name="fifteen" placeholder="to answer" maxlength="10" size="10"><input type="submit" value="Send"> and asked him to be friendly and welcome us as guests. 
 I also added that Zeus wants everybody to welcome wanderers.
</p>
<p class="question">Guess what Polyphemus will say</p>
<p class="right">
<?php
$five = $_GET['five'];
if (empty($five)) {
	$_SESSION["five"] = NULL;
} else {
if ($five == "didn't listen") {
	$_SESSION["five"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['five'] . " is wrong. The right answer is didn't listen";
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
if ($six == "wanted") {
	$_SESSION["six"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['six'] . " is wrong. The right answer is wanted";
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
if ($seven == "came") {
	$_SESSION["seven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['seven'] . " is wrong. The right answer is came";
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
if ($eight == "was") {
	$_SESSION["eight"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['eight'] . " is wrong. The right answer is was";
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
if ($nine == "brought") {
	$_SESSION["nine"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['nine'] . " is wrong. The right answer is brought";
}
}
?>
</p>
<p  class="right">
<?php
$ten = $_GET['ten'];
if (empty($ten)) {
	$_SESSION["ten"] = NULL;
} else {
if ($ten == "closed") {
	$_SESSION["ten"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['ten'] . " is wrong. The right answer is closed";
}
}
?>
</p>
<p  class="right">
<?php
$eleven = $_GET['eleven'];
if (empty($eleven)) {
	$_SESSION["eleven"] = NULL;
} else {
if ($eleven == "saw") {
	$_SESSION["eleven"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['eleven'] . " is wrong. The right answer is saw";
}
}
?>
</p>
<p  class="right">
<?php
$twelve = $_GET['twelve'];
if (empty($twelve)) {
	$_SESSION["twelve"] = NULL;
} else {
if ($twelve == "asked") {
	$_SESSION["twelve"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['twelve'] . " is wrong. The right answer is asked";
}
}
?>
</p>
<p  class="right">
<?php
$thirteen = $_GET['thirteen'];
if (empty($thirteen)) {
	$_SESSION["thirteen"] = NULL;
} else {
if ($thirteen == "are") {
	$_SESSION["thirteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['thirteen'] . " is wrong. The right answer is are";
}
}
?>
</p>
<p  class="right">
<?php
$fourteen = $_GET['fourteen'];
if (empty($fourteen)) {
	$_SESSION["fourteen"] = NULL;
} else {
if ($fourteen == "do you come") {
	$_SESSION["fourteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['fourteen'] . " is wrong. The right answer is do you come";
}
}
?>
</p>
<p  class="right">
<?php
$fifteen = $_GET['fifteen'];
if (empty($fifteen)) {
	$_SESSION["fifteen"] = NULL;
} else {
if ($fifteen == "answered") {
	$_SESSION["fifteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['fifteen'] . " is wrong. The right answer is answered";
}
}
?>
</p>
<div class="aside">
<img src="../../images/cyclope.jpg" align="right" width="300px">
<p>This is cyclope Polyphemus</p>
</div>
<p>But Polyphemus got angry and promised to treat us without mercy. 
He <input type="text" name="sixteen" placeholder="to say" maxlength="10" size="10"><input type="submit" value="Send">:  “I <input type="text" name="seventeen" placeholder="to be + not" maxlength="10" size="10"><input type="submit" value="Send">afraid of Zeus.
 Where are your  ships?”</p>
<p class="question">What would you answer?</p>
<p>I understood his plan and answered that we have no more ships after the storm.

If the Greeks <input type="text" name="eighteen" placeholder="to be" maxlength="10" size="10"><input type="submit" value="Send"> shocked, Polyphemus <input type="text" name="nineteen" placeholder="to be" maxlength="10" size="10"><input type="submit" value="Send"> pleasantly surprised. 
Because in front of him  was a very tasty food. 
He quickly  <input type="text" name="twenty" placeholder="to snatch" maxlength="10" size="10"><input type="submit" value="Send"> up the nearest 
two of my  men,  <input type="text" name="twentyone" placeholder="to bash" maxlength="10" size="10"><input type="submit" value="Send"> out their brains on the floor, <input type="text" name="twentytwo" placeholder="to cook" maxlength="10" size="10"><input type="submit" value="Send"> them 
and <input type="text" name="twentythree" placeholder="to eat" maxlength="10" size="10"><input type="submit" value="Send">.. 
Then he curled up in a corner and fell happily asleep. 
We couldn't do anything, though, but to wait out the night in terror, because the huge stone blocked the door.</p>
<p class="question"> How to escape?</p>
<p  class="right">
<?php
$sixteen = $_GET['sixteen'];
if (empty($sixteen)) {
	$_SESSION["sixteen"] = NULL;
} else {
if ($sixteen == "said") {
	$_SESSION["sixteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['sixteen'] . " is wrong. The right answer is said";
}
}
?>
</p>
<p  class="right">
<?php
$seventeen = $_GET['seventeen'];
if (empty($seventeen)) {
	$_SESSION["seventeen"] = NULL;
} else {
if ($seventeen == "am not") {
	$_SESSION["seventeen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['seventeen'] . " is wrong. The right answer is am not";
}
}
?>
</p>
<p  class="right">
<?php
$eighteen = $_GET['eighteen'];
if (empty($eighteen)) {
	$_SESSION["eighteen"] = NULL;
} else {
if ($eighteen == "were") {
	$_SESSION["eighteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['eighteen'] . " is wrong. The right answer is were";
}
}
?>
</p>
<p  class="right">
<?php
$nineteen = $_GET['nineteen'];
if (empty($nineteen)) {
	$_SESSION["nineteen"] = NULL;
} else {
if ($nineteen == "was") {
	$_SESSION["nineteen"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['nineteen'] . " is wrong. The right answer is was";
}
}
?>
</p>
<p  class="right">
<?php
$twenty = $_GET['twenty'];
if (empty($twenty)) {
	$_SESSION["twenty"] = NULL;
} else {
if ($twenty == "snatched") {
	$_SESSION["twenty"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['twenty'] . " is wrong. The right answer is snatched";
}
}
?>
</p>
<p  class="right">
<?php
$twentyone = $_GET['twentyone'];
if (empty($twentyone)) {
	$_SESSION["twentyone"] = NULL;
} else {
if ($twentyone == "bashed") {
	$_SESSION["twentyone"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['twentyone'] . " is wrong. The right answer is bashed";
}
}
?>
</p>
<p  class="right">
<?php
$twentytwo = $_GET['twentytwo'];
if (empty($twentytwo)) {
	$_SESSION["twentytwo"] = NULL;
} else {
if ($twentytwo == "cooked") {
	$_SESSION["twentytwo"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['twentytwo'] . " is wrong. The right answer is cooked";
}
}
?>
</p>
<p  class="right">
<?php
$twentythree = $_GET['twentythree'];
if (empty($twentythree)) {
	$_SESSION["twentythree"] = NULL;
} else {
if ($twentythree == "ate") {
	$_SESSION["twentythree"] = "true";
	$_SESSION["true"] += 1;
	echo "Congratulations! Nobody is killed.</br>";
} else {
?>
</p>
<p class="wrong">
<?php
	echo "Oh no! One sailor is killed!</br>";
	echo "Your answer " . $_GET['twentythree'] . " is wrong. The right answer is ate";
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