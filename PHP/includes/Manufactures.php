<?php
$commodityM = mysqli_query($connection, "SELECT * FROM commodity group by `Brand`");
while ($commM = mysqli_fetch_assoc($commodityM)) { ?>
    <li class="filter-option">
        <input class="visually-hidden filter-input filter-input-checkbox" name="<?php echo $commM['Brand'] ?>" type="checkbox" id="<?php echo $commM['Brand'] ?>">
        <label for="<?php echo $commM['Brand'] ?>"><?php echo $commM['Brand'] ?></label>
    </li>

<?php
}
$brand = $_GET[$commM['Brand']];
$commodityFM = mysqli_query($connection, "SELECT * FROM commodity where brand = $brand");


?>