&lt;?php
$a = 52;
$b = 13;
$choice = 4;
switch($choice){
    case 1:echo "Addition = " . $a + $b;
    break;
    case 2:echo "Subtraction = " . $a - $b;
    break;
    case 3:echo "Multiplication = " . $a * $b;
    break;
    case 4:echo "Division = " . $a / $b;
    break;
    default: echo "Enter a valid choicee";
}

?&gt;