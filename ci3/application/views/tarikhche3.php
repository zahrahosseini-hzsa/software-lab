<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>تاریخچه</title>
<style>
	*{
		margin: 0;
		padding: 0;
		border: 0;
	}
	body{
		background-color: rgba(0,0,0,0.8);
		text-align: center;
	}
	#container{
		margin: 0 auto;
		padding: 200px 100px;
	}
	#main{
		width: 300px;
		margin: 0 auto;
		display: inline-block;
	}
	#left{
		width: 150px;
		display: inline-block;
		margin: 50px;
	}
	#right{
		width: 150px;
		display: inline-block;
		margin: 50px;
	}
</style>
</head>

<body>
	<div id="container">
		<a href="<?php echo base_url();?>/index.php/tarikhche2_controller/tarikhche2/"><img src="<?php echo base_url();?>/images/arrow.png" alt="" id="left"></a>
		<img src="<?php echo base_url();?>/images/tarikhche3.jpg" alt="" id="main">
		<a href="<?php echo base_url();?>/index.php/tarikhche4_controller/tarikhche4/"><img src="<?php echo base_url();?>/images/arrow1.png" alt="" id="right"></a>
	</div>
</body>
</html>
