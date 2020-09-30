<?php
	if (isset($_POST['submitleft'])){
		$name1 = $_POST['cs2Name'];
		$email1 = $_POST['cs2Email'];
		$phone1 = $_POST['cs2PhoneNum'];
		$to = "ab@comityhub.com, hg@comityhub.com";
		$subject = "Investo Query";
		$message = "
		<html>
		<head>
		</head>
		<body>
		<table>
		<tr>
		<th>Name</th>
		<td>$name1</td>
		</tr>
		<tr>
		<th>Phone</th>
		<td>$phone1</td>
		</tr>
		<tr>
		<th>Email</th>
		<td>$email1</td>
		</tr>
		</table>
		</body>
		</html>
		";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: <info@comityhub.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		$mail = mail($to,$subject,$message,$headers);
		$to1 = $email1;
		$subject1 = "It's Time To Make Some Profits! Investo Trade";
		$message1 = '
		<table width="700" cellpadding="0" cellspacing="0" align="center" style="background:#ffffff; border:solid 2px #0391f3; border-top:10px solid #ffb300; font:normal 15px arial; text-align:justify; color:#333333;">
			<tr>
				<td align="center">
					<table width="690" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" border="5px solid #ffb300">
						<tr>
							<td align="center">
								<table width="650" border="0" hspace="0" vspace="0" cellpadding="0" cellspacing="0">
									<tr>
										<td height="30"></td>
									</tr>
									<tr>
										<td align="center" style="line-height:22px;">
											<img width="250px" src="http://delhiinstituteofdigipreneur.com/img/logo-2.jpg" alt="DIDP Logo"><br><br>
											<strong style="color:#000000; font-weight:bolder;"><b style="color:#0e0350; font-size:32px; line-height:40px;">THANK YOU</b></strong><br/>
											We appreciate your interest in ZERO RUPEE DIGITAL MARKETING COURSE.<br/>
											Make Sure you Join the Webinar Today at 7PM IST to Get the Bonuses Worth INR 7000+<br/><br/>
											Join Zoom Meeting<br>
											https://bit.ly/zrdmcwebinar<br><br>
											
											Create only 2 Ads on Facebook or Google to Get Leads & Paying Customers for your Business<br><br>
											
											Watch Our Short Demo Video: https://www.youtube.com/watch?v=kYIfY5KJ2Qc <br><br>
											
											Want to connect with us:<br>
											Call/WhatsApp Gaurav: +91- 9899907107<br>
											Address: 273, South Ex. South Delhi, India<br>
											Best Regards<br/>
											Aditya Bhardwaj<br>
											Life Coach & Author
										</td>
									</tr>
									<tr>
										<td height="45"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		';
		// Always set content-type when sending HTML email
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers1 .= 'From: <info@comityhub.com>' . "\r\n";
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		$mail1 = mail($to1,$subject1,$message1,$headers1);
		if($mail1){
			$msg ="Thanks for filling out our form";
			//header("Location: thank-you-page.php?status=success");
			//exit();
		}else{
			//header("Location: index.php?status=error");
			//exit();
			$msg ="Not Submit";
		}
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Thank You For Enroling in Zero Rupee Digital Marketing Course at Rs.2499 | Best Online Digital Marketing Course - Delhi Institute Of Digipreneur</title>
	<!-- Meta ============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">
    <meta name="author" content="ExplicitConcepts">
    <!-- description -->
    <meta name="description" content="Get India's first comprehensive certification training in Digital Marketing from Delhi Institute Of Digipreneur with 100% clients guarantee* (Assured by Comity Hub). This Zero Rupee Digital Marketing Course covers 20+ classes of intensive training led by 5 Industry Experts professors. Enroll now to get trained on 20+ advanced Digital Marketing tools.">
    <!-- keywords -->
    <meta name="keywords" content="digital marketing institute south delhi, digital marketing institute delhi, digital marketing course in delhi, digital marketing course in south delhi, online marketing course south delhi, online marketing course in delhi, digital marketing training in delhi, best digital marketing training in south delhi, best digital marketing institute in delhi, best digital marketing institute in south delhi, digital marketing course in delhi">
	<!-- Stylesheets
	============================================= -->
	<link href="css/css-assets.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,600i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700i,700" rel="stylesheet">
	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	
<!-- Global site tag (gtag.js) - Google Ads: 660356739 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-660356739"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-660356739');
</script>


<!-- Event snippet for Submit lead form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-660356739/9JjKCNLZ_NABEIP98LoC'});
</script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '810898592673189');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=810898592673189&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>

<body class="page-thank-you">

	<div id="scroll-progress"><div class="scroll-progress"><span class="scroll-percent"></span></div></div>

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Banner
		============================================= -->
		<section id="banner">

			<div class="banner-parallax" data-banner-height="850">
				<img src="images/files/header-banner.png" alt="">
				<div class="overlay-colored color-bg-gradient opacity-90"></div><!-- .overlay-colored end -->
				<div class="slide-content">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="banner-center-box text-center text-white">
									<a href="index-leadgen-1.html"><img class="banner-logo" src="images/files/logo-header-alt.png" alt=""></a>
									<h1>Thank you for giving us an Opportunity to make your dream into reality!</h1>
									<div class="description">
										As per a recent report of Bloomberg Businessweek & Forbes India, many small and big businesses are falling down due to Corona Virus Lockdown. So, Are you ready to bring more customers for Business/Start up? If yes, Join our webinar at 7PM IST.
									</div>
									<iframe width="560" height="315" src="https://www.youtube.com/embed/kYIfY5KJ2Qc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									
									<a class="btn large white hover-dark mt-60" href="images/files/Zero-Rupee Digital Marketing Course_Brochure.pdf">Download Our Brochure</a>

								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/jRespond.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/simple-scrollbar.min.js"></script>
	<script src='js/functions.js'></script>

</body>
</html>
