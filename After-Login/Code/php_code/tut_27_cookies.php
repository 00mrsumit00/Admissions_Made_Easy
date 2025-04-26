&lt;?php
echo "Welcome to the world of cookies &lt;br&gt;";

// Do not store sensitive information in the cookies 
// setcookie takes four arguments
setcookie("category","lifestyle",time()+86400,"/");
echo "Cookies are set now &lt;br&gt;";


// This is how you get cookie
$cat = $_COOKIE['category'];
echo $cat;

?&gt;