&lt;?php

$fptr = fopen("myfile.txt","r"); //Takes filename and mode as argument and return resource pointer if file exist and FALSE if file not found.

$content = fread($fptr,filesize("myfile.txt")); //Takes resource pointer and size of file as argument and return content of file. 

fclose($fptr);//Take resource pointer and close the file.
echo $content;


?&gt;