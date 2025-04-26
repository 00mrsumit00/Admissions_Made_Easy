&lt;?php
// Operators in PHP

// 1. Arithmetic operators
$a = 10;
$b = 5;
echo "For a + b,result is : " . $a + $b;
echo "&lt;br&gt;";
echo "For a - b,result is : " . $a - $b;
echo "&lt;br&gt;";
echo "For a * b,result is : " . $a * $b;
echo "&lt;br&gt;";
echo "For a / b,result is : " . $a / $b;
echo "&lt;br&gt;";
echo "For a % b,result is : " . $a % $b;
echo "&lt;br&gt;";
echo "For a ** b,resultb is:  " . $a ** $b;
echo "&lt;br&gt;";

// 2. Assignment operator
// $x = $a;
// $a += 20;
$sum = $a + $b;
$sum += $sum;
echo $sum;
echo "&lt;br&gt;";
echo "The value of a is : " . $a;
echo "&lt;br&gt;";
$a *= 6;
echo "For a * 6 , the result is : $a &lt;br&gt;";

// 3. Comparision Operator 
echo var_dump($a == $b);
echo "&lt;br&gt;";
echo var_dump($a&gt;$b);
echo "&lt;br&gt;";

// 4.Logical Operator
$x = true;
$y = false;
echo var_dump($x and $y);
echo "&lt;br&gt;";
echo var_dump($x && $y);
echo "&lt;br&gt;";
echo var_dump($x or $y);
echo "&lt;br&gt;";
echo var_dump($x || $y);
echo "&lt;br&gt;";
?&gt;