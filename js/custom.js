jQuery(document).ready(function() {            
	var owl = jQuery('#gov_bottom_slider');
		owl.owlCarousel({
			items: 6,
			loop: true,
			margin: 15,
			autoplay: true,
			autoplayTimeout: 3000, 
			autoplayHoverPause: true,
			nav:true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1199: { 
					items: 6
				}
			}
		});
		$('.prev').click(function(){
			owl.trigger('owl.prev')
		})	
		$('.next').click(function(){
			owl.trigger('owl.next')
		})
})

$(function () {
    new WOW().init();
});


/* Main Menu Item Click Active This Tab JS Start */ 
jQuery(function($) {
  var path = window.location.href;
  $('.custom-nav li a').each(function() {
	if (this.href === path) {
	  $(this).addClass('active');
	}
  });
});
/* Main Menu Item Click Active This Tab JS Start */ 