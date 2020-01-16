<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
<title>جواهری عطایی به قلم تاریخ</title>
	<style>
		*{
		padding: 0;
		margin: 0;
		border: 0;
		}
		body{
			direction: rtl;
			font-family: "IranN";
			font-size: 1.2rem;
		}
		nav{
			width: 100%;
			height: 100px;
			position: fixed;
			padding: 0;
			line-height: 100px;
			font-size: 1.4rem;
			font-weight: bold;
			z-index: 10;
		}
		#navback{
			width: 100%;
			height: 100px;
			opacity: .8;
			z-index: -10;
			position: absolute;
		}
		nav ul{
			list-style: none;
			display: inline-block;

		}
		ul > li{
			display: inline-block;
			float: right;
			margin: 0 20px;
		}
		nav ol{
			margin: 0;
			padding: 0;
			list-style: none;
			display: none;
			position: absolute;
			line-height: 0;

		}
		#ol1{
			right: 70px;
			background-color: rgba(196,248,247,0.80);
		}
		#ol2{
			right: 260px;
			background-color: rgba(197,248,236,0.80);
		}
		nav ul li:hover ol{
			display: block;
		}
		ol li{
			display: block;
			font-size: 1.2rem;
			font-weight: bold;
			margin: 0;
			text-align: center;
			padding: 30px;
			line-height: 0;
		}
		a{
			text-decoration: none;
			display: inline-block;
			color: #000;
		}
		.clearfix{
			clear: both;
		}
		#logo{
			float: left;
			margin: 9px 2px;
			height: 80px;
			display: inline-block;
		}
		#a1{
			display: inline-block;
			float: left;
			margin: 5px 5px 5px 50px;
		}
		#container{
			background-image: url(<?php echo base_url();?>/images/img5.jpg);
			background-position: 30% 30%;
			background-size: cover;
			background-attachment: fixed;
		}
		#heading{
			height: 700px;
			line-height: 700px;
			text-align: center;
		}
		#content{
			margin: 0 auto;
			text-align: center;
			background-image: url(<?php echo base_url();?>/images/back5.jpg);
			background-size: cover;
			padding: 100px 200px;
		}
		h2{
			text-align: center;
		}
		p{
			text-align: justify;
		}
		footer{
		background-image: url(<?php echo base_url();?>/images/nav.jpg);
		background-size: cover;
		position: relative;
		}
		footer p{
			text-align: right;
			display: inline-block;
			position: relative;
			top: 30px;
			right: 20px;
		}
		.icons{
			width: 30px;
			float: left;
			display: inline-block;
			text-align: left;
			position: absolute;
		}
		#mail{
			top: 40px;
			left: 120px;
		}
		#insta{
			top: 40px;
			left: 70px
		}
		#tele{
			top: 40px;
			left: 20px;
		}
	</style>
</head>

<body>
	<nav>
		<img src="<?php echo base_url();?>/images/nav.jpg" alt="" id="navback">
		<ul>
			<li><a href="<?php echo base_url();?>/index.php/home_controller/home/">صفحه اصلی</a></li>
			<li><a href="<?php echo base_url();?>/index.php/mahsulat_controller/mahsulat/">محصولات</a>
				<ol id="ol1">
					<li><a href="<?php echo base_url();?>/index.php/angoshtar_controller/angoshtar/">انگشتر</a></li>
					<li><a href="<?php echo base_url();?>/index.php/gushvare_controller/gushvare/">گوشواره</a></li>
					<li><a href="<?php echo base_url();?>/index.php/aviz_controller/aviz/">آویز</a></li>
					<li><a href="<?php echo base_url();?>/index.php/gardanband_controller/gardanband/">گردنبند</a></li>
					<li><a href="<?php echo base_url();?>/index.php/dastband_controller/dastband/">دستبند</a></li>
					<li><a href="<?php echo base_url();?>/index.php/servis_controller/servis/">نیم ست و سرویس</a></li>
					<li><a href="<?php echo base_url();?>/index.php/mahsulat_controller/mahsulat/">همه محصولات</a></li>
				</ol>
			</li>
			<li><a href="<?php echo base_url();?>/index.php/akhbar_controller/akhbar/">اخبار و مقالات</a></li>
			<li><a href="<?php echo base_url();?>/index.php/tarikhche_controller/tarikhche/">درباره ما</a>
				<ol id="ol2">
					<li><a href="<?php echo base_url();?>/index.php/tarikhche_controller/tarikhche/">جواهری عطایی به قلم تاریخ</a></li>
					<li><a href="<?php echo base_url();?>/index.php/ahdaf_controller/ahdaf/">اهداف و خدمات جواهری</a></li>
				</ol>
			</li>
			<li><a href="<?php echo base_url();?>/index.php/tamas_controller/tamas/">تماس با ما</a></li>
		</ul>				
		<a href="<?php echo base_url();?>/index.php/home_controller/home/" id="a1"><img src="<?php echo base_url();?>/images/logo.png" id="logo" alt=""></a>
		<div class="clearfix"></div>
	</nav>
	<div id="container">
		<div id="heading">
			<h1><a href="<?php echo base_url();?>/index.php/home_controller/home/">جواهری عطایی</a>، محصولات </h1>
		</div>
	</div>
	<div id="content">
		<h2>جواهری عطایی به قلم تاریخ</h2>
		<p>مرحوم حاج محمدعلی عطایی ( عطاالله)  موسس و بنیان گذار جواهری عطایی،  فعالیت حرفه ای خود را در اواخرصده  یک هزارودویست شمسی آغاز کرد، ایشان  علوم صنعت گری را از مرحوم پدر(حاج حسین عطایی)   و همچینین هنر قلم زنی و ساخت ظروف  نقره را  از اساتید وقت فرا گرفتند، انگیزه به تولید و فروش با گستره خدمات بیشتر،  وی را بر آن داشت تا پس ازفراگیری دانش کسب وکار و مهارت های لازم، زادگاه خویش اصفهان را ترک کرده و راهی پایتخت وقت تهران شود.<br>
سالهای آغازین صده  یک هزارو سیصد شمسی اگرچه دوران پرچالشی را به لحاظ اقتصادی برای وی رقم زد، اما مانعی برای عزم وی در جهت تاسیس کارخانه  و فروشگاه در زمینه کسب و کار طلا و جواهر و ظروف  نقره نبود؛ بدین ترتیب ایجاد واحد تولیدی و فروشگاهی  مجزا در محدوده بازار و بازار بزرگ تهران از اولین اقدامات آن مرحوم  در تهران به شمار   می آیند.  از آنجاییکه، کسب و کار در این دوران دستخوش بسیاری از تحولات اجتماعی بود، لذا ایشان درسالهای یک هزاروسیصد وبیست تا   یک هزارو سیصدوبیست وسه هجری شمسی بنا به دلایلی ازجمله بحران های اجتماعی، تصمیم به ترک بازار تهران و ایجاد  فروشگاهی  با  نام نقره لوکس درمنطقه خیابان لاله زار نو ( محل فعلی فروشگاه) گرفتند، که البته مقتضیات زمان و فروش غالب فروشگاه درزمینه طلاوجواهر، نام این فروشگاه را به جواهری عطایی تغیر داد.   باعث افتخار است،  که نه تنها فروشگاه  بلکه هنر آن مرحوم نیز همچنان  به همت و تلاش فرزند ایشان، حاج عبدالحسین عطایی(عطاالله) پابرجاست و خدمات ارزنده ای که حاصل تجربه چهار نسل صنعت گری میباشد را به نحوی شایسته ارایه می دهد.</p>
	</div>
	<footer>
		<p>copyright&copy;2019</p>
		<div class="clearfix"></div>
		<a href="http://ataeijewelry.com/index.php?do=static&page=contactus"><img src="<?php echo base_url();?>/images/mail.png" title="mail" id="mail" alt="" class="icons"></a>
		<a href="https://www.instagram.com/Ataeijewelry/"><img src="<?php echo base_url();?>/images/insta.png" title="instagram" id="insta" alt="" class="icons"></a>
		<a href="http://t.me/Ataeijewelry/"><img src="<?php echo base_url();?>/images/tele.png" title="telegram" id="tele" alt="" class="icons"></a>
		<div class="clearfix"></div>
	</footer>
</body>
</html>
