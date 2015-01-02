<?php
$username=$_POST['userName'];
$password=$_POST['password'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "registration");
$query = "select `userName` from registrationForm WHERE username=$userName";
$result = mysqli_query($link, $query);
$rowuserName = mysqli_fetch_assoc($result);

print_r($rowuserName);

$query = "select `password` from registrationForm WHERE password=$password";
$result = mysqli_query($link, $query);
$rowpassword = mysqli_fetch_assoc($result);


{if (isset($userName) && !empty ($userName)) {
        $userName = $_POST['userName'];
    }else {echo "error";}

    if (isset($password) && !empty ($password)) {
        $password = $_POST['password'];
    } else {echo "Error";}
    if (($userName == $rowuserName) && ($password == $rowpassword)) {
        session_start();
        $_SESSION["userName"] = "$userName";
        $_SESSION["password"] = "$password";

        echo "hello";
    }
    else {
        echo "User Name and password error";
    }
}
?>

