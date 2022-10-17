<!DOCTYPE html>
<html>
<body>
<div class="row">
<div class="col-sm-4" style="background-color:lavender;">
<h2>Arithmetic Operators</h2><hr>
<h3>Addition</h3>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  
<br>

<h3>Subtraction</h3>
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>
<br>  

<h3>Multiplication</h3>
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>
<br>  

<h3>Division</h3>
<?php
$x = 10;  
$y = 6;

echo $x / $y;
?>
<br>  

<h3>Modulus</h3>
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  
<br>


<h3>Exponentiation</h3>
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?> 
<br>
</div> 

<div class="col-sm-4" style="background-color:lavenderblush;">
<h2>Assignment Operators</h2><hr>
<h3>x = y</h3>
<?php
$x = 10;  
echo $x;
?> 
<br> 

<h3>Addition</h3>
<?php
$x = 20;  
$x += 100;

echo $x;
?> 
<br>  

<h3>Subtraction</h3>
<?php
$x = 50;
$x -= 30;

echo $x;
?>
<br>   

<h3>Multiplication</h3>
<?php
$x = 5;
$x *= 6;

echo $x;
?> 
<br>  

<h3>Division</h3>
<?php
$x = 10;
$x /= 5;

echo $x;
?>
<br>   

<h3>Modulus</h3>
<?php
$x = 15;
$x %= 4;

echo $x;
?>
<br>
</div>   

<div class="col-sm-4" style="background-color:lavender;">
<h2>Comparison Operators</h2><hr>
<h3>Equal</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?> 
<br> 

<h3>Identical</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>
<br> 

<h3> Not Equal</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>
<br>  

<h3> Not Equal</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?> 
<br> 

<h3>Not identical</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>
<br>  

<h3>Greater than</h3>
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>
<br>  

<h3>Less than</h3>
<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>
<br>  

<h3>Greater than or equal to</h3>
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>
<br>  

<h3>Less than or equal to</h3>
<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?> 
<br>

<h3>Spaceship</h3>
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?> 
</div>
 
</div>
</div> 
</body>
</html>
