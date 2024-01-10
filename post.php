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
    $id = $_GET['id']; 
    echo "ต้องการดูกระทู้หมายเลข $id <br>";
    if($id % 2 == 0){
        echo "เป็นกระทู้หมายเลขคู่";
    }else{
        echo "เป็นกระทู้หมายเลขคี่";
    }
    ?>
    <form action="verify.php" method="post">
        <table style="border: solid 2px black; width: auto;" align="center">
            <tr style="background-color: #6cd2fe;"><td colspan="2">แสดงความเห็น</td></tr>
            
            <tr><td> <textarea type="text" name="text" required> </textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
    </form>
    <a href="index.php">กลับไปหน้าหลัก</a>
</body>
</html>