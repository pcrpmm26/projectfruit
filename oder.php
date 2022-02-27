
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>สั่งซื้อทางออนไลน์</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>สั่งซื้อทางออนไลน์</h2>
						<p>บริการค่าจัดส่ง ฿10.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>ทำรายการ</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input id="input_date" class="datepicker picker__input form-control" name="date" type="text" value="" equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>โปรดระบุผลไม้ที่ต้องการ*</option>
											  <option value="1">แตงโม</option>
											  <option value="2">มะม่วง</option>
											  <option value="3">ชมพู่</option>
											  <option value="4">ลำไย</option>
											  <option value="5">องุ่น</option>
											  <option value="6">สัปปะรด</option>
											  <option value="7">กล้วย</option>
											  <option value="8">อ้อย</option>
											  <option value="9">มะละกอ</option>
											  
											</select>
											<div class="help-block with-errors"></div>
										</div> 
										
										<div class="form-group">
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											  <option disabled selected>โปรดระบุจำนวนที่ต้องการ*</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
											
											
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>รายละเอียด</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ-นามสกุล" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="ที่อยู่" id="Address" class="form-control" name="address" required data-error="Please enter your address">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="เบอร์ติดต่อ" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">สั่งซื้อสินค้า</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="customer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>ผู้จัดทำเว็บไซต์</h2>
						<p>รูปภาพและข้อมูลเบื้องต้นของผู้จัดทำ</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/toy.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">นาย หิรัญ วงศ์ไชย</strong></h5>
								<h6 class="text-dark m-0">Web Master , Web developer</h6>
								<p class="m-0 pt-3">ระดับชั้น ปวส.1/1 สาขา เทคโนโลยีสารสนเทศ รุ่นที่ 5 เลขที่ 14</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/mine.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">นางสาว พัชรีภรณ์ ธีรศรัณยานนท์</strong></h5>
								<h6 class="text-dark m-0">Web editor , Web Designer</h6>
								<p class="m-0 pt-3">ระดับชั้น ปวส.1/1 สาขา เทคโนโลยีสารสนเทศ รุ่นที่ 5 เลขที่ 16</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/jr.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">นาย ธนกฤต สังฆมานนท์</strong></h5>
								<h6 class="text-dark m-0">UX UI , System administor</h6>
								<p class="m-0 pt-3">ระดับชั้น ปวส.1/1 สาขา เทคโนโลยีสารสนเทศ รุ่นที่ 5 เลขที่ 6</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/bas.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">นาย ธีระภัทร์ เปลี่ยนแก้ว</strong></h5>
								<h6 class="text-dark m-0">Information Architect</h6>
								<p class="m-0 pt-3">ระดับชั้น ปวส.1/1 สาขา เทคโนโลยีสารสนเทศ รุ่นที่ 5 เลขที่ 8</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+66 066-666-666
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							furutsushopofficial@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							755/2 ถ.ราชมรรคา ต.ห้วยจรเข้ อ.เมือง
เทศบาลนครนครปฐม 73000
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
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">755/2 ถ.ราชมรรคา ต.ห้วยจรเข้ อ.เมือง</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					
				</div>
				<div class="col-lg-3 col-md-6">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Copy &copy; 2020 <a href="#">FURUTSU SHOP</a> Design By : 
					<a href="#">Information Technology Generation 5.</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	
	
