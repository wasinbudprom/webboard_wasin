<?php
session_start();
if (isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    if ($login == "admin" && $password == "ad1234") {
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        header("Location: index.php");
        die();
    } elseif ($login == "member" && $password == "mem1234") {
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        header("Location: index.php");
        die();
    } else
        $_SESSION["error"] = "error";
        header("Location: login.php");
        
        die();
    ?>

</body>

</html>