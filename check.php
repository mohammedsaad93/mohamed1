
<?php
require 'connct.php';
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
$sql="SELECT username, password FROM login WHERE username='$username' and password='$password'";
$result = mysqli_query($con,$sql);
//$count=mysql_num_rows($result);?
//if($count=1)?
if (!$row=mysqli_fetch_assoc($result))
{
    header('location:login.php');
}
else {
    $_SESSION[login]="good";
    header("location:first.php");
}
mysqli_close($con);
?>

