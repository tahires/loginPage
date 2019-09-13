<?php
session_start()
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Sports Order Form</h1>
        <form action="address.php"method="POST">
            
            First name:<br>
            <input type="text" name="firstname" maxlength="50"><br>
  Last name:<br>
  <input type="text" name="lastname"maxlength="50"><br>
  E-mail:<br>
  <input type="email" name="email" maxlength="50"><br><br>
  Birthday:<br>
  <input type="date" name="bday"><br><br>
  <input type="checkbox" name="runner" value="Bike"> Are your a runner?<br><br>
  
  which Type do you prefer?<br>
   <input type="radio" name="way" value="Road" checked> Road<br>
  <input type="radio" name="way" value="Track"> Track<br>
  <input type="radio" name="way" value="Trail"> Trail<br><br>
   Quantity (between 1 and 10):
  <input type="number" name="quantity" min="1" max="10"><br>
  <input type="submit" value="Submit">
        </form>
        <?php
       
        
        
        
        ?>
    </body>
</html>
