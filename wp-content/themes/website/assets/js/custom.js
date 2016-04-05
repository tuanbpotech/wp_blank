/* Your JS codes here */
jQuery(document).ready(function($){

	$("#class-music").owlCarousel({
		autoPlay: 4000,
		pagination: false,
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [992,3],
		itemsTablet: [767,2],
      	itemsMobile : [480,1]
	});

	// Initialize Masonry
	var $box = $('.blog-masonry').masonry();
	// Layout Masonry again after all images have loaded
	$box.imagesLoaded( function() {
		$box.masonry();
	});
	/*****************************************
	*		  Hover Image for All Pages
	******************************************/
	$('.hoverJS').hover(function(){
	  $(this).stop().fadeTo(100,0.8);
	},function(){
	  $(this).stop().fadeTo(100,1);
	});

});

