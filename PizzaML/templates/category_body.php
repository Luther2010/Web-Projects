<div id="page_content">
	<div class="left_side_bar">
		<h1>Menu</h1>
		<div class="box">
			<ul>
				<li><a href="pizzas.php">Pizzas</a></li>
				<li><a href="side_orders.php">Side Orders</a></li>
			</ul>
		</div>
	</div>
	<div class = "right_section">
		<?php if (isset($list)) : ?>
			<div class="item_list">
				<ul>
					<?php foreach ($list as $item) : ?>
						<div class="item">
							<div class="image">
								<img src="../img/<?php echo ($item[@"name"] . ".jpg"); ?>">
								<b><?php echo $item[@"name"]; ?></b>
							</div>
							<!--<?php echo $item[@"name"]; ?>-->
							<div class="add_button">
								<form action="<?php echo $action ?>" method="POST">
									<?php echo $item[@"name"]; ?>
									<br>
									<input type='text' name="<?php echo $item[@"name"]; ?>" value='0'>
									<br>
									<input type='submit' name='submit' value='Add to cart'>
								</form>
							</div>
						</div>
					<?php endforeach ?>
				</ul>
				<!--<input type='submit' name='submit' value='Add to cart'>-->
			</div>
		<?php endif ?>
		<div class="cart">
			<?php echo count($_SESSION['cart']); ?>
			<a href="cart.php">
			<img src="../img/Cart.png">
			</a>
		</div>
		<div>
		<pre>
			<?php //print_r($_SESSION); ?>
		</pre>
		</div>
	</div>
</div>
