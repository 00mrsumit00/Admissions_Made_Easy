&lt;?php
//Write in files in php.
// When we open a file with write mode the file is creted if it does not exist and if exist it is overwritten.

// $fptr = fopen("myfile2.txt","w");
// fwrite($fptr,"This is the best file in the universe and i am in love with this file.");
// fwrite($fptr,"\nThis is the best file in the universe.");

$fptr = fopen("myfile2.txt","a");
fwrite($fptr,"PHP is the best language on the planet.\n");
fwrite($fptr,"I like to code in PHP.");



?&gt;