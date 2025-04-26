<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 if($conn){
    echo "The connection was successful";
 }
 else{
    echo "The connection was not successful beacuse ".mysqli_connect_error();
 }
$value1 = $_POST["name"];
$value2 = $_POST["email"];
$query = "INSERT INTO stud_details VALUES ('$value1', '$value2');";

echo "<br>";
$result = mysqli_query($conn,$query);
if($result){
    echo "The data inserted successfully";
}
else{
    echo "The data was not inserted successfully beacuse ". mysqli_error($conn);
}
?>
