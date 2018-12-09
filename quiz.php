<html>
<head>
<title>Calculator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/anime-master/anime.min.js"></script>
<script src="scripts/asg.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/asg6.css">
</head>
<body>
<div class="pseudobg" id="storebg"></div>
<h1 class="maintitle", id="storetitle">Quiz</h1>
<header>
	<nav>
		<ul>
			<a href="madlibs.html" id="navmadlib"><li>MADLIBS</li></a>
			<a href="calc.html" id="navcalc"><li>CALCULATOR</li></a>
			<a href="store.html" id="navstore"><li>STORE FORM</li></a>
			<a href="quiz.html" id="navquiz"><li>QUIZ TIME</li></a>
		</ul>
	</nav>
</header>
<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$answers = ["Trenton", "1776", "Colonel Sanders"];
$result = 0;
$numquest = 3;
switch($q1){
	case "Trenton":
	$result += 1;
	break;

	case "Newark":
	$result += 0;
	break;

	case "Jersey City":
	$result += 0;
	break;

	case "Garden State":
	$result += 0;
	break;
};
switch($q2){
	case "1774":
	$result += 0;
	break;

	case "1776":
	$result += 1;
	break;

	case "1766":
	$result += 0;
	break;

	case "1756":
	$result += 0;
	break;
};
switch($q3){
	case "George Washington":
	$result += 0;
	break;

	case "Paul Revere":
	$result += 0;
	break;

	case "Colonel Sanders":
	$result += 1;
	break;

	case "Kanye West":
	$result += 0;
	break;
};
$total = 100 * ($result / $numquest);
$totalshown = round($total, 2, PHP_ROUND_HALF_UP);

echo "<div class=phpout id=quiz>";
echo "<h1>Name: $fname $lname</h1>";
echo "<h1>U.S. History Quiz Result: $totalshown%!</h1><br>";
echo "<h2>Question 1: What is the Capital of New Jersey?<br>Your Answer: '$q1'</h2>";
echo "<p id=correct><b>Correct Answer: $answers[0]</b></p>";
echo "<h2>Question 2: When was the Declaration of Independence Signed?<br> Your Answer: '$q2'</h2>";
echo "<p id=correct><b>Correct Answer: $answers[1]</b></p>";
echo "<h2>Question 3: Who invented KFC?<br>Your Answer: '$q3'</h2>";
echo "<p id=correct><b>Correct Answer: $answers[2]</b></p>";
echo "</div>";
?>

</body>
</html>