<?php
require 'includes/Connection.php';
if(!(isset($_SESSION['user']))){
    echo "Для купівлі,зареєструйтесь або ввійдіть в аккаунт";    
}
else{
    $User   = $_SESSION['user']['IDUser'];
    $id     = $_GET['Id'];
    $Count  = $_GET['Count'];
    $Date   = $_GET['DateTime'];
    $s=mysqli_query($connection,"INSERT INTO `userandcommodity` (`UserID`,`CommodityID`,`DateOrdered`) VALUES ('$User','$id','$Date')");
}
if (isset($_GET['Id'])) {
    $ID = $_GET['Id'];
    $query = "DELETE FROM userandcommodity WHERE IDOrder = '$ID'";
    $delete = mysqli_query($connection, $query);
}