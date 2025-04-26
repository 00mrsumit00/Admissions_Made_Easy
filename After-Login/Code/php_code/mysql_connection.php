<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
if($conn){
    echo "Connection was successful<br>";
}
else{
   echo "Cojnnection was unsuccessful! beacuse ".mysqli_connect_error()."<br>";
}

?>