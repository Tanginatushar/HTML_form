<?php


//print_r($_SERVER['REQUEST_METHOD'=='GET']);
if($_SERVER["REQUEST_METHOD"]=="GET"){
header("location:loginn.php");}
//session_start();
//$_SESSION['loggedIn']=true;

//header("location:dashboard.php");

?>