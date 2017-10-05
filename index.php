<?php 


$name = "Jasmien";
$string1 = "hello ";
$string2 = "world";
$x = 10;
$y = 7;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <h1> Welcome <?php echo $name ?> !</h1>  
   <?php echo $string1 , $string2?> 
   <?php echo $x + $y?>
   <?php echo $x - $y?>
   <?php echo $x * $y?>
   <?php echo $x / $y?>
   <?php echo $x % $y?>

   

</body>
</html>