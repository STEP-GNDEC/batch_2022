<html>
<body>
<div>
<div class="row">
    <div class="col-sm-4" style="background-color:lightblue;">
<h1 style="font-family:Lucida Handwriting;text-shadow:2px 2px 2px black;font-size:300%;">Arithmetic</h1>
<hr>
<h2>1.Addition</h2>
<?php
$x = 10;  
$y = 5;

echo $x + $y;
?>  
<br>
<h2>2.Subtraction</h2>
<?php
$x = 10;  
$y = 5;

echo $x - $y;
?>  
<br>
<h2>3.Multiplication</h2>
<?php
$x = 10;  
$y = 5;

echo $x * $y;
?>
<br>
<h2>4.Division</h2>
<?php
$x = 10;  
$y = 5;

echo $x / $y;
?>    
<br>
<h2>5.	Modulus</h2>
<?php
$x = 10;  
$y = 5;

echo $x % $y;
?>  
<br>
<h2>6.Exponentiation</h2>
<?php
$x = 10;  
$y = 5;

echo $x ** $y;
?> 
</div> 
    <div class="col-sm-4"style="background-color:lightpink;">
<h1 style="font-family:Lucida Handwriting;text-shadow:2px 2px 2px black;font-size:300%;">Assignment</h1>
<hr>
<h2>1.x = y</h2>
<?php
$x = 10;  
echo $x;
?>  
<br>
<h2>2.Addition</h2>
<?php
$x = 20;  
$x += 100;

echo $x;
?>  
<br>
<h2>3.Subtraction</h2>

<?php
$x = 20;  
$x -= 100;

echo $x;
?>  
<br>
<h2>4.Multiplication</h2>
<?php
$x = 20;  
$x *= 100;

echo $x;
?>  
<br>
<h2>5.Division</h2>
<?php
$x = 20;  
$x /= 100;

echo $x;
?>  
<br>
<h2>6.Modulus</h2>
<?php
$x = 20;  
$x %= 100;

echo $x;
?>  
<br>

</div>
    <div class="col-sm-4" style="background-color:lightblue;">
<h1 style="font-family:Lucida Handwriting;text-shadow:2px 2px 2px black;font-size:300%;">Comparison</h1>
<hr>
<h2>1.Equal</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  
<br>
<h2>2.Identical</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns true because values are equal
?>  
<br>
<h2>3.Not Equal</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  
<br>
<h2>4.Not Equal</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns true because values are equal
?>  
<br>
<h2>5.Not identical</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because values are equal
?>  
<br>
<h2>6.Greater than</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x > $y); // returns true because values are equal
?>  
<br>
<h2>7.Less than</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x < $y); // returns true because values are equal
?>  
<br>
<h2>8.Greater than or equal to</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x >= $y); // returns true because values are equal
?>  
<br>
<h2>9.Less than or equal to</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x <= $y); // returns true because values are equal
?>  
<br>
<h2>10.Spaceship</h2>
<?php
$x = 100;  
$y = "100";

var_dump($x <=> $y); // returns true because values are equal
?>  
<br>
</div>
</div>
</body>
</html>
