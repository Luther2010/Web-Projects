<?php

function render($name, $data = array()) {
	extract($data);
	if ($name == "category") {
		render("header", $header);
		render("category_body", $body);
		echo "<br>";
		echo "<a href = 'cart.php'>Shopping cart</a>";
		render("footer");
	}
	else {
		$file = __DIR__ . "/../templates/" . $name .".php";
		if (file_exists($file))
			require($file);
	}
}

function clear_cart($data = array()) {
	unset($_SESSION['cart']);
}

function add_to_cart() {
	if (!isset($_SESSION["cart"]))
		$_SESSION["cart"] = array();
	if (isset($_POST['submit'])) {
		foreach ($_POST as $key => $value) {
			if ($key != "submit" && $value > 0) {
				$_SESSION['cart'][$key] = $value;
			}
		}
	}
}

function load_xml($category) {
	$xml_file = __DIR__ . "/../data.xml";
	$xml = simplexml_load_file($xml_file);
	$result = $xml->xpath("/menu/category[@name='$category']/item");
	return $result;
}
?>
