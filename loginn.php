
<form action ="checkuserr.php"method="post">

    <h3>Log In Here: </h3></br>

    User Name: <input type="text"name="userName"></br>
    password: <input type="password"name="password"></br>

    <?php
    session_start();
    echo ($_SESSION['message']);
session_unset();
    ?>

    </br>

    <input type="submit"value="submit">
    </form>
