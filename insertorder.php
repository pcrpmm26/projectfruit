<?php
    include("connect.php");
    $num=1;
    // if($num>0){
    //     $num += $num
    // }else {
    //     $num=1
    // }
    
    // $cust_id = $_GET['uid'];
    // if($proid = $_GET['id'] == $proid = $_GET['id']){
    //     $num += $num ;
    // }
    $cust_id = $_GET['uid'];
    $proid = $_GET['id'];
    $proname = $_GET['proname'];

    $order_detail_quantity = $num;
    $order_detail_price = $_GET['proprice'];
   // $order_detail_price = $num*$order_detail_quantity;
    $order_detail_price = $num*$order_detail_price ;
   // $datetime = date("Y-m-d");
    $status_process_id = 1; // = 1 NotPayment
   
    $pic=$_GET['pic'];
    $sql ="INSERT INTO orderdetail(cust_id,order_detail_quantity,order_detail_price,product_id,pic,status_process_id)
            VALUES('$cust_id','$num','$order_detail_price','$proid','$pic','$status_process_id')";
   
    $result= mysqli_query($conn,$sql);
    
    if($result){
        //เมื่อ register สำเร็จ
        echo "<script language='javascript'>alert('เพิ่มลงตะกร้า');</script>"; 
        header("Location: index.php?menu=''");
    }
    else{
        echo "Error during insert: ";
    }

?>

