&lt;?php
echo "Welcome to create database through PHP &lt;br&gt;";

$servername = "localhost";
$username ="root";
$pass = "";
$conn = mysqli_connect($servername, $username, $pass);
if(!$conn){
    die("Connection was not successful because " . mysqli_connect_error());
}
else{
    echo "Connection was successful &lt;br&gt;";
}

$query = "CREATE DATABASE Emp4";
$result = mysqli_query($conn, $query);

if($result){
    echo "The db was created successfully";
}
else{
    echo "The db was not created successfully beacuse " . mysqli_error($conn);
}





?&gt;