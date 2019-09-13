<?php
session_start();
//$_SESSION["firstname"] = $_POST["firstname"];
//$_SESSION["lastname"] =$_POST["lastname"]; 
//$_SESSION["email"] =$_POST["email"]; 
//$_SESSION["bday"] =$_POST["bday"]; 
//$_SESSION["way"] =$_POST["way"]; 
//$_SESSION["quantity"] =$_POST["quantity"];
//$_SESSION["street"] =  $_POST["street"];
//$_SESSION["city"] =  $_POST["city"];
//$_SESSION["province"] =  $_POST["province"];
$_SESSION["ship"] =  $_POST["ship"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Sports Order Form</h1>
        <form action="complete.php"method="POST">
            
  
            
 
<?php
echo "<div>your First name: ".$_SESSION["firstname"]."</div>";
echo "<div>your Last name: ".$_SESSION["lastname"]."</div>";
echo "<div>your Email: ".$_SESSION["email"]."</div>";
echo "<div>your Birthday: ".$_SESSION["bday"]."</div>";
echo "<div>you are a runner: ".$_SESSION["runner"]."</div>";
echo "<div>your prefered way: ".$_SESSION["way"]."</div>";
echo "<div>your prefered quantity: ".$_SESSION["quantity"]."</div>";
echo "<div>your address: ".$_SESSION["street"]."</div>";
echo "<div>The city you live in: ".$_SESSION["city"]."</div>";
echo "<div>your province: ".$_SESSION["province"]."</div>";
echo "<div>your postal code: ".$_SESSION["postal"]."</div>";

?>


<input type="submit" value="Submit">
<?php
session_destroy();
?>
        </form>
    </body>
    
</html>
