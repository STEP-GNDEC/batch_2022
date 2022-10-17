<html>
<head>
<title>Operators</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="column">
<div class="col-sm-4" style="background-color:lavender;">
<h1 style="border-left: 5px solid red;">Airthmetic operators</h1>
<br>

<h3>1. Addition </h3>

<?php
$x = 16;  
$y = 6;

echo $x + $y;
?>
 
<h3>2. Substraction </h3>
<?php
$x = 14;  
$y = 6;

echo $x - $y;
?>

<h3>3. Multiplication </h3>
<?php
$x = 8;  
$y = 7;

echo $x * $y;
?>  

<h3>4. Division </h3>
<?php
$x = 20;  
$y = 4;

echo $x / $y;
?>  

<h3>5. Modulus </h3>
<?php
$x = 25;  
$y = 6;

echo $x % $y;
?>    
 
<h3>6. Exponentiation </h3>
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?> 
</div>

<div class="col-sm-4" style="background-color:lavenderblush;">
<h1 style="border-left: 5px solid red;">Assignment operators</h1>
<br>

<h3>1. x = y </h3>

<?php
$x = 20;  
echo $x;
?>  

<h3>2. x += y </h3>
<?php
$x = 20;  
$x += 100;

echo $x;
?>  

<h3>3. x -= y </h3>
<?php
$x = 50;
$x -= 30;

echo $x;
?>  

<h3>4. x /= y </h3>
<?php
$x = 5;
$x *= 6;

echo $x;
?>  

<h3>5. x *= y </h3>
<?php
$x = 10;
$x /= 5;

echo $x;
?>  


<h3>6. x %= y </h3>
<?php
$x = 15;
$x %= 4;

echo $x;
?> 
</div> 
 

<div class="col-sm-4" style="background-color:lavender;">

<h1 style="border-left: 5px solid red;">Comparison operators</h1>
<br>

<h3>1. Equal </h3>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  

<h3>2. Identical  </h3>
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  


<h3>3. Not equal</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  

<h3>4. Not equal </h3>
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  

<h3>5. Not identical </h3>
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

<h3>6. Greater than </h3>
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  


<h3>7. Less than </h3>
<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>

<h3>8. Greater than or equal to </h3>
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?> 

<h3>9. Less than or equal to </h3>
<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?> 

</div>




</body>
</html>
