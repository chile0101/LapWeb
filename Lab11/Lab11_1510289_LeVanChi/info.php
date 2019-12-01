<?php 
    session_start();
    if(empty($_SESSION["UserName"]))
    {
        header("Location: login.php");
        exit();
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>Hello</h1>
    <a href="logout.php">Logout</a>
</body>
</html>