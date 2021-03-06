<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جواهری عطایی</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/font-nastaligh.css">
	
<script src="<?php echo base_url();?>js/jquery-3.4.1.js"></script>
<script src="<?php echo base_url();?>js/popper.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.js"></script>
<script src="<?php echo base_url();?>js/script.js"></script>
</head>

<body>
	<div id="top"></div>
	
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
		
		<div class="modal fade" id="login">
			<form method="post" action="<?php echo base_url();?>index.php/session_controller/session/">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">فرم ورود</h4>
							<button class="close" data-dismiss="modal" id="x"><span>&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="input-group my-4">
								<div class="input-group-append">
									<div class="input-group-text">نام کاربری </div>
								</div>
								<input type="text" class="form-control form-control-lg" name="username">
								
							</div>
							<div class="input-group my-4">
								<div class="input-group-append">
									<div class="input-group-text">گذرواژه </div>
								</div>
								<input type="text" class="form-control form-control-lg" name="pass">
								
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success" type="submit">
								ورود
							</button>
						</div>
					</div>
				</div>
				</form>
			</div>
	
		<section id="slider" class="smheight">
				<div class="carousel slide carousel-fade" id="car1" data-ride="carousel" data-interval="3000">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php echo base_url();?>/img/img1.jpg" alt="" class="d-block w-100 wideimg smheight">
						</div>
						<div class="carousel-item ">
							<img src="<?php echo base_url();?>/img/img3.jpg" alt="" class="d-block w-100 wideimg smheight">
						</div>
					</div>
					<a href="#car1" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a href="#car1" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>	
		</section>

		<section id="tarikhche" class="row justify-content-end">
			<div class="col-lg-6">
				<h1 id="h1">جواهری  به قلم تاریخ</h1>
				<p id="p1">مرحوم حاج محمدعلی  ( عطاالله)  موسس و بنیان گذار جواهری   فعالیت حرفه ای خود را در اواخرصده  یک هزارودویست شمسی آغاز کرد، ایشان  علوم صنعت گری را از مرحوم پدر(حاج حسین )   و همچینین هنر قلم زنی و ساخت ظروف  نقره را  از اساتید وقت فرا گرفتند، انگیزه به تولید و فروش با گستره خدمات بیشتر،  وی را بر آن داشت تا پس ازفراگیری دانش کسب وکار و مهارت های لازم، زادگاه خویش اصفهان را ترک کرده و راهی…</p>
				<a href="<?php echo base_url();?>index.php/aboutus_2_controller/aboutus_2/" id="a2">ادامه مطلب</a>
				<br>
				<a href="<?php echo base_url();?>index.php/tarikhche1_controller/tarikhche1/" target="_blank"><img src="<?php echo base_url();?>/img/d1.jpg" alt="" class="tarikhche1 col-lg-2 col-sm-5 w-100"></a>
				<a href="<?php echo base_url();?>index.php/tarikhche2_controller/tarikhche2/" target="_blank"><img src="<?php echo base_url();?>/img/d3.jpg" alt="" class="tarikhche1 col-lg-2 col-sm-5 w-100"></a>
				<a href="<?php echo base_url();?>index.php/tarikhche3_controller/tarikhche3/" target="_blank"><img src="<?php echo base_url();?>/img/d4.jpg" alt="" class="tarikhche1 col-lg-2 col-sm-5 w-100"></a>
				<a href="<?php echo base_url();?>index.php/tarikhche4_controller/tarikhche4/" target="_blank"><img src="<?php echo base_url();?>/img/d5.jpg" alt="" class="tarikhche1 col-lg-2 col-sm-5 w-100"></a>
			</div>
		</section>
		
		<section id="img2" class="row justify-content-center">
			<section id="content2" class="col-lg-12 justify-content-center">
				<h1>محصولات</h1>
				<h3>آخرین محصولات ما را در زیر مشاهده کنید:</h3>
				<a href="<?php echo base_url();?>index.php/dastband1_controller/dastband1/"><img src="<?php echo base_url();?>/img/dastband1.jpg" alt="" class="col-lg-2 col-sm-5 mahsulat w-100"></a>
				<a href="<?php echo base_url();?>index.php/necklace1_controller/necklace1/"><img src="<?php echo base_url();?>/img/necklace1.jpg" alt="" class="col-lg-2 col-sm-5 mahsulat w-100"></a>
				<a href="<?php echo base_url();?>index.php/earring1_controller/earring1/"><img src="<?php echo base_url();?>/img/earings1.jpg" alt="" class="col-lg-2 col-sm-5 mahsulat w-100"></a>
				<a href="<?php echo base_url();?>index.php/gardanband1_controller/gardanband1/"><img src="<?php echo base_url();?>/img/gardanband1.jpg" alt="" class="col-lg-2 col-sm-5 mahsulat w-100"></a>
				<a href="<?php echo base_url();?>index.php/nimset1_controller/nimset1/"><img src="<?php echo base_url();?>/img/nimset1.jpg" alt="" class="col-lg-2 col-sm-5 mahsulat w-100"></a>
				<div></div>
				<a href="<?php echo base_url();?>index.php/mahsulat_controller/mahsulat/" id="a3">مشاهده همه محصولات</a>
			</section>
		</section>
		
		<section class="row w-100" id="ahdafcontainer">
				<div class="col-lg-6 w-100 col-sm-12 smheight" id="ahdaf1">
					<h1 class="smmargin">اهداف و خدمات</h1>
					<p>جواهری  به پشتوانه چهار نسل اعتبار و بیش ازیک قرن تجربه در صنعت طلا و جواهر این گوهر گرانمایه ی هنر، بر آن است تا با طراحی و ساخت جواهرات مبهوت کننده حس ارزشمند زیبایی را در گذر از لحظه های زندگی برای شما به ارمغان آورد ،مفتخریم تا به همراه متخصصان و کارشناسان متبحر مجموعه خود آنچه را در تصور شماست معنای واقعیت بخشیم. فروشگاه عطایی در جهت رضایت مشتری و نیل به هدف مشتری مداری در تلاش است تا انواع خدمات را در صنعت طلا و جواهر ارایه دهد، از اینرو مشتریان محترم فروشگاه میتوانند از محصولات آماده در فروشگاه یا بخش فروش غیر حضوری سایت که به روش مشاوره تلفنی امکانپذیر است، بهره لازم را ببرند، اما مدعی هستیم تا کلیه سفارشات…</p>
					<a href="<?php echo base_url();?>index.php/aboutus_1_controller/aboutus_1/" id="a5" class="amargin">ادامه مطلب</a>
				</div>
				<div class="w-100 col-lg-6 col-sm-12 smimg" id="ahdaf2"></div>
		</section>
		
		<section class="row justify-content-center">
			<section class="col-lg-12" id="akhbar">
				<a href="<?php echo base_url();?>index.php/news_controller/news/">
					<h1>اخبار و مقالات</h1>
				</a><br>
				<p>آخرین اخبار و مقالات ما را دنبال کنید:</p>
				<div class="media col-lg-5 mt-5 mb-5">
					<a href="<?php echo base_url();?>index.php/news2_controller/news2/"><img src="<?php echo base_url();?>/img/almas.jpg" alt="" class="ml-1 akhbarimg"></a>
					<div class="media-body mt-5">
						<a href="<?php echo base_url();?>index.php/news2_controller/news2/">الماس یکی از سنگ‌های قیمتی و یکی از آلوتروپهای <br>کربن است که در فشارهای بالا پایدار است…</a>
					</div>
				</div>

				<div class="media col-lg-5 mt-5">
					<a href="<?php echo base_url();?>index.php/news1_controller/news1/"><img src="<?php echo base_url();?>/img/sangemah.jpg" alt="" class="ml-1 akhbarimg"></a>
					<div class="media-body mt-5">
						<a href="<?php echo base_url();?>index.php/news1_controller/news1/">  هر سنگ با متولد ماه خاصی ارتباط بیشتر و <br>بهتری برقرار می‌کند و می‌تواند برای…</a>
					</div>
				</div>
			</section>
		</section>
		
		<section class="row justify-content-start" id="container">
			<div id="tamas" class="col-lg-5">
				<h1>برای تماس با جواهری </h1>
				<h3>از طریق لینک زیر اقدام کنید.</h3>
				<a href="<?php echo base_url();?>index.php/contactus_controller/contactus/" id="a4">تماس با ما</a>
			</div>
		</section>
		
		<footer id="footer">
			<div class="container-fluid fpart">
				<p class="footerp"> تمامی حقوق محفوظ است.</p>

				<a href="https://www.instagram.com/Ataeijewelry/" class="icon" target="_blank" data-title="Instagram" data-toggle="tooltip" title="Instagram"><img src="<?php echo base_url();?>/img/1.png" alt="instagram" title="Ataei Jewlery Shop Instagram"></a>

				<a href="Http://t.me/Ataeijewelry/" class="icon" target="_blank" data-title="Telegram" data-toggle="tooltip" title="Telegram"><img src="<?php echo base_url();?>/img/3.png" alt="telegram" title="Ataei Jewlery Shop Telegram"></a>

				<a href="http://ataeigallery.ir/index.php?do=static&amp;page=contactus" class="icon"  target="_blank" data-title="facebook" data-toggle="tooltip" title="fb"><img src="<?php echo base_url();?>/img/2.png" alt="email" title="Ataei Jewlery Shop facebook"></a>	

			</div>
		</footer>
	</div>
</body>
</html>
