<?php
session_start();
//$_SESSION["firstname"] = $_POST["firstname"];
//$_SESSION["lastname"] =$_POST["lastname"]; 
//$_SESSION["email"] =$_POST["email"]; 
//$_SESSION["bday"] =$_POST["bday"]; 
//$_SESSION["way"] =$_POST["way"]; 
//$_SESSION["quantity"] =$_POST["quantity"];
$_SESSION["street"] =  $_POST["street"];
$_SESSION["city"] =  $_POST["city"];
$_SESSION["province"] =  $_POST["province"];
$_SESSION["postal"] =  $_POST["postal"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Sports Order Form</h1>
        <?php
        print_r($_SESSION);
        ?>
        <form action="confirmation.php"method="POST">
            which type of Shipping you Like?
            <br> <select name="shipping">
  <option value="canadapost"> Canada Post</option>
  <option value="fedex">FedEx</option>
  <option value="ups">UPS</option>
  
            </select><br><br>
 <input type="submit" value="Submit">
        </form>
    </body>
</html>
