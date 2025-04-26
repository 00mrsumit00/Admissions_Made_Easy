&lt;?php
//includes a file and if the file doesn't exist then gives warning and proceed.
include 'mysql_connection.php';
echo "Hello world! &lt;br&gt;";
echo $servername;
//includes a file and if the file doesn't exist then gives error and doesn't proceed.
require 'mysql_connection.php';
echo "Hello world! &lt;br&gt;";
?&gt;