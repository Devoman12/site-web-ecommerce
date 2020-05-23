
<div class="brands-name">
    <ul class="nav nav-pills nav-stacked">
	<?php foreach($Brands as $key => $Brand): ?>
		<li>
			<a href="<?php echo BASE_URL . '/shop.php?B_id=' . $Brand['id'] . '&name=' . $Brand['brand_name']; ?>">
				<span class="pull-right">(<?php echo count(selectAll('products', ['brand' => $Brand['id']]));?>)</span><?php echo $Brand['brand_name'] ?>
			</a>

		</li>
    <?php endforeach ;?>
	</ul>
</div>


