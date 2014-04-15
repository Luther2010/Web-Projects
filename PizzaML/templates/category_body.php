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
