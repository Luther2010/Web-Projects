<?php
	session_start();
	require_once("../includes/helpers.php");
	
	add_to_cart();
	$item_list = load_xml("Side Orders");
	$fname = basename(htmlspecialchars($_SERVER['PHP_SELF']));
?>

<?php
	render("category", array(
	"header"=>array("title"=>"Side Orders"), 
	"body"=>array("action"=>$fname, "list"=>$item_list),
	"footer"=>array()))
?>
