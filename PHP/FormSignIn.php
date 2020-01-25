<?php
require 'includes/Connection.php';
$login      = trim($_POST['nickname']);
$password   = $_POST["password"];

$result     = mysqli_query($connection, "SELECT * FROM `users` where (`userLogin`='$login') 
                                                                  OR (`userEmail`='$login')");
$user       = mysqli_fetch_assoc($result);
if(!$user){
    $response = [
        'status' => false,
        'message' => "User not found"
    ];
    echo json_encode($response);
    return;
}
else if (!(password_verify($password, $user['userPassword']))) {
    $response = [
    'status' => false,
    'message' => "Wrong password"
];
    echo json_encode($response);
    return;
}
else{
    $response = [
        'status' => true
    ];
    echo json_encode($response);
    $_SESSION['user'] = $user;
} 
?>