<?php
require 'includes/Connection.php';

$name       = trim(  $_POST['name']);
$surname    = trim(  $_POST['surname']);
$nickname   = trim(  $_POST['nickname']);
$password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email      = trim(  $_POST['email']);

$readEmail  = mysqli_query($connection, "SELECT * FROM `users` where `userEmail` ='$email'");
$readLogin  = mysqli_query($connection, "SELECT * FROM `users` where `userLogin` ='$nickname'");

$rowEmail   = mysqli_fetch_assoc($readEmail);
$rowLogin   = mysqli_fetch_assoc($readLogin);

if (count($rowLogin) !== 0) {
    $response = [
        'status' => false,
        'message' => "Користувач з таким нікнеймом вже зареєстрований"
    ];
    echo json_encode($response);
    return;
}
else if (count($rowEmail) !== 0) {
    $response = [
        'status' => false,
        'message' => "Користувач з такою поштою вже зареєстрований"
    ];
    echo json_encode($response);
    return;
}

else{
$write      = mysqli_query($connection, "INSERT INTO `users` (`userName`,`userSurname`,`userLogin`,`userPassword`,`userEmail`)
VALUES ('$name','$surname','$nickname','$password','$email')");

    $response = [
        'status' => true
    ];
    echo json_encode($response);

}
mysqli_close($connection);