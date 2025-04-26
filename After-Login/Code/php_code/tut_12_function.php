&lt;?php
echo "Welcome to PHP functions &lt;br&gt;";

function total($arr){
    $sum = 0;
    foreach($arr as $key){
        $sum += $key;
    }
    return $sum;
}

function average($avgArr){
    $sum = 0;
    foreach($avgArr as $key){
        $sum += $key; 
    }
    return $sum/count($avgArr);
}

$avinash = [78,89,90,91,100];
$aviTot = total($avinash);
$aviAvg = average($avinash);
echo "Total marks of Avinash are $aviTot &lt;br&gt;";
echo "Average marks of Avinash are $aviAvg &lt;br&gt;";

// $shree = array(78,56,89,34,32);
$shree = [78,56,89,34,32];
$shreeTot = total($shree);
$shreeAvg = average($shree);
echo "Total marks of Shree are $shreeTot &lt;br&gt;";
echo "Average marks of Shree are $shreeAvg &lt;br&gt;";


?&gt;
