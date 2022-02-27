<?php
    session_start();
    include("connect.php");
    
    $pid = $_GET['id'];
    $sql ="DELETE FROM orderdetail WHERE id=$pid";

    $result=$conn->query($sql);
    if(!$result){
        echo "Error: ".$conn->error;
    }
    else{

        header("Location: index.php?menu=cart");
    }
?>