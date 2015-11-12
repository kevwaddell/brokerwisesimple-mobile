<?php 
global $reg_statement;
global $address;
global $terms_active;
global $cookies_active;
global $privacy_active;	
 ?>
<footer id="site-info">
	<div class="container-fluid">
		<?php if ($reg_statement) { ?>
		<small><?php echo $reg_statement; ?></small>
		<?php } ?>
		<?php if ($address) { ?>
		<small><?php echo $address; ?></small>
		<?php } ?>
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