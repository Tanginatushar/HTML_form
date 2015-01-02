

<?php
session_start();

if (array_key_exists('loggedIn',$_SESSION))
echo "you are in Dashboard";
?>
<ul>
    <a href="logout.php">log out</a>
</ul>
