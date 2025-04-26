&lt;?php

$fptr = fopen("myfile.txt","r");
// echo fgets($fptr);
// while($a = fgets($fptr)){
//     echo $a;
// }

// echo fgetc($fptr);
while($a = fgetc($fptr)){
    echo $a;
    // if($a == "."){
    //     break;
    // }
}

fclose($fptr);

?&gt;