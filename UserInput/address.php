<?php
session_start();
$_SESSION["firstname"] = $_POST["firstname"];
$_SESSION["lastname"] =$_POST["lastname"]; 
$_SESSION["email"] =$_POST["email"]; 
$_SESSION["bday"] =$_POST["bday"]; 
$_SESSION["way"] =$_POST["way"]; 
$_SESSION["quantity"] =$_POST["quantity"];
$_SESSION["runner"] =$_POST["runner"];


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
 
        echo "<h2>Welcome ".$_SESSION["firstname"]."</h2>";
        
        
        ?>
        <form action="shipping.php"method="POST">
           Street Address:<br>
            <input type="text" name="street" maxlength="100"><br>  
             City:<br>
            <input type="text" name="city" maxlength="20"><br>
       
            <br> <select name="province">
  <option value="ontario">Ontario</option>
  <option value="scar">Scarborough</option>
  <option value="alberta">Alberta</option>
  <option value="british">British Columbia</option>
</select><br>
Postal code:<br>
            <input type="text" name="postal" maxlength="6"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
