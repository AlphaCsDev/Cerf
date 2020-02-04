<?php 
include 'includes/Connection.php';
$User   = $_SESSION['user']['IDUser'];
if(isset($_GET['number'])){
    $number = $_GET['number'];
    $insertNum = mysqli_query($connection, "Update users SET userNumber = '$number' WHERE IDUser = '$User';");
}
if (isset($_GET['address'])) {
    $address = $_GET['address'];
    $insertAdd = mysqli_query($connection, "Update users SET userAddress = '$address' WHERE IDUser = '$User';");
    $newInsert =mysqli_query($connection,"Update userandcommodity  SET Address = '$address' WHERE UserID = '$User'");
}

if (isset($_GET['idOrder'])) {
    $User   = $_SESSION['user']['IDUser'];
    $query = "SELECT * FROM commodity INNER JOIN userandcommodity ON commodity.IDCommodity = userandcommodity.CommodityID WHERE userandcommodity.UserID = '$User';";
    $commCart = mysqli_query($connection, $query);
    $commC=mysqli_fetch_assoc($commCart);
    echo $commC['Price'];
}
if(isset($_GET['UserAddress'])){

}