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
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
                    <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
                    <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
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
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr class=''><td class='d-flex justify-content-between'><a href=post.php?id=$i class=text-decoration-none>กระทู้ที่ $i</a>";
            if (isset($_SESSION['id']) && $_SESSION['role'] == "a") {
                echo "&nbsp;&nbsp;<a href=delete.php?id=$i class='btn btn-danger btn-sm'><i class='bi bi-trash'></i> ลบ </a>";
                echo "</td></tr>";
            }
        }
        ?>
    </table>
</body>

</html>