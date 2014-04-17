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
			<form action="<?php echo $action ?>" method="POST">
				<ul>
					<?php foreach ($list as $item) : ?>
						<li>
							<?php 
								echo $item[@"name"];
								echo "<input type='text' name={$item[@'name']} value='0'>";
							?>
						</li>
					<?php endforeach ?>
				</ul>
				<input type='submit' name='submit' value='Add to cart'>
			</form>
		<?php endif ?>
	</div>
</div>
