<?php
include 'includes/Connection.php';
$Name    = $_POST['name'];
$Email   = $_POST['email'];
$Comment = $_POST['comment'];
echo "{$Name} + {$Email} + {$Comment}";
$write    = mysqli_query($connection, "INSERT INTO `userandcomment` (`userName`,`emailTyped`,`Comment`) VALUES ('$Name','$Email','$Comment')");
if($write){
    echo 1;
}