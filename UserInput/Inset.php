<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("connect.php");

try {
    $dbh = new PDO("mysql:host=localhost;dbname=tahires_EssaTahir", $user, $passwd);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}



$command = "insert into sport(name,player_count,indoor,referee_count,origin) values(?,?,?,?,?)";
$stmt = $dbh->prepare($command);
$array = array($_POST["name"],$_POST["count"],$_POST["indoor"],$_POST["referee"],$_POST["origin"],);
$status= $stmt->execute($array);
if($status){
    echo 'Executed Successfully';
}
else
    echo 'Error executing the query';


?>