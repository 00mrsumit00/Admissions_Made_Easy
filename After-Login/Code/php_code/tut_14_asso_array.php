&lt;?php

echo "Welcome to PHP &lt;br&gt;";

// Numeric Array or Indexed Array:
// $colour = array("red","green","blue");
// foreach($colour as $key){
//     echo "The favourite colour are : $key &lt;br&gt;";
// }

// Associative Array
$favCol = array('avinash' =&gt; 'red','shree' =&gt; 'blue', 'om' =&gt; 'green');
echo "Favourite color of avinash is $favCol[avinash] &lt;br&gt;";

foreach($favCol as $key =&gt; $value){
    echo "Favourite colour of $key is $value &lt;br&gt;";
}

?&gt;