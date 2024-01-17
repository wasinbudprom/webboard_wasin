<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <h1 style="text-align: center; margin-top: 20px;">Wasin Budprom LGBTQ++</h1><hr>
</header>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['id'])){
            header("location:index.php");
            die(); 
        }
            echo "ชื่อผู้ใช้ $_SESSION[username]";
    ?>
    <div>
        <form action="">
            <table>
                <tr><td>หมวดหมู่ :</td>

                    <td><select>
                        <option value="general">เรื่องทั่วไป</option>
                        <option value="study">เรื่องเรียน</option>
                    </select></td>

                </tr>
                <tr><td>หัวข้อ :</td>
                    <td><input type="text" id="headline" name="headline"></td>
                </tr>
                <tr>
                    <td>เนื้อหา :</td>
                    <td><textarea id="story" name="story" rows="5" cols="33"> </textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึก"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>