<html>
<head>
<title>MADLIBS</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/anime-master/anime.min.js"></script>
<script src="scripts/asg.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/asg6.css">
</head>
<body>
<div class="pseudobg" id="madlibbg"></div>
<h1 class="maintitle", id="madlibtitle">MADLIBS!</h1>
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
$firstadj = $_POST["firstadj"];
$anotheradj = $_POST["anotheradj"];
$noun = $_POST["noun"];
$verb = $_POST["verb"];
$anothernoun = $_POST["anothernoun"];
$num = $_GET["num"];
$secondverb = $_POST["secondverb"];
$thirdnoun = $_POST["thirdnoun"];

echo "<div class=phpout>";
echo "<p id=subtext>";
echo "Here is your <i>Mad Libs</i> output:</p><br>";
echo "<p>The $firstadj $noun $verb the $anotheradj house. <br>";
echo "There she saw a $anothernoun $secondverb with $num $thirdnoun.</p>";
echo "</div>";
?>

</body>
</html>