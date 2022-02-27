<?php 
    session_start();
    include("connect.php");
    $id = $_POST['ppid'] ;  //send value from editproduct hidden 
    $product_name = $_POST['name'];
    $product_description = $_POST['description'];
    $product_price = $_POST['price'];
    $qty = $_POST['qty'];
    $catid = $_POST['catid'];
    
    $product_pic = $_POST['ProductPic'];
    if($_FILES['filepic']['name']!=''){
        //ถ้าอัปโหลดไฟล์มาให้เก็บชื่อไฟล์เอาไว้อัปเดตด้วย
        $picture = $_FILES['filepic']['name'];
        //move file
        move_uploaded_file($_FILES["filepic"]["tmp_name"],"img/product/".$_FILES["filepic"]["name"]);
    }
    $sql = "UPDATE products SET product_name='$product_name',product_description ='$product_description ',product_price ='$product_price',qty='$qty',catid='$catid',product_pic ='$product_pic' WHERE id =$id";

    //echo $sql;

    $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "Error : ";
           
        }
        else{
            header("Location: index.php?menu=editproduct");
        }
    
?>