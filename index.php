<?php
include("header.php");
?>

<html>
<head>
<title></title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />

</head>
<body>
<div class="content" >
	<div id="banner" >
		<div id="slider_container_3">
				<div id="SliderName_3" class="SliderName_3">
					<img src="images/img-1.jpg" width="1000" height="400" alt="" title="" />
					<img src="images/img-2.jpg" width="1000" height="400" alt="" title="" />
					<img src="images/img-3.jpg" width="1000" height="400" alt="" title="" />
					<img src="images/img-4.jpg" width="1000" height="400" alt="" title="" />
					<img src="images/img-5.jpg" width="1000" height="400" alt="" title="" />
					<img src="images/images.jpg" width="1000" height="400" alt="" title="" />
				</div>
				<div class="c"></div>

				<script type="text/javascript">

					demo3Effect1 = {name: 'myEffect31', top: true, move: true, duration: 400};
					demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400};
					demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400};
					demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400};
					demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 50, duration: 100, order: 'random', fade: true};
					demo3Effect6 = {name: 'myEffect36', rows: 2, cols: 4, delay: 100, duration: 400, order: 'random', fade: true, chess: true};

					effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];

					var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width: 1000, height: 400, effects: effectsDemo3, display: {autoplay: 3000}});
				</script>

			</div>
	
    </div>
	<div class="content_left_section">
	<table width="1000px" align="center">
	<tr>
	<th>
	<div class="hope_clinic">
	<table width="700px" height="400px">
	<tr>
	<th><h1>The Hope Clinic</h1>
	<br />
	<p>
    Each of the Hope Clinics is committed to provide consistently superior quality health care services to address the day-to-day health care needs of the family. To maximize    convenience and comfort, The Hope Clinic is an integrated model and offers facilities for Specialist Consultation, Diagnostics, Preventive Health Checks and 24-hour Pharmacy,    all under one roof. The Clinic also pioneers in a range of value added services such as counselling on various lifestyle parameters. The Hope Clinic is your new neighbourhood 		    clinic.
	<br /><br />
	Not only is it complete healthcare under one roof, The Hope Clinic also plays a role in empowering customers with adequate knowledge regarding their health. The Hope Clinic 			    organizes camps and talks in order to achieve this.
	</p>
	</th>
	</tr>
	</table>
	</div>
	</th>
	<th>
	<table width="300px" height="400px">
	<tr>
	<th style="background:url(images/notice1.jpg) no-repeat center;height:250px;width:300px">
	<marquee behavior="scroll" direction="up" scrollamount="5" height="150px" width="260px" style="margin-left:82px; ">
	<font style="color:brown;font-size:15px;font-family:gabriola">
	NEW EQUIPMENTS AVAILABLE<br />
	AMBULANCE FACILITY AVAILABLE<br/>
	FULL BODY HEALTH CHECK-UP<br/>
	FREE DENTAL CHECK-UP CAMP<br/>
	ON 20 MAY 2014<br/>
	FROM 10A.M-5P.M<br/>
	DOCTOR'S SEMINAR HELD<br/>
	ON 25 MAY 2014<br/>
	</font>
	</marquee>
	</th></tr>
	<tr><th><img src="images/tollfreelogo.jpg" /></th></tr>
	</table>
	</th>
	<tr>
	<th colspan="2">
	<div class="hope_clinic_slogan">
	<p><marquee behavior="alternate" onMouseOver="stop()" onMouseOut="start()">Taking care of our patients is not work, we love every minute of it."</marquee></p>
	</div>
	</th>
	</tr>
	</tr>
	</table>
	</div>
</div>
</th>
</tr>
</table>
</div>
</body>
</html>

<?php
include("footer.php");
?>