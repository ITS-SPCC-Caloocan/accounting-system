<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>
	<style type="text/css">
		html, body {
			width: 100%;
			height: 100%;
			background-color: #ECECEC;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			margin: 0px;
			display: flex;
		}

		.container {
			font-family: "Verdana";
			margin: auto !important;
			color: #222145;
		}

		.message {
			font-size: 3vw;
			margin: auto !important;
			padding: 15px 10px;
		}

		.sub-message {
			font-size: 1.25vw;
			margin: auto !important;
			padding: 2px;
			opacity: 0.5;
		}

		.btn {
			padding: 5px 40px;
			border-radius: 30px;
			background-color: #222145;
			color: #fff;
			font-size: 25px;
			font-style: normal;
			text-decoration: none;
			margin: auto !important;
		}
	</style>
</head>
<body>
	<div class="container">
		<div style="padding: 0px 30px">
			<img style="width: 100%" src="<?php echo base_url('assets/img/error_404.PNG'); ?>">
		</div>
		<div style="display: flex;"><span class="message"><b>Page Not Found</b></span></div>
		<div style="display: flex; flex-direction: column;">
			<span class="sub-message">We're sorry, the page you requested cannot be found</span>
			<span class="sub-message">Please go back to the homepage</span>
		</div>
		<div style="display: flex; flex-direction: column; margin-top: 30px">
			<a href="<?php echo base_url('dashboard'); ?>" class="btn">Go Home</a>
		</div>
	</div>
</body>
</html>