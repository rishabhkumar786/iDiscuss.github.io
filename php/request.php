<?php include "_dbconnect.php";?>
<?php

$regist = $_POST['reg'];
$sender_id= $_POST['type1'];
$receiver_id= $_POST['type2'];

//echo '<script> console.log("in functions.php file") </script>';
    
if($regist == "torequest"){
    $sql = "INSERT INTO `request_box` (`sender_id`, `receiver_id`)  VALUES ('$sender_id', '$receiver_id')";
    $result = mysqli_query($conn, $sql);
}
else if($regist == "cancelrequest"){
    $sql = "DELETE FROM `request_box` WHERE `sender_id` = $sender_id AND `receiver_id` = $receiver_id";
    $result = mysqli_query($conn, $sql);
}
else if($regist == "acceptrequest"){
    $temp_sql1 = 
    $temp_sql2 = 

    $sql = "DELETE FROM `request_box` WHERE `sender_id` = $sender_id AND `receiver_id` = $receiver_id";
    $result = mysqli_query($conn, $sql);

    $result = mysqli_query($conn, $sql);
}
else if($regist == "deleterequest"){
    $temp_sql1 = 
    $temp_sql2 = 

    $sql = "DELETE FROM `request_box` WHERE `sender_id` = $sender_id AND `receiver_id` = $receiver_id";
    $result = mysqli_query($conn, $sql);

    $result = mysqli_query($conn, $sql);
}

?>