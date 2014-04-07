<?php
	session_start();
	require_once('../includes/helpers.php');
?>

<?php	
	$empty = true;
	if (empty($_SESSION['cart']))
		$empty = true;
	else
		$empty = false;
?>

<?php 
	render("header", array("title" => "Shopping Cart"));
	render("back");
?>

<?php if ($empty): ?>
	<h1>Your shopping cart is empty</h1>
<?php else: ?>
	<pre>
		<?php print_r($_SESSION) ?>
	</pre>
<?php endif ?>
	
<?php
	clear_cart();
	session_unset();
	render("footer");
?>
