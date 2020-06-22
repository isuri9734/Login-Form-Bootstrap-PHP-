
<?php
session_start();
include "dbcon.php";

//$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {

if (empty($_POST['uname']) || empty($_POST['psw'])) {
echo "Username or Password is invalid";
}
else
{
// Define $username and $password
$uname=$_POST['uname'];
$password=$_POST['psw'];


// To protect MySQL injection for Security purpose
$uname = stripslashes($uname);
$password = stripslashes($password);
$uname = mysqli_real_escape_string($con,$uname);
$password = mysqli_real_escape_string($con,$password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"select * from new_table where password='$password' AND username='$uname'");
$rows = mysqli_num_rows($query);
if($rows == 1) {
    $_SESSION['uname']=$uname;// Initializing Session
    header("location: welcome.php"); // Redirecting To Other Page

$row = mysqli_fetch_assoc($query);
if ($row < 1) {
    $_SESSION['aid']=$aid;
    $_SESSION['name']=$name;// Initializing Session
    header("location: login.php"); // Redirecting To Other Page

} 
}
else {
echo "Username or Password is invalid";
}

mysqli_close($con); // Closing Connection
}
}

?>