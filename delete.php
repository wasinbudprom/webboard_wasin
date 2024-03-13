<?php
    session_start();
    if(isset($_SESSION['id']) && $_SESSION['role']=="a"){
        $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $id=$_GET['id'];
        $sql="DELETE FROM post WHERE id=$id";
        $conn->exec($sql);
        $sql="DELETE FROM comment WHERE post_id=$id";
        $conn->exec($sql);
        $conn=null;
        header("location:index.php");
        die();
    }else{
        header("location:index.php");
        die();
    }
    
?>