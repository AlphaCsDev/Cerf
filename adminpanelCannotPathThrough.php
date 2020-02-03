<?php
require 'PHP/includes/Connection.php'; ?>
<!DOCTYPE html>
<html lang="ua">

<style>
    input,
    textarea {
        color: azure !important;
        height: 50px;

    }

    .container-fluid {
        width: 90vw !important;
        margin-left: 0px !important;

    }

    .AddTo {
        position: relative;
        top: -130px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <title>Магазин «<?php echo $config['titleUkrainian'] ?>»</title>
    <link href="https://fonts.googleapis.com/css?family=Cuprum:400,400i,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'PHP/includes/Header.php'; ?>
    <div class="container">
        <button type="button" class="btn " data-id="AllUsers">Get all Users</button>
        <button type="button" class="btn " data-id="AllCommodities">Get all Commodities</button>
        <button type="button" class="btn " data-id="AllOrders">Get all Orders</button>
        <button type="button" class="btn " data-id="AllComments">Get all Comments</button>
        <button type="button" class="btn " data-id="AddComm">Add Commodity</button>
        <button type="button" class="btn btn-outline-warning">Hide All</button>
    </div>

    <div class="container-fluid">
        <form>
            <input type="text" id="CommType" style="width:150px" class="float-left form-group form-control bg-dark" placeholder="CommType" required>
            <input type="text" id="Brand" style="width:100px" class="float-left form-group form-control bg-dark" placeholder="Brand" required>
            <input type="text" id="Model" style="width:100px" class="float-left form-group form-control bg-dark" placeholder="Model" required>
            <input type="text" id="Power" style="width:50px" class="float-left form-group form-control bg-dark" placeholder="PT" required>
            <input type="text" id="FullName" style="width:300px" class="float-left form-group form-control bg-dark" placeholder="FullName" required>
            <input type="text" id="Disc" style="width:60px" class="float-left form-group form-control bg-dark" placeholder="Disc" required>
            <input type="text" id="Price" style="width:60px" class="float-left form-group form-control bg-dark" placeholder="Price" required>
            <input type="file" id="Image" style="width:300px" class="float-left form-group form-control bg-dark" required>
            <input type="text" id="Count" style="width:100px" class="float-left form-group form-control bg-dark" placeholder="Count" required>
            <textarea id="Characteristic" style="width:600px !important" class="form-group form-control bg-dark" placeholder="Message" required></textarea>
            <button type="button" class="btn float-right AddTo">V</button>
        </form>
    </div>

    <div class="container s">
        <?php include 'PHP/admin.php'; ?>
        </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/admin.js"></script>
</body>

</html>