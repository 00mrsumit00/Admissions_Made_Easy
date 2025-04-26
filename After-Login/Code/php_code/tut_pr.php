&lt;?php
// Loops

// $i = 0;
// while($i &lt; 5){
//     echo "The value of i is $i &lt;br&gt;";
//     $i++;
// }

// for($i = 0;$i &lt; 5;$i++){
//     echo "The value of i is $i &lt;br&gt;";
// }

// $i = 0;
// do{
//     echo "The value of i is $i &lt;br&gt;";
//     $i++;
// }
// while($i&lt;5);


// Array 

// $arr = ["avi","ravi"];
// var_dump($arr);
// echo "&lt;br&gt;";
// $ar = array("avi","ravi");
// $ar = array(1,2,3,4,5,6,7);
// var_dump($ar);
// $sum = 0;
// foreach($ar as $value){
    // echo "The value of element is $value &lt;br&gt;";
//     $sum += $value;
    
// }
// echo $sum."&lt;br&gt;";

// $assar = array("me"=&gt;"red","he"=&gt;"blue","she"=&gt;"pink");
// var_dump($assar);
// echo "&lt;br&gt;";
//  foreach($assar as $key=&gt;$value){
//     echo "The key is $key and the value is $value &lt;br&gt;";
//  }

// Mysql Connectivity
$servername = "localhost";
$username = "root";
$password = "";
 $conn = mysqli_connect($servername,$username,$password);
 if($conn){
    echo "The connection was successful";
 }
 else{
    echo "The connection was not successful beacuse ".mysqli_connect_error();
 }
echo "&lt;br&gt;";
 $query = "CREATE DATABASE demo";
 $result = mysqli_query($conn,$query);
 if($result){
    echo "The database created successfully";
 }
 else{
    echo "The database was not created successfully beacuse ".mysqli_error($conn);
 }


 
?&gt;