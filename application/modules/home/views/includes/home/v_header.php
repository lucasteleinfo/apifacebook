<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $titulo;?></title>
<link rel="shortcut icon" href="<?php echo base_url()?>public/images/logo2.ico">

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome-4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
</head>
<body>

	<!-- API Facebook -->
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '1686504724926931',
				xfbml      : true,
				version    : 'v2.5'
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];

			if (d.getElementById(id)) {
				return;
			}

			js = d.createElement(s); js.id = id;

			js.src = "//connect.facebook.net/en_US/sdk.js";
			
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
	<!-- ! API Facebook -->
