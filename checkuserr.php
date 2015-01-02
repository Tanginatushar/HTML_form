<?php

session_start();
$userName=$_POST['userName'];
$password=$_POST['password'];

//print_r($_SERVER['REQUEST_METHOD'=='GET']);
if($_SERVER["REQUEST_METHOD"]=="GET"){
header("location:loginn.php");}


if (isset($userName) && empty ($userName)) {
    $_SESSION['message']="please check your user name";
    header("location:loginn.php");
}

if (isset($password) && empty ($password)){
    $_SESSION['message']="please check your user password";
    header("location:loginn.php");
}

mysqli_connect("localhost",
 "root",
  "lict@2",
  "registration");
$query = "select * from `registrationForm` WHERE userName=$userName AND password=$password";
$row= mysql_query($query);

if ($row){
    $_SESSION["userName"] = "$userName";
    $_SESSION["password"] = "$password";
    header("location:dashboard.php");

}else{
    header("location:loginn.php");

};
//if (($userName == $row['userName']) && ($password == $row['password'])) {

   //$_SESSION["userName"] = "$userName";
   //$_SESSION["password"] = "$password";

   // echo "hello";
//}
//else {
   // echo "User Name and password error";
//}
//}

//session_start();
//$_SESSION['loggedIn']=true;

//header("location:dashboard.php");

?>