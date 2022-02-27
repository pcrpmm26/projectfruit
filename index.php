<?php 
     session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     
    <title>FURUTSU SHOP</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	
    <link rel="stylesheet" href="css/style.css">    
    
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/custom.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Basic PHP and MySQL application using PHP Data Object and Bootstarp 4">
    <meta name="author" content="Sok Kimsoeurn">
    <link rel="icon" href="images/favicon.ico">

    <title>CRUD Operations in PHP and MySQL using PDO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/6f636db11c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    

</head>

<body>
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand">
					<img src="images/logo1.png" alt="" width="90" height="90" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php?menu=mainindex">หน้าแรก</a></li>
						<li class="nav-item"><a class="nav-link" href="index.php?menu=menu">สินค้า</a></li>
						
						

						<?php
          						if(isset($_SESSION['uid'] )){
									  if($_SESSION['username']== "admin"){
										
										echo "<li class='nav-item'><a class='nav-link' href='index.php?menu=insertpro'>เพิ่มสินค้า</a></li>";
										echo "<li class='nav-item'><a class='nav-link' href='index.php?menu=categorie'>ประเภทสินค้า</a></li>";
										echo "<li class='nav-item'><a class='nav-link' href='index.php?menu=editproduct'>แก้ไข / ลบสินค้า</a></li>";
										?>
										<li class="nav-item"><a href="" class="nav-link">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a></li>
										<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
										<?php
									  }else{ ?>

										<li class="nav-item"><a class="nav-link" href="index.php?menu=about">เกี่ยวกับ</a></li>
									  	<li class="nav-item"><a class="nav-link" href="index.php?menu=cart">Cart</a></li>
										<li class="nav-item"><a href="" class="nav-link">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a></li>
										<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								<?php	  }
								  }
								  else{
									  ?>
									  <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									  
							<?php	  }?>



						
					
					
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


	<div class="" style="margin:0px;margin-top:0px;">
            <?php
                $menu="";
                $page="";
                if(isset($_GET['menu'])){
					$menu = $_GET['menu'];
					
					}
					switch($menu){
                   
						case "menu": 
							{$page = "menu.php"; break;}
						case "about": 
							{$page = "about.php"; break;}
						case "order": 
							{$page = "order.php"; break;}
						case "stuff": 
							{$page = "stuff.php"; break;}
						case "gallery": 
							{$page = "gallery.php"; break;}
						case "contact": 
							{$page = "contact.php"; break;}
						case "blog": 
							{$page = "blog.php"; break;}
						case "insertpro": 
							{$page = "insertproduct.php"; break;}
						case "categorie": 
							{$page = "categorie.php"; break;}
						case "editproduct": 
							{$page = "editproduct.php"; break;}
						case "deleteproduct": 
							{$page = "deleteproduct.php"; break;}
						case "editproduct2": 
							{$page = "editproduct2.php"; break;}
						case "cart": 
							{$page = "cart.php"; break;}
							
						
						
						default: $page = "mainindex.php";
                }
                
                include($page);
            ?>   
		</div>
		
		<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							089 445 5567
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							wanthanaporn.y@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							ตลาดปฐมมงคล 318 คตกฤช ตำบลพระปฐมเจดีย์ อำเภอเมืองนครปฐม จังหวัดนครปฐม 73000
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>เว็บไซต์นี้จึงจัดทำขึ้นมาเพื่อทุกคนทุกช่วงอายุ เพื่อคนที่สนใจเรื่องผลไม้หรือคนที่รักสุขภาพ จึงรวบรวมทุกอย่างไว้ที่นี่ เพื่อความสะดวกต่อการใช้งาน</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Order online</h3>
					<p><span class="text-color">ร้านเปิดตลอด 24 ชั่วโมง</span></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">755/2 ถ.ราชมรรคา ต.ห้วยจรเข้ อ.เมือง</p>
					<p class="lead"><a href="#">089 445 5567</a></p>
					
				</div>
				<div class="col-lg-3 col-md-6">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/jaeyungfruits/?ref=page_internal"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Copy &copy; 2021 <a href="#">ร้านเจ๊หยุงผลไม้ ตลาดปฐมมงคล</a> Design By : 
					<a href="#">Information Technology Generation 5.</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>

	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>