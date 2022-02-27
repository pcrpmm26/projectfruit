<?php
    session_start();
    include("connect.php");
    
    $id = $_GET['id'];
    $sql ="DELETE FROM products WHERE id=$id";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Error: ";
    }
    else{
        header("Location: index.php?menu=editproduct");
    }
?>