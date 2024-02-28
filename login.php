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
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<header>
    <h1>Wasin Budprom</h1>
    <hr>
</header>

<body>

    <div class="container-lg">
        <?php @include('nav.php') ?>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                <?php
                if (isset($_SESSION['error'])) { 
                    
                echo "<div class='alert alert-danger    '>ชื่อหรัสผ่านผิด</div>";
                unset($_SESSION['error']);
                 }
                ?>
                <div class="card text-dark bg-light ">
                    <div class="card-header">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-label">Login</label>
                                <input type="text" class="form-control" name="login" id="login" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group text-center mt-3">
                                <input type="submit" value="Login" class="btn btn-success btn-sm">
                                <input type="reset" value="Reset" class="btn btn-danger btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
                <p>ถ้ายังไม่ได้<a href="register.php"> สมัครสมาชิก</a></p>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        </div>

    </div>
</body>

</html>