<?php
global $find_icon;	
global $find_title;	

$find_text = get_field('find_section_text', 'options');
$form = get_field('contact_form', 'options');
//echo '<pre>';print_r($form[id]);echo '</pre>';
?>

<section id="hp-find-out-more" class="hp-section bg-col-grayLt bg-grid">
	
	<div class="container-fluid">	
		<div class="hp-txt">
			<div class="section-icon">
				<img src="<?php echo $find_icon[sizes][large]; ?>" alt="<?php echo $find_title; ?> icon" class="img-responsive" />
			</div>
			<h3 class="tk-orbitron col-orange"><?php echo $find_title; ?></h3>
			<?php echo $find_text; ?>
		</div>
		
		<?php if ($form) { ?>
		<?php include (STYLESHEETPATH . '/_/functions/forms-script-cap-name.php'); ?>
			<?php gravity_form($form[id], false, true, false, '', true); ?>
		<?php } ?>
	</div>
	
	<button class="scroll-btn scroll-btn-up wow fadeIn" data-wow-delay="1s" data-wow-offset="10">
		<span class="sr-only">Scroll up</span>
		<i class="fa fa-arrow-circle-up fa-lg"></i>
	</button>
	
</section>