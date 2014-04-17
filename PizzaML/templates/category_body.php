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
				<div class="item_list">
					<ul>
						<?php foreach ($list as $item) : ?>
							<div class="item">
								<div>
									<img src="../img/<?php echo ($item[@"name"] . ".jpg"); ?>">
									<b><?php echo $item[@"name"]; ?></b>
								</div>
								<!--<?php echo $item[@"name"]; ?>-->
								<div>test</div>
								<input type='submit' name='submit' value='Add to cart'>
							</div>
						<?php endforeach ?>
					</ul>
					<input type='submit' name='submit' value='Add to cart'>
				</div>
			</form>
		<?php endif ?>
	</div>
</div>
