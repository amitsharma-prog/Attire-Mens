/* Code By Webdevtrick ( https://webdevtrick.com ) */
$(document).ready(function () {
	$('.testiSlide').click({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		responsive: [{
		breakpoint: 850,
		settings: {
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		}
		}]
	});
});