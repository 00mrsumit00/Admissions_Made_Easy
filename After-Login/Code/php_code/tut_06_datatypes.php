&lt;?php
// Datatypes in PHP
// 1. String
$name = "Avinash";
echo "My name is $name &lt;br&gt;";

// 2. Integer
$salary = 98000;
echo "My salary is $salary &lt;br&gt;";

// 3.Float
$cgpa = 9.12;
echo "My CGPA is $cgpa &lt;br&gt;";

// 4. Boolean
$a = true;
$b = false;
echo var_dump($a);
echo "&lt;br&gt;";
echo var_dump($b);
echo "&lt;br&gt;";

// 5.Array
$friends = array("Vishal","Omkar","Mayur","Aaditya");
echo var_dump($friends);
echo "&lt;br&gt;";
echo $friends[0];
echo "&lt;br&gt;";
echo $friends[1];
echo "&lt;br&gt;";
echo $friends[2];
echo "&lt;br&gt;";
echo $friends[3];
echo "&lt;br&gt;";

// 6. NULL
$bonus = null;
echo var_dump($bonus);
?&gt;