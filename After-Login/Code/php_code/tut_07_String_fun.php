&lt;?php
$name = "Avinash is a good boy";
echo $name;
echo "&lt;br&gt;";

echo "Length of my string is " . strlen($name);
echo "&lt;br&gt;";
echo "No. of words in my string is " . str_word_count($name);
echo "&lt;br&gt;";
echo strrev($name);
echo "&lt;br&gt;";
echo strpos($name,"is");
echo "&lt;br&gt;";
echo str_replace("Avinash","Shree",$name);
echo "&lt;br&gt;";
echo str_repeat($name, 5);
?&gt;