<?php 
    session_start();
    include("connect.php");
    // echo ini_get("upload_max_filesize")."<br>";
    //     $allowedType=["jpg","jpeg","gif","png","tif","tiff","webp"];
    //     $fileType=explode("/",$_FILES["filepic"]["type"]);
    //     $size=$_FILES["filepic"]["size"]/1024/1024; 
    //     //image/png filetype=["image","png"]
    //     if(!in_array($fileType[1],$allowedType)){
    //         //เมื่ออัปโหลดไฟล์ที่ไม่ตรงกับ type ใน aloowType
    //         echo "Non-Image file is not allowed. <br>";
    //     }
    //     else if($size>1.00){
    //         //ถ้าอัปโหลดแล้วขนาดไฟล์เกินขีดจำกัดสูงสุด ให้แอคโค่
    //         echo "File size exceeds the maximum threshold. <br>";
    //     }
    //     else{ //ถ้าไม่ตรงกับเงื่อนไขอะไรเลย
    //     $filename = $_FILES['filepic']['name']; 
    //     move_uploaded_file($_FILES["filepic"]["tmp_name"],"img/product/".$_FILES["filepic"]["name"]);
    
        $catid = $_POST['catid'];
        $catName = $_POST['catName'];
        
        $sqlInsert = "INSERT INTO categories (catid,catName) VALUES ('$catid','$catName')";
        $result = mysqli_query($conn,$sqlInsert);
        //ไม่ต้องมี
        if($result){
        echo "<script alert('Insert Product Complete');</script>"; 
        header("Location: index.php?menu=categorie");
        }
        else{
            echo "Error during insert: ";
        }
    


    
?>