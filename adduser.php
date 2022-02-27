<?php
include('connect.php')

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $confpassword = $_POST["confpassword"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    if($confpassword == $password){
		  $sqlInsert = "INSERT INTO tbluser ( )VALUES( )";
		  
			$result=$conn->query($sqlInsert);
			if($result){
				//เมื่อ register สำเร็จ
				echo "<script language='javascript'>alert('Register Complete');</script>"; 
                header("Location: index.php");
                
			}
			else{
				echo "Error during insert: ".$conn->error;
			}
	  }
	  else{
		echo "<script language='javascript'>alert('Password is not Match');</script>";
	  }
        
?>