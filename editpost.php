<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<header>
    <h1 style="text-align: center; margin-top: 20px;">Wasin Budprom LGBTQ++</h1><hr>
</header>
<body>

    <div class="container">
        <?php @include('nav.php') ?>
            <?php
            $sql= "SELECT user_id FROM post WHERE post.id=$_GET[id]";
            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                foreach($conn->query($sql) as $row){
                    if(!isset($_SESSION['id']) || $_SESSION['user_id']!=$row['user_id'] ){
                        header("location:index.php");
                        die();
                    }
                }

                
                      
            ?>
            
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-info">
                    <div class="card-header bg-info text-white">ตั้งกระทู้ใหม่</div>
                    <div class="card-body">
                        
                        <form action="editpost_save.php" method="post">
                            <div class="row">
                                <label for="" class="col-lg-3 col-form-label">หมวดหมู่:</label>
                                <div class="col-lg-9">
                                    <select name="category" class="form-select" id="">
                                        <?php 
                                            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                            $sql="SELECT post.id , post.cat_id , category.name , category.id FROM post INNER JOIN category ON(post.cat_id=category.id) WHERE post.id=$_GET[id]";
                                            
                                            foreach($conn->query($sql) as $row){
                                                echo "<option value='$row[3]'>$row[2]</option>";
                                            }
                                            $sql="SELECT category.id,category.name FROM category INNER JOIN post ON(post.id=$_GET[id]) WHERE NOT category.id=post.cat_id ";
                                            foreach($conn->query($sql) as $row){
                                                echo "<option value='$row[0]'>$row[1]</option>";
                                            }
                                            
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-lg-3 col-form-label">หัวข้อ:</label>
                                <div class="col-lg-9">
                                    <?php
                                    $sql="SELECT * FROM post  WHERE post.id=$_GET[id]";
                                    foreach($conn->query($sql) as $row){
                                    echo "<input type='text' name='topic' id='' class='form-control' value='$row[title]' required>";

                                    echo "<input type='text' name='id' style='display:none' value=$_GET[id]>";   

                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-lg-3 col-form-label">เนื้อหา:</label>
                                <div class="col-lg-9">
                                    <?php
                                    foreach($conn->query($sql) as $row){
                                    echo "<textarea name='comment' id='' rows='8' class='form-control'>$row[content]</textarea>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-info btn-sm text-white me-2">
                                        <i class="bi bi-caret-right-square"></i> บันทึกข้อความ</button>
                                    <button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-x-square"> ยกเลิก</i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
</body>
</html>