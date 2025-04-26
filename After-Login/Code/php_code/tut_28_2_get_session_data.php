&lt;?php
session_start();
if(isset($_SESSION['username'])){
    echo "My username is " . $_SESSION['username'];
    echo "&lt;br&gt; My password is " . $_SESSION['password'];
}
else{
    echo "Please log in to continue";
}
?&lt;