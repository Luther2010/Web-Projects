<?php
	session_start();
	require_once("../includes/helpers.php");
	
	if (!isset($_SESSION["cart"]))
		$_SESSION["cart"] = array();
	$xml_file = __DIR__ . "/../data.xml";
	$xml = simplexml_load_file($xml_file);
	$sides = $xml->xpath("/menu/category[@name='Side Orders']/item");
	if (isset($_POST['submit'])) {
		foreach ($_POST as $key => $value) {
			if ($key != "submit") {
				$_SESSION[$key] = $value;
			}
		}
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}
?>

<?php
	$fname = basename(htmlspecialchars($_SERVER['PHP_SELF']));
	render("header", array("title" => "Side Orders"));
	
	echo "<form id='sideForm' action=$fname method='POST'>";
	echo "<ul>";
	foreach ($xml->xpath("/menu/category[@name='Side Orders']/item") as $side) {
		echo "<li>";
		echo $side[@"name"];
		echo "<input type='text' name={$side[@'name']} value='0'>";
		echo "</li>";
	}
	echo "</ul>";
	echo "<input type='submit' name='submit' value='Add to cart'>";
	echo "</form>";
	
	render("back");
	render("footer");
?>
	
