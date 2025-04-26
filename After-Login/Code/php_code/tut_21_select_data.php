&lt;?php
echo "Welcome to fetching data &lt;br&gt;";
//Connecting to database
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $pass, $dbname);
if(!$conn){
    echo "Unable to connecting database because " . mysqli_connect_error();
} 
else{
    echo "Connection was successful &lt;br&gt;";
}

$sql = "SELECT * FROM stud";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
echo $num . " rows found in the table &lt;br&gt;";
if($num &gt; 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);echo "&lt;br&gt;";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);echo "&lt;br&gt;";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);echo "&lt;br&gt;";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);echo "&lt;br&gt;";

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['Sr_No'] . ". Hello " . $row['First_Name'] . " " . $row['Last_Name'];
        echo "&lt;br&gt;";
    }
}
?&gt;