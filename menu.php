<?php 

	session_start();
	
    include("connect.php");
    $sql ="SELECT * FROM products WHERE id";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "Error:";
    }
    else{
        $row = mysqli_num_rows($result);
    }
?>





	<!-- <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div> -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1 style="font-size: 30px">ผลไม้แนะนำ</h1>
						<p>ผลไม้แนะนำที่ควรรับประทานในแต่ละช่วงฤดู</p>
					</div>
				</div>
			</div>
			
			
			
			<div class="row special-list" >
			<?php 
							while($prd = mysqli_fetch_array($result)){
			?>


			

			
				<div class="col-lg-4 col-md-8 special-grid  <?php $prd['catid'] ; ?>" >
					<div class="gallery-single fix" style="height :18rem" >
					
						<img src="img/product/<?php echo $prd['product_pic']; ?>" style="margin-bottom:10px" class="img-rounded col-md-12 col-sm-12 col-xs-12 " alt="">
						<div class="why-text">
							
							<h3><?php echo $prd['product_name']; ?></h3>
							<div class="form-group col-xs-1" style="margin-top:0px">
						
					


						
					
                        

                        	
                    </div>
							<h5><?php echo $prd['product_price']; ?>
							<p style = "font-size : 16px ; line-height : 16px">
							<h3><?php echo $prd['product_description']; ?>  </h3>
					<?php	if(isset($_SESSION['uid'])!=NULL)	{	?>

<!-- ส่ง userid-->			<a href="insertorder.php?id=<?php echo $prd['id'] ;?>
								
								&&uid=<?php echo $_SESSION['uid']; ?>
								&&proname=<?php echo $prd['product_name'] ;?>
								&&proprice=<?php echo $prd['product_price']; ?>
								
								

								&&pic=<?php echo $prd['product_pic'] ;?>"  class="btn btn-info">Add To cart</a>

								

								<?php   }else { ?>
							<a href="login.php"  class="btn btn-info">Add To cart</a>

						 <?php } ?>

                            
							
						</div>
					</div>
				</div> 

				<?php } ?>

				
			</div>
				
			
				
			
				
				
			</div>
		</div>
	</div>

	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1 style="font-size: 30px">ผลไม้ต่างๆ</h1>
						<p>ผลไม้ต่างๆ ที่น่าสนใจ</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/strawberries1.jpg">
							<img class="img-fluid" src="images/strawberries1.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/apple1.jpg">
							<img class="img-fluid" src="images/apple1.jpg" width="300" height="400" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/saly.jpg">
							<img class="img-fluid" src="images/saly.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/tuptim.jpg">
							<img class="img-fluid" src="images/tuptim.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/cherries1.jpg">
							<img class="img-fluid" src="images/cherries1.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/kaowmangkorn.jpg">
							<img class="img-fluid" src="images/kaowmangkorn.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/grapes1.jpg">
							<img class="img-fluid" src="images/grapes1.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/orang3.jpg">
							<img class="img-fluid" src="images/orang3.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/grapes3.jpg">
							<img class="img-fluid" src="images/grapes3.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/potato.jpg">
							<img class="img-fluid" src="images/potato.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/orang4.jpg">
							<img class="img-fluid" src="images/orang4.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<a class="lightbox" href="images/orang5.jpg">
							<img class="img-fluid" src="images/orang5.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<h1 style="color: white; font-size: 50px">
						บริการค่าจัดส่งเพียง ฿10.
					</h1>
				</div>
			</div>
		</div>
	</div>
	
