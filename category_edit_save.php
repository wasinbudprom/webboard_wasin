<?php 
    session_start();
    
    $edit_cate=$_POST['edit_category'];
    $id=$_POST['id'];
    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    

    $sql="UPDATE `category` SET `name` = '$edit_cate' WHERE `category`.`id` = $id;";
    $result = $conn->exec($sql);
    if($result){
        $_SESSION['add_cat']="success";
    }else{
        $_SESSION['add_cat']="error";
    }

    header("location:category.php");
    $conn=null;
    
?>