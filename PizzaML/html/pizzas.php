<?php
	session_start();
	require_once("../includes/helpers.php");
	
	add_to_cart();
	$item_list = load_xml("Pizzas");
	$fname = basename(htmlspecialchars($_SERVER['PHP_SELF']));
?>

<?php
	render("category", array(
	"header"=>array("title"=>"Pizzas"), 
	"body"=>array("action"=>$fname, "list"=>$item_list),
	"footer"=>array()))
?>
