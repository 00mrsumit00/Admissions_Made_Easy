&lt;?php
echo "Welcome to database connectivity with PHP &lt;br&lt;";

$servername = "localhost";
$username = "root";
$pass = "";

$conn = mysqli_connect($servername,$username,$pass);
if(!$conn){
    die("Connection was not successful because " . mysqli_connect_error());
}
else{
    echo "Connection was successful &lt;br&gt;";
}
echo "Thank you ";
?&lt;