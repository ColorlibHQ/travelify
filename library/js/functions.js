jQuery(document).ready( function(){
	jQuery(".back-to-top").hide();
	jQuery(function(){
		jQuery(window).scroll(function(){
			if( jQuery(this).scrollTop() > 1e3 ){
				jQuery(".back-to-top").fadeIn();
			}else{
				jQuery(".back-to-top").fadeOut();
			}
		});

		jQuery(".back-to-top a").click(function(){
			jQuery("body,html,header").animate({scrollTop:0},1e3);
			return false;
		});
	});
});