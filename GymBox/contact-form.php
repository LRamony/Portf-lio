<?php

		$name = $_POST['name'];
		$message = $_POST['message'];
		$email = "felizardo.diogo@gmail.com";

		$formcontent=" Nome: $name \n
		Mensagem: $message";

		$recipient = "contato@diogofelizardo.tech";
		$subject = "Email do Site Gymbox";
		$mailheader = "De: $email \r\n";

		// echo $name.' '.$message;
		// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		//
		$headers =  'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: $name <$email>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		mail($recipient, $subject, $formcontent, $headers);
	?>

	<!DOCTYPE html><!DOCTYPE html>
	<!--[if IE 7]>    <html class="no-js oldie ie7 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
	<!--[if IE 8]>    <html class="no-js oldie ie8 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
	<!--[if IE 9 ]>   <html class="no-js       ie9 ie" lang="en-US" prefix="og: http://ogp.me/ns#" > <![endif]-->
	<!--[if (gt IE 9)|!(IE)] -->
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>GYMBOX</title>
		<!-- fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- fontawesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- animate -->
	    <link  rel="stylesheet" type="text/css" href="css/animate.css"/>
		<!-- owl-carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css" />
		<!-- slicknav -->
	    <link rel="stylesheet" href="css/slicknav.css">
		<!-- style css -->
	    <link rel="stylesheet" href="style.css">
		<!-- responsive -->
	    <link rel="stylesheet" href="css/responsive.css"/>
		<!-- favicon -->
	    <link rel="shortcut icon" href="images/icon.ico" />
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	  </head>
	  <body class="main_" data-spy="scroll" data-target="#navbar-example">



	    <!-- subcribe-clients-section-start -->
	  	<section class="download section_padding" id="download">
	  		<div class="container">
	  			<div class="amazing_title subcribe_title col-text-center text-center section-title wow flipInX" data-wow-delay="0.3s">
	  				<h1>Mensagem enviada com sucesso!</h1>
	  			</div>

	        <div class="row wow fadeInDown text-center">
						<a href="javascript:window.history.go(-1)" class="btn-black" >Voltar</a>
	  			</div>

	  		</div>
	  	</section>
	  	<!-- subcribe-section-end -->




		<!-- footer-section-end -->
		<!-- jquery-1.11.3 -->
	    <script src="js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap js -->
	    <script src="js/bootstrap.min.js"></script>
		<!-- slicknav js -->
	    <script src="js/jquery.slicknav.min.js"></script>
		<!-- sticky -->
		<script src="js/jquery.sticky.js"></script>
		<!-- scrollUp -->
		<script src="js/jquery.scrollUp.js"></script>
		<!-- wow -->
	    <script src="js/wow.min.js"></script>
		<!-- owl-carousel -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- owl-carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- main js -->
	    <script src="js/main.js"></script>
	  </body>

	</html>
