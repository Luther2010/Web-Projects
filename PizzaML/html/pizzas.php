<?php
	require_once("../includes/helpers.php");
?>

<?php
	render("header", array("title" => "Pizzas"));
	
	$xml_file = __DIR__ . "/../data.xml";
	$xml = simplexml_load_file($xml_file);

	foreach ($xml->xpath("/menu/category[@name='Pizzas']/item") as $pizza) {
		echo "<li>";
		echo $pizza[@"name"];
		echo "</li>";
	}
	echo "</ul>";
	
	render("footer");
?>
