<?php
require 'Connection.php';
$User   = $_SESSION['user']['IDUser'];
$query = "SELECT * FROM commodity WHERE IDCommodity IN (SELECT CommodityID FROM userandcommodity WHERE UserID = '$User');";
$i = 0;

$commCart = mysqli_query($connection, $query);
while ($commC = mysqli_fetch_assoc($commCart)) {
?>

    <li class="order" data-id="<?php echo $commC['IDOrder']; ?>">
        <div class="num"><?php echo ++$i; ?></div>
        <div class="date"><?php echo $commC['IDCommodity'] ?></div>
        <div class="numb"><?php echo $commC['FullName'] ?></div>
        <div class="cost"><?php echo $commC['CommodityID'] ?></div>
        <div class="address">вул. І. Горбачевського 18</div>
        <button class="close" id="<?php echo $commC['IDOrder']; ?>" type="button">Видалити</button>
    </li>

<?php
}

