&lt;?php

echo "Multi-Dimwensinal array in PHP &lt;br&gt;";

$multiDim = array(array(2,1,3,6),
                  array(1,2,3,1),
                  array(4,5,0,1));

echo $multiDim[0][0];
echo "&lt;br&gt;";
echo $multiDim[0][1];
echo "&lt;br&gt;";

// Printing of multi-dimensional array with nested for loop:
echo "Array elements are : &lt;br&gt;";
for($i = 0; $i &lt; count($multiDim); $i++){
    for($j = 0; $j &lt; count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j] . "  ";
    } 
    echo "&lt;br&gt;";
}
                