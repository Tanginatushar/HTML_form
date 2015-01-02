<?php

session_start();
$_SESSION["userName"] = 'userName';
echo $_SESSION;
echo $_SESSION["userName"];
print_r($_SESSION);
?>