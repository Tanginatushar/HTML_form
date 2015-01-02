<?php
$username=$_GET['userName'];
$password=$_GET['password'];
$link = mysqli_connect("localhost",
    "root",
    "rts",
    "registration");
$query = "select `userName` from registrationForm WHERE username=$userName";
$result = mysqli_query($link, $query);
$rowuserName = mysqli_fetch_assoc($result);

$query = "select `password` from registrationForm WHERE password=$password";
$result = mysqli_query($link, $query);
$rowpassword = mysqli_fetch_assoc($result);

if( isset($userName)&& !empty ($userName)){
    $userName =$_POST['userName'];
}
if(isset($password)&& !empty ($password)){
    $password=$_POST['password'];
}
if(($userName==$rowuserName) && ($password==$rowpassword)){
session_start();
$_SESSION["userName"] = " ";
$_SESSION["password"] = " ";
    $_SESSION["fullName"] = " ";
    $_SESSION["email"] = " ";
echo "Hello";
}
else {
echo "User Name and password error";
}
?>

<ul>
    <a href="registration.php">register again</a>
</ul>