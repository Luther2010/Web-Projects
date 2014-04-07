<?php
	require_once("../includes/helpers.php");
?>

<?php
	render("header", array("title" => "Side Orders"));
	
	$xml_file = __DIR__ . "/../data.xml";
	$xml = simplexml_load_file($xml_file);
	echo "<ul>";
	foreach ($xml->xpath("/menu/category[@name='Side Orders']/item") as $side_order) {
		echo "<li>";
		echo $side_order[@"name"];
		echo "</li>";
	}
	echo "</ul>";
	
	render("footer");
?>
	
