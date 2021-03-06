<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>حساب کاربری</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/style-etelaat-shakhsi.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-nastaligh.css">
	
	<script src="<?php echo base_url();?>js/jquery-3.4.1.js"></script>
	<script src="<?php echo base_url();?>js/popper.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>js/script.js"></script>
	
	
</head>

<body data-spy="scroll" data-target="#menu1">

	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="menu1">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#mnu">
					<span class="navbar-toggler-icon text-white-50"></span>
				</button>
				
				<div id="menu" class="collapse navbar-collapse col-lg-8 g">
					<ul class="navbar navbar-nav">
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/index_controller/index/" class="nav-link active">صفحه اصلی</a>
						</li>
						<li class="nav-item dropdown">
			  				<a href="<?php echo base_url();?>index.php/mahsulat_controller/mahsulat/" class="nav-link      dropdown-toggle" data-toggle="dropdown">محصولات</a>
							<div class="dropdown-menu bg-dark">
      							<a class="dropdown-item" href="<?php echo base_url();?>index.php/ring_controller/ring/">انگشتر</a>
      							<a class="dropdown-item" href="<?php echo base_url();?>index.php/earring_controller/earring/">گوشواره</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/necklace_controller/necklace/">آویز</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/gardanband_controller/gardanband/">گردنبند</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/dastband_controller/dastband/">دستبند</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/nimset_controller/nimset/">نیم ست و سرویس</a>
								<a class="dropdown-item" href="<?php echo base_url();?>index.php/mahsulat_controller/mahsulat/">محصولات</a>
    						</div>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/news_controller/news/" class="nav-link">اخبار و مقالات</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url();?>index.php/aboutus_2_controller/aboutus_2/">درباره ما</a>
    						<div class="dropdown-menu bg-dark">
      							<a class="dropdown-item" href="<?php echo base_url();?>index.php/aboutus_1_controller/aboutus_1/">اهداف و خدمات فروشگاه</a>
      							<a class="dropdown-item " href="<?php echo base_url();?>index.php/aboutus_2_controller/aboutus_2/">جواهری به قلم تاریخ</a>
    						</div>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/contactus_controller/contactus/" class="nav-link">تماس با ما</a>
						</li>
						<li class="nav-item">
							<a href="#login" class="nav-link" data-toggle="modal">ورود به حساب کاربری</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/register_controller/register/"
						   	class="nav-link">عضویت </a>
						</li>
					</ul>
				</div>
				
				<a href="<?php echo base_url();?>index.php/index_controller/index/" class="navbar-brand col-lg-4">
					<img src="<?php echo base_url();?>/img/logo.png" alt="logo">
				</a>
			</nav>
		</div>
	</div>
	
	<div class="container-fluid" id="part1">
		<h2 class="h2title"><span>حساب کاربری</span> )) اطلاعات شخصی</h2>
	</div>
	
	<div class="row d-flex" id="part2">
		<div class="col-lg-3 side-menu justify-content-center">
			<a href="<?php echo base_url();?>index.php/etelaat_shakhsi_controller/etelaat_shakhsi/" class="btn">اطلاعات شخصی</a><br>
			<a href="<?php echo base_url();?>index.php/kharid_controller/kharid/" class="btn">مشاهده خریدها</a><br>
			<a href="<?php echo base_url();?>index.php/nazarat_controller/nazarat/" class="btn">مشاهده نظرات</a>
		</div>
		
		<div class="col-lg-9 content justify-content-center d-flex">
			<form method="post" action="<?php echo base_url()?>index.php/etelaat_shakhsi_controller/etelaat_shakhsi/" class="col-lg-6">
			
			<label>نام کاربری</label><br>
			<input type="text" name="username" class="input form-control"><br>
			
			<label>نام</label><br>
			<input type="text" name="fname" class="input form-control"><br>
								
			<label> نام خانوادگی </label><br>
			<input type="text" name="lname" class="input form-control"><br>
				
			<label>جنسیت</label><br>
			زن<input type="radio" name="sex" checked value="female" class="form-check-inline ml-5">
			مرد<input type="radio" name="sex" value="male" class="form-check-inline"><br>
			
			<label>شهر</label><br>
			<input type="text"  name="city" class="input form-control"><br>
			
			<label>آدرس</label><br>
			<textarea name="address" id="address" rows="3" class="form-control"></textarea><br>
			
			<label>تلفن ثابت</label><br>
			<input type="tel" name="phone-number" class="input form-control"><br>
			
			<label>تلفن همراه</label><br>
			<input type="tel" name="mobile" class="input form-control"><br>
			
			<label>ایمیل</label><br>
			<input type="email" name="email" class="input form-control"><br>
		</form>
		</div>
	</div>
	
	<footer id="footer">
		<div class="container-fluid fpart">
			<p class="footerp"> تمامی حقوق محفوظ است.</p>
			
			<a href="https://www.instagram.com/Ataeijewelry/" class="icon" target="_blank" data-title="Instagram" data-toggle="tooltip" title="Instagram"><img src="<?php echo base_url();?>/img/1.png" alt="instagram" title="Ataei Jewlery Shop Instagram"></a>
					
			<a href="Http://t.me/Ataeijewelry/" class="icon" target="_blank" data-title="Telegram" data-toggle="tooltip" title="Telegram"><img src="<?php echo base_url();?>/img/3.png" alt="telegram" title="Ataei Jewlery Shop Telegram"></a>
			
			<a href="http://ataeigallery.ir/index.php?do=static&amp;page=contactus" class="icon"  target="_blank" data-title="facebook" data-toggle="tooltip" title="fb"><img src="<?php echo base_url();?>/img/2.png" alt="email" title="Ataei Jewlery Shop facebook"></a>	
		
		</div>
	</footer>
	

</body>
</html>