<?php
require 'Connection.php';
$User   = $_SESSION['user']['IDUser'];
$query = "SELECT * FROM commodity INNER JOIN userandcommodity ON commodity.IDCommodity = userandcommodity.CommodityID WHERE userandcommodity.UserID = '$User';";
$i = 0;
$commCart = mysqli_query($connection, $query);


while ($commC = mysqli_fetch_assoc($commCart)) {
?>

    <li class="order" data-id="<?php echo $commC['IDOrder']; ?>">
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM num"><?php echo ++$i; ?></div>
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM date"><?php echo $commC['DateOrdered'] ?></div>
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM cost  "><?php echo $commC['IDOrder'] ?></div>
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM numb"><?php echo $commC['FullName'] ?></div>
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM image"> <img src=" img/<?php echo $commC['Image'] ?>" width="100px" height="40px"></div>
        <div data-id="<?php echo $commC['IDOrder']; ?>" class="orderM cost"><?php echo $commC['Price'] ?></div>


        <button class="close" id="<?php echo $commC['IDOrder']; ?>" type="button">Видалити</button>
    </li>

<?php
}
