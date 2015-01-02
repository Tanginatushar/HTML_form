<?php
$userName=$_POST['userName'];
$password=$_POST['password'];
$fullName=$_POST['fullName'];
$email=$_POST['email'];
$created = $_POST['created'];
$modified = $_POST['modified'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "registration");
$query = "INSERT INTO `registration`.`registrationForm` (
`fullName` ,
`email` ,
`userName` ,
`password` ,
`created` ,
`modified`
)
VALUES (
'$fullName', '$email', '$userName', '$password', NOW( ) , NOW( )
)";
mysqli_query($link, $query);
//print_r($query);

?>
<html>
<head >
    <title>Log In</title>
</head>
<body>
<form action ="checkuser.php"method="post">
    <h3>Log In Here: </h3></br>

    User Name: <input type="text"name="userName"></br>
    password: <input type="text"name="password"></br>

    </br>
    <input type="submit"value="log in">
</form>

</body>
</html>
<ul>
    <a href="registration.php">register now</a>
</ul>