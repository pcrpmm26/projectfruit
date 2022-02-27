<?php 
    session_start();
    include("connect.php");
    echo ini_get("upload_max_filesize")."<br>";
        $allowedType = ["jpg","jpeg","gif","png","tif","tiff","webp"];
        $fileType = explode("/",$_FILES["filepic"]["type"]); //สุดท้ายได้นามสกุล
        $size = $_FILES["filepic"]["size"]/1024/1024; 
        //image/png filetype=["image","png"]
        if(!in_array($fileType[1],$allowedType)){
            //เมื่ออัปโหลดไฟล์ที่ไม่ตรงกับ type ใน aloowType
            echo "Non-Image file is not allowed. <br>";
        }
        else if($size>1.00){
            //ถ้าอัปโหลดแล้วขนาดไฟล์เกินขีดจำกัดสูงสุด ให้แอคโค่
            echo "File size exceeds the maximum threshold. <br>";
        }
        else{ //ถ้าไม่ตรงกับเงื่อนไขอะไรเลย
        $filename = $_FILES['filepic']['name']; 
        move_uploaded_file($_FILES["filepic"]["tmp_name"],"img/product/".$_FILES["filepic"]["name"]);
    
        $product_name = $_POST['name'];
        $product_description = $_POST['description'];
        $product_price = $_POST['price'];
        $qty = $_POST['qty'];
        $catid = $_POST['catID'];
        $sqlInsert = "INSERT INTO products (product_name,product_description,product_pic,product_price,qty,catid) VALUES ('$product_name','$product_description','$filename',$product_price,$qty,'$catid')";
        $result=mysqli_query($conn,$sqlInsert);
        //ไม่ต้องมี
        if($result){
        echo "<script language='javascript'>alert('Insert Product Complete');</script>"; 
        header("Location: index.php?menu=insertpro");
        }
        else{
            echo "Error during insert:";
        }
    }

    


    
?>