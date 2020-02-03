<?php  
include 'filter.php';
$MinPrice   = $_GET['priceMin'];
$MaxPrice   = $_GET['priceMax'];
$search     = $_POST['search'];
$query = "SELECT * FROM `commodity` WHERE 
(`CommodityType` LIKE '".$search."%' OR `Brand` LIKE '".$search."%' OR `Model` LIKE '".$search."%')";
Show($query);

