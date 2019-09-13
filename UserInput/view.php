<?php

require("connect.php");

//$count = $_POST["count"];
//$indoor = $_POST["indoor"];
//$referee = $_POST["referee"];
//$origin = $_POST["origin"];


try {
    $dbh = new PDO("mysql:host=localhost;dbname=tahires_EssaTahir", $user, $passwd);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}



    $command = "select * from sport";
$stmt = $dbh->prepare($command);
//$array = array($_POST["name"],$_POST["count"],$_POST["indoor"],$_POST["referee"],$_POST["origin"],);
$status= $stmt->execute();
if($status){
    while($row =$stmt ->fetch())
       echo "id: ".$row[0]."  name: ".$row[1]."  playerCount: ".$row[2]."  indoor: ".$row[3]."  referee: ".$row[4]."  origin: ".$row[5]." <br>";        
   // echo 'Executed Successfully';
}
else
    echo 'Error executing the query';
?>


