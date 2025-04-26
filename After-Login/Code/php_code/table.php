<?php

$num = 10;
do{
    echo $num . "<br>";
    $num--;
}
while($num>=1);

$no = 1;
do{
    echo $no ."<br>";
    $no++;
}
while($no<=10);

$n = 3;
$i = 1;
do{
    echo $n * $i . "<br>";
    $i++;
}
while($i<=10);


for($i = 1;$i<=5;$i++){
    for($j = 1;$j <= $i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i = 1;$i<=5;$i++){
    for($j = 5;$j>=$i;$j--){
        echo "*";
    }
    echo "<br>";
}

$i = 1;
while($i<=5){
    $j = 1;
    while($j<=$i){
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}

$i = 1;
while($i<=5){
    $j = 5;
    while($j>=$i){
        echo "*";
        $j--;
    }
    echo "<br>";
    $i++;
}

?>