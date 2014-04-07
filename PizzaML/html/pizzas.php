<?php
	session_start();
	require_once("../includes/helpers.php");
	
	if (!isset($_SESSION["cart"]))
		$_SESSION["cart"] = array();
	$xml_file = __DIR__ . "/../data.xml";
	$xml = simplexml_load_file($xml_file);
	$pizzas = $xml->xpath("/menu/category[@name='Pizzas']/item");
	if (isset($_POST['submit'])) {
		foreach ($_POST as $key => $value) {
			if ($key != "submit" && $value > 0) {
				$_SESSION['cart'][$key] = $value;
			}
		}
	}
?>

<?php
	$fname = basename(htmlspecialchars($_SERVER['PHP_SELF']));
	render("header", array("title" => "Pizzas"));
	render("back");
	
	echo "<form id='pizzaForm' action=$fname method='POST'>";
	echo "<ul>";
	foreach ($xml->xpath("/menu/category[@name='Pizzas']/item") as $pizza) {
		echo "<li>";
		echo $pizza[@"name"];
		echo "<input type='text' name={$pizza[@'name']} value='0'>";
		echo "</li>";
	}
	echo "</ul>";
	echo "<input type='submit' name='submit' value='Add to cart'>";
	echo "</form>";
?>

<br>
<a href = 'cart.php'>Shopping cart</a>

<?	
	render("footer");
?>
