<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>


	
	<?php 
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email', 'user_likes']; // optional
	$loginUrl = $helper->getLoginUrl('http://lfranca.com.br/facebook/home/result', $permissions);

	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	?>

