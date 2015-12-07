<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta property="og:locale" content="pt_BR">
<!-- Link da publicação -->
<meta property="og:url" content="http://www.lfranca.com.br/facebook">
<!-- Link da Titulo da Publicação -->
<meta property="og:title" content="Utilizando as meta tags do Facebook.">
<!-- Titulo do site -->
<meta property="og:site_name" content="Teste APIs Facebook">
<!-- Descrição prévia da publicação -->
<meta property="og:description" content="O tutorial para compartilhar o conteúdo do seu site de forma eficaz.">
<!-- Imagem da Publicação -->
<meta property="og:image" content="http://lfsystemprime.com/images/logo-lfsystem.jpg">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="600">
<!-- Tipo do site -->
<meta property="og:type" content="article">
<meta property="article:author" content="lfranca">
<meta property="article:section" content="Tutoriais">
<meta property="article:tag" content="Facebook, tags, og, open graph">
<meta property="article:published_time" content="date_time">

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
