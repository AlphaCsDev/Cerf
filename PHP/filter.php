<?php
require 'includes/Connection.php';
$MinPrice   = $_GET['priceMin'];
$MaxPrice   = $_GET['priceMax'];

$Battety    = $_GET['sourceBattery'];
$Network    = $_GET['sourceNetwork'];
$queryL = "SELECT * FROM `commodity` WHERE (`Price` >= $MinPrice) AND (`Price` <= $MaxPrice)";

	$querys	= $_GET['Low'];
	$query	= $_GET['High'];

function Show($con,$query){
	$MinPrice   = $_GET['priceMin'];
	$MaxPrice   = $_GET['priceMax'];
	$c = mysqli_query($con, $query);
	while ($commF = mysqli_fetch_assoc($c)) {
    ?>
        <li class="catalog-item" tabindex="0">
		<div class="actions">
			<a href="#" class="button buy">Купити</a>
			<a href="#" class="button bookmark">В закладки</a>
		</div>
		<div class="image"><img class="images" src="img/<?php echo $commF['Image'] ?>" alt="<?php echo "{$commF['CommodityType']} {$commF['Brand']} {$commF['Model']}"; ?> width="200" height="110"></div>
		<div class="title"><?php echo "{$commF['CommodityType']} {$commF['Brand']} {$commF['Model']}"; ?></div>
		<div class="discount"><?php if($commF['discount'] != 0){echo "{$commF['discount']} ГРН.";} 
									else {echo "  ";}?></div>
		<div class="price"><?php echo "{$commF['Price']} ГРН."; ?></div>
	</li>

    <?
}
}
if (isset($_GET['High'])) {
	Show($connection,$query);
	echo $query;
}
if (isset($_GET['Low'])) {
	Show($connection, $querys);
	echo $querys;
}
Show($connection,$queryL);
echo "\n";
