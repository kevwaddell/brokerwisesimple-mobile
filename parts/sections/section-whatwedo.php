<?php
global $what_icon;	
global $what_title;	

$what_text = get_field('what_section_text', 'options');
?>

<section id="hp-what-we-do" class="hp-section">
	
	<div class="col-overlay bg-trans-wht"></div>	
	
	<div class="container-fluid">	
		<div class="hp-txt">
			<div class="section-icon">
				<img src="<?php echo $what_icon[sizes][large]; ?>" alt="<?php echo $what_title; ?> icon" class="img-responsive" />
			</div>
			<h3 class="tk-orbitron col-orange"><?php echo $what_title; ?></h3>
			
			<?php echo $what_text; ?>
		</div>
	</div>
	
	<button class="scroll-btn scroll-btn-up wow fadeIn" data-wow-delay="1s" data-wow-offset="10">
		<span class="sr-only">Scroll up</span>
		<i class="fa fa-arrow-circle-up fa-lg"></i>
	</button>
	
	<button class="scroll-btn scroll-btn-dwn wow fadeIn" data-wow-delay="1s">
		<span class="sr-only">Scroll down</span>
		<i class="fa fa-arrow-circle-down fa-lg"></i>
	</button>
	
</section>
