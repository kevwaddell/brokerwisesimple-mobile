<?php 
global $terms_active;
global $cookies_active;
global $privacy_active;	
 ?>
<footer id="site-info">
	<div class="container-fluid">
		<small>Brokerwise is the appointed representative of Legal Insurance Management ……….</small>

		<small>Broker wise Limited, 135 High Street, Broadstairs, Kent, United Kingdom, CT10 1NG  
		Registered in England and Wales. Company Number : 09702266</small>
	</div>
	
	<nav id="legal-links">
		<?php if ($terms_active) { ?>
		<a href="#terms-and-conditions" data-toggle="modal" data-target="#terms-and-conditions">Terms and Conditions</a>			
		<?php } ?>
		<?php if ($cookies_active) { ?>
		<a href="#cookie-policy" data-toggle="modal" data-target="#cookie-policy">Cookies</a>
		<?php } ?>
		<?php if ($privacy_active) { ?>
		<a href="#privacy-policy" data-toggle="modal" data-target="#privacy-policy">Privacy Policy</a>
		<?php } ?>
	</nav>

</footer>