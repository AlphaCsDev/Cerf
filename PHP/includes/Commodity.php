<?php
$commodity = mysqli_query($connection, "SELECT * FROM commodity LIMIT 4");
while ($comm = mysqli_fetch_assoc($commodity)) {
?>
	<li class="catalog-item" tabindex="0">
		<div class="actions">
			<a href="#" class="button buy">Купити</a>
			<a href="#" class="button bookmark">В закладки</a>
		</div>
		<div class="image"><img  src=" img/<?php echo $comm['Image'] ?>" alt="<?php echo $comm['FullName']; ?>" width="218" height="110"></div>
		<div class="title"><?php echo "{$comm['CommodityType']} {$comm['Brand']} {$comm['Model']}"; ?></div>
		<div class="discount"><?php if ($comm['discount'] != 0) {
									echo "{$comm['discount']} ГРН.";
								} else {
									echo "  ";
								} ?></div>
		<div class="price"><?php echo "{$comm['Price']} ГРН."; ?></div>
	</li>
<?php
}
