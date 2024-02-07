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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <header>
        <h1 style="color: pink;">Wasin Budprom</h1>
        
    </header>
<body class="container">
    <nav class="navbar">
        <div class="rounded-3 container fs-5  p-3" style="background-color:#DCDCDC; ">      
            <div class="">
                <i class="bi bi-house-door-fill"></i>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
                    <div class="navbar-nav">
                    
                        <?php 
                            if(!isset($_SESSION['id'])){
                                echo "<a href=login.php style='float: right' class='navbar-link'><i class='navbar-item bi bi-pencil-square'></i>เข้าสู่ระบบ</a>";
                           ?>

                           <?php }else{ ?>
                            <li class="nav-item dropdown">
                                    <a class="dropdown-toggle btn btn-outline-secondary" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">
                                        <?php echo($_SESSION['username']) ?>      
                                    </a>
                                <ul class="dropdown-menu  position-absolute">
                                    <li ><a class="dropdown-item "  href="logout.php">Log out</a></li>
                                </ul>
                            </li>
                            
                            <?php } ?>
                         </div>   
        </div>
            <form action="" class="input-group mt-2">
                <div class="form-label " >หมวดหมู่ :</div>
                <select name="" id="" class=" ">
                    <option value="all">--ทั้งหมด--</option>
                    <option value="general">เรื่องทั่วไป</option>
                    <option value="study">เรื่องเรียน</option>
                </select>            
            </form>
    </nav>
    
    <ul>
        <?php 
                for($i=1;$i <= 10;$i++){
                    echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";
                    if(isset($_SESSION['id']) && $_SESSION['role']=="a"){
                        echo "&nbsp;&nbsp;<a href=delete.php?id=$i> ลบ </a>";
                        echo "</li>";
                    }
                }
        ?>
        
    </ul>
</body>
</html>