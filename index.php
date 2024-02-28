<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>

<header>
    <h1 style="color: pink;">Wasin Budprom</h1>

</header>

<body class="container">
    <?php @include('nav.php') ?>
    <div class="my-2 d-flex justify-content-between">
        <div>
            <lable>หมวดหมู่</lable>
            <span class="dropdown">
                <button class="btn btn-white-50 btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    --ทั้งหมด--
                </button>
                <ul class="dropdown-menu" aria-labelledby="Button2">
                    <li><a href="" class="dropdown-item">ทั้งหมด</a></li>
                    <?php
                         $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                         $sql="SELECT * FROM category";
                         foreach($conn->query($sql)as $row){
                            echo "<li><a class=dropdawn-item href=#>$row[name]</a></li>";
                         }
                         $conn=null;
                    ?>
                </ul>
            </span>
        </div>
        <div>
            <?php if (isset($_SESSION['id'])) { ?>
                <a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> สร้างกระทู้ใหม่</a>
            <?php } ?>
        </div>
    </div>
    <table class="table table-striped mt-4 ">
        <?php
        $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $sql="SELECT t3.name,t1.title,t1.id,t2.login,t1.post_date FROM post as t1
        INNER JOIN user as t2 ON (t1.user_id=t2.id)
        INNER JOIN category as t3 ON (t1.cat_id=t3.id) ORDER BY t1.post_date DESC";
        $result=$conn->query($sql);
        while($row=$result->fetch()){
            echo "<tr><td>[ $row[0] ] <a href=post.php?id=$row[2]
            style=text-decoration:none>$row[1]</a><br>$row[3] - $row[4]</td></tr>";
        }
        $conn=null;
        ?>
    </table>
</body>

</html>