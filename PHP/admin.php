<?php
require "includes/Connection.php";
$data       = $_GET['data'];

if ($data == "AllUsers") {
    $query = "SELECT * from `users`";
    $select = mysqli_query($connection, $query); ?>
    <table class="table table-dark" style="width:1500px !important;margin-left :-195px !important">
        <thead>
            <tr>
                <th>ID</th>
                <th>userName</th>
                <th>userSurname</th>
                <th>userLogin</th>
                <th>userPassword</th>
                <th>userEmail</th>
                <th>userAddress</th>
            </tr>
        </thead>
        <tbody>
    <?
    while ($loop = mysqli_fetch_assoc($select)) {
        echo "      

            <tr>
                <td>{$loop['IDUser']}</td>
                <td>{$loop['userName']}</td>
                <td>{$loop['userSurname']}</td>
                <td>{$loop['userLogin']}</td>
                <td>" . substr($loop['userPassword'], 0, 8) . "</td>
                <td>{$loop['userEmail']}</td>
                <td>{$loop['userAddress']}</td>
            </tr>
";
}}
if ($data == "AllCommodities") {
    $query = "SELECT * from `Commodity`";
    $select = mysqli_query($connection, $query); ?>
    <table class="table table-dark table-bordered" style="width:1500px !important;margin-left :-195px !important">
        <thead>
            <tr>
                <th>ID</th>
                <th>CommType</th>
                <th>Brand</th>
                <th>Model</th>
                <th>PT</th>
                <th>FullName</th>
                <th>Disc</th>
                <th>Price</th>
                <th>Image</th>
                <th>C</th>
                <th>Characteristic</th>
                <th>Dl</th>
            </tr>
        </thead>
        <tbody>
            
    <?
    while ($loop = mysqli_fetch_assoc($select)) {
            echo "      
    
            <td>{$loop['IDCommodity']}</td>
            <td>{$loop['CommodityType']}</td>
            <td>{$loop['Brand']}</td>
            <td>{$loop['Model']}</td>
            <td>{$loop['PowerType']}</td>
            <td>{$loop['FullName']}</td>
            <td>{$loop['discount']}</td>
            <td>{$loop['Price']}</td>
            <td>{$loop['Image']}</td>
            <td>{$loop['Count']}</td>
            <td>" . $loop['Characteristic'] . "</td>
            <td><button style=\"left:2px\"class=\"close\" type=\"button\"></button></td>
        </tr>";
}
}
if ($data == "AllOrders") {
    $query = "SELECT * from `userandcommodity`";
    $select = mysqli_query($connection, $query); ?>
    <table class="table table-dark" style="width:1500px !important;margin-left :-195px !important">
        <thead>
            <tr>
                <th>ID</th>
                <th>UserID</th>
                <th>CommodityID</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
    <?
    while ($loop = mysqli_fetch_assoc($select)) {
    echo "      

        <tr>
            <td>{$loop['IDOrder']}</td>
            <td>{$loop['UserID']}</td>
            <td>{$loop['CommodityID']}</td>
            <td>{$loop['DateOrdered']}</td>
        </tr>";

}}
if ($data == "AllComments") {
    $query = "SELECT * from `userandcommodity`";
    $select = mysqli_query($connection, $query); ?>
    <table class="table table-dark" style="width:1500px !important;margin-left :-195px !important">
        <thead>
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
    <?
    while ($loop = mysqli_fetch_assoc($select)) {
    echo "      
        <tr>
            <td>{$loop['IDComment']}</td>
            <td>{$loop['UserName']}</td>
            <td>{$loop['emailTyped']}</td>
            <td>" . substr($loop['Comment'], 0, 8) . "</td>
        </tr>";
}}
if(isset($_GET['access'])){
   
$CommType   = $_GET['CommType'];
$Brand      = $_GET['Brand'];
$Model      = $_GET['Model'];
$Power      = $_GET['Power'];
$FullName   = $_GET['FullName'];
$Disc       = $_GET['Disc'];
$Price      = $_GET['Price '];
$Image      = substr($_GET['Image'],12);
$Count      = $_GET['Count'];
$Charactristic = $_GET['Charactristic'];
echo $Image;
$ins=mysqli_query($connection, "INSERT INTO `commodity` (`CommodityType`, `Brand`, `Model`, `PowerType`, `FullName`, `discount`, `Price`, `Image`, `Characteristic`) 
VALUES('$CommType','$Brand','$Brand', '$Model', '$Power', '$FullName', '$Disc', '$Price', '$Image', '$Characteristic')");
}