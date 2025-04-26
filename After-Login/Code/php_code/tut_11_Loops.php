&lt;?php
// While Loop in PHP
echo "While loops in PHP &lt;br&gt;";
$i = 0;
while($i&lt;5){
    echo "$i &lt;br&gt;";
    $i++;
}
echo "------------------------------- &lt;br&gt;";
// For Loop in PHP
echo "For Loop in PHP &lt;br&gt;";
for($a = 1;$a &lt;6; $a++){
    echo "The value of A = $a &lt;br&gt;";
}
echo "------------------------------- &lt;br&gt;";

// do-While Loop in PHP
echo "do-While loop in PHP &lt;br&gt;";
$x = 1;
do{
    echo "X = $x &lt;br&gt;";
    $x++;
}
while($x&lt;6);
echo "------------------------------- &lt;br&gt;";

// For-each loop in PHP
echo "For-each loop in PHP &lt;br&gt;";
$arr = array("Fruits", "Colgate", "Electronics", "Mobile");

// for($i = 0;$i&lt;count($arr);$i++){
//     echo "$arr[$i] &lt;br&gt;"; 
// }

foreach($arr as $value){
    echo "$value &lt;br&gt;";
}


?&gt;