<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="p1.php" method="post">
      <input type="text" name="pole_1" />
      <input type="text" name="pole_2" />
      <input type="text" name="pole_3" />
      <input type="text" name="pole_4" />
      <input type="submit" name="wyslij" value="Wyślij" />
    </form>

<?php
  $a=$_POST['pole_1'];
  $b=$_POST['pole_2'];
  $c=$_POST['pole_3'];
  $d=$_POST['pole_4'];
  
  echo $a; echo '<br />';
  echo $b; echo '<br />';
  echo $c; echo '<br />';
  echo $d; 
?>
    
</body>
</html>