<?php
	require_once("../includes/helpers.php");
?>

<?php
	render("header", array("title" => "Menu"));
?>

<ul>
	<li>
		<a href="pizzas.php">Pizzas</a>
	</li>
	<li>
		<a href="side_orders.php">Side Orders</a>
	</li>
</ul>

<?php
	render("footer");
?>
