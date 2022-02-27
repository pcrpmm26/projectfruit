<?php

    include("connect.php");
    $totalAll= $_POST['totle'];
    $userid= $_POST['custid'];
    $img = $_FILES['filepic']['name'];
    if($img!=''){
        $sql = "INSERT INTO orders (price_totle ,order_date ,cust_id ,status_id) VALUES('$totalAll',NOW(),'$userid','1')";
    }else{
        $sql = "INSERT INTO orders (price_totle ,order_date ,cust_id ,status_id) VALUES('$totalAll',NOW(),'$userid','0')";
    }
    $result = $conn->query($sql);
    if($result){
        //เมื่อ register สำเร็จ
        $sql ="DELETE FROM orderdetail WHERE cust_id>0";
        $result= $conn->query($sql);
        echo "<script language='javascript'>alert('เพิ่มลงตะกร้า');</script>"; 
        header("Location: index.php");
    }
    else{
        echo "Error during insert: ".$conn->error;
    }

?>

