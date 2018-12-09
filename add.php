<html>
<head>
<title>Calculator</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/anime-master/anime.min.js"></script>
<script src="scripts/asg.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/asg6.css">
</head>
<body>
<div class="pseudobg" id="calcbg"></div>
<h1 class="maintitle", id="calctitle">Calculator</h1>
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
$num1 = $_POST["num1"];
$floatnum1 = floatval($num1);
$num2 = $_POST["num2"];
$floatnum2 = floatval($num2);
$opp = $_POST["operator"];
$result = 0;

switch($opp){

	case "*":
	$result = $floatnum1 * $floatnum2;
	break;

	case "+":
	$result = $floatnum1 + $floatnum2;
	break;

	case "-":
	$result = $floatnum1 - $floatnum2;
	break;

	case "/":
	$result = $floatnum1 / $floatnum2;

}

echo "<div class=phpout>";
echo "<p>$num1 $opp $num2 = $result.";
echo "</div>";
?>

</body>
</html>