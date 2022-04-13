<?php include "_dbconnect.php";?>
<?php

$regist = $_POST['reg'];
$sno= $_POST['type1'];
$dislikes= $_POST['type2'];
//echo '<script> console.log("in functions.php file") </script>';
    
if($regist == "success"){
    $dislikes++;
    
    $sql = "UPDATE `feeds` SET `Dislikes` = $dislikes WHERE `feeds`.`Sno.` = $sno";
    $result = mysqli_query($conn, $sql);
}
?>