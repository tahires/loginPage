<?php

require("connect.php");
$update = $_POST["update"];
$count = $_POST["count"];
$indoor = $_POST["indoor"];
$referee = $_POST["referee"];
$origin = $_POST["origin"];


try {
    $dbh = new PDO("mysql:host=localhost;dbname=tahires_EssaTahir", $user, $passwd);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}



    $command = "update sport set  player_count = $count, indoor = '$indoor', referee_count = $referee, origin = '$origin' where name = '$update'";
$stmt = $dbh->prepare($command);
//$array = array($_POST["name"],$_POST["count"],$_POST["indoor"],$_POST["referee"],$_POST["origin"],);
$status= $stmt->execute();
if($status){
    echo 'Executed Successfully';
}
else
    echo 'Error executing the query';
