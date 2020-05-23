<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	<?php foreach($Categorys as $key => $Category): ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a href="<?php echo BASE_URL . '/shop.php?C_id=' . $Category['id'] . '&name=' . $Category['category_name']; ?>"><?php echo $Category['category_name'] ?>
					</a>
				</h4>
			</div>
		</div>
    <?php endforeach ;?>
</div>

                        