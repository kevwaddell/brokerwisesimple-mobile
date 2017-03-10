(function($){
	
	$(document).ready(function (){
		
		 wow = new WOW();
		 wow.init();
		
		var select_picker = $('.selectpicker').find('select');
		
		if (select_picker.length == 1) {
			var placeholder = $(select_picker).find('option.gf_placeholder');
			$(placeholder).attr('data-hidden', 'true');
		}
		
		$('.selectpicker').find('select').selectpicker({
			style: 'btn btn-group btn-default', 
			mobile: true,
			width: '98%'
		});
	
		$('body').on('touchstart','#section-links > a', function(e){
		
		var section_id = $(this).attr('href');
		var scroll_to = $(section_id).offset().top;
		
		$('html, body').animate({scrollTop: scroll_to}, 500);
				
		return false;
		
		});
		
		$('body').on('touchstart','.hp-section > button.scroll-btn-dwn', function(e){
			
		var scroll_to = $(this).parent().next().offset().top;
		
		$('html, body').animate({scrollTop: scroll_to}, 500);
						
		return false;
		
		});
		
		$('body').on('touchstart','.hp-section > button.scroll-btn-up', function(e){
			
		var scroll_to = $(this).parent().prev().offset().top;	
		
		$('html, body').animate({scrollTop: scroll_to}, 500);
						
		return false;
		
		});
	
	});
	
	$(window).on("resize", function(e){

	});
	
	$(window).load(function(e){
	
	});
	
	$(window).scroll(function(e){
					
	});
	
	
})(window.jQuery);