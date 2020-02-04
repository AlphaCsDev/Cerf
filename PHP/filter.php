<?php
require 'includes/Connection.php';

$MinPrice   = $_GET['priceMin'];
$MaxPrice   = $_GET['priceMax'];

$query = "SELECT * FROM `commodity` WHERE (`Price` >= '$MinPrice') AND (`Price` <= '$MaxPrice ')";
$Radio    = $_GET['radio'];

$brand		= $_GET['brand'];

$queryLow	= $_GET['Low'];
$queryHigh	= $_GET['High'];

function Show($query)
{
	global $connection;
	$comm = mysqli_query($connection, $query);
	while ($commF = mysqli_fetch_assoc($comm)) { ?>
		<li class="catalog-item" tabindex="0">
			<div class="actions">
				<a class="button buy" id="<?php echo $commF['IDCommodity'] ?>">Купити</a>
				<a class="characteristic">Характеристика</a>
				<p class="ddescription"><?php echo $commF['Characteristic'] ?></p>
			</div>
			</div>
			<div class="image"><img src="img/<?php echo $commF['Image'] ?>" alt="<?php echo "{$commF['CommodityType']} {$commF['Brand']} {$commF['Model']}"; ?> width=" 218" height="110"></div>
			<div class="title"> <?php echo "{$commF['CommodityType']} {$commF['Brand']} {$commF['Model']}"; ?></div>
			<div class="discount"> <?php if ($commF['discount'] != 0) {
										echo "{$commF['discount']} ГРН.";
									} else {
										echo "";
									} ?></div>
			<div class="price"> <?php echo "{$commF['Price']} ГРН."; ?></div>
		</li>

<?
	}
}



if (isset($brand)) {
	$query .= "AND(`Brand` = ''";
	foreach ($brand as  $value) {
		$query .= " OR `Brand` = '$value'";
	}
	$query .= ")";

	if (isset($Radio)) {
		$query .= " AND `PowerType` = '$Radio'";
	}
}


if (isset($Radio)) {
	$query .= " AND `PowerType` = '$Radio'";
}
//if sorted by price
if (isset($_GET['ByPrice'])) {
	$query .= " " . $_GET['ByPrice'];
}
//if sorted by name
else if (isset($_GET['ByBrand'])) {
	$query .= " " . $_GET['ByBrand'];
}
//if sorted by Type
else if (isset($_GET['ByType'])) {
	$query .= " " . $_GET['ByType'];
}

//Call function on load

if (isset($_GET['Low'])) {
	$query .= " " . $_GET['Low'];
	echo $query;
}
if (isset($_GET['High'])) {
	$query .=  " " . $_GET['High'];
	echo $query;
}

if (!(isset($_GET['Page']))) {
	$page =1;
}
else{
	$page = preg_replace('/[^0-9]/', '', $_GET['Page']);
}
$limit = 9;
$start = ($page - 1) * $limit;
$query .= " LIMIT $start,$limit";
Show($query);
