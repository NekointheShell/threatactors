<?php
    $username = 'admin';
    $password = 'admin';

    if(
        $_SERVER['REQUEST_METHOD'] === 'POST' &&
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        $_POST['username'] == $username &&
        $_POST['password] == $password
    ) {
        echo "<meta http-equiv='refresh' content='0;url=/?username=" . $_POST['username'] . "&password=" . $_POST['password'] . "'>";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>ThreatActors Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action='/login.php' method='POST'>
            <input type='text' name='username' placeholder='Username' required>
            <input type='password' name='password' placeholder='Password' required>
            <input type='submit' value='Login'>
        </form>
    <body>
</html>
