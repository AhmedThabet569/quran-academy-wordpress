jQuery(document).ready(function ($) {
	$('.owl-carousel').owlCarousel({
		loop: true,
		rtl: true,
		margin: 10,
		nav: true,
		dots: false,
		navContainer: '.nav-container',
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});
});
