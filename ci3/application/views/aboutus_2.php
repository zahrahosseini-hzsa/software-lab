<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>جواهری به قلم تاریخ</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/style_aboutus_2.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-nastaligh.css">
	
	<script src="<?php echo base_url();?>js/jquery-min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-3.4.1.js"></script>
	<script src="<?php echo base_url();?>js/popper.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>js/script.js"></script>
	
	<script src="<?php echo base_url();?>js/jqFancyTransitions.1.8.min.js"></script>
	
    	<script>
		$(document).ready(function(e) {
            $("#gallary").jqFancyTransitions({
				effect:"wave",
				width:400,
				height:400,
				navigation:true
					
			});
        });
	</script>
	
	
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
							<a href="<?php echo base_url();?>index.php/mahsulat_controller/mahsulat/" class="nav-link dropdown-toggle" data-toggle="dropdown">محصولات</a>
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
    						<div class="dropdown-menu bg-dark ">
      							<a class="dropdown-item" href="<?php echo base_url();?>index.php/aboutus_1_controller/aboutus_1/">اهداف و خدمات فروشگاه</a>
      							<a class="dropdown-item" href="<?php echo base_url();?>index.php/aboutus_2_controller/aboutus_2/">جواهری  به قلم تاریخ</a>
    						</div>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url();?>index.php/contactus_controller/contactus/" class="nav-link">تماس با ما</a>
						</li>
						<li class="nav-item">
							<a href="#login" class="nav-link" data-toggle="modal">ورود به حساب کاربری</a>
						</li>
					</ul>
				</div>
				
				<a href="<?php echo base_url();?>index.php/index_controller/index/" class="navbar-brand col-lg-4">
					<img src="<?php echo base_url();?>img/logo.png" alt="logo">
				</a>
			</nav>
		</div>
	</div>
	
	<div class="modal fade" id="login">
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
								<input type="text" class="form-control form-control-lg">
								
							</div>
							<div class="input-group my-4">
								<div class="input-group-append">
									<div class="input-group-text">گذرواژه </div>
								</div>
								<input type="text" class="form-control form-control-lg">
								
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success" type="submit">
								ورود
							</button>
						</div>
					</div>
				</div>
				
	</div>

	<div class="container-fluid" id="part1">
		<h3 class="h3">درباره ما</h3>
		<h4 class="h4"><a class="h4a">  جواهری</a> )) اهداف و خدمات</h4>
	</div>
	
	<div class="container-fluid part1">
		<section id="sec1">
			<h3 class="h3sec1">جواهری به قلم تاریخ</h3>
			<p class="psec1">مرحوم حاج محمدعلی عطایی ( عطاالله)  موسس و بنیان گذار جواهری عطایی،  فعالیت حرفه ای خود را در اواخرصده  یک هزارودویست شمسی آغاز کرد، ایشان  علوم صنعت گری را از مرحوم پدر(حاج حسین عطایی)   و همچینین هنر قلم زنی و ساخت ظروف  نقره را  از اساتید وقت فرا گرفتند، انگیزه به تولید و فروش با گستره خدمات بیشتر،  وی را بر آن داشت تا پس ازفراگیری دانش کسب وکار و مهارت های لازم، زادگاه خویش اصفهان را ترک کرده و راهی پایتخت وقت تهران شود.</p>
			<p class="psec1">سالهای آغازین صده  یک هزارو سیصد شمسی اگرچه دوران پرچالشی را به لحاظ اقتصادی برای وی رقم زد، اما مانعی برای عزم وی در جهت تاسیس کارخانه  و فروشگاه در زمینه کسب و کار طلا و جواهر و ظروف  نقره نبود؛ بدین ترتیب ایجاد واحد تولیدی و فروشگاهی  مجزا در محدوده بازار و بازار بزرگ تهران از اولین اقدامات آن مرحوم  در تهران به شمار   می آیند.  از آنجاییکه، کسب و کار در این دوران دستخوش بسیاری از تحولات اجتماعی بود، لذا ایشان درسالهای یک هزاروسیصد وبیست تا   یک هزارو سیصدوبیست وسه هجری شمسی بنا به دلایلی ازجمله بحران های اجتماعی، تصمیم به ترک بازار تهران و ایجاد  فروشگاهی  با  نام نقره لوکس درمنطقه خیابان لاله زار نو ( محل فعلی فروشگاه) گرفتند، که البته مقتضیات زمان و فروش غالب فروشگاه درزمینه طلاوجواهر، نام این فروشگاه را به جواهری عطایی تغیر داد.   باعث افتخار است،  که نه تنها فروشگاه  بلکه هنر آن مرحوم نیز همچنان  به همت و تلاش فرزند ایشان، حاج عبدالحسین عطایی(عطاالله) پابرجاست و خدمات ارزنده ای که حاصل تجربه چهار نسل صنعت گری میباشد را به نحوی شایسته ارایه می دهد.  </p>
			
		</section>
		<section id="sec2">
			<article id="article">
				<div id="gallary">
            	<img src="<?php echo base_url();?>/img/d1.jpg" alt="1"/>
            	<img src="<?php echo base_url();?>/img/d2.jpg" alt="2"/>
            	<img src="<?php echo base_url();?>/img/d3.jpg" alt="3"/>
            	<img src="<?php echo base_url();?>/img/d4.jpg" alt="4"/>
            	<img src="<?php echo base_url();?>/img/d5.jpg" alt="5"/>
            
        		</div>
		
			</article>
		</section>
		<section class="emptysec"></section>
	</div>
	
	

	<footer id="footer">
		<div class="container-fluid fpart">
			<p class="footerp"> تمامی حقوق محفوظ است.</p>
			
			<a href="https://www.instagram.com/Ataeijewelry/" class="icon" target="_blank" data-title="Instagram" data-toggle="tooltip" title="Instagram"><img src="<?php echo base_url();?>img/1.png" alt="instagram" title="Ataei Jewlery Shop Instagram"></a>
					
			<a href="Http://t.me/Ataeijewelry/" class="icon" target="_blank" data-title="Telegram" data-toggle="tooltip" title="Telegram"><img src="<?php echo base_url();?>img/3.png" alt="telegram" title="Ataei Jewlery Shop Telegram"></a>
			
			<a href="http://ataeigallery.ir/index.php?do=static&amp;page=contactus" class="icon"  target="_blank" data-title="facebook" data-toggle="tooltip" title="fb"><img src="<?php echo base_url();?>img/2.png" alt="email" title="Ataei Jewlery Shop facebook"></a>	
		
		</div>
	</footer>
	
	
</body>
</html>
