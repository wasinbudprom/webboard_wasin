<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<header style="text-align: center;">
    <h1>Wasin Budprom</h1>
    <hr>
</header>
<body style="text-align: center;">
    <?php
    $login = $_POST["login"];
    $password = $_POST["password"]; 
        if($login == "admin" && $password =="ad1234"){
            echo "ยินดีตอนรับ ADMIN";
        }elseif($login == "member" && $password =="mem1234"){
            echo "ยินดีตอนรับ MEMBER";
        }else echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    ?><br>
    <a href="index.php">กลับไปยังหน้าหลัก</a>

</body>
</html>