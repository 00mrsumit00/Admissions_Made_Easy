&lt;?php

echo "Welcome to scope of global and local variables &lt;br&lt;";
$a = 78;
$b = 59;
echo "The value of a is $a and b is $b &lt;br&lt;";

function printValue(){
    global $a,$b; //global keyword is used to access global variables insude a function.
    $a = 7;  //Changes made with global variable are permanant
    $b = 9;
    echo "The value of a is $a and b is $b &lt;br&lt;";
}
printValue();

// All the global variables are stored in an array =&lt; $GLOBALS .
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]) . "&lt;br&lt;";
echo $GLOBALS["a"];

?&lt;