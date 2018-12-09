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
<h1 class="maintitle", id="storetitle">Online Store</h1>
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
$name = $_POST["name"];
$email = $_POST["email"];
$product = $_POST["products"];
$quantity = $_POST["quantity"];
$IKEAp = 199.99;
$ricep = 14.99;
$quantityint = intval($quantity);
$total = 0;
switch($product){

	case "IKEA Mattress (queen)":
	$total = $quantityint * $IKEAp;
	break;

	case "Rice":
	$total = $quantityint * $ricep;
	break;


}
echo "<div class=phpout id=receipt>";
echo "<h1>Name: $name</h1>";
echo "<h1>Email: $email</h1>";
echo "<h1>Item Bought: $product</h1>";
echo "<h1>Quantity: $quantity</h1>";
echo "<br><h1>Total: $ $total</h1><br><br>";
echo "<p>Thank you for trying our php shop</p>";
echo "</div>";
?>

</body>
</html>